<?php
/**
 * Template Name: KUDHai — ประกันภัยรถยนต์ — คู่มือความคุ้มครอง
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'insurance-guide' );
get_header();
?>
<main id="main-content" tabindex="-1">
<div class="hero-backdrop">
<section class="insurance-hero">
<img class="insurance-hero-image" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/hero-v2.png' ) ); ?>" width="1890" height="832" alt="รถเอสยูวีสีขาวบนถนนโค้ง ท่ามกลางต้นไม้และเส้นขอบฟ้ากรุงเทพฯ" fetchpriority="high" decoding="async">
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
</svg>เช็กเบี้ยประกันรถยนต์<svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</a>
<a class="button outline" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>">
<span class="line">LINE</span>ปรึกษา LINE @kudhai</a>
</div>
</div>
</section>
</div>
<nav class="wrap insurance-toc" aria-label="เลือกอ่านหัวข้อ">
<strong>เลือกอ่านหัวข้อ</strong>
<a href="#intro">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>ประกันรถยนต์คืออะไร</a>
<a href="#types">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>ประเภทประกัน</a>
<a href="#choose">
<svg aria-hidden="true">
<use href="#icon-shield"/>
</svg>เลือกความคุ้มครอง</a>
<a href="#faq">
<svg aria-hidden="true">
<use href="#icon-bulb"/>
</svg>คำถามที่พบบ่อย</a>
</nav>
<section class="wrap insurance-intro" id="intro">
<div>
<h2>ประกันรถยนต์คืออะไร?</h2>
<p>ประกันรถยนต์ คือ เครื่องมือบริหารความเสี่ยง ที่ช่วยลดภาระค่าใช้จ่ายเมื่อเกิดอุบัติเหตุ ความเสียหายต่อรถยนต์ ทรัพย์สิน หรือการบาดเจ็บของบุคคลภายนอก โดยคุณจ่ายเบี้ยประกันในจำนวนที่เหมาะสม เพื่อให้บริษัทประกันภัยช่วยรับผิดชอบตามความคุ้มครองที่เลือกไว้</p>
<p>การเลือกประกันรถยนต์ที่เหมาะสม ควรพิจารณาจากลักษณะการใช้งานรถ มูลค่ารถ งบประมาณ และความเสี่ยงที่คุณอาจเผชิญในชีวิตประจำวัน เพราะแต่ละคนมีความต้องการไม่เหมือนกัน การเข้าใจความคุ้มครองอย่างถูกต้อง จะช่วยให้คุณเลือกแผนที่คุ้มค่าและอุ่นใจได้มากขึ้น</p>
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
<a href="<?php echo esc_url( kudhai_v2_page_url( 'compulsory', '' ) ); ?>">พ.ร.บ. รถยนต์ (ภาคบังคับ)</a>
</h3>
<p>ประกันภัยที่กฎหมายกำหนดให้รถทุกคันต้องมี คุ้มครองความเสียหายต่อชีวิต ร่างกาย หรือการบาดเจ็บของบุคคลจากอุบัติเหตุ ไม่คุ้มครองค่าซ่อมรถของเรา</p>
<a class="text-link" href="<?php echo esc_url( kudhai_v2_page_url( 'compulsory', '' ) ); ?>">ดูรายละเอียด →</a>
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
<p>ประกันภัยที่ช่วยเพิ่มความคุ้มครองจาก พ.ร.บ. ทั้งความเสียหายต่อรถยนต์ของเรา ทรัพย์สิน และความรับผิดต่อบุคคลภายนอก ตามเงื่อนไขของแต่ละกรมธรรม์</p>
<a class="text-link" href="#faq">ดูรายละเอียด →</a>
</div>
</article>
</div>
</section>
<section class="insurance-types" id="types">
<div class="wrap">
<h2>ประกันแต่ละประเภท ต่างกันอย่างไร?</h2>
<div class="insurance-type-list">
<article class="insurance-type-row sky" id="type-1">
<div class="type-visual">
<span>ประกันชั้น 1</span>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-1.png' ) ); ?>" alt="รถยนต์ประกอบประกันชั้น 1" width="1536" height="1024" loading="lazy" decoding="async">
</div>
<div class="type-description">
<h3>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-1', '' ) ); ?>">คุ้มครองครอบคลุมที่สุด เหมาะสำหรับผู้ที่ต้องการความอุ่นใจสูงสุด →</a>
</h3>
<p>คุ้มครองความเสียหายต่อรถยนต์ของเรา จากอุบัติเหตุ รวมถึงอุบัติเหตุที่ไม่มีคู่กรณี (ตามเงื่อนไขของกรมธรรม์) พร้อมความคุ้มครองกรณีรถหาย ไฟไหม้ และความรับผิดต่อบุคคลภายนอก</p>
<ul>
<li>
<strong>เหมาะสำหรับ</strong> ผู้ที่ใช้งานรถเป็นประจำ และต้องการความคุ้มครองที่ครอบคลุม</li>
<li>
<strong>ควรพิจารณา</strong> เงื่อนไขความคุ้มครองและค่าเสียหายส่วนแรกของแต่ละแผน</li>
</ul>
</div>
</article>
<article class="insurance-type-row aqua" id="type-2plus">
<div class="type-visual">
<span>ประกันชั้น 2+</span>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-2.png' ) ); ?>" alt="รถยนต์ประกอบประกัน2+" width="1536" height="1024" loading="lazy" decoding="async">
</div>
<div class="type-description">
<h3>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-2plus', '' ) ); ?>">คุ้มครองรถของเรา เมื่อชนกับยานพาหนะทางบก + รถหาย ไฟไหม้ →</a>
</h3>
<p>คุ้มครองความเสียหายต่อรถยนต์ของเรา เมื่อเกิดอุบัติเหตุชนกับยานพาหนะทางบก พร้อมความคุ้มครองกรณีรถหาย ไฟไหม้ และความรับผิดต่อบุคคลภายนอก</p>
<ul>
<li>
<strong>เหมาะสำหรับ</strong> ผู้ที่ต้องการความคุ้มครองใกล้เคียงชั้น 1 ในค่าเบี้ยที่ประหยัดกว่า</li>
<li>
<strong>ควรพิจารณา</strong> ข้อยกเว้น เงื่อนไข และค่าเสียหายส่วนแรกของแต่ละแผน</li>
</ul>
</div>
</article>
<article class="insurance-type-row sand" id="type-3plus">
<div class="type-visual">
<span>ประกันชั้น 3+</span>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-3.png' ) ); ?>" alt="รถยนต์ประกอบประกัน3+" width="1536" height="1024" loading="lazy" decoding="async">
</div>
<div class="type-description">
<h3>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-3plus', '' ) ); ?>">คุ้มครองรถของเรา เมื่อชนกับยานพาหนะทางบก + บุคคลภายนอก →</a>
</h3>
<p>คุ้มครองความเสียหายต่อรถยนต์ของเรา เมื่อเกิดอุบัติเหตุชนกับยานพาหนะทางบก พร้อมความรับผิดต่อบุคคลภายนอก โดยทั่วไปไม่คุ้มครองกรณีรถหายหรือไฟไหม้</p>
<ul>
<li>
<strong>เหมาะสำหรับ</strong> ผู้ที่ต้องการความคุ้มครองในราคาที่เข้าถึงได้</li>
<li>
<strong>ควรพิจารณา</strong> ขอบเขตความคุ้มครองและเงื่อนไขของแต่ละบริษัท</li>
</ul>
</div>
</article>
<article class="insurance-type-row rose" id="type-2">
<div class="type-visual">
<span>ประกันชั้น 2</span>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-4.png' ) ); ?>" alt="รถยนต์ประกอบประกันชั้น 2" width="1536" height="1024" loading="lazy" decoding="async">
</div>
<div class="type-description">
<h3>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-2', '' ) ); ?>">คุ้มครองรถหาย ไฟไหม้ + บุคคลภายนอก →</a>
</h3>
<p>คุ้มครองกรณีรถหาย ไฟไหม้ และความรับผิดต่อบุคคลภายนอก โดยทั่วไปไม่คุ้มครองค่าซ่อมรถของเราในกรณีอุบัติเหตุ</p>
<ul>
<li>
<strong>เหมาะสำหรับ</strong> ผู้ที่ต้องการความคุ้มครองพื้นฐาน ในค่าเบี้ยที่ประหยัด</li>
<li>
<strong>ควรพิจารณา</strong> เงื่อนไขความคุ้มครองและความคุ้มค่ากับการใช้งาน</li>
</ul>
</div>
</article>
<article class="insurance-type-row sky" id="type-3">
<div class="type-visual">
<span>ประกันชั้น 3</span>
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-5.png' ) ); ?>" alt="รถยนต์ประกอบประกันชั้น 3" width="1536" height="1024" loading="lazy" decoding="async">
</div>
<div class="type-description">
<h3>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-3', '' ) ); ?>">เน้นความรับผิดต่อบุคคลภายนอก →</a>
</h3>
<p>คุ้มครองความเสียหายต่อชีวิต ร่างกาย ทรัพย์สินของบุคคลภายนอก ไม่คุ้มครองค่าซ่อมรถของเรา</p>
<ul>
<li>
<strong>เหมาะสำหรับ</strong> ผู้ที่ต้องการความคุ้มครองขั้นพื้นฐาน ตามงบประมาณที่มี</li>
<li>
<strong>ควรพิจารณา</strong> วงเงินความคุ้มครองและเงื่อนไขในกรมธรรม์</li>
</ul>
</div>
</article>
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
<h2>ก่อนเปรียบเทียบราคา อ่านรายละเอียดเหล่านี้</h2>
<ol>
<li>
<span class="number">1</span>
<svg aria-hidden="true">
<use href="#icon-coins"/>
</svg>
<div>
<h3>ทุนประกัน</h3>
<p>จำนวนเงินที่ใช้เป็นทุนในการคำนวณความเสียหาย หากเกิดอุบัติเหตุ โดยทั่วไปทุนประกันจะสัมพันธ์กับมูลค่ารถ ยี่ห้อ รุ่น และปีรถ ควรเลือกให้เหมาะสมกับมูลค่าปัจจุบันของรถ</p>
</div>
</li>
<li>
<span class="number">2</span>
<svg aria-hidden="true">
<use href="#icon-wrench"/>
</svg>
<div>
<h3>ซ่อมห้างหรือซ่อมอู่</h3>
<p>บางแผนให้เลือกได้ระหว่างซ่อมศูนย์บริการ (ห้าง) หรือซ่อมอู่ที่มีคุณภาพ ซึ่งมีผลต่อค่าเบี้ยประกันและความสะดวกในการซ่อม ควรพิจารณาจากอายุรถ ความสะดวก และความมั่นใจในมาตรฐานการซ่อม</p>
</div>
</li>
<li>
<span class="number">3</span>
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
<div>
<h3>ค่าเสียหายส่วนแรก</h3>
<p>คือจำนวนเงินที่ผู้เอาประกันต้องรับผิดชอบเองในแต่ละครั้งที่เคลม หากเลือกค่าเสียหายส่วนแรกสูง ค่าเบี้ยประกันอาจลดลง ควรเลือกในระดับที่สะดวกต่อการรับภาระค่าใช้จ่าย</p>
</div>
</li>
<li>
<span class="number">4</span>
<svg aria-hidden="true">
<use href="#icon-shield"/>
</svg>
<div>
<h3>ข้อยกเว้นและเงื่อนไข</h3>
<p>แต่ละกรมธรรม์มีข้อยกเว้นความคุ้มครอง เช่น การขับขี่ในขณะมึนเมา การใช้รถในการแข่งขัน หรือการดัดแปลงสภาพรถ ควรอ่านรายละเอียดให้ครบถ้วนก่อนตัดสินใจ</p>
</div>
</li>
</ol>
</div>
<aside class="policy-photo">
<img class="" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/insurance-policy.png' ) ); ?>" alt="กรมธรรม์ประกันภัยรถยนต์ พร้อมกุญแจรถและปากกา" width="1448" height="1086" loading="lazy" decoding="async">
<blockquote>
<span aria-hidden="true">“</span>
<h3>เลือกจากความคุ้มครอง<br>ที่ต้องใช้ ไม่ใช่ราคาเพียงอย่างเดียว</h3>
<p>ประกันรถยนต์ที่ดี คือแผนที่ตอบโจทย์การใช้งาน และความเสี่ยงของคุณ ในงบประมาณที่เหมาะสม เปรียบเทียบความคุ้มครอง เงื่อนไข และบริการหลังการขาย เพื่อความอุ่นใจในระยะยาว</p>
</blockquote>
</aside>
</div>
</section>
<section class="insurance-choices" id="choose">
<div class="wrap">
<h2>เลือกประกันให้เหมาะกับการใช้รถของคุณ</h2>
<p>การเลือกประกันรถยนต์ ไม่ได้มีคำตอบเดียวที่เหมาะกับทุกคน เพราะแต่ละคนมีลักษณะการใช้รถต่างกัน ลองพิจารณาปัจจัยเหล่านี้ เพื่อเลือกความคุ้มครองให้เหมาะสมที่สุดสำหรับคุณ</p>
<p>นอกจากประเภทความคุ้มครองแล้ว ควรพิจารณาบริการเสริม เช่น บริการช่วยเหลือฉุกเฉิน 24 ชั่วโมง ศูนย์ซ่อมที่ครอบคลุม และความสะดวกในการเคลม ซึ่งช่วยให้คุณอุ่นใจได้มากขึ้นเมื่อเกิดเหตุไม่คาดคิด</p>
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
<h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์</h2>
<div class="insurance-faq-grid">
<article>
<span class="number">1</span>
<div>
<h3>พ.ร.บ. ต่างจากประกันภาคสมัครใจอย่างไร?</h3>
<p>พ.ร.บ. คุ้มครองความเสียหายต่อชีวิต ร่างกาย หรือการบาดเจ็บของบุคคลจากอุบัติเหตุทางรถ ไม่คุ้มครองค่าซ่อมรถของเรา ส่วนประกันภาคสมัครใจเพิ่มความคุ้มครองที่ครอบคลุมรถ ทรัพย์สิน และบุคคลภายนอก ตามเงื่อนไขกรมธรรม์</p>
</div>
</article>
<article>
<span class="number">2</span>
<div>
<h3>ประกัน 2+ กับ 3+ ต่างกันตรงไหน?</h3>
<p>ทั้งสองแบบคุ้มครองรถของเราเมื่อชนกับยานพาหนะทางบก แต่ 2+ มีความคุ้มครองกรณีรถหาย ไฟไหม้ด้วย ส่วน 3+ โดยทั่วไปไม่มีความคุ้มครองรถหาย ไฟไหม้ ควรเช็กขอบเขตความคุ้มครองและเงื่อนไขของแผน</p>
</div>
</article>
<article>
<span class="number">3</span>
<div>
<h3>ควรดูอะไรนอกจากราคาเบี้ยประกัน?</h3>
<p>ควรดูความคุ้มครองที่ได้รับ วงเงินความคุ้มครอง ค่าเสียหายส่วนแรก เงื่อนไขซ่อมห้าง บริการหลังการขาย และความน่าเชื่อถือของบริษัทประกันภัย เพื่อให้ได้แผนที่คุ้มค่าและเหมาะกับการใช้งานจริง</p>
</div>
</article>
<article>
<span class="number">4</span>
<div>
<h3>ต้องเตรียมข้อมูลอะไรเพื่อขอใบเสนอราคา?</h3>
<p>ยี่ห้อรถ รุ่นรถ ปีรถ ขนาดเครื่องยนต์ ลักษณะการใช้งาน และข้อมูลประกันเดิม (หากมี) เพื่อให้ได้รับข้อเสนอที่ตรงกับความต้องการของคุณมากที่สุด</p>
</div>
</article>
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
