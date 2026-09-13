# Custom pages for the mun-lamert blueprint

The pillar uses `page-mun-lamert.php`. Each child URL has its own template file named `page-mun-lamert-{slug}.php`, for example `page-mun-lamert-what-is.php` and `page-mun-lamert-claim-rejected.php`. Each page file contains its own SEO metadata, breadcrumbs, FAQ data, and visible HTML content. No shared content template is used.

These pages now use normal WordPress page routing. Create the `/mun-lamert/` parent Page and 13 child Pages in WordPress, then assign the matching page template to each child. No custom route file is required. Canonicals use `get_permalink()` through the theme's normal SEO output. `assets/css/mun-lamert.css` contains scoped desktop and mobile styling and is enqueued only when one of these page templates is active.

For production servers without Docker or PHP CLI access, import `scripts/sync-mun-lamert-pages.sql` into the WordPress database. The SQL assumes the default `wp_` table prefix. If production uses another prefix, replace `wp_posts`, `wp_postmeta`, and `wp_options` before import.

## Content review

Public copy comes from section C and SEO briefs in the supplied v3 5Pass DOCX. Editorial instructions and insurer names were converted to reader-facing neutral wording. The original copy is shorter than some of the document's editorial length targets; it was not padded with unsupported claims or new compensation rates/formulas.

`inc/mun-lamert-source-map.php` stores the internal source references, candidate source IDs per section, public text, and review status. It is not included in the public template and direct PHP access exits. On 2026-09-08, all three official website references were readable. That checks availability only; full fact-by-fact verification remains pending. The original manual PDF referenced by S1–S10 was not provided in `Docs`.

All `reviewed_at` fields remain `null`. The pages display the pending review status and send `noindex` until an actual source review is recorded. After verifying each section against the original sources, record its reviewer, evidence, and date in the source map and set that page's `reviewed_at` to the real ISO review date. WordPress's site-wide search visibility setting continues to apply. No publication or review date is invented.

## Verification

Save each local page response as `/tmp/mun-test-{key}.html`, where the pillar key is `mun-lamert`, then run:

```sh
python3 scripts/check-mun-lamert.py /tmp
```

Check HTTP status separately: each of the 14 registered URLs must return 200; `/mun-lamert/unknown-topic/` must return 404. The script checks one H1 and canonical per page, unique titles and descriptions, internal links, FAQ parity with JSON-LD, breadcrumb depth, pending-review indexing, and public source-policy wording.
