# KUDHai V2 — Insurance templates

แปลงจาก `mock-up/insurance*.html` และ `mock-up/compulsory.html` โดยคงเนื้อหา รูปภาพ เลย์เอาต์ responsive และพฤติกรรมเมนู/FAQ ตามต้นฉบับ

| Page slug | Template |
| --- | --- |
| `insurance` | `page-insurance.php` |
| `insurance-1` | `page-insurance-1.php` |
| `insurance-2` | `page-insurance-2.php` |
| `insurance-2plus` | `page-insurance-2plus.php` |
| `insurance-3` | `page-insurance-3.php` |
| `insurance-3plus` | `page-insurance-3plus.php` |
| `insurance-ev` | `page-insurance-ev.php` |
| `insurance-guide` | `page-insurance-guide.php` |
| `compulsory` | `page-compulsory.php` |

## การใช้งาน

1. เปิดใช้งานธีม **KUDHai V2** ใน WordPress เมื่อต้องการนำไปใช้
2. สร้าง Pages และกำหนด slug ตามตาราง WordPress จะเลือกไฟล์ให้อัตโนมัติ หรือเลือกเทมเพลตชื่อ `KUDHai — …` ในหน้าจอแก้ไข Page
3. ตั้งชื่อ Page สำหรับ document title และเผยแพร่ Page ที่ต้องการใช้งาน

เนื้อหาหน้าประกันอยู่ในไฟล์ PHP ตาม mock-up ไม่ได้ดึงจาก editor ส่วนหน้าอื่นใช้ `index.php` แสดงเนื้อหา WordPress ตามปกติ

ลิงก์ภายในใช้ `home_url()` และ permalink ของ Page ที่เผยแพร่แล้ว รูปภาพใช้ `get_theme_file_uri()` ไม่อ้างกลับไปยังโฟลเดอร์ mock-up

หน้าแรก (`#compare`), `contact` (`#line`, `#channels`), `claims` (`#faq`), `articles` และ `about` เป็นปลายทางจาก mock-up ต้องมีหน้าและหัวข้อเหล่านี้ในเว็บไซต์เพื่อใช้งานครบทุกลิงก์ งานนี้ยังไม่ได้สร้างหน้าปลายทางเหล่านั้นหรือเชื่อมบริการเช็กเบี้ย/LINE

## โครงสร้าง

- `template-parts/`: header-site.php เป็นเมนูร่วมทุกหน้าตาม mock-up/insurance.html; footer แยกตามต้นฉบับ
- `assets/css/`: CSS จาก mock-up โหลดตามหน้าที่ใช้งาน
- `assets/js/site-navigation.js` และ `assets/css/site-navigation.css`: เมนู desktop/mobile ร่วมทุกหน้า
- `assets/js/insurance-overview.js`: FAQ ของหน้ารวม
- `assets/images/`: รูปภาพที่ใช้ในหน้าประกันและ CSS
- `inc-insurance-pages.php`: ข้อมูลชื่อหน้าและรายการ CSS

มี `wp_head()`, `wp_body_open()`, `wp_footer()`, body classes และ title support สำหรับ WordPress ส่วนการติดตั้งบน localhost ได้สร้างและเผยแพร่ Pages สำหรับ `insurance`, `insurance-1`, `insurance-2`, `insurance-2plus`, `insurance-3`, `insurance-3plus`, `insurance-ev` และ `compulsory` พร้อมผูกเทมเพลตแล้ว

## การตรวจสอบ

- PHP syntax ผ่านทุกไฟล์
- เรนเดอร์ครบ 8 เทมเพลตด้วย WordPress ใน Docker โดยใช้ Page จำลองในหน่วยความจำ ไม่พบ PHP warning/error
- ตรวจ H1 หน้าละหนึ่งรายการ, ID ไม่ซ้ำ, anchor ภายในหน้า และไฟล์ภาพ/CSS/JS ที่อ้างอิง
- ยังไม่ได้ตรวจภาพ desktop/mobile ในเบราว์เซอร์ เนื่องจาก session นี้ไม่มีเบราว์เซอร์ที่เชื่อมต่อ

ตรวจ URL จริงของหน้าประเภทประกันทั้ง 7 หน้าแล้ว: HTTP 200, เนื้อหาและรายการ CSS ตรงกับ mock-up, เมนูร่วมและสถานะหน้าปัจจุบันถูกต้อง และรูปภาพ/CSS/JS รวม 42 URL โหลดสำเร็จ

