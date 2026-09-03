<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php $kudhai_cat = get_the_category(); ?>

<!-- ============ BREADCRUMB ============ -->
<nav class="crumb container" aria-label="breadcrumb">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
  <span>/</span>
  <a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>">บทความ</a>
  <span>/</span>
  <span class="current"><?php the_title(); ?></span>
</nav>

<!-- ============ ARTICLE HERO ============ -->
<section class="article-hero container">
  <?php if ( ! empty( $kudhai_cat ) ) : ?>
    <span class="article-cat">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <?php echo esc_html( $kudhai_cat[0]->name ); ?>
    </span>
  <?php endif; ?>
  <h1><?php the_title(); ?></h1>
  <div class="article-meta">
    <span><?php the_author(); ?></span>
    <span class="dot">&middot;</span>
    <span><?php echo esc_html( kudhai_thai_date() ); ?></span>
    <span class="dot">&middot;</span>
    <span>อ่าน <?php echo esc_html( kudhai_reading_time() ); ?> นาที</span>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container">
  <div class="ml-article-layout">
    <div class="prose">
      <?php the_content(); ?>

      <a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" class="back-link">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
        กลับไปหน้ารวมบทความ
      </a>
    </div>
    <aside class="ml-ad-slot" aria-label="พื้นที่โฆษณา">
      <a href="<?php echo esc_url( kudhai_get_qrcode_link_url() ); ?>" target="_blank" rel="noopener">
        <img src="<?php echo esc_url( kudhai_get_qrcode_url() ); ?>" alt="สแกน QR โค้ด รู้ใจ ประกันภัย เพื่อขอใบเสนอราคาประกันรถยนต์ มอเตอร์ไซค์ และอุบัติเหตุ" loading="lazy">
      </a>
    </aside>
  </div>
</section>

<!-- ============ RELATED ============ -->
<?php
$kudhai_related_args = array(
  'post_type'      => 'post',
  'posts_per_page' => 3,
  'post__not_in'   => array( get_the_ID() ),
  'post_status'    => 'publish',
);
if ( ! empty( $kudhai_cat ) ) {
  $kudhai_related_args['category__in'] = array( $kudhai_cat[0]->term_id );
}
$kudhai_related = new WP_Query( $kudhai_related_args );
?>
<?php if ( $kudhai_related->have_posts() ) : ?>
<section class="related">
  <div class="container">
    <h2>บทความที่เกี่ยวข้อง</h2>
    <div class="related-grid">
      <?php while ( $kudhai_related->have_posts() ) : $kudhai_related->the_post(); ?>
        <?php $kudhai_rel_cat = get_the_category(); ?>
        <a href="<?php the_permalink(); ?>" class="related-card">
          <?php if ( ! empty( $kudhai_rel_cat ) ) : ?>
            <span class="related-cat"><?php echo esc_html( $kudhai_rel_cat[0]->name ); ?></span>
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          <span class="related-read">อ่านต่อ
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </span>
        </a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ CTA ============ -->
<section class="article-cta">
  <div class="container">
    <h2>อยากปรึกษาเรื่องของคุณโดยเฉพาะ</h2>
    <p>ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น ไม่ว่าจะเพิ่งเกิดเหตุหรือกำลังมองหาประกัน</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
