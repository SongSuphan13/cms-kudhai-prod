<?php
/**
 * Template for the /car-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถยนต์",
  "name": "ประกันรถยนต์",
  "description": "เช็กเบี้ยและเปรียบเทียบประกันรถยนต์ชั้น 1, 2+, 2, 3+, 3 และ พ.ร.บ. จากที่ปรึกษาประกันภัยรถยนต์ ช่วยเลือกความคุ้มครองให้ตรงกับการใช้งานและงบประมาณ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 3, "name": "ประกันรถยนต์", "item": "<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" }
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
      "name": "ประกันรถยนต์ชั้น 1, 2+, 2, 3+, 3 ต่างกันอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "ต่างกันที่ขอบเขตความคุ้มครอง ชั้น 1 คุ้มครองกว้างที่สุดรวมถึงกรณีไม่มีคู่กรณี ส่วนชั้นอื่น ๆ จะจำกัดเงื่อนไขมากขึ้นตามลำดับ ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ" }
    },
    {
      "@type": "Question",
      "name": "ประกันภัยรถยนต์ภาคสมัครใจสำคัญแค่ไหน ถ้ามี พ.ร.บ. อยู่แล้ว?",
      "acceptedAnswer": { "@type": "Answer", "text": "พ.ร.บ. คุ้มครองเฉพาะการบาดเจ็บและเสียชีวิตของบุคคลภายนอกเท่านั้น ไม่คุ้มครองทรัพย์สินของคู่กรณีหรือความเสียหายต่อรถของคุณเอง หากคุณเป็นฝ่ายผิดจะต้องรับผิดชอบส่วนนี้เอง ภาคสมัครใจจึงช่วยปิดความเสี่ยงส่วนที่ พ.ร.บ. ไม่ครอบคลุม" }
    },
    {
      "@type": "Question",
      "name": "พ.ร.บ. รวมอยู่ในประกันภาคสมัครใจหรือไม่?",
      "acceptedAnswer": { "@type": "Answer", "text": "ไม่ กรมธรรม์ พ.ร.บ. แยกออกจากกรมธรรม์ภาคสมัครใจเสมอ ต้องซื้อทั้งสองฉบับแยกกัน แม้จะซื้อพร้อมกันในคราวเดียวได้" }
    },
    {
      "@type": "Question",
      "name": "ประกันภัยรถยนต์มีค่าใช้จ่ายเท่าไหร่?",
      "acceptedAnswer": { "@type": "Answer", "text": "เบี้ยประกันแตกต่างกันไปตามประเภทรถ ประวัติการขับขี่ ระดับความคุ้มครอง และบริษัทประกัน ไม่มีราคาตายตัว ควรขอใบเสนอราคาเพื่อเปรียบเทียบให้ตรงกับรถและความต้องการของคุณโดยเฉพาะ" }
    },
    {
      "@type": "Question",
      "name": "มีวิธีลดเบี้ยประกันภัยรถยนต์อย่างไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "รักษาประวัติการขับขี่ที่ดี เลือกค่าเสียหายส่วนแรกที่สูงขึ้น พิจารณาแผนระบุชื่อผู้ขับขี่ หรือติดตั้งกล้องหน้ารถ ทั้งนี้ส่วนลดและเงื่อนไขที่แน่นอนขึ้นอยู่กับแต่ละบริษัท" }
    },
    {
      "@type": "Question",
      "name": "ประกันภัยรถยนต์ไม่คุ้มครองอะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "ข้อยกเว้นทั่วไปมักรวมถึงความเสียหายที่เกิดขึ้นโดยเจตนา การเสื่อมสภาพตามปกติ การใช้รถส่วนตัวเพื่อการพาณิชย์โดยไม่แจ้ง ผู้ขับขี่ที่ไม่ได้ระบุในกรมธรรม์ และการแข่งขันความเร็ว รายละเอียดที่แน่นอนควรตรวจสอบในกรมธรรม์ของแต่ละบริษัท" }
    },
    {
      "@type": "Question",
      "name": "ไม่ค่อยได้ขับรถ ยังต้องทำประกันภัยรถยนต์ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "พ.ร.บ. ยังจำเป็นตามกฎหมายสำหรับรถที่จดทะเบียนทุกคัน ส่วนภาคสมัครใจยังมีประโยชน์แม้ไม่ค่อยได้ขับ เพราะคุ้มครองความเสี่ยงอื่น เช่น การโจรกรรมหรือไฟไหม้ขณะจอด" }
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
      <span class="current">ประกันรถยนต์</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      ประกันรถยนต์
    </span>
    <h1>ประกันรถยนต์</h1>
    <p>เปรียบเทียบแผนความคุ้มครองจากหลายบริษัท ให้เหมาะกับลักษณะการใช้รถและงบประมาณของคุณ ไม่ใช่แค่เสนอขายแผนใดแผนหนึ่ง</p>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        ประเภทประกันภัยรถยนต์
      </span>
      <h2>ประกันแต่ละชั้นต่างกันอย่างไร คุ้มครองอะไรบ้าง</h2>
      <p>ก่อนตัดสินใจซื้อหรือต่อประกัน ควรรู้ก่อนว่าแต่ละชั้นให้ความคุ้มครองต่างกันตรงไหน เพื่อเลือกให้เหมาะกับการใช้งานและงบประมาณ</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">ครอบคลุมทุกกรณี เหมาะกับรถใหม่หรือรถที่ใช้งานบ่อย</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">สูงสุด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองใกล้เคียงชั้น 1 ในราคาที่ประหยัดกว่า</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ปานกลาง-สูง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2</h3>
        </div>
        <p class="coverage-card-tag">เน้นคุ้มครองรถหายและไฟไหม้ ไม่คุ้มครองอุบัติเหตุที่ตัวรถ</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ปานกลาง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองกรณีมีคู่กรณี พร้อมบริการรถยกส่วนใหญ่</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ปานกลาง-ประหยัด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3</h3>
        </div>
        <p class="coverage-card-tag">ราคาประหยัดสุด คุ้มครองเฉพาะบุคคลภายนอก</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ประหยัดสุด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>พ.ร.บ.</h3>
          <span class="coverage-card-badge alt">ภาคบังคับ</span>
        </div>
        <p class="coverage-card-tag">ประกันภาคบังคับ รถทุกคันต้องมี — <a href="<?php echo esc_url( home_url( '/car-insurance/compulsory-car-insurance/' ) ); ?>">ดูรายละเอียด พ.ร.บ. เต็ม ๆ</a></p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ต่ำสุด (ภาคบังคับ)</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      เงื่อนไขความคุ้มครองจริงอาจแตกต่างกันในแต่ละบริษัทประกัน หากไม่แน่ใจว่าควรเลือกชั้นไหน ให้เราช่วยประเมินตามลักษณะการใช้รถของคุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">ประกันรถยนต์ คือหลักประกันทางการเงินที่ช่วยดูแลค่าใช้จ่ายเมื่อเกิดอุบัติเหตุ การโจรกรรม หรือเหตุการณ์ไม่คาดคิดอื่น ๆ กับตัวรถหรือบุคคลภายนอก แบ่งเป็นภาคบังคับ (พ.ร.บ.) ที่กฎหมายกำหนดให้รถทุกคันต้องมี และภาคสมัครใจซึ่งแบ่งย่อยเป็นชั้น 1, 2+, 2, 3+ และ 3 ตามขอบเขตความคุ้มครอง เราช่วยเปรียบเทียบแผนจากหลายบริษัทให้ตรงกับลักษณะการใช้รถและงบประมาณของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ตามกฎหมาย รถทุกคันที่จดทะเบียนต้องมี พ.ร.บ. ส่วนประกันภาคสมัครใจไม่ได้บังคับตามกฎหมาย แต่ช่วยป้องกันความเสี่ยงทางการเงินในส่วนที่ พ.ร.บ. ไม่ครอบคลุม เช่น ความเสียหายต่อทรัพย์สินของคู่กรณีหรือความเสียหายต่อรถของคุณเอง จึงยังแนะนำให้มีความคุ้มครองภาคสมัครใจอย่างน้อยระดับพื้นฐานติดไว้</p>
    </div>

    <p>ความคุ้มครองของประกันรถยนต์แบ่งเป็นระดับชั้นตามขอบเขตที่คุ้มครอง ตั้งแต่กว้างที่สุดไปจนถึงคุ้มครองเฉพาะบุคคลภายนอก ดูตารางเปรียบเทียบด้านบน หรืออ่านรายละเอียดแยกตามหมวดด้านล่าง</p>

    <h3>คุ้มครองตัวรถของคุณ</h3>
    <p>ครอบคลุมความเสียหายต่อรถของคุณเอง ขึ้นอยู่กับชั้นประกันที่เลือก</p>
    <ul>
      <li>อุบัติเหตุและการชน — ค่าซ่อมรถเมื่อชนกับรถคันอื่นหรือวัตถุอื่น</li>
      <li>การชนแล้วหนี — คุ้มครองแม้ระบุคู่กรณีไม่ได้ (เฉพาะชั้นที่คุ้มครองกรณีไม่มีคู่กรณี)</li>
      <li>การโจรกรรม และไฟไหม้</li>
      <li>ภัยธรรมชาติ เช่น น้ำท่วม</li>
      <li>กระจกรถยนต์ — ค่าซ่อมหรือเปลี่ยนกระจกที่เสียหาย</li>
    </ul>

    <h3>คุ้มครองบุคคลภายนอก</h3>
    <p>คุ้มครองความรับผิดทางการเงิน หากคุณก่อให้เกิดความเสียหายต่อผู้อื่น</p>
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/car-insurance/compulsory-car-insurance/' ) ); ?>">พ.ร.บ.</a> คุ้มครองการบาดเจ็บและเสียชีวิตของบุคคลภายนอก แต่ไม่คุ้มครองทรัพย์สิน</li>
      <li>ภาคสมัครใจคุ้มครองทั้งทรัพย์สินและการบาดเจ็บของบุคคลภายนอกเพิ่มเติมจาก พ.ร.บ.</li>
    </ul>

    <h3>ความคุ้มครองเพิ่มเติม (ภาคสมัครใจ)</h3>
    <p>มักรวมอยู่ในกรมธรรม์ภาคสมัครใจทุกชั้น เงื่อนไขจริงควรตรวจสอบกับบริษัทประกัน</p>
    <ul>
      <li>ค่ารักษาพยาบาลของคุณและผู้โดยสารในรถ</li>
      <li>ประกันอุบัติเหตุส่วนบุคคล — คุ้มครองบาดเจ็บ ทุพพลภาพ หรือเสียชีวิตจากอุบัติเหตุ</li>
      <li>ค่าประกันตัวผู้ขับขี่ตามวงเงินที่ระบุในกรมธรรม์</li>
    </ul>

    <h3>ตารางเปรียบเทียบความคุ้มครอง</h3>
    <div class="coverage-matrix-legend">
      <span><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> คุ้มครอง</span>
      <span><span class="cm-no">–</span> ไม่คุ้มครอง</span>
      <span>คอลัมน์ไฮไลต์ = ชั้น 1 (คุ้มครองกว้างที่สุด)</span>
    </div>
    <div class="table-scroll">
      <table class="coverage-matrix">
        <thead>
          <tr>
            <th class="coverage-matrix-label">ความคุ้มครอง</th>
            <th>ชั้น 1</th>
            <th>ชั้น 2+</th>
            <th>ชั้น 2</th>
            <th>ชั้น 3+</th>
            <th>ชั้น 3</th>
            <th>พ.ร.บ.</th>
          </tr>
        </thead>
        <tbody>
          <tr class="coverage-matrix-group"><td colspan="7">คุ้มครองตัวรถ</td></tr>
          <tr>
            <td class="coverage-matrix-label">การชนแบบไม่มีคู่กรณี</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">การชนแบบมีคู่กรณี</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">กระจกรถยนต์</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">บริการรถยก</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">การโจรกรรม</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ไฟไหม้รถ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">น้ำท่วม</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ภัยธรรมชาติอื่น ๆ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr class="coverage-matrix-group"><td colspan="7">คุ้มครองบุคคลภายนอก</td></tr>
          <tr>
            <td class="coverage-matrix-label">ทรัพย์สินของบุคคลภายนอก</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">การบาดเจ็บ/เสียชีวิตของบุคคลภายนอก</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr class="coverage-matrix-group"><td colspan="7">ความคุ้มครองเพิ่มเติม</td></tr>
          <tr>
            <td class="coverage-matrix-label">ค่ารักษาพยาบาล</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ประกันอุบัติเหตุส่วนบุคคล</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ค่าประกันตัวผู้ขับขี่</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">การชดเชยรายได้</td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="coverage-matrix-note">สรุปจากเงื่อนไขความคุ้มครองมาตรฐานที่ใช้ทั่วไปในตลาด รายละเอียดที่แน่นอนอาจแตกต่างกันไปตามแต่ละบริษัทและแผน ควรตรวจสอบก่อนตัดสินใจซื้อเสมอ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันรถยนต์</h3>
    <ol>
      <li>ข้อมูลของรถ — ประเภท อายุ และมูลค่ารถ รวมถึงความถี่และวัตถุประสงค์ในการใช้งาน</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม ผู้ขับขี่มือใหม่มักมีความเสี่ยงสูงกว่า</li>
      <li>พื้นที่ใช้งานและที่จอดรถ — พื้นที่เสี่ยงสูงหรือไม่มีที่จอดปลอดภัยอาจมีผลต่อเบี้ย</li>
      <li>ระดับความคุ้มครองที่เลือก และบริการเสริมที่เพิ่มเข้าไป เช่น ช่วยเหลือฉุกเฉินบนถนน</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับแต่ละบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถยนต์</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต เลขไมล์ปัจจุบัน และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
      <li><span class="plan-name">ข้อมูลการใช้งานรถ</span><span class="plan-desc">ความถี่และวัตถุประสงค์ในการใช้รถ เช่น ใช้งานประจำวันหรือใช้งานเชิงพาณิชย์</span></li>
    </ul>

    <h3>เคล็ดลับเปรียบเทียบประกันรถยนต์</h3>
    <ul>
      <li>เทียบความคุ้มค่าระหว่างเบี้ยประกันกับความคุ้มครองที่ได้รับ ไม่ใช่ดูแค่ราคาถูกที่สุด</li>
      <li>เลือกกรมธรรม์ที่ปรับแต่งความคุ้มครองให้ตรงกับความต้องการเฉพาะของคุณได้</li>
      <li>เลือกชั้นประกันให้เหมาะกับมูลค่าและลักษณะการใช้งานจริงของรถ เช่น รถใหม่มูลค่าสูงเหมาะกับชั้น 1</li>
      <li>ผู้ขับขี่มือใหม่ควรพิจารณาความคุ้มครองที่ครอบคลุมมากขึ้น เนื่องจากมีความเสี่ยงสูงกว่า</li>
      <li>ให้ข้อมูลตามจริงกับบริษัทประกันเสมอ เพื่อไม่ให้มีปัญหาตอนเคลม</li>
      <li>อ่านเงื่อนไขกรมธรรม์อย่างละเอียดก่อนตัดสินใจซื้อทุกครั้ง</li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามรถหรือลักษณะการใช้งานแต่ละราย ให้เราช่วยเสนอราคาที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>ประกันรถยนต์ชั้น 1, 2+, 2, 3+, 3 ต่างกันอย่างไร?</h3>
        <p>ต่างกันที่ขอบเขตความคุ้มครอง ชั้น 1 คุ้มครองกว้างที่สุดรวมถึงกรณีไม่มีคู่กรณี ส่วนชั้นอื่น ๆ จะจำกัดเงื่อนไขมากขึ้นตามลำดับ ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>ประกันภัยรถยนต์ภาคสมัครใจสำคัญแค่ไหน ถ้ามี พ.ร.บ. อยู่แล้ว?</h3>
        <p>พ.ร.บ. คุ้มครองเฉพาะการบาดเจ็บและเสียชีวิตของบุคคลภายนอกเท่านั้น ไม่คุ้มครองทรัพย์สินของคู่กรณีหรือความเสียหายต่อรถของคุณเอง หากคุณเป็นฝ่ายผิดจะต้องรับผิดชอบส่วนนี้เอง ภาคสมัครใจจึงช่วยปิดความเสี่ยงส่วนที่ พ.ร.บ. ไม่ครอบคลุม</p>
      </div>
      <div class="faq-item">
        <h3>พ.ร.บ. รวมอยู่ในประกันภาคสมัครใจหรือไม่?</h3>
        <p>ไม่ กรมธรรม์ พ.ร.บ. แยกออกจากกรมธรรม์ภาคสมัครใจเสมอ ต้องซื้อทั้งสองฉบับแยกกัน แม้จะซื้อพร้อมกันในคราวเดียวได้</p>
      </div>
      <div class="faq-item">
        <h3>ประกันภัยรถยนต์มีค่าใช้จ่ายเท่าไหร่?</h3>
        <p>เบี้ยประกันแตกต่างกันไปตามประเภทรถ ประวัติการขับขี่ ระดับความคุ้มครอง และบริษัทประกัน ไม่มีราคาตายตัว ควรขอใบเสนอราคาเพื่อเปรียบเทียบให้ตรงกับรถและความต้องการของคุณโดยเฉพาะ</p>
      </div>
      <div class="faq-item">
        <h3>มีวิธีลดเบี้ยประกันภัยรถยนต์อย่างไรบ้าง?</h3>
        <p>รักษาประวัติการขับขี่ที่ดี เลือกค่าเสียหายส่วนแรกที่สูงขึ้น พิจารณาแผนระบุชื่อผู้ขับขี่ หรือติดตั้งกล้องหน้ารถ ทั้งนี้ส่วนลดและเงื่อนไขที่แน่นอนขึ้นอยู่กับแต่ละบริษัท</p>
      </div>
      <div class="faq-item">
        <h3>ประกันภัยรถยนต์ไม่คุ้มครองอะไรบ้าง?</h3>
        <p>ข้อยกเว้นทั่วไปมักรวมถึงความเสียหายที่เกิดขึ้นโดยเจตนา การเสื่อมสภาพตามปกติ การใช้รถส่วนตัวเพื่อการพาณิชย์โดยไม่แจ้ง ผู้ขับขี่ที่ไม่ได้ระบุในกรมธรรม์ และการแข่งขันความเร็ว รายละเอียดที่แน่นอนควรตรวจสอบในกรมธรรม์ของแต่ละบริษัท</p>
      </div>
      <div class="faq-item">
        <h3>ไม่ค่อยได้ขับรถ ยังต้องทำประกันภัยรถยนต์ไหม?</h3>
        <p>พ.ร.บ. ยังจำเป็นตามกฎหมายสำหรับรถที่จดทะเบียนทุกคัน ส่วนภาคสมัครใจยังมีประโยชน์แม้ไม่ค่อยได้ขับ เพราะคุ้มครองความเสี่ยงอื่น เช่น การโจรกรรมหรือไฟไหม้ขณะจอด</p>
      </div>
    </div>

    <h2>คำศัพท์ทั่วไปเกี่ยวกับประกันรถยนต์</h2>
    <ul>
      <li><strong>ค่าเสียหายส่วนแรก (Excess):</strong> จำนวนเงินที่คุณต้องจ่ายเองก่อนที่ความคุ้มครองจะเริ่มจ่าย การเลือกค่าเสียหายส่วนแรกที่สูงขึ้นมักทำให้เบี้ยประกันลดลง</li>
      <li><strong>เบี้ยประกัน:</strong> จำนวนเงินที่จ่ายเพื่อซื้อความคุ้มครองตามกรมธรรม์ โดยทั่วไปจ่ายเป็นรายปีหรือแบ่งชำระเป็นงวด</li>
      <li><strong>ความรับผิดต่อบุคคลภายนอก:</strong> ความรับผิดชอบทางการเงินสำหรับความเสียหายหรือการบาดเจ็บที่คุณก่อให้เกิดกับผู้อื่น ไม่ครอบคลุมรถหรือการบาดเจ็บของตัวคุณเอง</li>
      <li><strong>ส่วนลดประวัติดี (NCB):</strong> ส่วนลดเบี้ยประกันสำหรับปีที่ไม่มีการเรียกร้องค่าสินไหมทดแทน อัตราส่วนลดที่แน่นอนกำหนดโดยแต่ละบริษัท</li>
    </ul>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/mun-lamert/' ) ); ?>">มูลละเมิดคืออะไร หากรถโดนชน</a>
        ·
        <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>">เปรียบเทียบบริษัทประกันภัยที่เราแนะนำ</a>
      </span>
    </div>

    <a href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้ารวมประกันภัยทั้งหมด
    </a>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="co-cta">
  <div class="container">
    <h2>สนใจประกันรถยนต์หรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่เหมาะกับคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
