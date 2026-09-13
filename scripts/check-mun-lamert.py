#!/usr/bin/env python3
"""Validate saved responses: python3 scripts/check-mun-lamert.py /tmp"""
import json
import re
import sys
from html.parser import HTMLParser
from pathlib import Path
from urllib.parse import urlsplit


ROUTES = {
    'mun-lamert': '/mun-lamert/',
    'what-is': '/mun-lamert/what-is/',
    'car-accident': '/mun-lamert/car-accident/',
    'how-to-claim': '/mun-lamert/how-to-claim/',
    'compensation': '/mun-lamert/compensation/',
    'loss-of-use': '/mun-lamert/loss-of-use/',
    'repair-cost': '/mun-lamert/repair-cost/',
    'medical-expenses': '/mun-lamert/medical-expenses/',
    'lost-income': '/mun-lamert/lost-income/',
    'depreciation': '/mun-lamert/depreciation/',
    'injury': '/mun-lamert/injury/',
    'death': '/mun-lamert/death/',
    'documents': '/mun-lamert/documents/',
    'claim-rejected': '/mun-lamert/claim-rejected/',
}


class Page(HTMLParser):
    def __init__(self, html):
        super().__init__()
        self.tags = []
        self.ids = set()
        self.links = []
        self.meta = {}
        self.canonical = []
        self.h1 = []
        self.title = []
        self.main_text = []
        self.faq = []
        self.feed(html)

    def handle_starttag(self, tag, attrs):
        attrs = dict(attrs)
        if tag not in ('meta', 'link', 'img', 'br', 'hr', 'input'):
            self.tags.append(tag)
        if 'id' in attrs:
            assert attrs['id'] not in self.ids, 'Duplicate ID'
            self.ids.add(attrs['id'])
        if tag == 'a':
            self.links.append(attrs.get('href', ''))
        if tag == 'meta':
            self.meta[attrs.get('name', attrs.get('property'))] = attrs.get('content')
        if tag == 'link' and attrs.get('rel') == 'canonical':
            self.canonical.append(attrs['href'])
        if tag == 'h1':
            self.h1.append('')
        if tag == 'title':
            self.title.append('')
        if tag == 'details':
            self.faq.append({'q': '', 'a': ''})

    def handle_endtag(self, tag):
        if tag in self.tags:
            self.tags = self.tags[:len(self.tags) - 1 - self.tags[::-1].index(tag)]

    def handle_data(self, value):
        if 'h1' in self.tags:
            self.h1[-1] += value
        if 'title' in self.tags:
            self.title[-1] += value
        if 'main' in self.tags:
            self.main_text.append(value)
        if 'details' in self.tags:
            self.faq[-1]['q' if 'summary' in self.tags else 'a'] += value.strip()


responses = Path(sys.argv[1] if len(sys.argv) > 1 else '/tmp')
paths = set(ROUTES.values())
titles, descriptions, h1s = set(), set(), set()
for key, expected_path in ROUTES.items():
    html = (responses / f'mun-test-{key}.html').read_text()
    assert 'Fatal error' not in html and 'Warning:' not in html, key
    page = Page(html)
    assert len(page.h1) == 1 and page.h1[0].strip(), key
    assert page.h1[0] not in h1s, key
    h1s.add(page.h1[0])
    assert len(page.canonical) == 1 and urlsplit(page.canonical[0]).path == expected_path, key
    title = ''.join(page.title)
    assert title and title not in titles, key
    titles.add(title)
    description = page.meta.get('description')
    assert description and description not in descriptions, key
    descriptions.add(description)
    assert 'noindex' in page.meta.get('robots', ''), key
    schemas = [json.loads(s) for s in re.findall(r'<script type="application/ld\+json">(.*?)</script>', html, re.S)]
    graph = next(s['@graph'] for s in schemas if '@graph' in s)
    web_page = next(s for s in graph if s['@type'] == 'WebPage')
    assert web_page['headline'] == page.h1[0], key
    faq = next(s for s in graph if s['@type'] == 'FAQPage')['mainEntity']
    visible_faq = [{'q': item['q'], 'a': item['a']} for item in page.faq]
    schema_faq = [{'q': item['name'], 'a': item['acceptedAnswer']['text']} for item in faq]
    assert visible_faq == schema_faq, key
    crumbs = next(s for s in graph if s['@type'] == 'BreadcrumbList')['itemListElement']
    assert len(crumbs) == (2 if key == 'mun-lamert' else 3), key
    for link in page.links:
        url = urlsplit(link)
        if url.path.startswith('/mun-lamert/'):
            assert url.path in paths, (key, link)
        if link.startswith('#'):
            assert link[1:] in page.ids, (key, link)
    public = title + description + ''.join(page.main_text) + json.dumps(graph, ensure_ascii=False)
    for banned in ('วิริยะ', 'กรุงเทพประกัน', 'รู้ใจ', 'SOURCE GAP', 'แหล่งอ้างอิงภายใน', 'หน้าเว็บควร', 'ไฟล์นี้'):
        assert banned not in public, (key, banned)
    print(f'PASS {expected_path}: heading, SEO, links, FAQ/schema, source policy')
print('All 14 custom guide pages passed.')
