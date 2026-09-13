<?php
/** V2 homepage based on mock-up/index.html, enriched with the original home content. */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'home-v2' );
get_header();
?>
<main id="main-content" class="home-v2-content">
<span id="home">
</span>
<svg class="svg-library" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
<defs>
<symbol id="home-icon-car" viewBox="0 0 24 24">
<path d="m5 10 2-6h10l2 6M5 10h14a2 2 0 0 1 2 2v6H3v-6a2 2 0 0 1 2-2ZM5 18v3m14-3v3M6 14h2m8 0h2M2 9h3m14 0h3"/>
</symbol>
<symbol id="home-icon-arrow" viewBox="0 0 24 24">
<path d="M4 12h16m-6-6 6 6-6 6"/>
</symbol>
<symbol id="home-icon-search" viewBox="0 0 24 24">
<circle cx="10.5" cy="10.5" r="7.5"/>
<path d="m16 16 6 6"/>
</symbol>
<symbol id="home-icon-user" viewBox="0 0 24 24">
<circle cx="12" cy="6" r="4"/>
<path d="M4 22v-3a8 8 0 0 1 16 0v3ZM7 18h10"/>
</symbol>
<symbol id="home-icon-shield" viewBox="0 0 24 24">
<path d="M12 2c3 3 6 3 9 4v6c0 5-5 9-9 11-4-2-9-6-9-11V6c3-1 6-1 9-4Z"/>
<path d="m7 12 3 3 7-7"/>
</symbol>
<symbol id="home-icon-file" viewBox="0 0 24 24">
<path d="M14 2H4v20h16V8ZM14 2v6h6M8 12h8m-8 4h8"/>
</symbol>
<symbol id="home-icon-pin" viewBox="0 0 24 24">
<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/>
<circle cx="12" cy="10" r="3"/>
</symbol>
<symbol id="home-icon-wrench" viewBox="0 0 24 24">
<path d="M14 3a7 7 0 0 0-8 9L2 19a2 2 0 0 0 3 3l7-8a7 7 0 0 0 9-8l-5 5-4-4 2-4Z"/>
</symbol>
</defs>
</svg>
<div class="hero-backdrop">
<section class="hero">
<div class="hero-art" aria-hidden="true">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/hero-v2.png' ) ); ?>" width="1890" height="832" alt="">
</div>
<div class="hero-wash">
</div>
<div class="hero-content container">
<h1>ประกันรถยนต์ที่ใช่<br>
<em>ให้เราช่วยคัดให้</em>
</h1>
<p>เปรียบเทียบแผนที่เหมาะกับรถและงบของคุณ<br>พร้อมคำแนะนำจากที่ปรึกษา</p>
<div class="hero-actions">
<a class="btn yellow" href="<?php echo esc_url( kudhai_v2_page_url( 'compare' ) ); ?>">
<svg>
<use href="#home-icon-car"/>
</svg>เช็กเบี้ยประกันรถยนต์<svg>
<use href="#home-icon-arrow"/>
</svg>
</a>
<a class="btn outline" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>">
<span class="line-icon">LINE</span>ปรึกษา LINE @kudhai</a>
</div>
<p class="handwritten">ขับไปข้างหน้า...<br>
<span>ให้เรื่องประกันเป็นหน้าที่เรา</span>
<i>
</i>
</p>
</div>
</section>
</div>
<section class="compare-area container" id="compare" aria-label="เปรียบเทียบประกันรถยนต์">
<form class="compare-form" data-compare-url="<?php echo esc_url( kudhai_v2_page_url( 'compare' ) ); ?>" action="<?php echo esc_url( kudhai_v2_page_url( 'insurance', 'types' ) ); ?>">
<div class="field">
<label for="brand">ยี่ห้อรถ</label>
<select id="brand" name="brand" required>
<option value="" disabled selected>เลือกยี่ห้อรถ</option><option>Toyota</option>
<option>Honda</option>
<option>Mazda</option>
<option>Nissan</option>
<option>Isuzu</option>
<option>Mitsubishi</option>
<option>BYD</option>
</select>
</div>
<div class="field">
<label for="model">รุ่นรถ</label>
<select id="model" name="model" required>
<option value="" disabled selected>เลือกรุ่นรถ</option><option>Corolla Cross</option>
<option>Yaris</option>
<option>Camry</option>
<option>Fortuner</option>
<option>City</option>
<option>Civic</option>
<option>HR-V</option>
<option>CR-V</option>
<option>Mazda 2</option>
<option>CX-5</option>
<option>Almera</option>
<option>Navara</option>
<option>D-Max</option>
<option>MU-X</option>
<option>Xpander</option>
<option>Pajero Sport</option>
<option>Atto 3</option>
<option>Dolphin</option>
<option>Seal</option>
</select>
</div>
<div class="field">
<label for="year">ปีรถ</label>
<select id="year" name="year" required>
<option value="" disabled selected>เลือกปีรถ</option>2026</option>
<option>2025</option>
<option>2024</option>
<option>2023</option>
<option>2022</option>
<option>2021</option>
<option>2020</option>
<option>2019</option>
<option>2018</option>
<option>2017</option>
<option>2016</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
<option>2010</option>
</select>
</div>
<button class="btn primary" type="submit">เริ่มเปรียบเทียบ<svg>
<use href="#home-icon-arrow"/>
</svg>
</button>
</form>
<p class="home-form-note">เลือกข้อมูลรถ แล้วกรอกรายละเอียดเพิ่มเติมก่อนส่งให้ที่ปรึกษาผ่าน LINE</p>
<div class="home-compare-result" id="compare-result" role="status" hidden>
</div>
<div class="benefits">
<div class="benefit">
<span class="icon-circle blue">
<svg>
<use href="#home-icon-search"/>
</svg>
</span>
<div>
<h3>คัดสรรจากหลายบริษัทชั้นนำ</h3>
<p>เปรียบเทียบให้เห็นภาพชัดเจน</p>
</div>
</div>
<div class="benefit">
<span class="icon-circle teal">
<svg>
<use href="#home-icon-user"/>
</svg>
</span>
<div>
<h3>มีที่ปรึกษาคอยแนะนำ</h3>
<p>ตอบทุกคำถาม ดูแลตลอดการทำประกัน</p>
</div>
</div>
<div class="benefit">
<span class="icon-circle yellow-soft">
<svg>
<use href="#home-icon-shield"/>
</svg>
</span>
<div>
<h3>ดูแลต่อเนื่อง แม้เกิดเหตุ</h3>
<p>พร้อมช่วยประสานงานเมื่อคุณต้องการ</p>
</div>
</div>
</div>
</section>
<section class="home-extra home-tint" id="problems">
<div class="container">
<div class="section-heading">
<span class="home-kicker">เมื่อเกิดเหตุไม่คาดคิด</span>
<h2>เมื่อเกิดอุบัติเหตุ คุณอาจกำลังเจอเรื่องเหล่านี้</h2>
<p>เริ่มจากทำความเข้าใจเหตุการณ์ สิทธิ และเอกสารที่เกี่ยวข้อง</p>
</div>
<div class="home-card-grid">
<article class="home-content-card">
<span class="home-step">01</span>
<h3>ร้อยเวรยังไม่ชี้ จะใช้สิทธิ์ต่ออย่างไร</h3>
<p>หลายเคสต้องรอเจ้าหน้าที่ร้อยเวรนัดคู่กรณีมาชี้แจงที่โรงพัก ซึ่งอาจใช้เวลาหลายวันถึงหลายสัปดาห์ ระหว่างนั้นหลายคนไม่รู้ว่าต้องเตรียมหลักฐานอะไรไปเสริม หรือจะติดตามความคืบหน้าจากใคร ทำให้รู้สึกเคว้งและกังวลว่าจะเสียเปรียบหรือไม่</p>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/car-accident', '' ) ); ?>">อ่านแนวทางและเตรียมข้อมูล →</a>
</article>
<article class="home-content-card">
<span class="home-step">02</span>
<h3>มีผู้บาดเจ็บ ไม่รู้จะเบิกค่ารักษาจากใคร</h3>
<p>เมื่อมีคนบาดเจ็บ ไม่ว่าจะเป็นตัวคุณเอง คู่กรณี หรือผู้โดยสาร มักสับสนว่าจะใช้สิทธิ์ พ.ร.บ. ก่อน หรือสำรองจ่ายแล้วเบิกคืนทีหลัง รวมถึงกรณีมีทั้งประกันสังคมและประกันสุขภาพส่วนตัวด้วย ทำให้บางคนเสียสิทธิ์บางส่วนไปโดยไม่รู้ตัว เพราะยื่นเรื่องผิดขั้นตอนหรือผิดหน่วยงาน</p>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/medical-expenses', '' ) ); ?>">อ่านแนวทางและเตรียมข้อมูล →</a>
</article>
<article class="home-content-card">
<span class="home-step">03</span>
<h3>ไม่รู้สิทธิ์ว่าเบิก พ.ร.บ. ยังไง</h3>
<p>พ.ร.บ. คุ้มครองทั้งค่ารักษาพยาบาลและค่าชดเชยกรณีเสียชีวิตหรือทุพพลภาพ แต่มีวงเงินและเงื่อนไขเฉพาะที่หลายคนไม่เคยรู้มาก่อน เช่น ต้องใช้เอกสารอะไรบ้าง ยื่นกับบริษัทประกันของฝ่ายไหน และต้องยื่นภายในกี่วันหลังเกิดเหตุ ทำให้บางคนพลาดสิทธิ์ที่ควรได้รับไปอย่างน่าเสียดาย</p>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'compulsory', '' ) ); ?>">อ่านแนวทางและเตรียมข้อมูล →</a>
</article>
<article class="home-content-card">
<span class="home-step">04</span>
<h3>แจ้งเคลมไปแล้วเงียบหาย ไม่มีใครติดต่อกลับ</h3>
<p>แจ้งเคลมและส่งเอกสารครบตามที่บริษัทขอไปแล้ว แต่ผ่านไปหลายสัปดาห์กลับไม่มีใครติดต่อกลับ โทรไปก็ต้องรอสาย หรือถูกโอนสายไปมาจนไม่รู้ว่าเรื่องของตัวเองไปถึงขั้นตอนไหนแล้ว ทำให้รู้สึกเหมือนถูกปล่อยทิ้งไว้กลางทางโดยไม่มีคำตอบ</p>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/claim-rejected', '' ) ); ?>">อ่านแนวทางและเตรียมข้อมูล →</a>
</article>
<article class="home-content-card">
<span class="home-step">05</span>
<h3>รถจอดรออู่นาน ไม่รู้สิทธิ์รถทดแทน</h3>
<p>รถเข้าอู่ซ่อมแล้วแต่ผ่านไปเป็นสัปดาห์หรือเป็นเดือนยังไม่มีความคืบหน้า ต้องหาทางเดินทางเองทั้งที่รถควรจะซ่อมเสร็จนานแล้ว หลายคนไม่รู้ว่าตัวเองมีสิทธิ์เรียกรถทดแทนระหว่างซ่อม หรือเรียกค่าขาดประโยชน์จากการใช้รถเป็นรายวันได้ ทำให้เสียสิทธิ์ที่ควรได้รับไปโดยไม่รู้ตัว</p>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/loss-of-use', '' ) ); ?>">อ่านแนวทางและเตรียมข้อมูล →</a>
</article>
</div>
</div>
</section>
<section class="coverage" id="coverage">
<div class="container">
<div class="section-heading">
<h2>เลือกความคุ้มครองที่เหมาะกับคุณ</h2>
<p>รถแต่ละคัน... ต้องการความคุ้มครองที่ต่างกัน เลือกแบบที่ใช่สำหรับคุณ</p>
</div>
<div class="plan-grid">
<a class="plan blue" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-1', '' ) ); ?>">
<h3>ชั้น 1</h3>
<p>คุ้มครองครบ<br>อุ่นใจทุกเส้นทาง</p>
<span class="car-crop car-one" aria-hidden="true">
</span>
<span class="detail-link">ดูรายละเอียด<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</a>
<a class="plan teal" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-2plus', '' ) ); ?>">
<h3>2+</h3>
<p>คุ้มครองรถคุณ<br>และคู่กรณี ในราคาคุ้มค่า</p>
<span class="car-crop car-two" aria-hidden="true">
</span>
<span class="detail-link">ดูรายละเอียด<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</a>
<a class="plan yellow-soft" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-3plus', '' ) ); ?>">
<h3>3+</h3>
<p>คุ้มครองคู่กรณี<br>คุ้มค่าทุกการเดินทาง</p>
<span class="car-crop car-three" aria-hidden="true">
</span>
<span class="detail-link">ดูรายละเอียด<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</a>
<a class="plan coral" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-3', '' ) ); ?>">
<h3>ชั้น 3</h3>
<p>คุ้มครองพื้นฐาน<br>ตอบโจทย์สายประหยัด</p>
<span class="car-crop car-four" aria-hidden="true">
</span>
<span class="detail-link">ดูรายละเอียด<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</a>
<a class="plan type2" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-2' ) ); ?>">
<h3>ชั้น 2</h3><p>ดูความคุ้มครอง<br>และเงื่อนไขของแผน</p>
<span class="car-crop car-four" aria-hidden="true"></span>
<span class="detail-link">ดูรายละเอียด<svg aria-hidden="true"><use href="#home-icon-arrow"/></svg></span>
</a>
<a class="plan ev" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance-ev' ) ); ?>">
<h3>EV</h3><p>เลือกแผนที่เหมาะ<br>กับรถยนต์ไฟฟ้าของคุณ</p>
<span class="car-crop car-one" aria-hidden="true"></span>
<span class="detail-link">ดูรายละเอียด<svg aria-hidden="true"><use href="#home-icon-arrow"/></svg></span>
</a>
<a class="plan compulsory" href="<?php echo esc_url( kudhai_v2_page_url( 'compulsory' ) ); ?>">
<h3>พ.ร.บ.</h3><p>รู้จักประกันภาคบังคับ<br>สำหรับรถของคุณ</p>
<svg class="plan-document" aria-hidden="true"><use href="#home-icon-file"/></svg>
<span class="detail-link">ดูรายละเอียด<svg aria-hidden="true"><use href="#home-icon-arrow"/></svg></span>
</a>
</div>
<div class="home-quick-links">
<a href="<?php echo esc_url( kudhai_v2_page_url( 'insurance', '' ) ); ?>">ดูประกันรถยนต์ทั้งหมด →</a>
</div>
</div>
</section>
<section class="home-extra" id="companies">
<div class="container">
<div class="section-heading">
<span class="home-kicker">เลือกจากหลายบริษัท</span>
<h2>เปรียบเทียบบริษัทประกันชั้นนำ</h2>
<p>ศึกษาประเภทประกัน ความคุ้มครอง และเงื่อนไขก่อนตัดสินใจ</p>
</div>
<div class="home-company-grid">
<a href="<?php echo esc_url( kudhai_v2_page_url( 'car-insurance/viriyah-insurance', '' ) ); ?>">
<img class="home-company-logo" src="<?php echo esc_url( get_theme_file_uri( '/assets/logo_insure/vriyah100x100.png' ) ); ?>" alt="วิริยะประกันภัย" width="100" height="100" loading="lazy" decoding="async">
</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'car-insurance/bangkok-insurance', '' ) ); ?>">
<img class="home-company-logo" src="<?php echo esc_url( get_theme_file_uri( '/assets/logo_insure/bangkokinsurance100x100.png' ) ); ?>" alt="กรุงเทพประกันภัย" width="100" height="100" loading="lazy" decoding="async">
</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'car-insurance/muang-thai-insurance', '' ) ); ?>">
<img class="home-company-logo" src="<?php echo esc_url( get_theme_file_uri( '/assets/logo_insure/muangthai100x100.png' ) ); ?>" alt="เมืองไทยประกันภัย" width="100" height="100" loading="lazy" decoding="async">
</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'car-insurance/roojai-insurance', '' ) ); ?>">
<img class="home-company-logo" src="<?php echo esc_url( get_theme_file_uri( '/assets/logo_insure/roojai100x100.png' ) ); ?>" alt="Roojai" width="100" height="100" loading="lazy" decoding="async">
</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'car-insurance/chubb-insurance', '' ) ); ?>">
<img class="home-company-logo" src="<?php echo esc_url( get_theme_file_uri( '/assets/logo_insure/chubb100x100.png' ) ); ?>" alt="Chubb" width="100" height="100" loading="lazy" decoding="async">
</a>
</div>
</div>
</section>
<?php get_template_part( 'template-parts/section', 'advisor' ); ?>
<section class="help container" id="help">
<div class="section-heading">
<h2>เกิดเหตุแล้ว เริ่มตรงนี้</h2>
<p>เราอยู่เคียงข้างคุณในทุกสถานการณ์ ให้คุณจัดการได้อย่างมั่นใจ</p>
</div>
<div class="help-grid">
<a class="help-card coral" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/how-to-claim', '' ) ); ?>">
<svg>
<use href="#home-icon-file"/>
</svg>
<div>
<h3>วิธีแจ้งเคลม</h3>
<p>ขั้นตอนง่ายๆ ทำได้ทันที<br>เมื่อเกิดเหตุ</p>
<span class="detail-link">ดูขั้นตอน<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</div>
</a>
<a class="help-card blue" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'topics' ) ); ?>">
<svg>
<use href="#home-icon-pin"/>
</svg>
<div>
<h3>ค้นหาศูนย์และอู่</h3>
<p>ค้นหาศูนย์บริการและอู่ซ่อม<br>ใกล้คุณ</p>
<span class="detail-link">ค้นหาเลย<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</div>
</a>
<a class="help-card yellow-soft" href="<?php echo esc_url( kudhai_v2_page_url( 'compensation', '' ) ); ?>">
<svg>
<use href="#home-icon-wrench"/>
</svg>
<div>
<h3>เรียกร้องค่าสินไหม</h3>
<p>เอกสารที่ต้องเตรียม<br>และขั้นตอนการดำเนินการ</p>
<span class="detail-link">ดูรายละเอียด<svg>
<use href="#home-icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
</section>
<section class="home-extra" id="about">
<div class="container home-about-grid">
<div>
<span class="home-kicker">รู้จัก KUDHai</span>
<h2>ที่ปรึกษาที่อยู่เคียงข้างคุณ</h2>
<p>ก่อนจะเลือกคนดูแลเรื่องประกันและการเคลม เราอยากให้คุณรู้จักเราก่อน เราให้ความสำคัญกับการรับฟัง อธิบายความคุ้มครอง และช่วยเตรียมข้อมูลให้เหมาะกับเรื่องของคุณ</p>
<ul>
<li>อธิบายขั้นตอนและเงื่อนไขด้วยภาษาที่เข้าใจง่าย</li>
<li>เปรียบเทียบทางเลือกจากหลายบริษัทประกันภัย</li>
<li>แนะนำการเตรียมเอกสารเมื่อเกิดเหตุและต้องเรียกร้องสินไหม</li>
</ul>
<a class="btn teal-button" href="<?php echo esc_url( kudhai_v2_page_url( 'about', '' ) ); ?>">รู้จักเราเพิ่มเติม →</a>
</div>
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/plan-consultation.png' ) ); ?>" alt="ที่ปรึกษาพูดคุยและเปรียบเทียบแผนประกันกับลูกค้า" width="1942" height="809" loading="lazy">
</div>
</section>
<section class="home-extra home-tint" id="process">
<div class="container">
<div class="section-heading">
<span class="home-kicker">เตรียมตัวอย่างเป็นขั้นตอน</span>
<h2>เตรียมคุณให้พร้อมก่อนเจอสถานการณ์จริง</h2>
<p>ทำความเข้าใจข้อมูลและแนวทาง ก่อนพูดคุยกับผู้เกี่ยวข้อง</p>
</div>
<ol class="home-process">
<li>
<span class="home-step">01</span>
<div>
<h3>บอกถึงเคสที่คุณได้เจอ</h3>
<p>เล่ารายละเอียดอุบัติเหตุหรือสถานการณ์ที่คุณเจอให้เราฟัง เพื่อประเมินแนวทางที่เหมาะกับคุณ</p>
</div>
</li>
<li>
<span class="home-step">02</span>
<div>
<h3>ส่งคลิปเคสตัวอย่างให้ศึกษา</h3>
<p>เราส่งคลิปวิดีโอเคสจริงที่เคยให้คำปรึกษา ให้คุณดูเป็นแนวทางก่อนเจอสถานการณ์จริงด้วยตัวเอง</p>
</div>
</li>
<li>
<span class="home-step">03</span>
<div>
<h3>ตัวอย่างเคสการเขียนมูลละเมิด</h3>
<p>มีตัวอย่างการเขียนสรุปข้อเท็จจริงและระบุฝ่ายที่ต้องรับผิดชอบ ให้ใช้เป็นแนวทางอ้างอิงตามคู่มือตีความประกันภัยรถยนต์</p>
</div>
</li>
<li>
<span class="home-step">04</span>
<div>
<h3>ซักซ้อมการตอบข้อโต้แย้ง</h3>
<p>จำลองสถานการณ์เจรจากับคู่กรณีหรือบริษัทประกัน ช่วยให้คุณตอบข้อโต้แย้งต่างๆ ได้อย่างมั่นใจ</p>
</div>
</li>
<li>
<span class="home-step">05</span>
<div>
<h3>นัดคู่กรณีเพื่อเรียกร้อง</h3>
<p>นัดหมายคู่กรณีเพื่อเจรจาเรียกร้องค่าสินไหมตามที่เตรียมไว้ พร้อมมีเราคอยประกบให้คำแนะนำ</p>
</div>
</li>
</ol>
<a class="home-inline-link" href="<?php echo esc_url( kudhai_v2_page_url( 'mun-lamert/how-to-claim', '' ) ); ?>">อ่านคู่มือการเรียกร้องค่าสินไหม →</a>
</div>
</section>
<section class="home-extra" id="quote">
<div class="container home-quote-grid">
<div>
<span class="home-kicker">ซื้อใหม่หรือต่ออายุ</span>
<h2>สนใจซื้อหรือต่อประกันรถยนต์?</h2>
<p>เตรียมยี่ห้อ รุ่น ปีรถ และประเภทประกันที่สนใจ เพื่อพูดคุยเรื่องความคุ้มครองที่เหมาะกับการใช้งานและงบประมาณ</p>
<ul>
<li>เปรียบเทียบแผนจากหลายบริษัทประกันภัย</li>
<li>พิจารณาทุนประกัน ค่าเสียหายส่วนแรก และเงื่อนไขการซ่อม</li>
<li>ตรวจวันเริ่มคุ้มครองและข้อมูลประกันเดิมก่อนต่ออายุ</li>
</ul>
</div>
<aside class="home-content-card" id="contact">
<h3>เริ่มจากข้อมูลรถและความต้องการของคุณ</h3>
<p>ดูช่องทางติดต่อและข้อมูลที่ควรเตรียมก่อนขอคำปรึกษา</p>
<a class="btn yellow" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'topics' ) ); ?>">ดูช่องทางขอคำปรึกษา →</a>
<a class="home-inline-link" href="<?php echo esc_url( kudhai_v2_page_url( 'insurance', 'checklist' ) ); ?>">อ่านคู่มือเลือกประกันรถยนต์</a>
<p class="home-form-note">ติดต่อผ่าน LINE @kudhai หรือโทร 0904322873 ได้แล้ว แบบฟอร์มติดต่ออยู่ระหว่างเตรียมเปิดใช้งาน</p>
</aside>
</div>
</section>
<section class="cta" id="bottom-cta">
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
