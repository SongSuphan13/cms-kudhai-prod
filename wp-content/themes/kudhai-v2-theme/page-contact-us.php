<?php
/**
 * Template Name: KUDHai — ติดต่อเรา
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'contact-us' );
get_header();
?>
<main id="main-content" tabindex="-1">
<div class="hero-backdrop">
<section class="page-hero contact-hero">
<div class="hero-picture">
<div class="media-frame " style="--media-ratio:1024/289">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/contact-hero.png' ) ); ?>" alt="ภาพประกอบ ติดต่อ KUD Hai   มีคำถาม คุยกับเราได้ " width="2172" height="724" fetchpriority="high" decoding="async">
</div>
</div>
<div class="hero-shade">
</div>
<div class="wrap hero-copy">
<h1>ติดต่อ KUD<em>Hai</em>
<br>
<em>มีคำถาม คุยกับเราได้</em>
</h1>
<p>เรื่องประกันรถยนต์ ความคุ้มครอง และการเคลม</p>
<div class="actions">
</div>
<p class="script">เรื่องประกันรถยนต์<br>ให้เราดูแลคุณ<i>
</i>
</p>
</div>
</section>
</div>
<div class="wrap">
<section class="contact-options two-grid">
<div class="contact-option teal" id="line">
<div class="option-title">
<span class="large-line">LINE</span>
<div>
<h2>ปรึกษา LINE @kudhai</h2>
<p>แชทกับที่ปรึกษาของเราได้เลย</p>
</div>
</div>
<a class="button teal" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>">แชท LINE @kudhai →</a>
<p class="target-note">LINE ID: @kudhai</p>
</div>
<div class="contact-option yellow-soft" id="phone">
<div class="option-title">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-phone"/>
</svg>
</span>
<div>
<h2>โทรปรึกษา</h2>
<p>พูดคุยกับทีมงานของเรา</p>
</div>
</div>
<div class="phone-details">
<div>
<strong><a href="tel:0904322873">0904322873</a></strong>
<p>กดที่เบอร์เพื่อโทรหาเรา</p>
</div>
<div>
<svg aria-hidden="true">
<use href="#icon-clock"/>
</svg>
<span>เวลาติดต่อ:<br>รอยืนยัน</span>
</div>
</div>
</div>
</section>
<section class="two-grid contact-main">
<form class="contact-form" action="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'contact-unavailable' ) ); ?>">
<h2>ฝากข้อความให้เราติดต่อกลับ</h2>
<p>กรอกข้อมูลให้ครบถ้วน ทีมงานจะติดต่อกลับโดยเร็วที่สุด</p>
<label for="contact-name">ชื่อที่ให้เรียก</label>
<input id="contact-name" placeholder="เช่น คุณสมชาย" autocomplete="name" required>
<label for="contact-phone">เบอร์โทรติดต่อ</label>
<input id="contact-phone" type="tel" placeholder="เช่น 081-234-5678" autocomplete="tel" pattern="[0-9 +()-]{9,20}" required>
<label for="contact-topic">เรื่องที่ต้องการปรึกษา</label>
<select id="contact-topic" required>
<option value="" selected disabled>เลือกเรื่องที่ต้องการปรึกษา</option>ขอใบเสนอราคา</option>
<option>สอบถามความคุ้มครอง</option>
<option>คำแนะนำการเคลม</option>
</select>
<label for="contact-message">รายละเอียดเพิ่มเติม</label>
<textarea id="contact-message" rows="3" placeholder="พิมพ์รายละเอียดเพิ่มเติมได้ที่นี่...">
</textarea>
<div class="consent">
<input id="consent" type="checkbox" required>
<label for="consent">รับทราบนโยบายความเป็นส่วนตัว</label>
<a href="#privacy">ดูนโยบายความเป็นส่วนตัว</a>
</div>
<button class="button yellow" type="submit">➤ ส่งข้อความ</button>
<p class="secure-note">▣ ไม่ต้องส่งเลขบัตรประชาชนหรือข้อมูลบัตรชำระเงิน</p>
<p class="target-note" id="contact-unavailable">แบบฟอร์มนี้ยังไม่เชื่อมต่อระบบรับข้อความ ข้อมูลยังไม่ได้ถูกส่งหรือบันทึก</p>
</form>
<div class="contact-topics cream" id="topics">
<h2>เลือกเรื่องที่ต้องการติดต่อ</h2>
<p>คลิกหัวข้อเพื่อดูข้อมูลเพิ่มเติม หรือติดต่อทีมที่ปรึกษาได้เลย</p>
<a class="topic-card" href="<?php echo esc_url( kudhai_v2_page_url( 'index', 'compare' ) ); ?>">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
</span>
<div>
<h3>ขอใบเสนอราคา</h3>
<p>สอบถามเบี้ยประกัน เปรียบเทียบแผน<br>และรายละเอียดความคุ้มครอง</p>
</div>
<span>›</span>
</a>
<a class="topic-card" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-shield"/>
</svg>
</span>
<div>
<h3>สอบถามความคุ้มครอง</h3>
<p>ตรวจสอบความคุ้มครอง เงื่อนไขกรมธรรม์<br>และความคุ้มครองเพิ่มเติม</p>
</div>
<span>›</span>
</a>
<a class="topic-card" href="<?php echo esc_url( kudhai_v2_page_url( 'claims', '' ) ); ?>">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-wrench"/>
</svg>
</span>
<div>
<h3>คำแนะนำการเคลม</h3>
<p>ขั้นตอนการเคลม เอกสารที่ใช้<br>และคำแนะนำจากผู้เชี่ยวชาญ</p>
</div>
<span>›</span>
</a>
<div class="emergency blue">
<strong>△ แจ้งเหตุเคลม ติดต่อบริษัทประกันตรง</strong>
<p>กรณีเกิดอุบัติเหตุ โปรดติดต่อบริษัทประกันภัยโดยตรง<br>เพื่อความรวดเร็วในการดูแล</p>
</div>
</div>
</section>
<section class="contact-prep">
<h2>ก่อนติดต่อ เตรียมอะไรบ้าง?</h2>
<p>เตรียมข้อมูลเหล่านี้ จะช่วยให้เราดูแลคุณได้เร็วและง่ายยิ่งขึ้น</p>
<div class="three-grid">
<a class="feature clear" href="#contact-name">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>
<h3>ข้อมูลรถ</h3>
<p>ยี่ห้อ รุ่น ปี พ.ศ. (ถ้ามี)<br>และลักษณะการใช้งาน</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="feature clear" href="#contact-topic">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
<h3>เรื่องที่ต้องการสอบถาม</h3>
<p>เช่น ขอใบเสนอราคา สอบถามความคุ้มครอง<br>หรือขอคำแนะนำการเคลม</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="feature clear" href="#contact-message">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
<h3>ข้อมูลกรมธรรม์ (ถ้ามี)</h3>
<p>เลขกรมธรรม์ หรือชื่อบริษัทประกัน<br>เพื่อให้ตรวจสอบข้อมูลได้แม่นยำขึ้น</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
</div>
</section>
<section class="section" id="faq">
<h2>คำถามที่พบบ่อยก่อนติดต่อ</h2>
<div class="faq-list">
<details>
<summary>ใช้เวลานานแค่ไหนกว่าจะได้รับการติดต่อกลับ?</summary>
<p>ช่องทางติดต่อและเวลาทำการอยู่ระหว่างรอยืนยัน</p>
</details>
<details>
<summary>สามารถปรึกษาได้ฟรีหรือไม่?</summary>
<p>สอบถามรายละเอียดการให้บริการกับทีมงานผ่านช่องทางที่ยืนยันแล้ว</p>
</details>
<details>
<summary>จำเป็นต้องเตรียมเอกสารอะไรบ้าง?</summary>
<p>เตรียมข้อมูลรถ เรื่องที่ต้องการสอบถาม และข้อมูลกรมธรรม์หากมี</p>
</details>
</div>
</section>
<section class="target-note" id="privacy">
<h2>ความเป็นส่วนตัว</h2>
<p>แบบฟอร์มตัวอย่างนี้ยังไม่ส่งหรือบันทึกข้อมูล กรุณารอประกาศนโยบายฉบับจริงก่อนเปิดใช้บริการ</p>
</section>
<p class="target-note" id="channels">ช่องทางโซเชียลอยู่ระหว่างรอยืนยัน</p>
</div>
<section class="cta">
<div class="wrap">
<p class="script">ขับไปได้ไกลกว่า<br>ถ้ามีคนช่วยคัดให้<i>
</i>
</p>
<div>
<h2>ให้เราช่วยคัดตัวเลือกให้คุณ</h2>
<p>เปรียบเทียบง่าย ได้แผนที่ใช่ พร้อมคำแนะนำจากที่ปรึกษา</p>
</div>
<div class="actions">
<a class="button yellow" href="<?php echo esc_url( kudhai_v2_page_url( 'index', 'compare' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>เช็กเบี้ยประกันรถยนต์<svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</a>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>
