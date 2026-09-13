<?php
/**
 * Template for the /car-insurance/viriyah-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
// Keep the Thai display name scoped to this page, including shared chrome and SEO.
$kudhai_viriyah_display_name = static function () {
	return 'คัดให้ ที่ปรึกษาประกันภัย';
};
add_filter( 'option_blogname', $kudhai_viriyah_display_name );
ob_start();
get_header();
$kudhai_viriyah_header = ob_get_clean();
// Preserve the LINE destination while using a Thai contact label on this page.
echo str_replace( 'LINE ID: ' . esc_html( kudhai_get_line_id() ), 'LINE: คัดให้', $kudhai_viriyah_header );
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "บริการให้คำปรึกษาและเปรียบเทียบประกันภัย",
  "name": "แนะนำวิริยะประกันภัยและให้คำปรึกษาการเลือกแผน โดย คัดให้",
  "description": "รู้จักวิริยะประกันภัยและที่มาบริษัท พร้อมประกันรถยนต์ชั้น 1, 2, 2+, 3+, 3, พ.ร.บ. และ EV รวมถึงประกันอุบัติเหตุ บ้าน และเดินทาง โดย คัดให้",
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
      "name": "วิริยะประกันภัยคือบริษัทอะไร และเริ่มต้นเมื่อใด?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "วิริยะเป็นบริษัทประกันวินาศภัยของไทย เริ่มจดทะเบียนวันที่ 3 กุมภาพันธ์ 2490 ในชื่อบริษัท อาเซียพาณิชยการ จำกัด และต่อมาจดทะเบียนเป็นบริษัทมหาชนในปี 2555"
      }
    },
    {
      "@type": "Question",
      "name": "วิริยะมีประกันรถยนต์ประเภทใดบ้าง?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "หน้านี้สรุปชั้น 1, 2, 2+, 3+, พ.ร.บ. และชั้น 3 โดยแต่ละประเภทคุ้มครองต่างกัน ควรตรวจตารางความคุ้มครองและเงื่อนไขของแผนก่อนเลือก"
      }
    },
    {
      "@type": "Question",
      "name": "ประกันรถยนต์ไฟฟ้า EV ชั้น 1 คุ้มครองไฟไหม้ขณะชาร์จหรือไม่?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "หน้าผลิตภัณฑ์ EV ชั้น 1 ของวิริยะระบุความคุ้มครองไฟไหม้ขณะจอดชาร์จแบตเตอรี่ตามเงื่อนไขกรมธรรม์ ควรตรวจทุนประกันและเอกสารแนบท้ายของรถรุ่นที่เสนอราคาโดยเฉพาะ"
      }
    },
    {
      "@type": "Question",
      "name": "นอกจากรถยนต์ วิริยะมีประกันอะไรอีกบ้าง?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ตัวอย่างที่แนะนำในหน้านี้คือ PA ออลเจนและ PA อุ่นใจบิ้วตี้แคร์สำหรับอุบัติเหตุ บ้านเปี่ยมสุขสำหรับที่อยู่อาศัย และ V-Travel Comprehensive สำหรับการเดินทางต่างประเทศ แต่ละผลิตภัณฑ์มีคุณสมบัติและเงื่อนไขแยกกัน"
      }
    },
    {
      "@type": "Question",
      "name": "ติดต่อ คัดให้ แล้วถือว่าซื้อประกันสำเร็จหรือยัง?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "การติดต่อ คัดให้ เป็นการขอคำปรึกษาหรือให้ช่วยตรวจสอบแผนที่เสนอได้ การรับประกันและวันเริ่มคุ้มครองต้องได้รับการยืนยันจากบริษัทประกันภัยตามเอกสารที่ออกให้"
      }
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
    <h1>วิริยะประกันภัย<br>ประกันรถยนต์และความคุ้มครองสำหรับคุณ</h1>
    <p>คัดให้ช่วยคุณรู้จักแผนประกันรถยนต์และ EV ของวิริยะ พร้อมตัวเลือกดูแลอุบัติเหตุ บ้าน และการเดินทาง</p>
    <div class="cta-row">
      <a href="#type-coverage" class="btn btn-primary">ดูประกันรถยนต์</a>
      <a href="#viriyah-faq" class="btn btn-ghost">คำถามที่พบบ่อย</a>
    </div>
  </div>
</section>

<!-- ============ COMPANY OVERVIEW ============ -->
<section class="intro" id="viriyah-overview">
  <div class="container">
    <div class="section-head">
      <span class="tab">รู้จักวิริยะประกันภัย</span>
      <h2>บริษัทประกันวินาศภัยของไทย</h2>
      <p>วิริยะเริ่มดำเนินธุรกิจในชื่อบริษัท อาเซียพาณิชยการ จำกัด ตั้งแต่ปี 2490 โดยรับประกันอัคคีภัยและการขนส่ง ก่อนขยายสู่ประกันรถยนต์และผลิตภัณฑ์อื่น ปัจจุบันดำเนินงานในชื่อบริษัท วิริยะประกันภัย จำกัด (มหาชน)</p>
    </div>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        ประกันภัยรถยนต์
      </span>
      <h2>ประกันภัยรถยนต์: เลือกชั้นให้ตรงกับความเสี่ยง</h2>
      <p>ดูว่าต้องการคุ้มครองรถของคุณด้วยหรือเน้นความรับผิดต่อผู้อื่น แล้วให้เราช่วยตรวจเงื่อนไขของแผนที่สนใจ</p>
    </div>

    <div class="coverage-grid">
      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
        </div>
        <p class="coverage-card-tag">ดูแลทั้งรถของคุณและความรับผิดต่อผู้อื่น</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อตัวรถตามเงื่อนไข</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>รถสูญหายและไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ชีวิต ร่างกาย และทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">จุดที่ควรเช็ก</div>
          <div class="value">แผนซ่อมและค่าเสียหายส่วนแรก</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2</h3>
        </div>
        <p class="coverage-card-tag">เน้นความรับผิดต่อผู้อื่น รวมรถหายและไฟไหม้</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>การชนทั่วไปนอกหมวดรถสูญหายและไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>รถสูญหายและไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความรับผิดต่อบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">จุดที่ควรเช็ก</div>
          <div class="value">ความเสี่ยงค่าซ่อมที่ต้องรับเอง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 2+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองรถชนกับยานพาหนะทางบก รวมรถหายและไฟไหม้</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อตัวรถจากการชนตามเงื่อนไข</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>รถสูญหายและไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความรับผิดต่อบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">จุดที่ควรเช็ก</div>
          <div class="value">เงื่อนไขการชนและการระบุคู่กรณี</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3+</h3>
        </div>
        <p class="coverage-card-tag">เพิ่มความคุ้มครองรถชนกับยานพาหนะทางบกจากชั้น 3</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อตัวรถจากการชนตามเงื่อนไข</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>รถสูญหายและไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความรับผิดต่อบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">จุดที่ควรเช็ก</div>
          <div class="value">เงื่อนไขการชนและทุนประกัน</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>พ.ร.บ.</h3>
        </div>
        <p class="coverage-card-tag">ประกันภาคบังคับสำหรับผู้ประสบภัยจากรถ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลจากการบาดเจ็บ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>เสียชีวิต สูญเสียอวัยวะ หรือทุพพลภาพตามเกณฑ์</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">จุดที่ควรเช็ก</div>
          <div class="value">สิทธิและวงเงินของผู้ประสบภัยแต่ละกรณี</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3</h3>
        </div>
        <p class="coverage-card-tag">เน้นความรับผิดเมื่อคุณทำให้บุคคลภายนอกเสียหาย</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อตัวรถของคุณ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ชีวิตและร่างกายบุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ทรัพย์สินบุคคลภายนอก</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">จุดที่ควรเช็ก</div>
          <div class="value">วงเงินความรับผิดต่อผู้อื่น</div>
        </div>
      </div>
    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      พ.ร.บ. ดูแลผู้ประสบภัยจากรถตามเกณฑ์ที่กำหนด ควรตรวจสิทธิแต่ละกรณีแยกจากภาคสมัครใจ ความคุ้มครองจริงขึ้นอยู่กับตารางกรมธรรม์ ข้อยกเว้น และเอกสารแนบท้ายของแผน
    </div>
  </div>
</section>

<!-- ============ MOTOR DETAILS ============ -->
<section class="intro" id="viriyah-ev">
  <div class="container">
    <div class="section-head">
      <span class="tab">ประกันภัยรถยนต์ · EV</span>
      <h2>รถยนต์ไฟฟ้า ดูความคุ้มครองให้ตรงรุ่น</h2>
      <p>EV ชั้น 1 ของวิริยะระบุความคุ้มครองตัวรถ น้ำท่วม สูญหาย ไฟไหม้ และความรับผิดต่อบุคคลภายนอก ตามทุนประกันและเงื่อนไขของแผน</p>
    </div>
    <div class="intro-grid">
      <ul class="plan-list">
        <li><span class="plan-name">ไฟไหม้ขณะชาร์จ</span><span class="plan-desc">ระบุความคุ้มครองไฟไหม้ขณะจอดชาร์จแบตเตอรี่ ควรตรวจทุนประกันและเงื่อนไขของรถรุ่นที่เสนอราคา</span></li>
        <li><span class="plan-name">ผู้ขับขี่และผู้โดยสาร</span><span class="plan-desc">อุบัติเหตุส่วนบุคคล ค่ารักษาพยาบาล และประกันตัวผู้ขับขี่เป็นไปตามเอกสารแนบท้าย ซึ่งอาจต่างกันตามยี่ห้อและรุ่นรถ</span></li>
        <li><span class="plan-name">ก่อนเลือกแผน</span><span class="plan-desc">ให้คัดให้ช่วยตรวจเงื่อนไขแบตเตอรี่ ค่าเสียหายส่วนแรก ศูนย์ซ่อม และอุปกรณ์ชาร์จในข้อเสนอของคุณ</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ PERSONAL ACCIDENT ============ -->
<section class="intro" id="viriyah-pa">
  <div class="container">
    <div class="section-head">
      <span class="tab">ประกันอุบัติเหตุส่วนบุคคล</span>
      <h2>เลือก PA ให้เหมาะกับชีวิตประจำวัน</h2>
      <p>ดูทั้งผลประโยชน์เมื่อเกิดอุบัติเหตุและคุณสมบัติผู้สมัคร ตัวอย่างสองแผนนี้มีจุดเน้นต่างกัน</p>
    </div>
    <div class="intro-grid">
      <ul class="plan-list">
        <li>
          <span class="plan-name">PA ออลเจน</span>
          <span class="plan-desc">ค่ารักษาจากอุบัติเหตุ ผลประโยชน์กรณีเสียชีวิตหรือสูญเสียอวัยวะ และเงินชดเชยเมื่อเข้าโรงพยาบาลตามเงื่อนไขของแผน</span>
          <span class="plan-desc">อายุสมัคร 16–54 ปี พิจารณาชั้นอาชีพ 1–2 พร้อมข้อกำหนดด้านถิ่นที่อยู่ สุขภาพ และจำนวนกรมธรรม์</span>
        </li>
        <li>
          <span class="plan-name">PA อุ่นใจบิ้วตี้แคร์</span>
          <span class="plan-desc">มีผลประโยชน์ศัลยกรรมตกแต่งเสริมสร้างและทันตกรรมจากอุบัติเหตุ รวมถึงกรณีเสียชีวิตและเงินชดเชยตามเงื่อนไข</span>
          <span class="plan-desc">สมัครได้ทุกเพศ อายุ 18–60 ปี พิจารณาชั้นอาชีพ 1–2 และคุณสมบัติอื่นของบริษัท ควรตรวจวงเงินแต่ละรายการก่อนเลือกแผน</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ HOME INSURANCE ============ -->
<section class="intro" id="viriyah-home">
  <div class="container">
    <div class="section-head">
      <span class="tab">ประกันบ้านและทรัพย์สิน</span>
      <h2>บ้านเปี่ยมสุข ดูแลบ้านที่คุณอยู่</h2>
      <p>แผนสำหรับอาคารที่อยู่อาศัยและทรัพย์สินภายใน โดยเลือกความคุ้มครองให้ตรงกับลักษณะบ้าน</p>
    </div>
    <div class="intro-grid">
      <ul class="plan-list">
        <li><span class="plan-name">ความคุ้มครองที่ควรดู</span><span class="plan-desc">ไฟไหม้และภัยที่ระบุ โจรกรรม ความรับผิดต่อบุคคลภายนอก และเงินชดเชยค่าเช่าเมื่อบ้านเสียหายจนอยู่อาศัยไม่ได้ ตามเงื่อนไขแผน</span></li>
        <li><span class="plan-name">เงื่อนไขสำคัญ</span><span class="plan-desc">ความคุ้มครองอาคารไม่รวมฐานราก และไม่รับประกันห้องแถวไม้หรือห้องแถวครึ่งตึกครึ่งไม้ ควรแจ้งสิ่งปลูกสร้างและทรัพย์สินที่ต้องการคุ้มครองก่อนขอข้อเสนอ</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ TRAVEL INSURANCE ============ -->
<section class="intro" id="viriyah-travel">
  <div class="container">
    <div class="section-head">
      <span class="tab">ประกันเดินทางต่างประเทศ</span>
      <h2>V-Travel Comprehensive สำหรับทริปของคุณ</h2>
      <p>มีตัวเลือกแบบรายเที่ยวและรายปี พร้อมผลประโยชน์ค่ารักษาพยาบาลในต่างประเทศตามแผนที่เลือก</p>
    </div>
    <div class="intro-grid">
      <ul class="plan-list">
        <li><span class="plan-name">เลือกผลประโยชน์ให้ตรงทริป</span><span class="plan-desc">V-Smart, V-Shield และ V-Sure มีรายการเที่ยวบินล่าช้า กระเป๋าเดินทาง และการบอกเลิกการเดินทาง โดยวงเงินและเงื่อนไขต่างกัน ส่วน V-Saver ไม่รวมรายการเหล่านี้</span></li>
        <li><span class="plan-name">ตรวจให้พร้อมก่อนออกเดินทาง</span><span class="plan-desc">เช็กประเทศปลายทาง อายุผู้เดินทาง และระยะเวลาทริป บริษัทมีรายชื่อประเทศที่ไม่คุ้มครอง และกำหนดให้ซื้อกรมธรรม์ก่อนออกเดินทางจากประเทศไทย</span></li>
      </ul>
    </div>
  </div>
</section>

<section class="article-content container">
  <div class="prose">
    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>คัดให้เป็นนายหน้าและที่ปรึกษาประกันภัย</strong> ผู้รับประกันคือบริษัท วิริยะประกันภัย จำกัด (มหาชน) การรับประกันและความคุ้มครองเป็นไปตามการพิจารณาของบริษัทและกรมธรรม์ที่ออกให้</p>
    </div>
    <p>แหล่งข้อมูล: ประวัติบริษัทและข้อมูลผลิตภัณฑ์จากเว็บไซต์ทางการของวิริยะประกันภัย ตรวจสอบวันที่ 6 กันยายน 2569</p>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="co-cta">
  <div class="container">
    <h2>สนใจประกันวิริยะ ให้เราช่วยดูแผนที่เหมาะกับคุณ</h2>
    <p>เริ่มจากประกันรถยนต์ หรือแจ้งหมวดประกันอื่นที่สนใจ ทีม คัดให้ พร้อมช่วยอ่านเงื่อนไขและตรวจสอบตัวเลือกที่เสนอได้ก่อนตัดสินใจ</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary">ปรึกษาแผนประกันกับ คัดให้</a>
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-ghost">ขอใบเสนอราคาประกันรถยนต์</a>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="article-content container" id="viriyah-faq">
  <div class="prose">
    <h2>คำถามที่พบบ่อยเกี่ยวกับวิริยะประกันภัย</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>วิริยะประกันภัยคือบริษัทอะไร และเริ่มต้นเมื่อใด?</h3>
        <p>วิริยะเป็นบริษัทประกันวินาศภัยของไทย เริ่มจดทะเบียนวันที่ 3 กุมภาพันธ์ 2490 ในชื่อบริษัท อาเซียพาณิชยการ จำกัด และต่อมาจดทะเบียนเป็นบริษัทมหาชนในปี 2555</p>
      </div>
      <div class="faq-item">
        <h3>วิริยะมีประกันรถยนต์ประเภทใดบ้าง?</h3>
        <p>หน้านี้สรุปชั้น 1, 2, 2+, 3+, พ.ร.บ. และชั้น 3 โดยแต่ละประเภทคุ้มครองต่างกัน ควรตรวจตารางความคุ้มครองและเงื่อนไขของแผนก่อนเลือก</p>
      </div>
      <div class="faq-item">
        <h3>ประกันรถยนต์ไฟฟ้า EV ชั้น 1 คุ้มครองไฟไหม้ขณะชาร์จหรือไม่?</h3>
        <p>หน้าผลิตภัณฑ์ EV ชั้น 1 ของวิริยะระบุความคุ้มครองไฟไหม้ขณะจอดชาร์จแบตเตอรี่ตามเงื่อนไขกรมธรรม์ ควรตรวจทุนประกันและเอกสารแนบท้ายของรถรุ่นที่เสนอราคาโดยเฉพาะ</p>
      </div>
      <div class="faq-item">
        <h3>นอกจากรถยนต์ วิริยะมีประกันอะไรอีกบ้าง?</h3>
        <p>ตัวอย่างที่แนะนำในหน้านี้คือ PA ออลเจนและ PA อุ่นใจบิ้วตี้แคร์สำหรับอุบัติเหตุ บ้านเปี่ยมสุขสำหรับที่อยู่อาศัย และ V-Travel Comprehensive สำหรับการเดินทางต่างประเทศ แต่ละผลิตภัณฑ์มีคุณสมบัติและเงื่อนไขแยกกัน</p>
      </div>
      <div class="faq-item">
        <h3>ติดต่อ คัดให้ แล้วถือว่าซื้อประกันสำเร็จหรือยัง?</h3>
        <p>การติดต่อ คัดให้ เป็นการขอคำปรึกษาหรือให้ช่วยตรวจสอบแผนที่เสนอได้ การรับประกันและวันเริ่มคุ้มครองต้องได้รับการยืนยันจากบริษัทประกันภัยตามเอกสารที่ออกให้</p>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
remove_filter( 'option_blogname', $kudhai_viriyah_display_name );
?>
