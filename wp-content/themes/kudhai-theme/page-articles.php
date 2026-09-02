<?php get_header(); ?>

<!-- ============ HERO ============ -->
<section class="art-hero">
  <div class="container art-hero-inner">
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/></svg>
      บทความ
    </span>
    <h1>ความรู้เรื่องประกันภัยรถยนต์ที่คุณควรรู้</h1>
    <p>รวมบทความจากทีมที่ปรึกษาประกันภัย ครอบคลุมตั้งแต่การเลือกแผนความคุ้มครอง สิทธิ์ พ.ร.บ. ไปจนถึงขั้นตอนเรียกร้องค่าสินไหมเมื่อเกิดเหตุ</p>
  </div>
</section>

<!-- ============ CATEGORY ============ -->
<?php $kudhai_cats = get_categories( array( 'hide_empty' => true ) ); ?>
<?php if ( $kudhai_cats ) : ?>
<section class="cat-bar">
  <div class="container">
    <div class="cat-list">
      <a href="<?php echo esc_url( get_permalink() ); ?>" class="cat-pill active">ทั้งหมด</a>
      <?php foreach ( $kudhai_cats as $kudhai_cat ) : ?>
        <a href="<?php echo esc_url( get_category_link( $kudhai_cat ) ); ?>" class="cat-pill"><?php echo esc_html( $kudhai_cat->name ); ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ ARTICLES ============ -->
<section class="articles" id="articles">
  <div class="container">
    <div class="section-head" style="margin-top:36px;">
      <h2>บทความล่าสุด</h2>
      <p>อัปเดตความรู้ประกันภัยรถยนต์ อ่านฟรี ไม่มีค่าใช้จ่าย</p>
    </div>

    <?php
    $kudhai_articles = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 10,
      'post_status'    => 'publish',
    ) );
    ?>

    <?php if ( $kudhai_articles->have_posts() ) : ?>
      <div class="article-grid">
        <?php $kudhai_i = 0; ?>
        <?php while ( $kudhai_articles->have_posts() ) : $kudhai_articles->the_post(); ?>
          <?php $kudhai_cat = get_the_category(); ?>
          <a href="<?php the_permalink(); ?>" class="article-card<?php echo ( 0 === $kudhai_i ) ? ' featured' : ''; ?>">
            <div class="article-thumb">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium', array( 'style' => 'width:100%;height:100%;object-fit:cover;' ) ); ?>
              <?php else : ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
              <?php endif; ?>
            </div>
            <div class="article-body">
              <div class="article-meta">
                <?php if ( ! empty( $kudhai_cat ) ) : ?>
                  <span class="article-cat"><?php echo esc_html( $kudhai_cat[0]->name ); ?></span>
                <?php endif; ?>
                <span><?php echo esc_html( kudhai_thai_date() ); ?> &middot; อ่าน <?php echo esc_html( kudhai_reading_time() ); ?> นาที</span>
              </div>
              <h3><?php the_title(); ?></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 5 ) ); ?></p>
              <span class="article-read">อ่านต่อ
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
              </span>
            </div>
          </a>
          <?php $kudhai_i++; ?>
        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>ยังไม่มีบทความในขณะนี้ กรุณากลับมาใหม่เร็ว ๆ นี้</p>
    <?php endif; ?>
  </div>
</section>

<!-- ============ LINE CTA ============ -->
<section class="art-cta">
  <div class="container">
    <h2>อยากได้บทความใหม่ก่อนใคร</h2>
    <p>ทักไลน์เพื่อรับสาระความรู้ประกันภัยรถยนต์ และปรึกษาเคสของคุณได้ฟรี</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary">ทักไลน์รับบทความ</a>
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-ghost">ขอใบเสนอราคา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
