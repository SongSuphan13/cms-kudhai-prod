<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- ============ HERO ============ -->
<section class="ml-hero">
  <div class="container ml-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <span class="current"><?php the_title(); ?></span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15z"/></svg>
      ความรู้พื้นฐานด้านกฎหมาย
    </span>
    <h1><?php the_title(); ?></h1>
    <p>สิทธิ์ทางกฎหมายที่ซ่อนอยู่เบื้องหลังทุกอุบัติเหตุบนท้องถนน ที่หลายคนไม่เคยรู้ว่าตัวเองมี และอาจทำให้คุณพลาดเงินชดเชยไปโดยไม่รู้ตัว</p>
    <span class="ml-hero-badge">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      อ้างอิงตามประมวลกฎหมายแพ่งและพาณิชย์ มาตรา 420
    </span>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container">
  <div class="ml-article-layout">
    <div class="prose">
      <?php the_content(); ?>
    </div>
    <aside class="ml-ad-slot" aria-label="พื้นที่โฆษณา">
      <a href="<?php echo esc_url( kudhai_get_qrcode_link_url() ); ?>" target="_blank" rel="noopener">
        <img src="<?php echo esc_url( kudhai_get_qrcode_url() ); ?>" alt="สแกน QR โค้ด รู้ใจ ประกันภัย เพื่อขอใบเสนอราคาประกันรถยนต์ มอเตอร์ไซค์ และอุบัติเหตุ" loading="lazy">
      </a>
    </aside>
  </div>
</section>

<?php endwhile; ?>

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

<?php get_footer(); ?>
