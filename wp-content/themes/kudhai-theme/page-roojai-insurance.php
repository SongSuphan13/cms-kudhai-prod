<?php
/**
 * Template for the /car-insurance/roojai-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถยนต์ รู้ใจ ประกันภัย",
  "name": "ประกันรถยนต์ รู้ใจ ประกันภัย",
  "description": "เปรียบเทียบแผนประกันรถยนต์รู้ใจ ประกันภัย ชั้น 1, 2+, 3+, พ.ร.บ. และแผนเฉพาะรถยนต์ไฟฟ้า ซื้อและเคลมผ่านออนไลน์ได้ทั้งหมด จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/car-insurance/roojai-insurance/' ) ); ?>",
  "areaServed": "TH",
  "provider": { "@type": "Organization", "name": "<?php echo esc_js( get_bloginfo( 'name' ) ); ?>", "url": "<?php echo esc_url( home_url( '/' ) ); ?>" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "หน้าแรก", "item": "<?php echo esc_url( home_url( '/' ) ); ?>" },
    { "@type": "ListItem", "position": 2, "name": "ประกันภัยทั้งหมด", "item": "<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>" },
    { "@type": "ListItem", "position": 3, "name": "ประกันรถยนต์", "item": "<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" },
    { "@type": "ListItem", "position": 4, "name": "รู้ใจ ประกันภัย", "item": "<?php echo esc_url( home_url( '/car-insurance/roojai-insurance/' ) ); ?>" }
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
      "name": "รู้ใจมีแผนประกันรถยนต์อะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "รู้ใจมีให้เลือกชั้น 1, ชั้น 2+, ชั้น 3+, พ.ร.บ. และมีแผนเฉพาะสำหรับรถยนต์ไฟฟ้า (EV) ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ" }
    },
    {
      "@type": "Question",
      "name": "ไม่มีสาขาแล้วเคลมยังไง?",
      "acceptedAnswer": { "@type": "Answer", "text": "แจ้งเคลมผ่านช่องทางออนไลน์หรือแอปพลิเคชันของบริษัทได้โดยตรง ทีมงานจะประสานเรื่องอู่ซ่อมหรือการสำรวจภัยให้ตามขั้นตอนของบริษัท" }
    },
    {
      "@type": "Question",
      "name": "รถ EV มือสองซื้อประกันรู้ใจได้ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "โดยทั่วไปรับพิจารณา แต่เงื่อนไขด้านอายุแบตเตอรี่และสภาพรถอาจมีผลต่อการพิจารณา แนะนำให้แจ้งรายละเอียดรถกับเราเพื่อขอใบเสนอราคาที่แม่นยำ" }
    },
    {
      "@type": "Question",
      "name": "รู้ใจไม่มีตัวแทนหน้าร้าน ซื้อผ่านเรายังได้ส่วนลดไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ได้ การซื้อผ่านนายหน้าไม่ได้ทำให้เบี้ยประกันแพงขึ้น เงื่อนไขและราคาตามกรมธรรม์เหมือนกัน แต่คุณได้คนช่วยเปรียบเทียบกับบริษัทอื่นและช่วยประสานงานหากมีปัญหาเพิ่มเติม" }
    },
    {
      "@type": "Question",
      "name": "แผน EV ของรู้ใจต่างจากแผนรถยนต์ทั่วไปอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "แผน EV ออกแบบมาให้ครอบคลุมชิ้นส่วนเฉพาะของรถยนต์ไฟฟ้า เช่น ระบบแบตเตอรี่และมอเตอร์ไฟฟ้า ซึ่งกรมธรรม์รถยนต์ทั่วไปอาจไม่ได้ระบุไว้ชัดเจน ควรตรวจสอบรายละเอียดความคุ้มครองเฉพาะส่วนนี้กับเราก่อนตัดสินใจ" }
    },
    {
      "@type": "Question",
      "name": "กระบวนการอนุมัติกรมธรรม์ของรู้ใจใช้เวลานานไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "โดยทั่วไปกระบวนการออนไลน์ทั้งหมดมักทำได้รวดเร็วกว่าการซื้อผ่านสาขาแบบดั้งเดิม แต่ระยะเวลาที่แน่นอนขึ้นอยู่กับความครบถ้วนของเอกสารและการตรวจสอบของบริษัทในแต่ละกรณี" }
    }
  ]
}
</script>

<!-- ============ HERO ============ -->
<section class="co-hero">
  <div class="container co-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>">ประกันภัยทั้งหมด</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์</a>
      <span>/</span>
      <span class="current">รู้ใจ ประกันภัย</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      รู้ใจ ประกันภัย
    </span>
    <h1>ประกันรถยนต์ รู้ใจ ประกันภัย</h1>
    <p>เปรียบเทียบแผนประกันรถยนต์รู้ใจ ซื้อและเคลมผ่านออนไลน์ได้ทั้งหมด พร้อมแผนเฉพาะสำหรับรถยนต์ไฟฟ้า ให้เราช่วยเปรียบเทียบกับบริษัทอื่นก่อนตัดสินใจ</p>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แผนความคุ้มครองของรู้ใจ
      </span>
      <h2>รู้ใจมีแผนอะไรให้เลือกบ้าง</h2>
      <p>รู้ใจมีชั้น 1, 2+, 3+ และ พ.ร.บ. ให้เลือกเหมือนบริษัททั่วไป พร้อมแผนเฉพาะสำหรับรถยนต์ไฟฟ้าที่ออกแบบมาต่างหาก</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">คุ้มครองครบวงจร ซื้อและจัดการผ่านออนไลน์ได้ทั้งหมด</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้ / น้ำท่วม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">คุ้นเคยกับการซื้อออนไลน์</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองใกล้เคียงชั้น 1 ในราคาย่อมเยากว่า</p>
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
        <p class="coverage-card-tag">คุ้มครองพื้นฐานสำหรับคู่กรณี เหมาะกับงบจำกัด</p>
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
        <p class="coverage-card-tag">ประกันภาคบังคับตามกฎหมาย รถทุกคันต้องมี</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อตัวรถของคุณ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลเบื้องต้นของผู้ประสบภัย</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">ต่ำสุด (ภาคบังคับ)</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>แผน EV</h3>
          <span class="coverage-card-badge alt">เฉพาะรถยนต์ไฟฟ้า</span>
        </div>
        <p class="coverage-card-tag">แผนเฉพาะสำหรับรถยนต์ไฟฟ้า ครอบคลุมระบบแบตเตอรี่และมอเตอร์ไฟฟ้า</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ออกแบบมาสำหรับรถยนต์ไฟฟ้าโดยเฉพาะ</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>รายละเอียดวงเงินเฉพาะ ควรสอบถามเรา</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">เจ้าของรถ EV</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายละเอียดความคุ้มครอง วงเงิน และเบี้ยประกันที่แน่นอนอาจมีการปรับปรุงเป็นระยะ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันจากรู้ใจให้คุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">รู้ใจ ประกันภัย เป็นบริษัทประกันภัยที่เน้นให้บริการผ่านช่องทางออนไลน์เป็นหลัก ตั้งแต่การขอใบเสนอราคา ซื้อกรมธรรม์ ไปจนถึงการแจ้งเคลม สามารถทำได้โดยไม่ต้องเดินทางไปสาขา และมีแผนความคุ้มครองที่ออกแบบมาเฉพาะสำหรับรถยนต์ไฟฟ้า เหมาะกับผู้ที่คุ้นเคยกับการทำธุรกรรมออนไลน์และเจ้าของรถ EV เราช่วยเปรียบเทียบแผนของรู้ใจกับบริษัทอื่นให้เหมาะกับลักษณะการใช้รถและงบประมาณของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>บทความนี้เป็นข้อมูลเบื้องต้นเกี่ยวกับผลิตภัณฑ์ของรู้ใจเพื่อการเปรียบเทียบ ไม่ได้หมายความว่าเราแนะนำให้ซื้อกับรู้ใจเพียงบริษัทเดียว ดู<a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>">การเปรียบเทียบบริษัทประกันภัยอื่นที่เราแนะนำ</a>ประกอบการตัดสินใจด้วย</p>
    </div>

    <h3>จุดเด่นของรู้ใจ</h3>
    <ul>
      <li>ซื้อกรมธรรม์และแจ้งเคลมผ่านช่องทางออนไลน์ได้ทั้งหมด ไม่ต้องเดินทางไปสาขา</li>
      <li>มีแผนความคุ้มครองที่ออกแบบเฉพาะสำหรับรถยนต์ไฟฟ้า</li>
      <li>กระบวนการอนุมัติและออกกรมธรรม์มักรวดเร็วกว่าช่องทางดั้งเดิม</li>
    </ul>

    <h3>แผนเฉพาะรถยนต์ไฟฟ้า (EV)</h3>
    <p>นอกจากชั้นความคุ้มครองมาตรฐาน รู้ใจยังมีแผนที่ออกแบบมาเฉพาะสำหรับรถยนต์ไฟฟ้า ซึ่งอาจครอบคลุมชิ้นส่วนเฉพาะของรถ EV เช่น ระบบแบตเตอรี่และมอเตอร์ไฟฟ้า ที่กรมธรรม์รถยนต์ทั่วไปอาจไม่ได้ระบุไว้ชัดเจน หากคุณมีรถยนต์ไฟฟ้า ควรสอบถามรายละเอียดความคุ้มครองส่วนนี้กับเราก่อนตัดสินใจ ดูภาพรวมความคุ้มครองรถยนต์ไฟฟ้าเพิ่มเติมได้ที่<a href="<?php echo esc_url( home_url( '/car-insurance/electric-vehicle/' ) ); ?>">หน้าประกันรถยนต์ไฟฟ้า</a></p>

    <h3>ช่องทางซื้อและแจ้งเคลม</h3>
    <p>เนื่องจากรู้ใจเน้นให้บริการผ่านช่องทางออนไลน์ การขอใบเสนอราคา ซื้อกรมธรรม์ และแจ้งเคลม จึงทำได้ผ่านเว็บไซต์หรือแอปพลิเคชันของบริษัทเป็นหลัก หากซื้อผ่านเรา คุณจะยังได้รับความคุ้มครองแบบเดียวกันตามกรมธรรม์ พร้อมมีที่ปรึกษาช่วยเปรียบเทียบกับบริษัทอื่นและประสานงานหากมีปัญหาระหว่างการเคลม โดยไม่มีค่าใช้จ่ายเพิ่มเติมจากเบี้ยประกันปกติ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันรู้ใจ</h3>
    <ol>
      <li>ข้อมูลของรถ — ประเภท อายุ และมูลค่ารถ รวมถึงรถยนต์ไฟฟ้าที่มีปัจจัยเพิ่มเติม เช่น ความจุแบตเตอรี่</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม</li>
      <li>ชั้นความคุ้มครองที่เลือก</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับเงื่อนไขของบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถยนต์</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต และหมายเลขทะเบียนรถ (สำหรับรถ EV เพิ่มข้อมูลความจุแบตเตอรี่)</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่ตัวแทนหรือพนักงานของรู้ใจ</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปและมีการปรับปรุงเป็นระยะ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันและเปรียบเทียบกับบริษัทอื่นให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์รู้ใจ</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>รู้ใจมีแผนประกันรถยนต์อะไรบ้าง?</h3>
        <p>รู้ใจมีให้เลือกชั้น 1, ชั้น 2+, ชั้น 3+, พ.ร.บ. และมีแผนเฉพาะสำหรับรถยนต์ไฟฟ้า (EV) ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>ไม่มีสาขาแล้วเคลมยังไง?</h3>
        <p>แจ้งเคลมผ่านช่องทางออนไลน์หรือแอปพลิเคชันของบริษัทได้โดยตรง ทีมงานจะประสานเรื่องอู่ซ่อมหรือการสำรวจภัยให้ตามขั้นตอนของบริษัท</p>
      </div>
      <div class="faq-item">
        <h3>รถ EV มือสองซื้อประกันรู้ใจได้ไหม?</h3>
        <p>โดยทั่วไปรับพิจารณา แต่เงื่อนไขด้านอายุแบตเตอรี่และสภาพรถอาจมีผลต่อการพิจารณา แนะนำให้แจ้งรายละเอียดรถกับเราเพื่อขอใบเสนอราคาที่แม่นยำ</p>
      </div>
      <div class="faq-item">
        <h3>รู้ใจไม่มีตัวแทนหน้าร้าน ซื้อผ่านเรายังได้ส่วนลดไหม?</h3>
        <p>ได้ การซื้อผ่านนายหน้าไม่ได้ทำให้เบี้ยประกันแพงขึ้น เงื่อนไขและราคาตามกรมธรรม์เหมือนกัน แต่คุณได้คนช่วยเปรียบเทียบกับบริษัทอื่นและช่วยประสานงานหากมีปัญหาเพิ่มเติม</p>
      </div>
      <div class="faq-item">
        <h3>แผน EV ของรู้ใจต่างจากแผนรถยนต์ทั่วไปอย่างไร?</h3>
        <p>แผน EV ออกแบบมาให้ครอบคลุมชิ้นส่วนเฉพาะของรถยนต์ไฟฟ้า เช่น ระบบแบตเตอรี่และมอเตอร์ไฟฟ้า ซึ่งกรมธรรม์รถยนต์ทั่วไปอาจไม่ได้ระบุไว้ชัดเจน ควรตรวจสอบรายละเอียดความคุ้มครองเฉพาะส่วนนี้กับเราก่อนตัดสินใจ</p>
      </div>
      <div class="faq-item">
        <h3>กระบวนการอนุมัติกรมธรรม์ของรู้ใจใช้เวลานานไหม?</h3>
        <p>โดยทั่วไปกระบวนการออนไลน์ทั้งหมดมักทำได้รวดเร็วกว่าการซื้อผ่านสาขาแบบดั้งเดิม แต่ระยะเวลาที่แน่นอนขึ้นอยู่กับความครบถ้วนของเอกสารและการตรวจสอบของบริษัทในแต่ละกรณี</p>
      </div>
    </div>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/insurance-companies/roojai/' ) ); ?>">โปรไฟล์เต็มของรู้ใจ</a>
        ·
        <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>">เปรียบเทียบบริษัทประกันภัยอื่นที่เราแนะนำ</a>
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
    <h2>สนใจประกันรถยนต์รู้ใจหรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยขอใบเสนอราคาจากรู้ใจและเปรียบเทียบกับบริษัทอื่นให้คุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
