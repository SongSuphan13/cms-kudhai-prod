<?php
/**
 * Template Name: KUDHai — กรุงเทพประกันภัย
 * Template Post Type: page
 * Template for the /car-insurance/bangkok-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'car-insurance/bangkok-insurance' );
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถยนต์ กรุงเทพประกันภัย",
  "name": "ประกันรถยนต์ กรุงเทพประกันภัย",
  "description": "เปรียบเทียบแผนประกันรถยนต์กรุงเทพประกันภัย ชั้น 1, 2+ และ พ.ร.บ. เชี่ยวชาญกรมธรรม์ที่ปรับแต่งได้สำหรับลูกค้าองค์กร จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/car-insurance/bangkok-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 4, "name": "กรุงเทพประกันภัย", "item": "<?php echo esc_url( home_url( '/car-insurance/bangkok-insurance/' ) ); ?>" }
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
      "name": "กรุงเทพประกันภัยมีแผนประกันรถยนต์อะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "กรุงเทพประกันภัยมีให้เลือกชั้น 1, ชั้น 2+ และ พ.ร.บ. ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ" }
    },
    {
      "@type": "Question",
      "name": "เหมาะกับรถยนต์ส่วนบุคคลทั่วไปไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "เหมาะ แม้จะโดดเด่นเรื่องกรมธรรม์สำหรับองค์กร แต่ก็มีแผนความคุ้มครองสำหรับรถยนต์ส่วนบุคคลให้เลือกเช่นกัน" }
    },
    {
      "@type": "Question",
      "name": "ปรับแต่งเงื่อนไขความคุ้มครองได้แค่ไหน?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับเงื่อนไขที่บริษัทเสนอในแต่ละช่วงเวลา แนะนำให้แจ้งความต้องการเฉพาะของคุณกับเรา เราจะช่วยตรวจสอบว่าปรับแต่งได้ตามที่ต้องการหรือไม่" }
    },
    {
      "@type": "Question",
      "name": "รถของกิจการหรือรถบริษัทซื้อประกันกรุงเทพประกันภัยได้ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ได้ กรุงเทพประกันภัยมีความเชี่ยวชาญด้านกรมธรรม์สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ เหมาะกับรถของกิจการที่ต้องการเงื่อนไขความคุ้มครองที่ปรับแต่งได้ตามลักษณะการใช้งาน" }
    },
    {
      "@type": "Question",
      "name": "ทำไมจึงมีเฉพาะชั้น 1, 2+ และ พ.ร.บ. ไม่มีชั้น 3+/3?",
      "acceptedAnswer": { "@type": "Answer", "text": "แผนที่เปิดขายอาจแตกต่างกันไปในแต่ละช่วงเวลาตามนโยบายของบริษัท หากต้องการชั้นความคุ้มครองอื่นนอกเหนือจากนี้ แจ้งเราได้ เราจะช่วยเสนอทางเลือกจากบริษัทอื่นให้เปรียบเทียบ" }
    },
    {
      "@type": "Question",
      "name": "ซื้อผ่านนายหน้ากับซื้อตรงกับกรุงเทพประกันภัยต่างกันไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ความคุ้มครองตามกรมธรรม์เหมือนกัน แต่การซื้อผ่านนายหน้าหรือที่ปรึกษาช่วยให้คุณเปรียบเทียบแผนของกรุงเทพประกันภัยกับบริษัทอื่นได้ในคราวเดียว และมีคนช่วยประสานงานหากมีปัญหาระหว่างการเคลม" }
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
      <span class="current">กรุงเทพประกันภัย</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      กรุงเทพประกันภัย
    </span>
    <h1>ประกันรถยนต์ กรุงเทพประกันภัย</h1>
    <p>เปรียบเทียบแผนประกันรถยนต์กรุงเทพประกันภัย เชี่ยวชาญด้านกรมธรรม์ที่ปรับแต่งได้สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ ให้เราช่วยเปรียบเทียบกับบริษัทอื่นก่อนตัดสินใจ</p>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แผนความคุ้มครองของกรุงเทพประกันภัย
      </span>
      <h2>กรุงเทพประกันภัยมีแผนอะไรให้เลือกบ้าง</h2>
      <p>กรุงเทพประกันภัยมีชั้น 1, 2+ และ พ.ร.บ. ให้เลือก เน้นความเชี่ยวชาญด้านกรมธรรม์ที่ปรับแต่งเงื่อนไขได้สำหรับลูกค้าองค์กร</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">คุ้มครองครบวงจร เหมาะกับรถส่วนบุคคลและรถของกิจการที่ต้องการความคุ้มครองสูงสุด</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้ / น้ำท่วม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">รถส่วนบุคคล / รถกิจการ</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองกรณีมีคู่กรณีและภัยอื่น ๆ ในราคาที่ประหยัดกว่าชั้น 1</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้ / ชนมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">งบประหยัดกว่าชั้น 1</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>พ.ร.บ.</h3>
          <span class="coverage-card-badge alt">ภาคบังคับ</span>
        </div>
        <p class="coverage-card-tag">ประกันภาคบังคับตามกฎหมาย คุ้มครองค่ารักษาพยาบาลเบื้องต้นของผู้ประสบภัย</p>
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
      แผนที่เปิดขายอาจแตกต่างกันไปในแต่ละช่วงเวลา และเงื่อนไขที่ปรับแต่งได้ขึ้นอยู่กับข้อเสนอของบริษัทในขณะนั้น ให้เราช่วยตรวจสอบและขอใบเสนอราคาที่เป็นปัจจุบันจากกรุงเทพประกันภัยให้คุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">กรุงเทพประกันภัย ดำเนินธุรกิจประกันวินาศภัยมาอย่างยาวนาน มีความเชี่ยวชาญด้านการออกแบบกรมธรรม์สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ เหมาะกับเจ้าของรถที่ต้องการกรมธรรม์ที่ปรับแต่งเงื่อนไขความคุ้มครองให้ตรงกับความต้องการเฉพาะราย มากกว่าแผนสำเร็จรูปทั่วไป เราช่วยเปรียบเทียบแผนของกรุงเทพประกันภัยกับบริษัทอื่นให้เหมาะกับลักษณะการใช้รถและงบประมาณของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>บทความนี้เป็นข้อมูลเบื้องต้นเกี่ยวกับผลิตภัณฑ์ของกรุงเทพประกันภัยเพื่อการเปรียบเทียบ ไม่ได้หมายความว่าเราแนะนำให้ซื้อกับกรุงเทพประกันภัยเพียงบริษัทเดียว ดู<a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">การเปรียบเทียบบริษัทประกันภัยอื่นที่เราแนะนำ</a>ประกอบการตัดสินใจด้วย</p>
    </div>

    <h3>จุดเด่นของกรุงเทพประกันภัย</h3>
    <ul>
      <li>ประสบการณ์ยาวนานในธุรกิจประกันภัย</li>
      <li>มีความเชี่ยวชาญด้านกรมธรรม์สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ</li>
      <li>ปรับแต่งเงื่อนไขความคุ้มครองให้เหมาะกับความต้องการเฉพาะรายได้</li>
    </ul>

    <h3>เหมาะกับใคร</h3>
    <p>เหมาะกับเจ้าของรถที่ต้องการกรมธรรม์ที่ปรับแต่งเงื่อนไขความคุ้มครองให้ตรงกับความต้องการเฉพาะราย โดยเฉพาะรถของกิจการหรือกลุ่มธุรกิจที่มีลักษณะการใช้งานเฉพาะ นอกจากนี้ยังมีแผนสำหรับรถยนต์ส่วนบุคคลทั่วไปให้เลือกด้วยเช่นกัน</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันกรุงเทพประกันภัย</h3>
    <ol>
      <li>ข้อมูลของรถ — ประเภท อายุ และมูลค่ารถ รวมถึงลักษณะการใช้งาน (ส่วนบุคคลหรือของกิจการ)</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม</li>
      <li>ชั้นความคุ้มครองที่เลือก และเงื่อนไขที่ปรับแต่งเพิ่มเติม (หากมี)</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับเงื่อนไขของบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถยนต์</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ลักษณะการใช้งานรถ</span><span class="plan-desc">รถส่วนบุคคลหรือรถของกิจการ และความต้องการปรับแต่งเงื่อนไขเฉพาะ (ถ้ามี)</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่ตัวแทนหรือพนักงานของกรุงเทพประกันภัย</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปและมีการปรับปรุงเป็นระยะ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันและเปรียบเทียบกับบริษัทอื่นให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์กรุงเทพประกันภัย</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>กรุงเทพประกันภัยมีแผนประกันรถยนต์อะไรบ้าง?</h3>
        <p>กรุงเทพประกันภัยมีให้เลือกชั้น 1, ชั้น 2+ และ พ.ร.บ. ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>เหมาะกับรถยนต์ส่วนบุคคลทั่วไปไหม?</h3>
        <p>เหมาะ แม้จะโดดเด่นเรื่องกรมธรรม์สำหรับองค์กร แต่ก็มีแผนความคุ้มครองสำหรับรถยนต์ส่วนบุคคลให้เลือกเช่นกัน</p>
      </div>
      <div class="faq-item">
        <h3>ปรับแต่งเงื่อนไขความคุ้มครองได้แค่ไหน?</h3>
        <p>ขึ้นอยู่กับเงื่อนไขที่บริษัทเสนอในแต่ละช่วงเวลา แนะนำให้แจ้งความต้องการเฉพาะของคุณกับเรา เราจะช่วยตรวจสอบว่าปรับแต่งได้ตามที่ต้องการหรือไม่</p>
      </div>
      <div class="faq-item">
        <h3>รถของกิจการหรือรถบริษัทซื้อประกันกรุงเทพประกันภัยได้ไหม?</h3>
        <p>ได้ กรุงเทพประกันภัยมีความเชี่ยวชาญด้านกรมธรรม์สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ เหมาะกับรถของกิจการที่ต้องการเงื่อนไขความคุ้มครองที่ปรับแต่งได้ตามลักษณะการใช้งาน</p>
      </div>
      <div class="faq-item">
        <h3>ทำไมจึงมีเฉพาะชั้น 1, 2+ และ พ.ร.บ. ไม่มีชั้น 3+/3?</h3>
        <p>แผนที่เปิดขายอาจแตกต่างกันไปในแต่ละช่วงเวลาตามนโยบายของบริษัท หากต้องการชั้นความคุ้มครองอื่นนอกเหนือจากนี้ แจ้งเราได้ เราจะช่วยเสนอทางเลือกจากบริษัทอื่นให้เปรียบเทียบ</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อผ่านนายหน้ากับซื้อตรงกับกรุงเทพประกันภัยต่างกันไหม?</h3>
        <p>ความคุ้มครองตามกรมธรรม์เหมือนกัน แต่การซื้อผ่านนายหน้าหรือที่ปรึกษาช่วยให้คุณเปรียบเทียบแผนของกรุงเทพประกันภัยกับบริษัทอื่นได้ในคราวเดียว และมีคนช่วยประสานงานหากมีปัญหาระหว่างการเคลม</p>
      </div>
    </div>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/insurance-companies/bangkokinsurance/' ) ); ?>">โปรไฟล์เต็มของกรุงเทพประกันภัย</a>
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
<section class="co-cta">
  <div class="container">
    <h2>สนใจประกันรถยนต์กรุงเทพประกันภัยหรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยขอใบเสนอราคาจากกรุงเทพประกันภัยและเปรียบเทียบกับบริษัทอื่นให้คุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/contact-us/#topics' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
