(() => {
  const make = (tag, className, text) => {
    const node = document.createElement(tag);
    if (className) node.className = className;
    if (text) node.textContent = text;
    return node;
  };
  let serial = 0;
  document.querySelectorAll('main h2').forEach(heading => {
    if (!heading.textContent.includes('คำถามที่พบบ่อย') || heading.closest('.insurance-overview .insurance-faq,.kh-shared-faq')) return;
    const section = heading.closest('section');
    if (!section) return;
    let list = heading.nextElementSibling;
    if (!list?.matches('.faq-list,.detail-faq-grid,.plus-faq-grid,.insurance-faq-grid')) {
      list = heading.parentElement.nextElementSibling;
    }
    let items = list?.matches('.faq-list,.detail-faq-grid,.plus-faq-grid,.insurance-faq-grid')
      ? [...list.children] : [...section.querySelectorAll(':scope > details')];
    items = items.filter(item => item.querySelector('summary,h3'));
    if (!items.length) return;
    const panel = make('section', 'kh-shared-faq');
    const intro = make('div', 'kh-faq-intro');
    intro.append(make('span', 'kh-faq-eyebrow', 'เรื่องที่หลายคนสงสัย'));
    const title = make('h2', '', heading.textContent);
    title.id = `sharedFaqTitle${++serial}`;
    panel.setAttribute('aria-labelledby', title.id);
    intro.append(title, make('p', '', 'รวมคำตอบที่ควรรู้ เพื่อให้คุณเข้าใจและตัดสินใจได้ง่ายขึ้น'));
    panel.append(intro);
    const cards = make('div', 'insurance-faq-list');
    items.forEach((item, index) => {
      const question = item.querySelector('summary,h3');
      const card = make('div', 'kh-faq-item');
      const h3 = make('h3');
      const button = make('button', 'kh-faq-toggle');
      button.type = 'button';
      button.id = `sharedFaqQuestion${serial}-${index}`;
      const answer = make('div');
      answer.id = `sharedFaqAnswer${serial}-${index}`;
      answer.setAttribute('role', 'region');
      answer.setAttribute('aria-labelledby', button.id);
      button.setAttribute('aria-controls', answer.id);
      button.setAttribute('aria-expanded', 'true');
      const number = make('span', 'kh-faq-number', String(index + 1).padStart(2, '0'));
      number.setAttribute('aria-hidden', 'true');
      button.append(number, make('span', 'kh-faq-question', question.textContent));
      const icon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      icon.setAttribute('viewBox', '0 0 24 24');
      icon.setAttribute('aria-hidden', 'true');
      const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      path.setAttribute('d', 'm6 9 6 6 6-6');
      icon.append(path); button.append(icon);
      // Preserve the original answer markup, including links and lists.
      const source = question.parentElement;
      [...source.childNodes].forEach(node => {
        if (node !== question && !(node.nodeType === 1 && node.matches('.number'))) answer.append(node.cloneNode(true));
      });
      button.addEventListener('click', () => {
        answer.hidden = !answer.hidden;
        button.setAttribute('aria-expanded', String(!answer.hidden));
      });
      h3.append(button); card.append(h3, answer); cards.append(card);
    });
    panel.append(cards);
    const hook = make('div', 'kh-faq-hook');
    const copy = make('p');
    copy.append(make('span', '', 'ขับไปได้ไกลกว่า'), document.createTextNode(' '), make('span', '', 'ถ้ามีคนช่วยคัดให้'));
    hook.append(copy); panel.append(hook);
    const headingWrapper = heading.parentElement.matches('.section-title') ? heading.parentElement : heading;
    headingWrapper.before(panel);
    headingWrapper.remove();
    if (list?.contains(items[0])) list.remove(); else items.forEach(item => item.remove());
    section.querySelectorAll(':scope > .mun-small-label').forEach(node => node.remove());
    section.classList.add('kh-faq-host');
  });
})();
