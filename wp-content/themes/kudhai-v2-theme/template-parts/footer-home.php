<?php defined( 'ABSPATH' ) || exit; ?>
<footer class="site-footer kh-home-footer" id="siteFooter">
<div class="wrap">
<div class="kh-footer-top">
<div class="kh-footer-intro">
<a class="kh-footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="KUDHai หน้าแรก">KUD<span>Hai</span><i></i></a>
<p class="kh-footer-tagline">เรื่องประกันที่เข้าใจง่าย<br>เริ่มต้นที่ <strong>คัดให้</strong></p>
<p>รู้จักความคุ้มครอง เปรียบเทียบตัวเลือก<br>แล้วเลือกแผนที่เหมาะกับคุณ</p>
</div>
<nav class="kh-footer-links" aria-label="เลือกประกันในส่วนท้าย">
<h2>เลือกประกันที่ใช่</h2>
<?php foreach ( array( 'insurance' => 'ประกันรถยนต์ทั้งหมด', 'insurance-1' => 'ประกันรถยนต์ชั้น 1', 'insurance-2plus' => 'ประกันรถยนต์ชั้น 2+', 'insurance-3plus' => 'ประกันรถยนต์ชั้น 3+', 'insurance-2' => 'ประกันรถยนต์ชั้น 2', 'insurance-3' => 'ประกันรถยนต์ชั้น 3', 'insurance-ev' => 'ประกันรถยนต์ไฟฟ้า', 'compulsory' => 'พ.ร.บ. รถยนต์' ) as $slug => $label ) : ?>
<a href="<?php echo esc_url( kudhai_v2_page_url( $slug ) ); ?>"><?php echo esc_html( $label ); ?></a>
<?php endforeach; ?>
</nav>
<nav class="kh-footer-links" aria-label="บริษัทประกันภัยในส่วนท้าย">
<h2>บริษัทประกันภัย</h2>
<?php get_template_part( 'template-parts/menu', 'companies' ); ?>
<h2 class="kh-footer-subheading">ประกันประเภทอื่น ๆ</h2>
<?php foreach ( kudhai_v2_pages() as $slug => $page ) :
 if ( ( $page['menu_group'] ?? '' ) !== 'other' ) { continue; } ?>
<a href="<?php echo esc_url( kudhai_v2_page_url( $slug ) ); ?>"><?php echo esc_html( $page['title'] ); ?></a>
<?php endforeach; ?>
</nav>
<nav class="kh-footer-links" aria-label="มูลละเมิดในส่วนท้าย">
<h2>มูลละเมิด</h2>
<?php get_template_part( 'template-parts/menu', 'mun-lamert' ); ?>
</nav>
<nav class="kh-footer-links" aria-label="รู้จักคัดให้">
<h2>รู้จักคัดให้</h2>
<?php foreach ( array( 'about-us' => 'เกี่ยวกับเรา', 'articles' => 'บทความเรื่องประกัน', 'mun-lamert' => 'มูลละเมิดและการเรียกร้อง', 'contact-us' => 'ติดต่อเรา' ) as $slug => $label ) : ?>
<a href="<?php echo esc_url( kudhai_v2_page_url( $slug ) ); ?>"><?php echo esc_html( $label ); ?></a>
<?php endforeach; ?>
</nav>

</div>
<div class="kh-footer-bottom">
<p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> KUDHai. สงวนลิขสิทธิ์ทุกประการ</p>
<nav aria-label="นโยบายเว็บไซต์">
<a href="<?php echo esc_url( kudhai_v2_page_url( 'privacy-policy' ) ); ?>">นโยบายความเป็นส่วนตัว</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'terms-and-conditions' ) ); ?>">ข้อกำหนดและเงื่อนไข</a>
</nav>
<a class="kh-footer-back" href="#siteHeader">กลับด้านบน ↑</a>
</div>
</div>
</footer>
