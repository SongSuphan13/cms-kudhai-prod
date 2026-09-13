<?php
/**
 * Template Name: KUDHai — มูลละเมิด
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'mun-lamert' );
get_header();
?>
<main id="main-content" tabindex="-1">
<div class="hero-backdrop">
<section class="page-hero compensation-hero">
<div class="hero-picture">
<div class="media-frame " style="--media-ratio:818/327">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/compensation-hero.png' ) ); ?>" alt="ภาพประกอบ การเรียกร้องค่าสินไหม  จากมูลละเมิด " width="1983" height="793" fetchpriority="high" decoding="async">
</div>
</div>
<div class="hero-shade">
</div>
<div class="wrap hero-copy">
<h1>การเรียกร้องค่าสินไหม<br>
<em>จากมูลละเมิด</em>
</h1>
<p>ทำความเข้าใจประเด็นสำคัญ ก่อนเตรียมเรื่องเรียกร้อง</p>
<div class="actions">
<a class="button yellow" href="#damages">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>เลือกหัวข้อที่ต้องการรู้<svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</a>
<a class="button outline" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>">
<span class="line">LINE</span>ปรึกษา LINE @kudhai</a>
</div>
<p class="script">เข้าใจให้ครบ<br>ก่อนตัดสินใจในทุกขั้นตอน<i>
</i>
</p>
</div>
</section>
</div>
<nav class="wrap anchor-tabs" aria-label="หัวข้อค่าสินไหม">
<a href="#overview">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>ภาพรวม</a>
<a href="#damages">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>ประเด็นค่าเสียหาย</a>
<a href="#documents">
<svg aria-hidden="true">
<use href="#icon-folder"/>
</svg>เอกสาร</a>
<a href="#process">
<svg aria-hidden="true">
<use href="#icon-gear"/>
</svg>แนวทางดำเนินการ</a>
<a href="#faq">
<svg aria-hidden="true">
<use href="#icon-bulb"/>
</svg>คำถามที่พบบ่อย</a>
</nav>
<section class="wrap section overview" id="overview">
<div>
<h2>เริ่มทำความเข้าใจมูลละเมิด</h2>
<p>รวบรวมประเด็นที่ควรศึกษา เมื่อเกิดความเสียหายจากอุบัติเหตุ<br>เพื่อให้คุณเตรียมข้อมูลและปรึกษาได้อย่างมั่นใจ</p>
</div>
<div class="media-frame " style="--media-ratio:240/107">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/document-lineart.png' ) ); ?>" alt="ภาพวาดเอกสารและปากกา" width="1983" height="793" loading="lazy" decoding="async">
</div>
<p class="script">ข้อมูลที่ครบถ้วน<br>ช่วยให้การพูดคุย<br>เป็นเรื่องง่ายขึ้น<i>
</i>
</p>
</section>
<section class="section ice" id="damages">
<div class="wrap">
<div class="section-title">
<h2>ประเด็นค่าเสียหายที่ควรศึกษา</h2>
<p>แต่ละกรณีต้องพิจารณาข้อเท็จจริงและหลักฐาน</p>
</div>
<div class="four-grid damage-grid">
<a class="damage-card blue" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/repair-cost', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>
<h3>ความเสียหาย<br>ต่อรถและทรัพย์สิน</h3>
<div class="media-frame " style="--media-ratio:174/100">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/car-damage.png' ) ); ?>" alt="ความเสียหาย ต่อรถและทรัพย์สิน" width="1774" height="887" loading="lazy" decoding="async">
</div>
<span class="text-link">ดูรายละเอียด →</span>
</a>
<a class="damage-card teal" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/loss-of-use', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-coins"/>
</svg>
<h3>ค่าขาดประโยชน์<br>จากการใช้รถ</h3>
<div class="media-frame " style="--media-ratio:174/100">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/calendar.png' ) ); ?>" alt="ค่าขาดประโยชน์ จากการใช้รถ" width="1254" height="1254" loading="lazy" decoding="async">
</div>
<span class="text-link">ดูรายละเอียด →</span>
</a>
<a class="damage-card yellow-soft" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/injury', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-plus"/>
</svg>
<h3>การบาดเจ็บ<br>และค่ารักษาพยาบาล</h3>
<div class="media-frame " style="--media-ratio:174/100">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/medical-room.png' ) ); ?>" alt="การบาดเจ็บ และค่ารักษาพยาบาล" width="1774" height="887" loading="lazy" decoding="async">
</div>
<span class="text-link">ดูรายละเอียด →</span>
</a>
<a class="damage-card coral" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/lost-income', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-person"/>
</svg>
<h3>การขาดรายได้</h3>
<div class="media-frame " style="--media-ratio:174/100">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/income-desk.png' ) ); ?>" alt="การขาดรายได้" width="1774" height="887" loading="lazy" decoding="async">
</div>
<span class="text-link">ดูรายละเอียด →</span>
</a>
</div>
</div>
</section>
<section class="document-split" id="documents">
<div class="mun-documents-portrait">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/checklist.png' ) ); ?>" alt="เช็กลิสต์เตรียมข้อมูลก่อนปรึกษา" width="1536" height="1024" loading="lazy" decoding="async">
</div>
<div>
<h2>เตรียมข้อมูลให้พร้อมก่อนปรึกษา</h2>
<p>ข้อมูลที่ครบถ้วน ช่วยให้การพูดคุยกับที่ปรึกษามีประสิทธิภาพมากขึ้น</p>
<div class="document-item">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
</span>
<div>
<h3>รายละเอียดเหตุการณ์</h3>
<p>วัน เวลา สถานที่ และลักษณะเหตุการณ์</p>
</div>
</div>
<div class="document-item">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-picture"/>
</svg>
</span>
<div>
<h3>หลักฐานความเสียหาย</h3>
<p>ภาพถ่าย เอกสารที่เกี่ยวข้อง และข้อมูลเพิ่มเติม</p>
</div>
</div>
<div class="document-item">
<span class="circle">
<svg aria-hidden="true">
<use href="#icon-person"/>
</svg>
</span>
<div>
<h3>เอกสารและการติดต่อที่ผ่านมา</h3>
<p>เอกสารจากคู่กรณี บริษัทประกัน หรือหน่วยงานที่เกี่ยวข้อง</p>
</div>
</div>
</div>
</section>
<section class="section mint" id="process">
<div class="wrap">
<div class="section-title">
<h2>สำรวจแนวทางดำเนินการ</h2>
<p>แนวทางควรพิจารณาจากข้อเท็จจริงในแต่ละสถานการณ์ ควรศึกษาข้อมูลของคุณก่อนตัดสินใจ</p>
</div>
<div class="process-row">
<div>
<b>1</b>
<div>
<h3>รวบรวมข้อมูล</h3>
<p>ตรวจสอบข้อมูลและเอกสาร<br>ที่เกี่ยวข้องให้ครบถ้วน</p>
</div>
</div>
<div>
<b>2</b>
<div>
<h3>ตรวจสอบประเด็น</h3>
<p>ทบทวนข้อเท็จจริง<br>และประเด็นสำคัญที่เกี่ยวข้อง</p>
</div>
</div>
<div>
<b>3</b>
<div>
<h3>ปรึกษาแนวทาง</h3>
<p>พูดคุยกับผู้เชี่ยวชาญ<br>เพื่อรับคำแนะนำที่เหมาะสม</p>
</div>
</div>
</div>
</div>
</section>
<section class="wrap section">
<div class="section-title">
<h2>อ่านต่อในเรื่องที่เกี่ยวข้อง</h2>
<p>รวมบทความที่อาจช่วยให้คุณเข้าใจประเด็นต่างๆ ได้มากขึ้น</p>
</div>
<div class="three-grid related">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/documents', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:247/82">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/claim-evidence.png' ) ); ?>" alt="การรวบรวมหลักฐานหลังเกิดเหตุ" width="2172" height="724" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<h3>การรวบรวมหลักฐานหลังเกิดเหตุ</h3>
<p>
</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/claim-rejected', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:242/82">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/insurer-discussion.png' ) ); ?>" alt="การพูดคุยกับบริษัทประกัน" width="2172" height="724" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<h3>การพูดคุยกับบริษัทประกัน</h3>
<p>
</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/car-accident', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:242/82">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/city-driving.png' ) ); ?>" alt="ดูแลตัวเองหลังอุบัติเหตุ" width="2172" height="724" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<h3>ดูแลตัวเองหลังอุบัติเหตุ</h3>
<p>
</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
</section>
<section class="wrap section" id="faq">
<div class="section-title">
<h2>คำถามที่พบบ่อย</h2>
<p>รวมคำถามที่หลายคนสงสัย เกี่ยวกับการเรียกร้องค่าสินไหมจากมูลละเมิด</p>
</div>
<div class="faq-list">
<details>
<summary>มูลละเมิดคืออะไร?</summary>
<p>ประเด็นนี้ควรปรึกษาผู้เชี่ยวชาญโดยพิจารณาข้อเท็จจริงและเอกสารของแต่ละกรณี</p>
</details>
<details>
<summary>ต้องเตรียมเอกสารอะไรบ้าง?</summary>
<p>เตรียมรายละเอียดเหตุการณ์ หลักฐานความเสียหาย และเอกสารการติดต่อที่ผ่านมา</p>
</details>
<details>
<summary>ควรติดต่อใครเพื่อปรึกษาเรื่องการเรียกร้องค่าสินไหม?</summary>
<p>ติดต่อบริษัทประกันภัยหรือผู้เชี่ยวชาญที่เกี่ยวข้อง พร้อมข้อมูลของคุณ</p>
</details>
</div>
</section>
<section class="wrap section mun-guide-directory" id="guide-topics">
<div class="section-title">
<h2>คู่มือมูลละเมิดทุกหัวข้อ</h2>
</div>
<div class="three-grid">
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/car-accident' ) ); ?>">มูลละเมิดจากอุบัติเหตุรถยนต์ <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/claim-rejected' ) ); ?>">ประกันคู่กรณีไม่จ่าย <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/compensation' ) ); ?>">รถชนเรียกร้องค่าเสียหายอะไรได้บ้าง <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/death' ) ); ?>">เสียชีวิตจากอุบัติเหตุรถยนต์ สิทธิทายาท <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/depreciation' ) ); ?>">ค่าเสื่อมราคารถหลังเกิดอุบัติเหตุ <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/documents' ) ); ?>">เอกสารเรียกร้องค่าเสียหายจากประกันคู่กรณี <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/how-to-claim' ) ); ?>">วิธีเรียกร้องค่าเสียหายจากคู่กรณี <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/injury' ) ); ?>">บาดเจ็บจากอุบัติเหตุรถยนต์เรียกร้องอะไรได้ <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/loss-of-use' ) ); ?>">ค่าขาดประโยชน์จากการใช้รถ <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/lost-income' ) ); ?>">ค่าขาดรายได้จากอุบัติเหตุรถยนต์ <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/medical-expenses' ) ); ?>">ค่ารักษาพยาบาลจากอุบัติเหตุรถยนต์ <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/repair-cost' ) ); ?>">ค่าซ่อมรถจากคู่กรณี <span aria-hidden="true">→</span>
</a>
<a class="mun-guide-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/what-is' ) ); ?>">มูลละเมิดคืออะไร <span aria-hidden="true">→</span>
</a>
</div>
</section>
<?php get_template_part( 'template-parts/section', 'advisor' ); ?>
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
