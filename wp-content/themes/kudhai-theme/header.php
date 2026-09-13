<!DOCTYPE html>
<html lang="th" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="siteHeader">
  <div class="top-bar">
    <div class="top-bar-inner">
      <a href="<?php echo esc_url( home_url( '/mun-lamert/' ) ); ?>" class="rating">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15z"/></svg>
        <b>มูลละเมิด</b> คืออะไร? สิทธิ์ที่คุณอาจไม่รู้
      </a>
      <div class="top-bar-contact">
        <a href="tel:<?php echo esc_attr( str_replace( '-', '', kudhai_get_phone() ) ); ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          <span><?php echo esc_html( kudhai_get_phone() ); ?></span>
        </a>
        <span class="divider"></span>
        <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg>
          <span>LINE ID: <?php echo esc_html( kudhai_get_line_id() ); ?></span>
        </a>
      </div>
    </div>
  </div>

  <nav class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
        <span class="mark">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/></svg>
        </span>
        <span><?php bloginfo( 'name' ); ?></span>
      </a>
      <div class="nav-links">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'class="active"' : ''; ?>>หน้าแรก</a>
        <a href="<?php echo esc_url( home_url( '/mun-lamert/' ) ); ?>" <?php echo is_page( 'mun-lamert' ) ? 'class="active"' : ''; ?>>มูลละเมิด</a>

        <div class="nav-item has-dropdown">
          <button type="button" class="nav-dropdown-toggle<?php echo is_page( 'insurance-types' ) ? ' active' : ''; ?>" aria-expanded="false" aria-controls="navDropdownInsurance">
            ประกันภัยทั้งหมด
            <svg class="nav-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="nav-dropdown" id="navDropdownInsurance">
            <a class="nav-dropdown-all" href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>">ดูประกันภัยทั้งหมด</a>
            <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์</a>
            <a href="<?php echo esc_url( home_url( '/motorbike-insurance/' ) ); ?>">ประกันรถมอเตอร์ไซค์</a>
            <a href="<?php echo esc_url( home_url( '/truck-insurance/' ) ); ?>">ประกันรถบรรทุก</a>
            <a href="<?php echo esc_url( home_url( '/van-insurance/' ) ); ?>">ประกันรถตู้</a>
            <a href="<?php echo esc_url( home_url( '/cancer-insurance/' ) ); ?>">ประกันมะเร็ง</a>
            <a href="<?php echo esc_url( home_url( '/personal-accident-insurance/' ) ); ?>">ประกันอุบัติเหตุ</a>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>" <?php echo is_page( 'insurance-companies' ) ? 'class="active"' : ''; ?>>บริษัทประกัน</a>
        <!-- <a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" <?php echo ( is_page( 'articles' ) || is_singular( 'post' ) ) ? 'class="active"' : ''; ?>>บทความ</a> -->
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php echo is_page( 'about' ) ? 'class="active"' : ''; ?>>เกี่ยวกับเรา</a>
        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" <?php echo is_page( 'contact-us' ) ? 'class="active"' : ''; ?>>ติดต่อเรา</a>
        <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="nav-cta">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5 8.4 8.4 0 0 1-3.9-.95L3 20l1.05-3.6A8.5 8.5 0 1 1 21 11.5z"/></svg>
        ปรึกษาฟรี
      </a>
      </div>
      <button type="button" class="nav-toggle" id="navToggle" aria-label="เปิดเมนู" aria-expanded="false" aria-controls="navMobilePanel">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
    <div class="nav-mobile-panel" id="navMobilePanel">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'class="active"' : ''; ?>>หน้าแรก</a>
      <div class="nav-mobile-group">
        <button type="button" class="nav-mobile-toggle<?php echo is_page( 'insurance-types' ) ? ' active' : ''; ?>" aria-expanded="false" aria-controls="navMobileSubInsurance">
          ประกันภัยทั้งหมด
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="nav-mobile-sub" id="navMobileSubInsurance">
          <a class="nav-dropdown-all" href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>">ดูประกันภัยทั้งหมด</a>
          <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์</a>
          <a href="<?php echo esc_url( home_url( '/motorbike-insurance/' ) ); ?>">ประกันรถมอเตอร์ไซค์</a>
          <a href="<?php echo esc_url( home_url( '/truck-insurance/' ) ); ?>">ประกันรถบรรทุก</a>
          <a href="<?php echo esc_url( home_url( '/van-insurance/' ) ); ?>">ประกันรถตู้</a>
          <a href="<?php echo esc_url( home_url( '/cancer-insurance/' ) ); ?>">ประกันมะเร็ง</a>
          <a href="<?php echo esc_url( home_url( '/personal-accident-insurance/' ) ); ?>">ประกันอุบัติเหตุ</a>
        </div>
      </div>
      <a href="<?php echo esc_url( home_url( '/mun-lamert/' ) ); ?>" <?php echo is_page( 'mun-lamert' ) ? 'class="active"' : ''; ?>>มูลละเมิด</a>
      <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>" <?php echo is_page( 'insurance-companies' ) ? 'class="active"' : ''; ?>>บริษัทประกัน</a>
      <!-- <a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" <?php echo ( is_page( 'articles' ) || is_singular( 'post' ) ) ? 'class="active"' : ''; ?>>บทความ</a> -->
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php echo is_page( 'about' ) ? 'class="active"' : ''; ?>>เกี่ยวกับเรา</a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" <?php echo is_page( 'contact-us' ) ? 'class="active"' : ''; ?>>ติดต่อเรา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="nav-cta">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5 8.4 8.4 0 0 1-3.9-.95L3 20l1.05-3.6A8.5 8.5 0 1 1 21 11.5z"/></svg>
        ปรึกษาฟรี
      </a>
    </div>
  </nav>
</header>
