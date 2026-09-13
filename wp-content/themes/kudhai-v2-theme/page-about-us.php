<?php
/**
 * Template Name: KUDHai — เกี่ยวกับเรา
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'about-us' );
get_header();
?>
<main id="main-content" tabindex="-1">
<div class="hero-backdrop">
<section class="page-hero about-hero">
<div class="hero-picture">
<div class="media-frame " style="--media-ratio:1024/372">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/about-hero.png' ) ); ?>" alt="ภาพประกอบ รู้จัก KUD Hai   คัดประกันด้วยความเข้าใจ " width="2172" height="724" fetchpriority="high" decoding="async">
</div>
</div>
<div class="hero-shade">
</div>
<div class="wrap hero-copy">
<h1>รู้จัก KUD<em>Hai</em>
<br>
<em>คัดประกันด้วยความเข้าใจ</em>
</h1>
<p>ช่วยคุณเลือกความคุ้มครองที่เหมาะกับรถ<br>และงบประมาณ</p>
<div class="actions">
<a class="button yellow" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-car"/>
</svg>ปรึกษากับเรา<svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</a>
</div>
<p class="script">ประกันรถยนต์<br>ไม่ใช่แค่ราคา แต่คือความอุ่นใจในทุกเส้นทาง<i>
</i>
</p>
</div>
</section>
</div>
<section class="wrap section about-intro">
<div>
<h2>เพราะประกัน<br>
<em>ไม่ควรเป็นเรื่องเข้าใจยาก</em>
</h2>
<p>ที่ KUDHai เราเชื่อว่าทุกคนควรเข้าใจสิ่งที่เลือกได้<br>เราให้ความสำคัญกับการรับฟัง และอธิบายข้อมูล<br>ด้วยภาษาที่เข้าใจง่าย เพื่อช่วยคุณเลือกความคุ้มครอง<br>ที่เหมาะกับรถ ไลฟ์สไตล์ และงบประมาณของคุณ</p>
</div>
<div class="media-frame " style="--media-ratio:530/221">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/plan-consultation.png' ) ); ?>" alt="ที่ปรึกษาเปรียบเทียบแผนประกันกับลูกค้า" width="1942" height="809" loading="lazy" decoding="async">
</div>
</section>
<section class="wrap three-grid values">
<a class="feature blue" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-users"/>
</svg>
<h3>ฟังความต้องการ</h3>
<p>เราเริ่มจากการรับฟัง เพื่อเข้าใจ<br>รถของคุณ การใช้งาน และงบประมาณ</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="feature teal" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
<h3>อธิบายให้เข้าใจ</h3>
<p>เราอธิบายความคุ้มครอง ข้อดีข้อจำกัด<br>ด้วยภาษาที่เข้าใจง่าย ไม่ซับซ้อน</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="feature yellow-soft" href="<?php echo esc_url( kudhai_v2_page_url( 'index', 'compare' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-scale"/>
</svg>
<h3>ช่วยเปรียบเทียบก่อนเลือก</h3>
<p>เราช่วยเปรียบเทียบแผนประกันและเบี้ย<br>จากหลายบริษัท เพื่อให้คุณตัดสินใจได้ตรงใจ</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
</section>
<?php get_template_part( 'template-parts/section', 'advisor' ); ?>
<section class="wrap section">
<div class="section-title">
<h2>เราช่วยคุณเรื่องไหนได้บ้าง</h2>
<p>ตั้งแต่การเลือกแผนประกัน ไปจนถึงเวลาที่คุณต้องเคลม เราพร้อมอยู่ข้างคุณ</p>
</div>
<div class="three-grid horizontal-features">
<a class="feature coral" href="<?php echo esc_url( kudhai_v2_page_url( 'index', 'compare' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-file"/>
</svg>
<h3>เลือกแผนประกันรถยนต์</h3>
<p>ช่วยเปรียบเทียบความคุ้มครอง<br>และเบี้ยประกัน ให้เหมาะกับคุณ</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="feature blue" href="<?php echo esc_url( kudhai_v2_page_url( 'claims', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-pin"/>
</svg>
<h3>แนะนำการเคลม</h3>
<p>อธิบายขั้นตอนการเคลม<br>และสิ่งที่ต้องเตรียม ให้คุณมั่นใจ<br>ในทุกสถานการณ์</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
<a class="feature yellow-soft" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-wrench"/>
</svg>
<h3>ทำความเข้าใจกรมธรรม์</h3>
<p>ช่วยอธิบายเงื่อนไข ความคุ้มครอง<br>และข้อยกเว้น ในภาษาที่เข้าใจง่าย</p>
<span class="text-link">ดูรายละเอียด <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</a>
</div>
</section>
<section class="cta">
<div class="wrap">
<p class="script">ขับไปได้ไกลกว่า<br>ถ้ามีคนช่วยคัดให้<i>
</i>
</p>
<div>
<h2>เริ่มจากคำถามของคุณ</h2>
<p>ทีมของเราพร้อมรับฟัง และแนะนำทางเลือกที่เหมาะสม</p>
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
