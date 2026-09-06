<?php
/**
 * Template Name: Company Detail
 * Description: Detail page for one insurance company. Assign this template
 * to a page whose slug matches a key in kudhai_get_companies() (functions.php).
 */

get_header();

$kudhai_companies = kudhai_get_companies();
$kudhai_slug       = get_post_field( 'post_name' );
$kudhai_co         = isset( $kudhai_companies[ $kudhai_slug ] ) ? $kudhai_companies[ $kudhai_slug ] : null;
?>

<?php if ( $kudhai_co ) : ?>

<!-- ============ HERO ============ -->
<section class="co-hero">
  <div class="container co-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>">บริษัทประกันภัย</a>
      <span>/</span>
      <span class="current"><?php echo esc_html( $kudhai_co['name'] ); ?></span>
    </nav>
    <div class="company-hero-head">
      <div class="company-badge logo">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/<?php echo esc_attr( $kudhai_co['logo'] ); ?>" alt="<?php echo esc_attr( $kudhai_co['name'] ); ?>">
      </div>
      <div>
        <span class="eyebrow">บริษัทประกันภัยที่เราแนะนำ</span>
        <h1><?php echo esc_html( $kudhai_co['name'] ); ?></h1>
      </div>
    </div>
    <p><?php echo esc_html( $kudhai_co['desc'] ); ?></p>
    <div class="company-tags">
      <?php foreach ( $kudhai_co['tags'] as $kudhai_tag ) : ?>
        <span class="company-tag"><?php echo esc_html( $kudhai_tag ); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container">
  <div class="prose">
    <?php if ( ! empty( $kudhai_co['overview'] ) ) : ?>
      <p class="lead"><?php echo esc_html( $kudhai_co['overview'] ); ?></p>
    <?php endif; ?>

    <div class="intro-modal-block">
      <h3>จุดเด่นของ <?php echo esc_html( $kudhai_co['name'] ); ?></h3>
      <ul class="company-modal-strengths">
        <?php foreach ( $kudhai_co['strengths'] as $kudhai_strength ) : ?>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>
            <?php echo esc_html( $kudhai_strength ); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php if ( ! empty( $kudhai_co['plans'] ) ) : ?>
      <h2>แผนความคุ้มครองที่ <?php echo esc_html( $kudhai_co['name'] ); ?> มีให้เลือก</h2>
      <ul class="plan-list">
        <?php foreach ( $kudhai_co['plans'] as $kudhai_plan_name => $kudhai_plan_desc ) : ?>
          <li>
            <span class="plan-name"><?php echo esc_html( $kudhai_plan_name ); ?></span>
            <span class="plan-desc"><?php echo esc_html( $kudhai_plan_desc ); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นที่เรารวบรวมไว้เพื่อการเปรียบเทียบ เบี้ยประกันและเงื่อนไขจริงอาจแตกต่างกันตามรถแต่ละคัน ให้เราช่วยเสนอราคาที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <?php
    $kudhai_co_car_pages = array(
      'viriyah'          => array( 'slug' => 'viriyah-insurance', 'label' => 'แผนประกันรถยนต์วิริยะทุกชั้น (ชั้น 1 ถึงชั้น 4)' ),
      'roojai'           => array( 'slug' => 'roojai-insurance', 'label' => 'แผนประกันรถยนต์รู้ใจทุกชั้น' ),
      'muangthai'        => array( 'slug' => 'muang-thai-insurance', 'label' => 'แผนประกันรถยนต์เมืองไทยทุกชั้น' ),
      'bangkokinsurance' => array( 'slug' => 'bangkok-insurance', 'label' => 'แผนประกันรถยนต์กรุงเทพประกันภัยทุกชั้น' ),
    );
    if ( isset( $kudhai_co_car_pages[ $kudhai_slug ] ) ) :
      $kudhai_co_car_page = $kudhai_co_car_pages[ $kudhai_slug ];
    ?>
      <div class="companies-note">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
        <span>
          อ่านเพิ่มเติม:
          <a href="<?php echo esc_url( home_url( '/car-insurance/' . $kudhai_co_car_page['slug'] . '/' ) ); ?>"><?php echo esc_html( $kudhai_co_car_page['label'] ); ?></a>
        </span>
      </div>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_co['faq'] ) ) : ?>
      <h2>คำถามที่พบบ่อยเกี่ยวกับ <?php echo esc_html( $kudhai_co['name'] ); ?></h2>
      <div class="faq-list">
        <?php foreach ( $kudhai_co['faq'] as $kudhai_faq_item ) : ?>
          <div class="faq-item">
            <h3><?php echo esc_html( $kudhai_faq_item['q'] ); ?></h3>
            <p><?php echo esc_html( $kudhai_faq_item['a'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้ารวมบริษัทประกัน
    </a>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="co-cta">
  <div class="container">
    <h2>สนใจ <?php echo esc_html( $kudhai_co['name'] ); ?> หรือยัง</h2>
    <p>ส่งข้อมูลรถให้เรา เราจะเสนอราคาจากบริษัทนี้ พร้อมเปรียบเทียบกับบริษัทอื่นให้ฟรี</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php else : ?>

<section class="article-content container" style="padding-top:calc(var(--header-h) + 48px);">
  <div class="prose">
    <h1 style="font-size:28px; font-weight:800; margin-bottom:16px;">ไม่พบข้อมูลบริษัทนี้</h1>
    <p>ลองกลับไปดูรายชื่อบริษัทประกันภัยทั้งหมดของเราแทน</p>
    <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้ารวมบริษัทประกัน
    </a>
  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>
