<?php get_header(); ?>

<section class="art-hero">
  <div class="container art-hero-inner">
    <span class="eyebrow">บทความ</span>
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description( '<p>', '</p>' ); ?>
  </div>
</section>

<!-- ============ QR BANNER ============ -->
<section class="qr-banner">
  <div class="container qr-banner-inner">
    <a href="<?php echo esc_url( kudhai_get_qrcode_link_url() ); ?>" target="_blank" rel="noopener">
      <img src="<?php echo esc_url( kudhai_get_qrcode_url() ); ?>" alt="สแกน QR โค้ด รู้ใจ ประกันภัย เพื่อขอใบเสนอราคาประกันรถยนต์ มอเตอร์ไซค์ และอุบัติเหตุ" class="qr-banner-img" loading="lazy">
    </a>
    <div class="qr-banner-text">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        พันธมิตรหลักของเรา
      </span>
      <h2>สแกน QR เพื่อรับใบเสนอราคาจากรู้ใจทันที</h2>
      <p>รู้ใจ ประกันภัย ซื้อง่าย ราคาดี เชื่อถือได้ ให้บริการประกันรถยนต์ มอเตอร์ไซค์ และอุบัติเหตุ พร้อมคะแนนรีวิวเฉลี่ย 4.9/5 จากลูกค้าจริงกว่า 157,729 ความคิดเห็น</p>
      <div class="cta-row">
        <a href="<?php echo esc_url( home_url( '/insurance-companies/roojai/' ) ); ?>" class="btn btn-primary">ดูรายละเอียดรู้ใจ</a>
      </div>
    </div>
  </div>
</section>

<section class="articles" id="articles">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <div class="article-grid">
        <?php $kudhai_i = 0; ?>
        <?php while ( have_posts() ) : the_post(); ?>
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
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
              <span class="article-read">อ่านต่อ
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
              </span>
            </div>
          </a>
          <?php $kudhai_i++; ?>
        <?php endwhile; ?>
      </div>
      <div class="cta-row" style="margin-top:40px;">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <p>ไม่พบบทความ</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