## หน้าบทความ

`page-articles.php` ใช้ `mock-up/articles.html` พร้อมภาพ hero, บทความเด่น, การ์ดบทความ 6 รายการ และตัวกรอง CSS 5 หมวด เปิดใช้ที่ `/articles/` โดยผูกเทมเพลตกับ Page เดิม ID 15 และคงเนื้อหาใน editor ไว้

ช่องค้นหาและ pagination ยังเป็นตัวอย่างตาม mock-up ลิงก์รายละเอียดใช้ `/article/`, `/claims/` และ `/compensation/` ซึ่งต้องมีหน้าปลายทางเหล่านั้นเพื่ออ่านต่อ

## มูลละเมิด

หน้า `/mun-lamert/` ใช้ `page-mun-lamert.php` ตาม `mock-up/compensation.html` พร้อมลิงก์หมวดความเสียหายและรายการคู่มือครบ 13 หัวข้อ

หน้าแยกอยู่ที่ `/mun-lamert/{slug}/` ได้แก่ `car-accident`, `claim-rejected`, `compensation`, `death`, `depreciation`, `documents`, `how-to-claim`, `injury`, `loss-of-use`, `lost-income`, `medical-expenses`, `repair-cost`, `what-is` โดยคัดลอกเนื้อหาและ metadata จาก `kudhai-theme/page-mun-lamert-*.php` ใช้ CSS ฐานที่แยกเฉพาะหน้าคู่มือและเมนูร่วม V2

ใช้ Pages เดิม ID 19 และ 148–160 ซึ่งเผยแพร่และเลือกเทมเพลตไว้แล้ว ไม่แก้เนื้อหาในฐานข้อมูล ลิงก์จาก mock-up ที่ชื่อ `compensation.html` จะไป `/mun-lamert/` ส่วนหน้ารายละเอียดค่าเสียหายใช้ `/mun-lamert/compensation/`

คงพฤติกรรม metadata และ `noindex` ของหน้าแยกที่ยังไม่มี `reviewed_at` ตามธีมเดิม ตรวจ PHP, URL ทั้ง 14 หน้า, เนื้อหา, anchor, icon และลิงก์ระหว่างคู่มือผ่านแล้ว ยังไม่ได้ตรวจภาพในเบราว์เซอร์

## UI หน้าแยกมูลละเมิด V2

หน้าแยกทั้ง 13 หน้าโหลด `assets/css/mun-details-v2.css` แทน CSS จากธีมเก่า ใช้สี ฟอนต์ ปุ่ม และกรอบเนื้อหาของ V2 พร้อมสารบัญ sticky บน desktop และเลย์เอาต์คอลัมน์เดียวบนมือถือ โดยคงเนื้อหา FAQ และ metadata เดิมทั้งหมด

## หน้าบริษัทประกันและประกันประเภทอื่น

นำเทมเพลต 10 หน้าจาก kudhai-theme มาใช้พร้อม CSS `products-v2.css` และเมนูย่อยในประกันรถยนต์ทั้ง desktop/mobile แบ่งเป็นบริษัทประกัน 5 แห่ง (กรุงเทพ, Chubb, วิริยะ, Roojai, เมืองไทย) และประกันประเภทอื่น 5 หน้า (มะเร็ง, อุบัติเหตุ, รถบรรทุก, รถตู้, มอเตอร์ไซค์)

ใช้ Pages เดิมและ URL เดิม หน้าบริษัทอยู่ใต้ `/car-insurance/` ส่วนหน้าประกันประเภทอื่นอยู่ระดับ root คงเนื้อหาเดิมและ JSON-LD พร้อมปรับลิงก์ปรึกษาไป `/contact-us/` ตรวจ PHP, HTTP 200, ข้อความต้นฉบับ, ลิงก์เมนู, anchors และ JSON-LD ทั้ง 10 หน้าผ่าน ยังไม่ได้ตรวจภาพจริงในเบราว์เซอร์

## หน้าแรก V2

`front-page.php` ใช้โครงสร้างจาก `mock-up/index.html` และเพิ่มเนื้อหาจากหน้าแรกเดิม: ปัญหาหลังเกิดเหตุ บริษัทประกัน เกี่ยวกับเรา ขั้นตอนเตรียมตัว และการขอคำปรึกษา โดยใช้ลิงก์หน้าที่มีอยู่ใน V2

