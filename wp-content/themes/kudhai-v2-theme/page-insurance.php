<?php
/**
 * Template Name: KUDHai — ประกันภัยรถยนต์ — เข้าใจความคุ้มครอง ก่อนเลือกแผน
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'insurance' );
get_header();
?>
<main id="insurance-content" tabindex="-1">
<div class="hero-backdrop">
<section class="insurance-hero" id="insurance-main-hero">
<img class="insurance-hero-image" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/hero-v4.png' ) ); ?>" width="1920" height="540" alt="รถเอสยูวีสีขาวบนถนนโค้ง ท่ามกลางต้นไม้และเส้นขอบฟ้ากรุงเทพฯ" fetchpriority="high" decoding="async">
<div class="wrap insurance-hero-copy">
<nav class="breadcrumb" aria-label="เส้นทางหน้า">
<a href="<?php echo esc_url( kudhai_v2_page_url( 'index', '' ) ); ?>">หน้าแรก</a>
<span>/ ประกันรถยนต์</span>
</nav>
<h1>ประกันภัยรถยนต์</h1>
<h2>เข้าใจความคุ้มครอง ก่อนเลือกแผน</h2>
<p>รู้จักประเภทประกัน และจุดที่ควรเปรียบเทียบให้เหมาะกับรถและงบของคุณ</p>
<div class="actions">
<a class="button yellow" href="<?php echo esc_url( kudhai_v2_page_url( 'index', 'compare' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>
<span class="hero-label-desktop">เช็กเบี้ยประกันรถยนต์</span>
<span class="hero-label-mobile">เช็กเบี้ยประกัน</span>
<svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</a>
<a class="button outline" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>">
<span class="line">LINE</span>
<span class="hero-label-desktop">ปรึกษา LINE @kudhai</span>
<span class="hero-label-mobile">LINE @kudhai</span>
</a>
</div>
</div>
</section>
</div>
<section class="wrap insurance-intro" id="intro">
<div>
<h2>ประกันรถยนต์คืออะไร?</h2>
<p>ช่วยรับภาระค่าใช้จ่ายจากความเสียหาย ตามความคุ้มครองและเงื่อนไขที่ระบุในกรมธรรม์</p>
</div>
<div class="insurance-info-cards">
<article class="insurance-info sky" id="compulsory">
<span class="info-icon">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
</span>
<div>
<h3>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'compulsory', '' ) ); ?>">พ.ร.บ.</a>
</h3>
<p>ความคุ้มครองจากบาดเจ็บหรือเสียชีวิตจากรถ ไม่คุ้มครองค่าซ่อมรถ</p>
</div>
</article>
<article class="insurance-info aqua" id="voluntary">
<span class="info-icon">
<svg aria-hidden="true">
<use href="#icon-shield"/>
</svg>
</span>
<div>
<h3>ประกันภาคสมัครใจ</h3>
<p>เลือกความคุ้มครองรถและความรับผิดต่อบุคคลภายนอกเพิ่มเติม</p>
</div>
</article>
</div>
</section>
<section class="insurance-types" id="types">
<div class="wrap">
<h2>ประกันแต่ละประเภท ต่างกันอย่างไร?</h2>
<div class="insurance-type-grid">
<a class="insurance-type-card sky" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-1', '' ) ); ?>">
<h3>ชั้น 1</h3>
<p>ดูแลรถเรา รถคู่กรณี รถหาย และไฟไหม้ ตามเงื่อนไข</p>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-1.png' ) ); ?>" alt="รถยนต์ประกอบประกันชั้น 1" width="1536" height="1024" loading="lazy" decoding="async">
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="insurance-type-card aqua" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-2plus', '' ) ); ?>">
<h3>2+</h3>
<p>รถเราเมื่อชนกับยานพาหนะทางบก พร้อมความคุ้มครองรถหาย และไฟไหม้</p>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-2.png' ) ); ?>" alt="รถยนต์ประกอบประกัน2+" width="1536" height="1024" loading="lazy" decoding="async">
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="insurance-type-card sand" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-3plus', '' ) ); ?>">
<h3>3+</h3>
<p>รถเราเมื่อชนกับยานพาหนะทางบก และความรับผิดต่อบุคคลภายนอก</p>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-3.png' ) ); ?>" alt="รถยนต์ประกอบประกัน3+" width="1536" height="1024" loading="lazy" decoding="async">
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="insurance-type-card rose" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-2', '' ) ); ?>">
<h3>ชั้น 2</h3>
<p>รถหาย ไฟไหม้ และความรับผิดต่อบุคคลภายนอก</p>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-4.png' ) ); ?>" alt="รถยนต์ประกอบประกันชั้น 2" width="1536" height="1024" loading="lazy" decoding="async">
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="insurance-type-card sky" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-3', '' ) ); ?>">
<h3>ชั้น 3</h3>
<p>เน้นความรับผิดต่อบุคคลภายนอก ไม่คุ้มครองค่าซ่อมรถเรา</p>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-5.png' ) ); ?>" alt="รถยนต์ประกอบประกันชั้น 3" width="1536" height="1024" loading="lazy" decoding="async">
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
</div>
<a class="ev-entry" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-ev', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>
<span>
<strong>ใช้รถยนต์ไฟฟ้า?</strong> รู้จักความคุ้มครองตัวรถ แบตเตอรี่ และอุปกรณ์ชาร์จ</span>
<svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</a>
<p class="coverage-note">ความคุ้มครอง วงเงิน และข้อยกเว้นขึ้นอยู่กับกรมธรรม์แต่ละแผน</p>
</div>
</section>
<section class="insurance-checks" id="checklist">
<div class="wrap checks-layout">
<div>
<h2>ก่อนเปรียบเทียบราคา ดู 4 เรื่องนี้</h2>
<ol>
<li>
<span class="number">1</span>
<svg aria-hidden="true">
<use href="#icon-coins"/>
</svg>
<div>
<h3>ทุนประกัน</h3>
<p>วงเงินที่ระบุสำหรับตัวรถ</p>
</div>
</li>
<li>
<span class="number">2</span>
<svg aria-hidden="true">
<use href="#icon-wrench"/>
</svg>
<div>
<h3>ซ่อมห้างหรือซ่อมอู่</h3>
<p>ตรวจสถานที่และเงื่อนไขการซ่อม</p>
</div>
</li>
<li>
<span class="number">3</span>
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
<div>
<h3>ค่าเสียหายส่วนแรก</h3>
<p>เช็กส่วนที่อาจต้องจ่ายเอง</p>
</div>
</li>
<li>
<span class="number">4</span>
<svg aria-hidden="true">
<use href="#icon-shield"/>
</svg>
<div>
<h3>ข้อยกเว้นและเงื่อนไข</h3>
<p>อ่านรายละเอียดก่อนตัดสินใจ</p>
</div>
</li>
</ol>
</div>
<aside class="policy-photo">
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/insurance-policy.png' ) ); ?>" alt="กรมธรรม์ประกันภัยรถยนต์ พร้อมกุญแจรถและปากกา" width="1448" height="1086" loading="lazy" decoding="async">
</aside>
</div>
</section>
<section class="insurance-choices" id="choose">
<div class="wrap">
<h2>เลือกให้เหมาะกับการใช้รถของคุณ</h2>
<p>พิจารณาจากการใช้งาน มูลค่ารถ และงบประมาณ เพื่อเลือกความคุ้มครองที่เหมาะสมที่สุด</p>
<div class="choices-grid">
<article>
<span class="choice-icon">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>
</span>
<div>
<h3>ลักษณะการใช้รถ</h3>
<p>เช่น ใช้ในเมือง เดินทางไกล ใช้เพื่อทำงาน หรือใช้ในครอบครัว</p>
</div>
</article>
<article>
<span class="choice-icon">
<svg aria-hidden="true">
<use href="#icon-chart"/>
</svg>
</span>
<div>
<h3>มูลค่ารถและความเสี่ยง</h3>
<p>พิจารณาอายุรถ รุ่นรถ และความเสี่ยงในการใช้งาน</p>
</div>
</article>
<article>
<span class="choice-icon">
<svg aria-hidden="true">
<use href="#icon-wallet"/>
</svg>
</span>
<div>
<h3>งบประมาณที่รับได้</h3>
<p>เลือกแผนที่ให้ความคุ้มครองเหมาะสม กับค่าใช้จ่ายของคุณ</p>
</div>
</article>
</div>
</div>
</section>
<section class="wrap insurance-faq" id="faq">
<div class="kh-faq-intro">
<span class="kh-faq-eyebrow">เรื่องที่หลายคนสงสัย</span>
<h2>คำถามที่พบบ่อย <span>เรื่องประกันรถยนต์</span></h2>
<p>คลายข้อสงสัยก่อนเลือกแผน ให้คุณตัดสินใจได้อย่างเข้าใจ</p>


</div>
<div class="insurance-faq-list">
<div class="kh-faq-item">
<h3>
<button type="button" class="kh-faq-toggle" id="insuranceFaqQuestion1" aria-expanded="true" aria-controls="insuranceFaqAnswer1"><span class="kh-faq-number" aria-hidden="true">01</span><span class="kh-faq-question">พ.ร.บ. ต่างจากประกันภาคสมัครใจอย่างไร?</span><svg aria-hidden="true" viewBox="0 0 24 24">
<path d="m6 9 6 6 6-6"/>
</svg>
</button>
</h3>
<div id="insuranceFaqAnswer1" role="region" aria-labelledby="insuranceFaqQuestion1">
<p>พ.ร.บ. คุ้มครองความเสียหายต่อชีวิต ร่างกาย หรือการบาดเจ็บของบุคคลจากอุบัติเหตุทางรถ ไม่คุ้มครองค่าซ่อมรถของเรา ส่วนประกันภาคสมัครใจเพิ่มความคุ้มครองที่ครอบคลุมรถ ทรัพย์สิน และบุคคลภายนอก ตามเงื่อนไขกรมธรรม์</p>
</div>
</div>
<div class="kh-faq-item">
<h3>
<button type="button" class="kh-faq-toggle" id="insuranceFaqQuestion2" aria-expanded="true" aria-controls="insuranceFaqAnswer2"><span class="kh-faq-number" aria-hidden="true">02</span><span class="kh-faq-question">ประกัน 2+ กับ 3+ ต่างกันตรงไหน?</span><svg aria-hidden="true" viewBox="0 0 24 24">
<path d="m6 9 6 6 6-6"/>
</svg>
</button>
</h3>
<div id="insuranceFaqAnswer2" role="region" aria-labelledby="insuranceFaqQuestion2">
<p>ทั้งสองแบบคุ้มครองรถของเราเมื่อชนกับยานพาหนะทางบก แต่ 2+ มีความคุ้มครองกรณีรถหาย ไฟไหม้ด้วย ส่วน 3+ โดยทั่วไปไม่มีความคุ้มครองรถหาย ไฟไหม้ ควรเช็กขอบเขตความคุ้มครองและเงื่อนไขของแผน</p>
</div>
</div>
<div class="kh-faq-item">
<h3>
<button type="button" class="kh-faq-toggle" id="insuranceFaqQuestion3" aria-expanded="true" aria-controls="insuranceFaqAnswer3"><span class="kh-faq-number" aria-hidden="true">03</span><span class="kh-faq-question">ซ่อมห้างกับซ่อมอู่ เลือกอย่างไร?</span><svg aria-hidden="true" viewBox="0 0 24 24">
<path d="m6 9 6 6 6-6"/>
</svg>
</button>
</h3>
<div id="insuranceFaqAnswer3" role="region" aria-labelledby="insuranceFaqQuestion3">
<p>พิจารณาอายุรถ สถานที่ซ่อมที่สะดวก มาตรฐานการซ่อม และงบประมาณ พร้อมตรวจเงื่อนไขของแต่ละแผนก่อนเลือก</p>
</div>
</div>
</div>
<div class="kh-faq-hook"><p><span>ขับไปได้ไกลกว่า</span> <span>ถ้ามีคนช่วยคัดให้</span></p><i aria-hidden="true"></i></div>
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
