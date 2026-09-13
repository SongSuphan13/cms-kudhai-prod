<?php
/**
 * Template Name: KUDHai — ข้อกำหนดและเงื่อนไข
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'terms-and-conditions' );
get_header();
?>
<main id="main-content" class="kh-legal-page" tabindex="-1">
<header class="kh-legal-hero"><div class="wrap">
<nav aria-label="เส้นทางหน้า"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a><span aria-hidden="true">/</span><span>ข้อกำหนดและเงื่อนไข</span></nav>
<p class="kh-legal-eyebrow">TERMS & CONDITIONS</p>
<h1>ข้อกำหนดและเงื่อนไข</h1>
<p>ข้อมูลที่ควรรู้ เพื่อใช้เว็บไซต์คัดให้อย่างเข้าใจ</p>
</div></header>
<div class="wrap kh-legal-layout">
<aside><span>ข้อมูลเว็บไซต์</span><nav aria-label="เอกสารนโยบาย">
<a href="<?php echo esc_url( kudhai_v2_page_url( 'privacy-policy' ) ); ?>" >นโยบายความเป็นส่วนตัว</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'terms-and-conditions' ) ); ?>" aria-current="page">ข้อกำหนดและเงื่อนไข</a>
<a href="<?php echo esc_url( kudhai_v2_page_url( 'contact-us' ) ); ?>">ติดต่อเรา ↗</a>
</nav></aside>
<article class="kh-legal-content"><?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?></article>
</div>
</main>
<?php get_footer(); ?>
