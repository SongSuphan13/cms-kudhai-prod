<?php
/**
 * Template Name: KUDHai — ประกันรถตู้
 * Template Post Type: page
 * Template for the /van-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'van-insurance' );
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถตู้",
  "name": "ประกันรถตู้",
  "description": "ปรึกษาประกันรถตู้ทั้งใช้งานส่วนบุคคลและรับส่งผู้โดยสาร เปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้เหมาะกับการใช้งานจริง ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/van-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 3, "name": "ประกันรถตู้", "item": "<?php echo esc_url( home_url( '/van-insurance/' ) ); ?>" }
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
      "name": "รถตู้ส่วนบุคคลกับรถตู้รับส่งผู้โดยสาร ซื้อประกันต่างกันไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ใช่ ลักษณะการใช้งานเชิงพาณิชย์มักมีเงื่อนไขและอัตราเบี้ยต่างจากการใช้งานส่วนบุคคล ควรแจ้งลักษณะการใช้งานจริงกับบริษัทประกันเสมอ" }
    },
    {
      "@type": "Question",
      "name": "ประกันรถตู้คุ้มครองผู้โดยสารไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับแผนและเงื่อนไขที่เลือก ควรตรวจสอบรายละเอียดความคุ้มครองผู้โดยสารกับบริษัทประกันก่อนตัดสินใจ โดยเฉพาะหากใช้งานรับส่งเป็นประจำ" }
    },
    {
      "@type": "Question",
      "name": "ซื้อประกันรถตู้ออนไลน์ได้ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ได้ในหลายกรณี แต่หากเป็นรถตู้เชิงพาณิชย์อาจต้องใช้เอกสารเพิ่มเติมประกอบการพิจารณา แนะนำให้ติดต่อเราเพื่อความสะดวก" }
    },
    {
      "@type": "Question",
      "name": "รถตู้ป้ายเหลืองกับป้ายขาวเบี้ยประกันต่างกันไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "โดยทั่วไปต่างกัน เนื่องจากรถป้ายเหลืองใช้งานเชิงพาณิชย์รับส่งผู้โดยสารมีความเสี่ยงต่างจากรถป้ายขาวที่ใช้งานส่วนบุคคล ควรแจ้งประเภทป้ายทะเบียนและลักษณะการใช้งานตามจริงเพื่อขอใบเสนอราคาที่ถูกต้อง" }
    },
    {
      "@type": "Question",
      "name": "ประกันรถตู้มีชั้นความคุ้มครองแบบเดียวกับรถยนต์ทั่วไปหรือไม่?",
      "acceptedAnswer": { "@type": "Answer", "text": "แนวคิดชั้นประกันคล้ายกัน แต่ตัวเลือกที่มีอาจแตกต่างกันสำหรับรถตู้เชิงพาณิชย์ ควรสอบถามความคุ้มครองที่มีสำหรับรถตู้ของคุณโดยเฉพาะ โดยเฉพาะหากใช้งานรับส่งผู้โดยสาร" }
    }
  ]
}
</script>

<!-- ============ HERO ============ -->
<main id="main-content" class="product-content">
<div class="hero-backdrop">
<section class="insurance-hero insurance-mobile-layout" id="product-main-hero">
<img class="insurance-hero-image" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/van-insurance-hero-v2.png' ) ); ?>" width="2172" height="724" alt="รถตู้โดยสารสีขาวบนถนนท่ามกลางต้นไม้และเมือง" fetchpriority="high" decoding="async">
<div class="wrap insurance-hero-copy">
<nav class="breadcrumb" aria-label="เส้นทางหน้า">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันภัยทั้งหมด</a>
      <span>/</span>
      <span class="current">ประกันรถตู้</span>
    </nav>
<h1>ประกันรถตู้</h1>
<h2>เข้าใจความคุ้มครอง ก่อนเลือกแผน</h2>
<p>คุ้มครองทั้งรถตู้ส่วนบุคคลและรถตู้รับส่งผู้โดยสาร เปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้ตรงกับลักษณะการใช้งานของคุณ</p>
<div class="actions">
<a class="button yellow" href="#type-coverage"><svg aria-hidden="true"><use href="#icon-shield"/></svg><span>ดูความคุ้มครอง</span><svg aria-hidden="true"><use href="#icon-arrow"/></svg></a>
<a class="button outline" href="<?php echo esc_url( kudhai_v2_page_url( 'contact', 'line' ) ); ?>"><span class="line">LINE</span><span class="hero-label-desktop">ปรึกษา LINE @kudhai</span><span class="hero-label-mobile">LINE @kudhai</span></a>
</div>
</div>
</section>
</div>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        ประเภทประกันภัยรถตู้
      </span>
      <h2>ประกันแต่ละชั้นต่างกันอย่างไร คุ้มครองอะไรบ้าง</h2>
      <p>ตลาดประกันรถตู้ภาคสมัครใจมีให้เลือกหลักๆ คือ ชั้น 1, 2+ และ 3+ ส่วนพ.ร.บ. เป็นภาคบังคับที่รถทุกคันต้องมี รถตู้เชิงพาณิชย์ (รับส่งผู้โดยสาร) อาจมีเงื่อนไขและตัวเลือกต่างจากรถตู้ส่วนบุคคล</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">ครอบคลุมทุกกรณี เหมาะกับรถตู้ใหม่หรือใช้งานบ่อย</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความคุ้มครองผู้โดยสาร (แยกตามแผน)</li>
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
        <p class="coverage-card-tag">คุ้มครองรถหายและไฟไหม้ พร้อมกรณีมีคู่กรณี ในราคาประหยัดกว่า</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความคุ้มครองผู้โดยสาร (แยกตามแผน)</li>
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
        <p class="coverage-card-tag">คุ้มครองกรณีมีคู่กรณี ไม่คุ้มครองรถหายหรือไฟไหม้</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความคุ้มครองผู้โดยสาร (แยกตามแผน)</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายได้ (เฉพาะ พ.ร.บ.)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ประหยัด</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>พ.ร.บ.</h3>
          <span class="coverage-card-badge alt">ภาคบังคับ</span>
        </div>
        <p class="coverage-card-tag">ประกันภาคบังคับ รถทุกคันต้องมี</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>โจรกรรม / ไฟไหม้</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความคุ้มครองผู้โดยสาร (แยกตามแผน)</li>
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
      เงื่อนไขความคุ้มครองจริงอาจแตกต่างกันในแต่ละบริษัทประกัน โดยเฉพาะรถตู้ที่ใช้รับส่งผู้โดยสารเชิงพาณิชย์ หากไม่แน่ใจว่าควรเลือกชั้นไหน ให้เราช่วยประเมินตามลักษณะการใช้งานรถตู้ของคุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">ประกันรถตู้ มีเงื่อนไขที่แตกต่างกันตามลักษณะการใช้งาน ทั้งรถตู้ส่วนบุคคลและรถตู้ที่ใช้รับส่งผู้โดยสารเชิงพาณิชย์ ซึ่งมีความเสี่ยงและอัตราเบี้ยที่ต่างกัน แบ่งเป็นภาคบังคับ (พ.ร.บ.) ที่กฎหมายกำหนดให้รถทุกคันต้องมี และภาคสมัครใจซึ่งมีให้เลือกหลักๆ คือชั้น 1, 2+ และ 3+ เราช่วยเปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้ตรงกับลักษณะการใช้งานรถตู้ของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ตามกฎหมาย รถตู้ทุกคันที่จดทะเบียนต้องมี พ.ร.บ. ส่วนประกันภาคสมัครใจไม่ได้บังคับตามกฎหมาย แต่ช่วยป้องกันความเสี่ยงทางการเงินในส่วนที่ พ.ร.บ. ไม่ครอบคลุม เช่น ความเสียหายต่อทรัพย์สินของคู่กรณีหรือความเสียหายต่อตัวรถของคุณเอง จึงยังแนะนำให้มีความคุ้มครองภาคสมัครใจอย่างน้อยระดับพื้นฐานติดไว้</p>
    </div>

    <p>ความคุ้มครองของประกันรถตู้แบ่งเป็นระดับชั้นตามขอบเขตที่คุ้มครอง ตั้งแต่กว้างที่สุดไปจนถึงคุ้มครองเฉพาะบุคคลภายนอก ดูตารางเปรียบเทียบด้านบน หรืออ่านรายละเอียดแยกตามหมวดด้านล่าง</p>

    <h3>คุ้มครองตัวรถของคุณ</h3>
    <p>ครอบคลุมความเสียหายต่อรถตู้ของคุณเอง ขึ้นอยู่กับชั้นประกันที่เลือก</p>
    <ul>
      <li>อุบัติเหตุและการชน — ค่าซ่อมรถเมื่อชนกับรถคันอื่นหรือวัตถุอื่น</li>
      <li>การชนแล้วหนี — คุ้มครองแม้ระบุคู่กรณีไม่ได้ (เฉพาะชั้นที่คุ้มครองกรณีไม่มีคู่กรณี)</li>
      <li>การโจรกรรม และไฟไหม้</li>
    </ul>

    <h3>คุ้มครองบุคคลภายนอก</h3>
    <p>คุ้มครองความรับผิดทางการเงิน หากคุณก่อให้เกิดความเสียหายต่อผู้อื่น</p>
    <ul>
      <li>พ.ร.บ. คุ้มครองการบาดเจ็บและเสียชีวิตของบุคคลภายนอก แต่ไม่คุ้มครองทรัพย์สิน</li>
      <li>ภาคสมัครใจคุ้มครองทั้งทรัพย์สินและการบาดเจ็บของบุคคลภายนอกเพิ่มเติมจาก พ.ร.บ.</li>
    </ul>

    <h3>ความคุ้มครองผู้โดยสาร</h3>
    <p>สำหรับรถตู้ที่ใช้รับส่งผู้โดยสารเป็นประจำ ควรตรวจสอบเป็นพิเศษว่ากรมธรรม์ครอบคลุมความคุ้มครองผู้โดยสารในรถหรือไม่ เนื่องจากบางกรมธรรม์ที่ออกแบบมาสำหรับรถตู้ส่วนบุคคลอาจไม่ได้รวมความคุ้มครองส่วนนี้ไว้อย่างครบถ้วน ควรแจ้งลักษณะการใช้งาน (ส่วนตัวหรือรับส่งผู้โดยสาร) ตามจริงกับบริษัทประกันเสมอ</p>

    <h3>ตารางเปรียบเทียบความคุ้มครอง</h3>
    <div class="coverage-matrix-legend">
      <span><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> คุ้มครอง</span>
      <span><span class="cm-no">–</span> ไม่คุ้มครอง / ขึ้นอยู่กับแผน</span>
      <span>คอลัมน์ไฮไลต์ = ชั้น 1 (คุ้มครองกว้างที่สุด)</span>
    </div>
    <div class="table-scroll">
      <table class="coverage-matrix">
        <thead>
          <tr>
            <th class="coverage-matrix-label">ความคุ้มครอง</th>
            <th>ชั้น 1</th>
            <th>ชั้น 2+</th>
            <th>ชั้น 3+</th>
            <th>พ.ร.บ.</th>
          </tr>
        </thead>
        <tbody>
          <tr class="coverage-matrix-group"><td colspan="5">คุ้มครองตัวรถ</td></tr>
          <tr>
            <td class="coverage-matrix-label">การชนแบบไม่มีคู่กรณี</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">การชนแบบมีคู่กรณี</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">การโจรกรรม</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ไฟไหม้รถ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr class="coverage-matrix-group"><td colspan="5">คุ้มครองบุคคลภายนอกและผู้โดยสาร</td></tr>
          <tr>
            <td class="coverage-matrix-label">ทรัพย์สินของบุคคลภายนอก</td>
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
          </tr>
          <tr>
            <td class="coverage-matrix-label">ความคุ้มครองผู้โดยสารในรถ</td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr class="coverage-matrix-group"><td colspan="5">ความคุ้มครองเพิ่มเติม</td></tr>
          <tr>
            <td class="coverage-matrix-label">การชดเชยรายได้ (ผู้ป่วยใน)</td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="coverage-matrix-note">สรุปจากเงื่อนไขความคุ้มครองมาตรฐานที่ใช้ทั่วไปในตลาด ความคุ้มครองผู้โดยสารในรถขึ้นอยู่กับแผนและบริษัทที่เลือก ควรตรวจสอบให้ชัดเจนโดยเฉพาะหากใช้งานรับส่งผู้โดยสารเป็นประจำ รายละเอียดที่แน่นอนอาจแตกต่างกันไปตามแต่ละบริษัทและแผน ควรตรวจสอบก่อนตัดสินใจซื้อเสมอ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันรถตู้</h3>
    <ol>
      <li>ลักษณะการใช้งาน — ใช้งานส่วนตัวหรือรับส่งผู้โดยสารเชิงพาณิชย์ (ป้ายเหลือง/ป้ายขาว)</li>
      <li>จำนวนที่นั่งและเส้นทางที่ให้บริการเป็นประจำ (สำหรับรถตู้รับส่ง)</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม</li>
      <li>ระดับความคุ้มครองที่เลือก และความคุ้มครองผู้โดยสารเพิ่มเติม (ถ้ามี)</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับแต่ละบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถตู้</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต ประเภทป้ายทะเบียน และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ประเภทที่เกี่ยวข้อง และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลการใช้งาน</span><span class="plan-desc">ใช้งานส่วนตัวหรือรับส่งผู้โดยสาร จำนวนที่นั่ง และเส้นทางหลัก (ถ้ามี)</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
    </ul>

    <h3>เคล็ดลับเปรียบเทียบประกันรถตู้</h3>
    <ul>
      <li>เทียบความคุ้มค่าระหว่างเบี้ยประกันกับความคุ้มครองที่ได้รับ ไม่ใช่ดูแค่ราคาถูกที่สุด</li>
      <li>แจ้งลักษณะการใช้งาน (ส่วนตัว/รับส่งผู้โดยสาร) ตามจริงกับบริษัทประกันเสมอ</li>
      <li>หากใช้งานรับส่งผู้โดยสารเป็นประจำ ควรตรวจสอบความคุ้มครองผู้โดยสารในกรมธรรม์ให้ชัดเจน</li>
      <li>เลือกชั้นประกันให้เหมาะกับมูลค่าและลักษณะการใช้งานจริงของรถ</li>
      <li>อ่านเงื่อนไขกรมธรรม์อย่างละเอียดก่อนตัดสินใจซื้อทุกครั้ง</li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามรถหรือลักษณะการใช้งานแต่ละราย ให้เราช่วยเสนอราคาที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถตู้</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>รถตู้ส่วนบุคคลกับรถตู้รับส่งผู้โดยสาร ซื้อประกันต่างกันไหม?</h3>
        <p>ใช่ ลักษณะการใช้งานเชิงพาณิชย์มักมีเงื่อนไขและอัตราเบี้ยต่างจากการใช้งานส่วนบุคคล ควรแจ้งลักษณะการใช้งานจริงกับบริษัทประกันเสมอ</p>
      </div>
      <div class="faq-item">
        <h3>ประกันรถตู้คุ้มครองผู้โดยสารไหม?</h3>
        <p>ขึ้นอยู่กับแผนและเงื่อนไขที่เลือก ควรตรวจสอบรายละเอียดความคุ้มครองผู้โดยสารกับบริษัทประกันก่อนตัดสินใจ โดยเฉพาะหากใช้งานรับส่งเป็นประจำ</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อประกันรถตู้ออนไลน์ได้ไหม?</h3>
        <p>ได้ในหลายกรณี แต่หากเป็นรถตู้เชิงพาณิชย์อาจต้องใช้เอกสารเพิ่มเติมประกอบการพิจารณา แนะนำให้ติดต่อเราเพื่อความสะดวก</p>
      </div>
      <div class="faq-item">
        <h3>รถตู้ป้ายเหลืองกับป้ายขาวเบี้ยประกันต่างกันไหม?</h3>
        <p>โดยทั่วไปต่างกัน เนื่องจากรถป้ายเหลืองใช้งานเชิงพาณิชย์รับส่งผู้โดยสารมีความเสี่ยงต่างจากรถป้ายขาวที่ใช้งานส่วนบุคคล ควรแจ้งประเภทป้ายทะเบียนและลักษณะการใช้งานตามจริงเพื่อขอใบเสนอราคาที่ถูกต้อง</p>
      </div>
      <div class="faq-item">
        <h3>ประกันรถตู้มีชั้นความคุ้มครองแบบเดียวกับรถยนต์ทั่วไปหรือไม่?</h3>
        <p>แนวคิดชั้นประกันคล้ายกัน แต่ตัวเลือกที่มีอาจแตกต่างกันสำหรับรถตู้เชิงพาณิชย์ ควรสอบถามความคุ้มครองที่มีสำหรับรถตู้ของคุณโดยเฉพาะ โดยเฉพาะหากใช้งานรับส่งผู้โดยสาร</p>
      </div>
    </div>

    <h2>คำศัพท์ทั่วไปเกี่ยวกับประกันรถตู้</h2>
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
        <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">เปรียบเทียบบริษัทประกันภัยที่เราแนะนำ</a>
      </span>
    </div>

    <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้ารวมประกันภัยทั้งหมด
    </a>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="co-cta">
  <div class="container">
    <h2>สนใจประกันรถตู้หรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่เหมาะกับการใช้งานรถตู้ของคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/contact-us/#topics' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
