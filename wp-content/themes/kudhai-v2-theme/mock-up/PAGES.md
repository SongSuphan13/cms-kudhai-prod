# KUDHai — HTML/CSS pages

Open `index.html` in a browser. No build or JavaScript is required.

| Reference image time | HTML page |
| --- | --- |
| 12_46_42 | articles.html |
| 12_46_48 | article.html |
| 12_46_54 | claims.html |
| 12_46_59 | about.html |
| 12_47_05 | contact.html |
| 12_47_12 | compensation.html |

The six new pages share `pages.css`. The existing home page uses `styles.css`.
The pages use standalone generated images in `assets/pages/`, plus the generated advisor photo in `assets/advisor.png`. Keep the assets folder beside the HTML files. Original reference screenshots are no longer required to display the website. Text, links, controls, cards, and layouts remain HTML/CSS.

Responsive layouts switch at 640px and 900px. Google Fonts requires a connection; Tahoma and sans-serif are the fallback fonts.

Article categories use CSS radio filters. FAQs use native details elements. Search, extra pagination, phone, LINE, and contact submission are presentation-only where no real destination or backend has been supplied. Contact fields have no names and are not submitted or stored; submitting displays an unavailable notice. Replace these placeholders before opening the service to customers.

New images are generated to match the references in subject, composition, and color. Generation prompts are recorded in `assets/pages/prompts.md`. The recreated artwork and responsive layouts are not pixel-for-pixel copies of the references.

## หน้าเพิ่มเติม: ประกันรถยนต์

- `insurance.html` — หน้าสรุปตาม `f67ad261-d4f6-4666-b849-c01cf9ad087a.png`
- `insurance-guide.html` — หน้ารายละเอียดตาม `73485aa8-2fcc-4e7b-8a8d-5eda798e914f.png`
- ทั้งสองหน้าใช้ `pages.css` ร่วมกับ `insurance.css` เปิดไฟล์ HTML ในเบราว์เซอร์ได้โดยตรง ไม่มี JavaScript
- เมนูประกันรถยนต์เชื่อมไปหน้าสรุป และการ์ดแต่ละประเภทเชื่อมไปหัวข้อที่เกี่ยวข้องในหน้ารายละเอียด
- รองรับเลย์เอาต์เดสก์ท็อป แท็บเล็ต และมือถือ: Hero ครอบตามกรอบภาพ, รูปรถแสดงครบคัน, advisor เปลี่ยนเป็นแนวตั้งบนมือถือ
- ภาพใหม่: `assets/pages/insurance-policy.png` และ `assets/car-5.png`; prompts และโหมดสร้างภาพอยู่ใน `assets/pages/insurance-prompts.md`
- ปุ่มเช็กเบี้ยและ LINE ใช้ปลายทางเดิมของเว็บไซต์ ไม่มีการส่งข้อมูลหรือเชื่อมบริการใหม่

## หน้าประกันรถยนต์ชั้น 3+

- `insurance-3plus.html` — ตามภาพ `8c736c5b-c5be-468b-a864-207d4aa560fe.png`
- ใช้ `pages.css`, `insurance.css` และ `insurance-3plus.css`; HTML/CSS เท่านั้น
- เชื่อมเข้าจากการ์ด 3+ ใน `insurance.html` และหัวข้อความคุ้มครอง 3+ ใน `insurance-guide.html`
- ภาพใหม่ 3 ภาพอยู่ใน `assets/pages/insurance-3plus-*.png`; พรอมป์ต์อยู่ใน `assets/pages/insurance-3plus-prompts.md`
- ส่วน advisor ใช้แนวขอบเนื้อหาร่วมกับ section อื่นตามการปรับล่าสุด

## หน้าประกันเพิ่มเติม 5 หน้า

| หน้า HTML | ภาพอ้างอิง |
| --- | --- |
| `insurance-1.html` | `4cf03f19-8095-4b2d-b09d-5c60d04c735d.png` |
| `insurance-2plus.html` | `80bf29d9-bf12-44b4-b763-0dabc01c6a1e.png` |
| `insurance-2.html` | `19645e58-f901-4104-9e30-794ab42fbff7.png` |
| `insurance-3.html` | `bc58aa77-e4e3-4db8-951b-b20eba8e659d.png` |
| `insurance-ev.html` | `c2437d22-32a3-4b13-b4a8-743a6909ddbe.png` |

ทั้งห้าหน้าใช้ `pages.css`, `insurance.css` และ `insurance-details.css` เป็น HTML/CSS เท่านั้น เปิดไฟล์ในเบราว์เซอร์ได้โดยตรง มีลิงก์เข้าจาก `insurance.html`, `insurance-guide.html` และหน้าที่เกี่ยวข้อง ส่วน advisor ใช้ขอบเนื้อหาเดียวกับ section อื่น รวมถึงบนมือถือ

สร้างภาพใหม่ 13 ภาพ (Hero 4 ภาพ และภาพเหตุการณ์/อุปกรณ์ 9 ภาพ) ด้วย built-in imagegen บันทึกที่ `assets/pages/` รายชื่อไฟล์และพรอมป์ต์อยู่ใน `assets/pages/insurance-details-prompts.md`

## พ.ร.บ. รถยนต์

- `compulsory.html` ตามภาพ `60d20f12-0974-420a-990d-db23695c56fe.png`
- ใช้ `pages.css`, `insurance.css`, `insurance-details.css` และ `compulsory.css`; HTML/CSS เท่านั้น
- เข้าจากหัวข้อ พ.ร.บ. ใน `insurance.html` และ `insurance-guide.html`
- ภาพใหม่ 3 ภาพ: `assets/pages/compulsory-hero.png`, `compulsory-doctor.png`, `compulsory-flower.png`
- รายละเอียดพรอมป์ต์และโหมดสร้างภาพอยู่ใน `assets/pages/compulsory-prompts.md`
- รองรับมือถือและเดสก์ท็อป ส่วน advisor เว้นขอบตรงแนวเนื้อหาเดียวกับหน้าอื่น

## เมนู 2 ระดับ

ทุกหน้าใช้ `navigation.css` และเมนูประกันรถยนต์แบบ `<details>` / `<summary>` คลิกหรือใช้ Enter/Space เพื่อเปิด–ปิด เมนูย่อยเชื่อมหน้าประกันทุกประเภท พ.ร.บ. และคู่มือเลือกประกัน บนมือถือรายการย่อยแสดงในแนวเนื้อหาและเลื่อนได้ ไม่มี JavaScript
