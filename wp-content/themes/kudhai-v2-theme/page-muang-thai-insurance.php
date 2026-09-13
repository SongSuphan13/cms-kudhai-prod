<?php
/**
 * Template Name: KUDHai — เมืองไทยประกันภัย
 * Template Post Type: page
 * Template for the /car-insurance/muang-thai-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'car-insurance/muang-thai-insurance' );
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถยนต์ เมืองไทยประกันภัย",
  "name": "ประกันรถยนต์ เมืองไทยประกันภัย",
  "description": "เปรียบเทียบแผนประกันรถยนต์เมืองไทยประกันภัย ชั้น 1, 2+, 3+ และ พ.ร.บ. เบี้ยคุ้มค่า มีศูนย์บริการและตัวแทนทั่วประเทศ จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/car-insurance/muang-thai-insurance/' ) ); ?>",
  "areaServed": "TH",
  "provider": { "@type": "Organization", "name": <?php echo wp_json_encode( get_bloginfo( 'name' ), JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT ); ?>, "url": "<?php echo esc_url( home_url( '/' ) ); ?>" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "หน้าแรก", "item": "<?php echo esc_url( home_url( '/' ) ); ?>" },
    { "@type": "ListItem", "position": 2, "name": "ประกันภัยทั้งหมด", "item": "<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" },
    { "@type": "ListItem", "position": 3, "name": "ประกันรถยนต์", "item": "<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" },
    { "@type": "ListItem", "position": 4, "name": "เมืองไทยประกันภัย", "item": "<?php echo esc_url( home_url( '/car-insurance/muang-thai-insurance/' ) ); ?>" }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "เมืองไทยประกันภัยมีแผนประกันรถยนต์อะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "เมืองไทยประกันภัยมีให้เลือกชั้น 1, ชั้น 2+, ชั้น 3+ และ พ.ร.บ. ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ" }
    },
    {
      "@type": "Question",
      "name": "เบี้ยถูกแล้วความคุ้มครองจะลดลงไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "เบี้ยที่คุ้มค่าไม่ได้แปลว่าความคุ้มครองลดลงเสมอไป ขึ้นอยู่กับแผนที่เลือกและลักษณะการใช้รถ ให้เราช่วยเทียบรายละเอียดความคุ้มครองแต่ละแผนให้ก่อนตัดสินใจ" }
    },
    {
      "@type": "Question",
      "name": "ติดต่อสาขาได้จังหวัดไหนบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "มีศูนย์บริการและตัวแทนกระจายอยู่หลายจังหวัดทั่วประเทศ หากไม่แน่ใจว่าใกล้บ้านคุณมีสาขาหรือไม่ แจ้งเราได้ เราจะช่วยตรวจสอบให้" }
    },
    {
      "@type": "Question",
      "name": "เมืองไทยประกันภัยเหมาะกับรถประเภทไหน?",
      "acceptedAnswer": { "@type": "Answer", "text": "เหมาะกับรถยนต์ส่วนบุคคลทั่วไปที่ต้องการความคุ้มค่าระหว่างเบี้ยประกันกับความคุ้มครอง มีแผนให้เลือกหลายระดับตั้งแต่คุ้มครองสูงสุดไปจนถึงงบประหยัด" }
    },
    {
      "@type": "Question",
      "name": "ซื้อผ่านนายหน้ากับซื้อตรงกับเมืองไทยประกันภัยต่างกันไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ความคุ้มครองตามกรมธรรม์เหมือนกัน แต่การซื้อผ่านนายหน้าหรือที่ปรึกษาช่วยให้คุณเปรียบเทียบแผนของเมืองไทยกับบริษัทอื่นได้ในคราวเดียว และมีคนช่วยประสานงานหากมีปัญหาระหว่างการเคลม" }
    },
    {
      "@type": "Question",
      "name": "ต่อประกันกับเมืองไทยประกันภัยทุกปีได้ส่วนลดไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "โดยทั่วไปหากไม่มีการเคลมในปีที่ผ่านมา มักได้รับส่วนลดประวัติดี (NCB) ตามเงื่อนไขของบริษัท อัตราส่วนลดที่แน่นอนควรสอบถามกับเราหรือบริษัทโดยตรง" }
    }
  ]
}
</script>

<!-- ============ HERO ============ -->
<main id="main-content" class="product-content">
<section class="co-hero">
  <div class="container co-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันภัยทั้งหมด</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์</a>
      <span>/</span>
      <span class="current">เมืองไทยประกันภัย</span>
    </nav>
    <div class="mt-hero-layout"><div class="mt-hero-copy">
<span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      เมืองไทยประกันภัย
    </span>
    <h1>ประกันรถยนต์ เมืองไทยประกันภัย</h1>
    <p>เปรียบเทียบแผนประกันรถยนต์เมืองไทยประกันภัยทุกชั้น เบี้ยคุ้มค่า มีศูนย์บริการและตัวแทนกระจายทั่วประเทศ ให้เราช่วยเปรียบเทียบกับบริษัทอื่นก่อนตัดสินใจ</p>
<div class="actions">
<a class="button yellow" href="#type-coverage">ดูแผนความคุ้มครอง <span aria-hidden="true">→</span></a>
<a class="button" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>">คุย LINE @kudhai</a>
</div></div>
<div class="mt-hero-visual">
<div class="mt-brand-card"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/logo_insure/muangthai100x100.png' ) ); ?>" width="100" height="100" alt="เมืองไทยประกันภัย"><span>รู้จักแผนประกัน<br><strong>ก่อนเลือกให้รถคุณ</strong></span></div>
<img class="mt-hero-car" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-1.png' ) ); ?>" width="1536" height="1024" alt="รถยนต์ประกอบการเลือกประกัน" fetchpriority="high" decoding="async">
</div></div>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แผนความคุ้มครองของเมืองไทยประกันภัย
      </span>
      <h2>เมืองไทยประกันภัยมีแผนอะไรให้เลือกบ้าง</h2>
      <p>เมืองไทยประกันภัยมีชั้น 1, 2+, 3+ และ พ.ร.บ. ให้เลือก เน้นความคุ้มค่าของเบี้ยประกันเมื่อเทียบกับความคุ้มครองที่ได้รับ</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">คุ้มครองครบทุกกรณีในราคาที่แข่งขันได้ เหมาะกับรถที่ใช้งานเป็นประจำ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้ / น้ำท่วม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">ใช้งานเป็นประจำ</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองใกล้เคียงชั้น 1 เบี้ยประหยัดกว่า เหมาะกับรถอายุปานกลาง</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้ / ชนมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">รถอายุปานกลาง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองพื้นฐานสำหรับความเสียหายต่อคู่กรณี เหมาะกับงบจำกัด</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ชนกับยานพาหนะทางบกที่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">งบจำกัด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>พ.ร.บ.</h3>
          <span class="coverage-card-badge alt">ภาคบังคับ</span>
        </div>
        <p class="coverage-card-tag">ประกันภาคบังคับ คุ้มครองค่ารักษาพยาบาลเบื้องต้นตามกฎหมาย</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อตัวรถของคุณ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลเบื้องต้นของผู้ประสบภัย</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">ต่ำสุด (ภาคบังคับ)</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายละเอียดความคุ้มครอง วงเงิน และเบี้ยประกันที่แน่นอนอาจมีการปรับปรุงเป็นระยะ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันจากเมืองไทยประกันภัยให้คุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">เมืองไทยประกันภัย เน้นความคุ้มค่าของเบี้ยประกันเมื่อเทียบกับความคุ้มครองที่ได้รับ มีเครือข่ายตัวแทนและศูนย์บริการกระจายอยู่ทั่วประเทศ ทำให้ติดต่อขอรับบริการหรือสอบถามข้อมูลได้สะดวก ไม่ว่าจะอยู่จังหวัดใด เราช่วยเปรียบเทียบแผนของเมืองไทยกับบริษัทอื่นให้เหมาะกับลักษณะการใช้รถและงบประมาณของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>บทความนี้เป็นข้อมูลเบื้องต้นเกี่ยวกับผลิตภัณฑ์ของเมืองไทยประกันภัยเพื่อการเปรียบเทียบ ไม่ได้หมายความว่าเราแนะนำให้ซื้อกับเมืองไทยเพียงบริษัทเดียว ดู<a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">การเปรียบเทียบบริษัทประกันภัยอื่นที่เราแนะนำ</a>ประกอบการตัดสินใจด้วย</p>
    </div>

    <h3>จุดเด่นของเมืองไทยประกันภัย</h3>
    <ul>
      <li>เบี้ยประกันแข่งขันได้ในระดับคุ้มค่า</li>
      <li>มีศูนย์บริการและตัวแทนกระจายอยู่ทั่วประเทศ</li>
      <li>มีช่องทางติดต่อหลากหลายทั้งออนไลน์และหน้าสาขา</li>
    </ul>

    <h3>เหมาะกับใคร</h3>
    <p>เหมาะกับผู้ที่ต้องการความคุ้มค่าของเบี้ยประกันเมื่อเทียบกับความคุ้มครองที่ได้รับ และให้ความสำคัญกับการมีศูนย์บริการหรือตัวแทนใกล้บ้านที่สามารถติดต่อได้สะดวก โดยเฉพาะผู้ที่อาศัยอยู่ต่างจังหวัด</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันเมืองไทย</h3>
    <ol>
      <li>ข้อมูลของรถ — ประเภท อายุ และมูลค่ารถ</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม</li>
      <li>ชั้นความคุ้มครองที่เลือก</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับเงื่อนไขของบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถยนต์</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่ตัวแทนหรือพนักงานของเมืองไทยประกันภัย</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปและมีการปรับปรุงเป็นระยะ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันและเปรียบเทียบกับบริษัทอื่นให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์เมืองไทย</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>เมืองไทยประกันภัยมีแผนประกันรถยนต์อะไรบ้าง?</h3>
        <p>เมืองไทยประกันภัยมีให้เลือกชั้น 1, ชั้น 2+, ชั้น 3+ และ พ.ร.บ. ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>เบี้ยถูกแล้วความคุ้มครองจะลดลงไหม?</h3>
        <p>เบี้ยที่คุ้มค่าไม่ได้แปลว่าความคุ้มครองลดลงเสมอไป ขึ้นอยู่กับแผนที่เลือกและลักษณะการใช้รถ ให้เราช่วยเทียบรายละเอียดความคุ้มครองแต่ละแผนให้ก่อนตัดสินใจ</p>
      </div>
      <div class="faq-item">
        <h3>ติดต่อสาขาได้จังหวัดไหนบ้าง?</h3>
        <p>มีศูนย์บริการและตัวแทนกระจายอยู่หลายจังหวัดทั่วประเทศ หากไม่แน่ใจว่าใกล้บ้านคุณมีสาขาหรือไม่ แจ้งเราได้ เราจะช่วยตรวจสอบให้</p>
      </div>
      <div class="faq-item">
        <h3>เมืองไทยประกันภัยเหมาะกับรถประเภทไหน?</h3>
        <p>เหมาะกับรถยนต์ส่วนบุคคลทั่วไปที่ต้องการความคุ้มค่าระหว่างเบี้ยประกันกับความคุ้มครอง มีแผนให้เลือกหลายระดับตั้งแต่คุ้มครองสูงสุดไปจนถึงงบประหยัด</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อผ่านนายหน้ากับซื้อตรงกับเมืองไทยประกันภัยต่างกันไหม?</h3>
        <p>ความคุ้มครองตามกรมธรรม์เหมือนกัน แต่การซื้อผ่านนายหน้าหรือที่ปรึกษาช่วยให้คุณเปรียบเทียบแผนของเมืองไทยกับบริษัทอื่นได้ในคราวเดียว และมีคนช่วยประสานงานหากมีปัญหาระหว่างการเคลม</p>
      </div>
      <div class="faq-item">
        <h3>ต่อประกันกับเมืองไทยประกันภัยทุกปีได้ส่วนลดไหม?</h3>
        <p>โดยทั่วไปหากไม่มีการเคลมในปีที่ผ่านมา มักได้รับส่วนลดประวัติดี (NCB) ตามเงื่อนไขของบริษัท อัตราส่วนลดที่แน่นอนควรสอบถามกับเราหรือบริษัทโดยตรง</p>
      </div>
    </div>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/insurance-companies/muangthai/' ) ); ?>">โปรไฟล์เต็มของเมืองไทยประกันภัย</a>
        ·
        <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">เปรียบเทียบบริษัทประกันภัยอื่นที่เราแนะนำ</a>
      </span>
    </div>

    <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้าประกันรถยนต์
    </a>
  </div>
</section>

<!-- ============ CTA ============ -->
<?php get_template_part( 'template-parts/section', 'advisor' ); ?>
<section class="cta" id="bottom-cta">
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
