<?php
/**
 * Template Name: KUDHai — บทความ
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'articles' );
get_header();
?>
<main id="main-content" tabindex="-1">
<div class="hero-backdrop">
<section class="page-hero blog-hero">
<div class="hero-picture">
<div class="media-frame " style="--media-ratio:1024/236">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/blog-hero.png' ) ); ?>" alt="ภาพประกอบ เรื่องประกันรถยนต์  อ่านให้เข้าใจ " width="2172" height="724" fetchpriority="high" decoding="async">
</div>
</div>
<div class="hero-shade">
</div>
<div class="wrap hero-copy">
<h1>เรื่องประกันรถยนต์<br>
<em>อ่านให้เข้าใจ</em>
</h1>
<p>เลือกประกัน เคลม และดูแลสิทธิของคุณ</p>
<div class="actions">
</div>
</div>
</section>
</div>
<div class="wrap blog-content">
<form class="search-box" action="<?php echo esc_url( kudhai_v2_page_url( 'articles', 'search-note' ) ); ?>">
<svg aria-hidden="true">
<use href="#icon-search"/>
</svg>
<input aria-label="ค้นหาบทความ" placeholder="ค้นหาบทความที่สนใจ" required>
<button class="button navy">ค้นหา <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</button>
</form>
<p class="target-note" id="search-note">หน้านี้แสดงบทความตัวอย่าง เลือกหมวดด้านล่างเพื่อดูบทความที่เกี่ยวข้อง</p>
<section class="blog-browser" aria-label="บทความตามหมวดหมู่">
<input class="filter-radio" type="radio" name="category" id="filter-all" checked>
<input class="filter-radio" type="radio" name="category" id="filter-insurance">
<input class="filter-radio" type="radio" name="category" id="filter-claim">
<input class="filter-radio" type="radio" name="category" id="filter-comp">
<input class="filter-radio" type="radio" name="category" id="filter-care">
<div class="category-tabs">
<label for="filter-all">ทั้งหมด</label>
<label for="filter-insurance">เลือกประกัน</label>
<label for="filter-claim">การเคลม</label>
<label for="filter-comp">ค่าสินไหม</label>
<label for="filter-care">ดูแลรถ</label>
</div>
<article class="featured-story" data-category="insurance">
<div class="media-frame " style="--media-ratio:514/248">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/lake-road.png' ) ); ?>" alt="รถยนต์สีขาวบนถนนริมทะเลสาบ" width="1672" height="941" loading="lazy" decoding="async">
</div>
<div>
<span class="tag">เลือกประกัน</span>
<h2>เลือกประกันรถยนต์อย่างไร<br>ให้เหมาะกับคุณ</h2>
<p>เจาะลึกวิธีเลือกประกันให้ตรงกับการใช้งาน<br>และไลฟ์สไตล์ของคุณ ทั้งความคุ้มครองที่จำเป็น<br>และสิ่งที่ควรพิจารณาก่อนตัดสินใจ</p>
<a class="button teal" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">อ่านบทความ →</a>
</div>
</article>
<div class="row-title">
<h2>บทความล่าสุด</h2>
<a href="#filter-all">ดูบทความทั้งหมด →</a>
</div>
<div class="stories-grid">
<div data-category="insurance">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:303/131">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/online-compare.png' ) ); ?>" alt="เปรียบเทียบประกันรถยนต์ ออนไลน์อย่างไร ให้ได้ความคุ้มค่าที่สุด" width="1774" height="887" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<span class="tag">เลือกประกัน</span>
<h3>เปรียบเทียบประกันรถยนต์<br>ออนไลน์อย่างไร ให้ได้ความคุ้มค่าที่สุด</h3>
<p>เช็กปัจจัยสำคัญในการเปรียบเทียบ เลือกความคุ้มครองที่ใช่ ในราคาที่เหมาะกับคุณ</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
<div data-category="claim">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'claims', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:286/131">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/mechanic-tire.png' ) ); ?>" alt="ขั้นตอนการเคลมประกันรถยนต์ ทำอย่างไร ไม่ยุ่งยาก" width="1774" height="887" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<span class="tag">การเคลม</span>
<h3>ขั้นตอนการเคลมประกันรถยนต์<br>ทำอย่างไร ไม่ยุ่งยาก</h3>
<p>อธิบายขั้นตอนการเคลม ตั้งแต่เกิดเหตุจนรับรถคืน เข้าใจง่าย ทำได้จริง</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
<div data-category="claim">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'claims', 'documents' ) ); ?>">
<div class="media-frame " style="--media-ratio:302/131">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/claim-documents.png' ) ); ?>" alt="เอกสารที่ต้องเตรียม เมื่อต้องเคลมประกันรถยนต์" width="1774" height="887" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<span class="tag">การเคลม</span>
<h3>เอกสารที่ต้องเตรียม<br>เมื่อต้องเคลมประกันรถยนต์</h3>
<p>รวมรายการเอกสารที่จำเป็น พร้อมเช็กลิสต์เตรียมให้ครบ ช่วยให้การเคลมราบรื่นยิ่งขึ้น</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
<div data-category="insurance">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:303/124">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/ev-charging.png' ) ); ?>" alt="ประกันรถยนต์ไฟฟ้า (EV) ต้องพิจารณาอะไรเป็นพิเศษ" width="1774" height="887" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<span class="tag">เลือกประกัน</span>
<h3>ประกันรถยนต์ไฟฟ้า (EV)<br>ต้องพิจารณาอะไรเป็นพิเศษ</h3>
<p>สรุปสิ่งที่ควรรู้เกี่ยวกับประกันรถ EV ทั้งความคุ้มครองและการดูแลหลังการขาย</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
<div data-category="comp">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'compensation', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:286/124">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/woman-driving.png' ) ); ?>" alt="ต่อประกันรถยนต์ตอนไหนดี และควรเตรียมอะไรบ้าง" width="1774" height="887" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<span class="tag">ค่าสินไหม</span>
<h3>ต่อประกันรถยนต์ตอนไหนดี<br>และควรเตรียมอะไรบ้าง</h3>
<p>แนะนำช่วงเวลาที่เหมาะสมในการต่อประกัน พร้อมสิ่งที่ควรตรวจสอบก่อนต่ออายุ</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
<div data-category="care">
<a class="story-card" href="<?php echo esc_url( kudhai_v2_page_url( 'article', '' ) ); ?>">
<div class="media-frame " style="--media-ratio:302/124">
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/engine-maintenance.png' ) ); ?>" alt="ดูแลรถอย่างไร ลดความเสี่ยง และประหยัดค่าใช้จ่ายในระยะยาว" width="1774" height="887" loading="lazy" decoding="async">
</div>
<div class="story-copy">
<span class="tag">ดูแลรถ</span>
<h3>ดูแลรถอย่างไร ลดความเสี่ยง<br>และประหยัดค่าใช้จ่ายในระยะยาว</h3>
<p>รวมเคล็ดลับดูแลรถยนต์ให้อยู่ในสภาพดี ลดโอกาสเกิดเหตุ และขับขี่ได้อย่างมั่นใจ</p>
<span class="text-link">อ่านต่อ <svg aria-hidden="true">
<use href="#icon-arrow"/>
</svg>
</span>
</div>
</a>
</div>
</div>
</section>
<nav class="pagination" aria-label="หน้าบทความ">
<span aria-disabled="true">‹</span>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'articles', '' ) ); ?>" aria-current="page">1</a>
<span aria-disabled="true">2</span>
<span aria-disabled="true">3</span>
<span>…</span>
<span aria-disabled="true">10</span>
<span aria-disabled="true">›</span>
</nav>
</div>
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