`home-reference.css` จำกัดสไตล์ของ mock-up เฉพาะเนื้อหาหน้าแรก จึงไม่ทับเมนู/footer ร่วม ส่วน `home-v2.css` ดูแลเนื้อหาที่เพิ่ม และ `home-v2.js` กรองรุ่นรถตามยี่ห้อพร้อมแสดงข้อมูลที่เลือกเพื่อไปอ่านประเภทความคุ้มครอง แบบฟอร์มนี้ไม่คำนวณเบี้ย ไม่บันทึกข้อมูล และไม่ส่งข้อความหาเจ้าหน้าที่

WordPress เลือก `front-page.php` ที่ `/` โดยอัตโนมัติ ไม่เปลี่ยนค่าหน้าแรกหรือเนื้อหาเดิมในฐานข้อมูล ตรวจ PHP, ลิงก์, assets, anchors และการเลือกรถผ่านแล้ว ยังไม่มีเบราว์เซอร์สำหรับตรวจภาพจริงในเซสชันนี้

ทุก section ที่ปรึกษาใช้ `template-parts/section-advisor.php` ร่วมกันตามหน้า insurance (รวมหน้าแรก เกี่ยวกับเรา และคู่มือประกัน) โดย `advisor.css` โหลดครั้งเดียวท้ายสไตล์หน้าและกำหนดขอบเขตด้วย `#advisor` เพื่อให้รูป ข้อความ และ responsive ตรงกันทุกหน้า

## Hero สำหรับประกันประเภทอื่น

หน้า motorbike, personal-accident, truck และ van ใช้ Hero ภาพเต็มพร้อมข้อความด้านซ้ายและปุ่มดูความคุ้มครอง/LINE ตามหน้า insurance ผ่าน `product-hero.css` ภาพสร้างใหม่ด้วย imagegen ใน `assets/images/pages/*-insurance-hero-v2.png` ขนาด 2172×724 พิกเซล จัดวัตถุไว้ทางขวา เว้นพื้นที่ข้อความทางซ้าย และปรับตำแหน่งภาพสำหรับมือถือ

ตรวจ PHP และ URL ทั้ง 4 หน้า ภาพ ปุ่ม CTA และ anchor ผ่านแล้ว ยังไม่ได้ตรวจภาพหน้าเว็บในเบราว์เซอร์

### Compare wizard (`/compare/`)

`page-compare.php`, `assets/css/compare.css` and `assets/js/compare.js` implement six steps: brand, model, year, variant, plate and registration province. Step six includes all six answers with edit controls. Editing a brand clears model and variant; editing model or year clears variant. There are 77 province choices. Brand/model suggestions are starter lists, not a complete vehicle catalogue; users can type unlisted brands/models and choose an unknown variant.

The form holds answers in page memory, with no database submission or local/session storage. The homepage may hand off brand/model/year as query parameters; registration details are not added to the website URL. The final action opens `https://line.me/R/oaMessage/%40582iiruk/?{encoded_message}`. The user must press Send in LINE; opening the link does not send automatically. See [LINE URL scheme documentation](https://developers.line.biz/en/docs/messaging-api/using-line-url-scheme/). No price calculation or Messaging API backend is used. Existing shared header/footer are retained.

Validation: PHP lint; DOM checks for validation/back/edit/dependency resets/safe summary output/LINE encoding; headless Chrome at 390px and 1280px across all six steps. No real LINE message was sent during verification.

## วิธีแจ้งเคลม

`/services/how-to-claim/` ใช้ `page-services-how-to-claim.php` จากต้นแบบ `mock-up/claims.html` พร้อมขั้นตอนแจ้งเคลม เอกสาร การติดตามสถานะ และ FAQ ใช้ header/footer ร่วมและ CSS responsive เดิม ลิงก์ `claims` ผ่าน helper และ URL `/claims/` ไปหน้าใหม่นี้ สร้างหน้า WordPress ได้ด้วย `scripts/sync-how-to-claim-page.php` ซึ่งรันซ้ำได้โดยไม่แก้เนื้อหาเดิมใน editor

ตรวจ PHP syntax, HTTP 200, H1, ID, anchor และไฟล์ภาพ/CSS ที่อ้างอิงแล้ว
