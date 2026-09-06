<?php
/**
 * Template for the /car-insurance/viriyah-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถยนต์ วิริยะประกันภัย",
  "name": "ประกันรถยนต์ วิริยะประกันภัย",
  "description": "เปรียบเทียบแผนประกันรถยนต์วิริยะประกันภัย ชั้น 1, 2+, 2, 3+, 3, 4 และ พ.ร.บ. พร้อมจุดเด่นเครือข่ายอู่ซ่อมในเครือ จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/car-insurance/viriyah-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 4, "name": "วิริยะประกันภัย", "item": "<?php echo esc_url( home_url( '/car-insurance/viriyah-insurance/' ) ); ?>" }
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
      "name": "วิริยะประกันภัยมีแผนประกันรถยนต์อะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "วิริยะประกันภัยมีให้เลือกหลายชั้นความคุ้มครอง ได้แก่ ชั้น 1, ชั้น 2+, ชั้น 2, ชั้น 3+, ชั้น 3, ชั้น 4 (แผนคุ้มครองทรัพย์สินบุคคลภายนอกเสริมจาก พ.ร.บ.) และ พ.ร.บ. ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ" }
    },
    {
      "@type": "Question",
      "name": "ชั้น 4 ของวิริยะประกันภัยคุ้มครองอะไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "ตามข้อมูลที่บริษัทเผยแพร่ ชั้น 4 เป็นแผนความคุ้มครองทรัพย์สินของบุคคลภายนอกเพิ่มเติมจาก พ.ร.บ. ในราคาที่สูงกว่า พ.ร.บ. เพียงเล็กน้อย เหมาะกับผู้ที่ต้องการความคุ้มครองพื้นฐานเพิ่มขึ้นโดยไม่เสียเบี้ยมาก รายละเอียดวงเงินและเงื่อนไขที่แน่นอนควรตรวจสอบกับเราหรือบริษัทโดยตรง เนื่องจากเงื่อนไขผลิตภัณฑ์อาจมีการปรับปรุงเป็นระยะ" }
    },
    {
      "@type": "Question",
      "name": "เคลมกับวิริยะต้องรอนานไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ด้วยเครือข่ายอู่ในเครือที่กว้างและทีมสำรวจภัยจำนวนมาก โดยทั่วไปการนัดสำรวจความเสียหายมักทำได้รวดเร็ว แต่ระยะเวลาที่แน่นอนขึ้นอยู่กับความซับซ้อนของแต่ละเคส ให้เราช่วยติดตามความคืบหน้าให้ได้" }
    },
    {
      "@type": "Question",
      "name": "มีแผนสำหรับรถที่ใช้งานเป็นแท็กซี่หรือรถรับจ้างไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "บริษัทมีแผนความคุ้มครองสำหรับรถที่ใช้งานเชิงพาณิชย์แยกต่างหาก เงื่อนไขและเบี้ยจะต่างจากรถใช้งานส่วนบุคคล แนะนำให้แจ้งลักษณะการใช้งานจริงกับเราเพื่อขอใบเสนอราคาที่ตรงกับประเภทรถ" }
    },
    {
      "@type": "Question",
      "name": "วิริยะประกันภัยมีบริการช่วยเหลือฉุกเฉินบนท้องถนนไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "มี บริษัทมีบริการช่วยเหลือฉุกเฉินบนท้องถนนและสายด่วนให้บริการ รายละเอียดเงื่อนไขการใช้บริการควรตรวจสอบตามกรมธรรม์ที่ซื้อ เนื่องจากอาจแตกต่างกันไปตามแต่ละแผน" }
    },
    {
      "@type": "Question",
      "name": "ซื้อประกันรถยนต์วิริยะผ่านที่ปรึกษาต่างจากซื้อตรงกับบริษัทอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "ความคุ้มครองตามกรมธรรม์เหมือนกัน แต่การซื้อผ่านนายหน้าหรือที่ปรึกษาช่วยให้คุณเปรียบเทียบแผนของวิริยะกับบริษัทอื่นได้ในคราวเดียว และมีคนช่วยประสานงานหากมีปัญหาระหว่างการเคลม โดยไม่มีค่าใช้จ่ายเพิ่มเติมจากเบี้ยประกันปกติ" }
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
      <span class="current">วิริยะประกันภัย</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      วิริยะประกันภัย
    </span>
    <h1>ประกันรถยนต์ วิริยะประกันภัย</h1>
    <p>เปรียบเทียบแผนประกันรถยนต์วิริยะประกันภัยทุกชั้น พร้อมจุดเด่นเครือข่ายอู่ซ่อมในเครือที่กระจายอยู่ทั่วประเทศ ให้เราช่วยเปรียบเทียบกับบริษัทอื่นก่อนตัดสินใจ</p>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แผนความคุ้มครองของวิริยะประกันภัย
      </span>
      <h2>วิริยะประกันภัยมีแผนอะไรให้เลือกบ้าง</h2>
      <p>นอกจากชั้น 1, 2+, 2, 3+, 3 และ พ.ร.บ. ที่เป็นมาตรฐานทั่วไป วิริยะประกันภัยยังมีชั้น 4 ซึ่งเป็นแผนเฉพาะของบริษัทให้เลือกเพิ่มเติม</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">คุ้มครองครบทุกกรณี ทั้งมีคู่กรณีและไม่มีคู่กรณี รวมไฟไหม้ รถหาย และน้ำท่วม</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้ / น้ำท่วม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">รถใหม่ / ใช้งานบ่อย</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองใกล้เคียงชั้น 1 แต่ไม่คุ้มครองกรณีไม่มีคู่กรณี เบี้ยประหยัดกว่า</p>
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
          <h3>ชั้น 2</h3>
        </div>
        <p class="coverage-card-tag">เน้นคุ้มครองรถหายและไฟไหม้ ไม่คุ้มครองอุบัติเหตุที่ตัวรถ</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเองจากการชน</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">งบประหยัด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองกรณีมีคู่กรณีเป็นยานพาหนะทางบก ไม่คุ้มครองรถหายหรือไฟไหม้</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ชนกับยานพาหนะทางบกที่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">งบประหยัด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองเฉพาะบุคคลภายนอก ราคาประหยัดสุดในกลุ่มภาคสมัครใจ</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อตัวรถของคุณ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความรับผิดต่อบุคคลภายนอก (ชีวิต/ทรัพย์สิน)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">ประหยัดสุด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 4</h3>
          <span class="coverage-card-badge alt">เฉพาะของวิริยะ</span>
        </div>
        <p class="coverage-card-tag">แผนเฉพาะที่วิริยะเสนอเพิ่มจาก พ.ร.บ. เน้นทรัพย์สินบุคคลภายนอกในราคาประหยัด</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อตัวรถของคุณ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ทรัพย์สินของบุคคลภายนอก (ตามที่บริษัทระบุ)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">เสริมจาก พ.ร.บ. ในราคาประหยัด</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายละเอียดความคุ้มครอง วงเงิน และเบี้ยประกันที่แน่นอนอาจมีการปรับปรุงเป็นระยะและแตกต่างกันตามประเภทรถ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันจากวิริยะประกันภัยให้คุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">วิริยะประกันภัย เป็นหนึ่งในบริษัทประกันวินาศภัยรายใหญ่ของไทย จุดเด่นที่ลูกค้าพูดถึงบ่อยที่สุดคือเครือข่ายอู่ซ่อมในเครือที่กระจายอยู่แทบทุกจังหวัด ทำให้การนำรถเข้าซ่อมหลังเกิดอุบัติเหตุทำได้สะดวก ไม่ว่าจะอยู่ในกรุงเทพฯ หรือต่างจังหวัด บริษัทมีแผนประกันรถยนต์ภาคสมัครใจให้เลือกครบตั้งแต่ชั้น 1 ถึงชั้น 4 รวมถึง พ.ร.บ. เราช่วยเปรียบเทียบแผนของวิริยะกับบริษัทอื่นให้เหมาะกับลักษณะการใช้รถและงบประมาณของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>บทความนี้เป็นข้อมูลเบื้องต้นเกี่ยวกับผลิตภัณฑ์ของวิริยะประกันภัยเพื่อการเปรียบเทียบ ไม่ได้หมายความว่าเราแนะนำให้ซื้อกับวิริยะเพียงบริษัทเดียว ดู<a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>">การเปรียบเทียบบริษัทประกันภัยอื่นที่เราแนะนำ</a>ประกอบการตัดสินใจด้วย</p>
    </div>

    <h3>จุดเด่นของวิริยะประกันภัย</h3>
    <ul>
      <li>เครือข่ายอู่ซ่อมในเครือกระจายอยู่ทั่วทุกจังหวัด สะดวกไม่ว่าเกิดเหตุที่ไหน</li>
      <li>ทีมสำรวจภัยจำนวนมาก ช่วยให้การนัดสำรวจความเสียหายทำได้รวดเร็วในหลายกรณี</li>
      <li>มีบริการช่วยเหลือฉุกเฉินบนท้องถนนและสายด่วนให้บริการ</li>
      <li>มีแผนความคุ้มครองให้เลือกหลากหลาย ตั้งแต่ชั้น 1 ถึงชั้น 4 ครอบคลุมงบประมาณหลายระดับ</li>
    </ul>

    <h3>ชั้น 4 คืออะไร</h3>
    <p>ชั้น 4 เป็นแผนความคุ้มครองที่วิริยะประกันภัยเสนอเพิ่มเติมนอกเหนือจากชั้นความคุ้มครองมาตรฐานทั่วไปในตลาด โดยเน้นคุ้มครองทรัพย์สินของบุคคลภายนอกในราคาที่สูงกว่า พ.ร.บ. เพียงเล็กน้อย เหมาะกับผู้ที่ต้องการความคุ้มครองเพิ่มเติมจาก พ.ร.บ. โดยไม่ต้องการจ่ายเบี้ยสูงเท่าชั้น 1-3+ รายละเอียดวงเงินคุ้มครองที่แน่นอนควรสอบถามกับเราหรือบริษัทโดยตรง เนื่องจากเงื่อนไขผลิตภัณฑ์อาจมีการปรับปรุงเป็นระยะ</p>

    <h3>บริการเสริมและช่องทางติดต่อ</h3>
    <p>นอกจากความคุ้มครองตามกรมธรรม์ วิริยะประกันภัยยังมีบริการเสริม เช่น บริการช่วยเหลือฉุกเฉินบนท้องถนน ระบบตรวจสอบกรมธรรม์ และช่องทางแจ้งเคลมหลายรูปแบบ ทั้งผ่านตัวแทน นายหน้า และสายด่วนของบริษัท หากซื้อผ่านเรา คุณจะมีที่ปรึกษาช่วยประสานงานตลอดกระบวนการโดยไม่มีค่าใช้จ่ายเพิ่มเติมจากเบี้ยประกันปกติ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันวิริยะ</h3>
    <ol>
      <li>ข้อมูลของรถ — ประเภท อายุ และมูลค่ารถ รวมถึงลักษณะการใช้งาน (ส่วนตัว/เชิงพาณิชย์ เช่น แท็กซี่หรือรถรับจ้าง)</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม</li>
      <li>ชั้นความคุ้มครองที่เลือก ตั้งแต่ชั้น 1 ถึงชั้น 4</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับเงื่อนไขของบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถยนต์</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
      <li><span class="plan-name">ลักษณะการใช้งานรถ</span><span class="plan-desc">ใช้งานส่วนตัวหรือเชิงพาณิชย์ เช่น แท็กซี่หรือรถรับจ้าง</span></li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่ตัวแทนหรือพนักงานของวิริยะประกันภัย</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปและมีการปรับปรุงเป็นระยะ ให้เราช่วยขอใบเสนอราคาที่เป็นปัจจุบันและเปรียบเทียบกับบริษัทอื่นให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์วิริยะ</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>วิริยะประกันภัยมีแผนประกันรถยนต์อะไรบ้าง?</h3>
        <p>วิริยะประกันภัยมีให้เลือกหลายชั้นความคุ้มครอง ได้แก่ ชั้น 1, ชั้น 2+, ชั้น 2, ชั้น 3+, ชั้น 3, ชั้น 4 (แผนคุ้มครองทรัพย์สินบุคคลภายนอกเสริมจาก พ.ร.บ.) และ พ.ร.บ. ควรเลือกตามลักษณะการใช้รถและงบประมาณของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>ชั้น 4 ของวิริยะประกันภัยคุ้มครองอะไร?</h3>
        <p>ตามข้อมูลที่บริษัทเผยแพร่ ชั้น 4 เป็นแผนความคุ้มครองทรัพย์สินของบุคคลภายนอกเพิ่มเติมจาก พ.ร.บ. ในราคาที่สูงกว่า พ.ร.บ. เพียงเล็กน้อย เหมาะกับผู้ที่ต้องการความคุ้มครองพื้นฐานเพิ่มขึ้นโดยไม่เสียเบี้ยมาก รายละเอียดวงเงินและเงื่อนไขที่แน่นอนควรตรวจสอบกับเราหรือบริษัทโดยตรง เนื่องจากเงื่อนไขผลิตภัณฑ์อาจมีการปรับปรุงเป็นระยะ</p>
      </div>
      <div class="faq-item">
        <h3>เคลมกับวิริยะต้องรอนานไหม?</h3>
        <p>ด้วยเครือข่ายอู่ในเครือที่กว้างและทีมสำรวจภัยจำนวนมาก โดยทั่วไปการนัดสำรวจความเสียหายมักทำได้รวดเร็ว แต่ระยะเวลาที่แน่นอนขึ้นอยู่กับความซับซ้อนของแต่ละเคส ให้เราช่วยติดตามความคืบหน้าให้ได้</p>
      </div>
      <div class="faq-item">
        <h3>มีแผนสำหรับรถที่ใช้งานเป็นแท็กซี่หรือรถรับจ้างไหม?</h3>
        <p>บริษัทมีแผนความคุ้มครองสำหรับรถที่ใช้งานเชิงพาณิชย์แยกต่างหาก เงื่อนไขและเบี้ยจะต่างจากรถใช้งานส่วนบุคคล แนะนำให้แจ้งลักษณะการใช้งานจริงกับเราเพื่อขอใบเสนอราคาที่ตรงกับประเภทรถ</p>
      </div>
      <div class="faq-item">
        <h3>วิริยะประกันภัยมีบริการช่วยเหลือฉุกเฉินบนท้องถนนไหม?</h3>
        <p>มี บริษัทมีบริการช่วยเหลือฉุกเฉินบนท้องถนนและสายด่วนให้บริการ รายละเอียดเงื่อนไขการใช้บริการควรตรวจสอบตามกรมธรรม์ที่ซื้อ เนื่องจากอาจแตกต่างกันไปตามแต่ละแผน</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อประกันรถยนต์วิริยะผ่านที่ปรึกษาต่างจากซื้อตรงกับบริษัทอย่างไร?</h3>
        <p>ความคุ้มครองตามกรมธรรม์เหมือนกัน แต่การซื้อผ่านนายหน้าหรือที่ปรึกษาช่วยให้คุณเปรียบเทียบแผนของวิริยะกับบริษัทอื่นได้ในคราวเดียว และมีคนช่วยประสานงานหากมีปัญหาระหว่างการเคลม โดยไม่มีค่าใช้จ่ายเพิ่มเติมจากเบี้ยประกันปกติ</p>
      </div>
    </div>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/insurance-companies/viriyah/' ) ); ?>">โปรไฟล์เต็มของวิริยะประกันภัย</a>
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
    <h2>สนใจประกันรถยนต์วิริยะหรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยขอใบเสนอราคาจากวิริยะและเปรียบเทียบกับบริษัทอื่นให้คุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
