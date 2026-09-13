<?php
/**
 * Template Name: KUDHai — ประกันรถมอเตอร์ไซค์
 * Template Post Type: page
 * Template for the /motorbike-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'motorbike-insurance' );
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถมอเตอร์ไซค์",
  "name": "ประกันรถมอเตอร์ไซค์",
  "description": "เปรียบเทียบประกันรถมอเตอร์ไซค์ทั้งภาคสมัครใจและ พ.ร.บ. จากที่ปรึกษาประกันภัย ช่วยเลือกแผนที่เหมาะกับรุ่นรถและการใช้งานจริง ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/motorbike-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 3, "name": "ประกันรถมอเตอร์ไซค์", "item": "<?php echo esc_url( home_url( '/motorbike-insurance/' ) ); ?>" }
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
      "name": "ประกันรถมอเตอร์ไซค์ชั้น 1, 2+, 3+ ต่างกันอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "ต่างกันที่ขอบเขตความคุ้มครอง ชั้น 1 คุ้มครองกว้างที่สุดรวมถึงกรณีไม่มีคู่กรณีและโจรกรรม/ไฟไหม้ ส่วนชั้น 2+ และ 3+ จะจำกัดเงื่อนไขมากขึ้นตามลำดับ บางบริษัทอาจมีชั้น 2 หรือชั้น 3 ให้เลือกเพิ่มเติม ควรสอบถามรายละเอียดตามรุ่นรถของคุณ" }
    },
    {
      "@type": "Question",
      "name": "มี พ.ร.บ. แล้ว ยังต้องซื้อภาคสมัครใจไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "พ.ร.บ. คุ้มครองเฉพาะค่ารักษาพยาบาลเบื้องต้นตามกฎหมายเท่านั้น ไม่คุ้มครองความเสียหายต่อตัวรถหรือทรัพย์สินของคู่กรณี ภาคสมัครใจจึงช่วยปิดความเสี่ยงส่วนที่ พ.ร.บ. ไม่ครอบคลุม ควรพิจารณาตามความเสี่ยงและงบประมาณของคุณ" }
    },
    {
      "@type": "Question",
      "name": "ประกันรถมอเตอร์ไซค์ราคาขึ้นอยู่กับอะไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับหลายปัจจัย เช่น รุ่นรถ ซีซี อายุการใช้งาน ประวัติผู้ขับขี่ และแผนความคุ้มครองที่เลือก ควรสอบถามราคาที่แน่นอนสำหรับรถของคุณโดยตรง" }
    },
    {
      "@type": "Question",
      "name": "ใช้มอเตอร์ไซค์รับส่งอาหารหรือพัสดุ ต้องแจ้งบริษัทประกันไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ควรแจ้งตามจริง การใช้งานรับจ้างขนส่งมีความเสี่ยงต่างจากการใช้งานส่วนตัว และอาจมีเงื่อนไขหรืออัตราเบี้ยที่ต่างกัน การแจ้งตามจริงช่วยลดปัญหาตอนเคลม" }
    },
    {
      "@type": "Question",
      "name": "ซื้อประกันมอเตอร์ไซค์ออนไลน์ได้ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ได้ เราช่วยดำเนินการให้ตั้งแต่ขอใบเสนอราคาไปจนถึงออกกรมธรรม์ผ่านช่องทางออนไลน์" }
    },
    {
      "@type": "Question",
      "name": "ประกันรถมอเตอร์ไซค์ไม่คุ้มครองอะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "ข้อยกเว้นทั่วไปมักรวมถึงความเสียหายที่เกิดขึ้นโดยเจตนา การเสื่อมสภาพตามปกติ ผู้ขับขี่ที่ไม่มีใบอนุญาตขับขี่รถจักรยานยนต์ การดัดแปลงเครื่องยนต์นอกเงื่อนไข และการแข่งขันความเร็ว รายละเอียดที่แน่นอนควรตรวจสอบในกรมธรรม์ของแต่ละบริษัท" }
    }
  ]
}
</script>

<!-- ============ HERO ============ -->
<main id="main-content" class="product-content">
<div class="hero-backdrop">
<section class="insurance-hero insurance-mobile-layout" id="product-main-hero">
<img class="insurance-hero-image" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/motorbike-insurance-hero-v2.png' ) ); ?>" width="2172" height="724" alt="รถสกู๊ตเตอร์สีขาวพร้อมหมวกกันน็อกริมถนนในเมือง" fetchpriority="high" decoding="async">
<div class="wrap insurance-hero-copy">
<nav class="breadcrumb" aria-label="เส้นทางหน้า">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันภัยทั้งหมด</a>
      <span>/</span>
      <span class="current">ประกันรถมอเตอร์ไซค์</span>
    </nav>
<h1>ประกันรถมอเตอร์ไซค์</h1>
<h2>เข้าใจความคุ้มครอง ก่อนเลือกแผน</h2>
<p>เปรียบเทียบแผนความคุ้มครองภาคสมัครใจและ พ.ร.บ. จากหลายบริษัท ให้เหมาะกับรุ่นรถและลักษณะการใช้งานของคุณ ไม่ใช่แค่เสนอขายแผนใดแผนหนึ่ง</p>
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
        ประเภทประกันภัยรถมอเตอร์ไซค์
      </span>
      <h2>ประกันแต่ละชั้นต่างกันอย่างไร คุ้มครองอะไรบ้าง</h2>
      <p>ตลาดประกันรถมอเตอร์ไซค์ภาคสมัครใจส่วนใหญ่มีให้เลือกหลักๆ คือ ชั้น 1, 2+ และ 3+ ส่วนพ.ร.บ. เป็นภาคบังคับที่รถทุกคันต้องมี</p>
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
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อทรัพย์สินบุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ประกันอุบัติเหตุส่วนบุคคล (PA)</li>
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
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ประกันอุบัติเหตุส่วนบุคคล (PA)</li>
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
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ประกันอุบัติเหตุส่วนบุคคล (PA)</li>
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
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ประกันอุบัติเหตุส่วนบุคคล (PA)</li>
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
      เงื่อนไขความคุ้มครองจริงอาจแตกต่างกันในแต่ละบริษัทประกัน บางบริษัทอาจมีชั้น 2 หรือชั้น 3 ให้เลือกเพิ่มเติม หากไม่แน่ใจว่าควรเลือกชั้นไหน ให้เราช่วยประเมินตามลักษณะการใช้รถของคุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">ประกันรถมอเตอร์ไซค์ คือหลักประกันทางการเงินที่ช่วยดูแลค่าใช้จ่ายเมื่อเกิดอุบัติเหตุ การโจรกรรม หรือเหตุการณ์ไม่คาดคิดอื่น ๆ กับตัวรถหรือบุคคลภายนอก แบ่งเป็นภาคบังคับ (พ.ร.บ.) ที่กฎหมายกำหนดให้รถทุกคันต้องมี และภาคสมัครใจซึ่งในตลาดทั่วไปมีให้เลือกหลักๆ คือชั้น 1, 2+ และ 3+ ตามขอบเขตความคุ้มครอง เราช่วยเปรียบเทียบแผนจากหลายบริษัทให้ตรงกับรุ่นรถและลักษณะการใช้งานของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ตามกฎหมาย รถมอเตอร์ไซค์ทุกคันที่จดทะเบียนต้องมี พ.ร.บ. ส่วนประกันภาคสมัครใจไม่ได้บังคับตามกฎหมาย แต่ช่วยป้องกันความเสี่ยงทางการเงินในส่วนที่ พ.ร.บ. ไม่ครอบคลุม เช่น ความเสียหายต่อทรัพย์สินของคู่กรณีหรือความเสียหายต่อรถของคุณเอง จึงยังแนะนำให้มีความคุ้มครองภาคสมัครใจอย่างน้อยระดับพื้นฐานติดไว้</p>
    </div>

    <p>ความคุ้มครองของประกันรถมอเตอร์ไซค์แบ่งเป็นระดับชั้นตามขอบเขตที่คุ้มครอง ตั้งแต่กว้างที่สุดไปจนถึงคุ้มครองเฉพาะบุคคลภายนอก ดูตารางเปรียบเทียบด้านบน หรืออ่านรายละเอียดแยกตามหมวดด้านล่าง</p>

    <h3>คุ้มครองตัวรถของคุณ</h3>
    <p>ครอบคลุมความเสียหายต่อรถของคุณเอง ขึ้นอยู่กับชั้นประกันที่เลือก</p>
    <ul>
      <li>อุบัติเหตุและการชน — ค่าซ่อมรถเมื่อชนกับรถคันอื่นหรือวัตถุอื่น</li>
      <li>การชนแล้วหนี — คุ้มครองแม้ระบุคู่กรณีไม่ได้ (เฉพาะชั้นที่คุ้มครองกรณีไม่มีคู่กรณี)</li>
      <li>การโจรกรรม และไฟไหม้ — ความเสี่ยงที่พบบ่อยสำหรับรถมอเตอร์ไซค์ โดยเฉพาะจุดจอดสาธารณะ</li>
    </ul>

    <h3>คุ้มครองบุคคลภายนอก</h3>
    <p>คุ้มครองความรับผิดทางการเงิน หากคุณก่อให้เกิดความเสียหายต่อผู้อื่น</p>
    <ul>
      <li>พ.ร.บ. คุ้มครองการบาดเจ็บและเสียชีวิตของบุคคลภายนอก แต่ไม่คุ้มครองทรัพย์สิน</li>
      <li>ภาคสมัครใจคุ้มครองทั้งทรัพย์สินและการบาดเจ็บของบุคคลภายนอกเพิ่มเติมจาก พ.ร.บ.</li>
    </ul>

    <h3>ความคุ้มครองเพิ่มเติม (ภาคสมัครใจ)</h3>
    <p>มักรวมอยู่ในกรมธรรม์ภาคสมัครใจส่วนใหญ่ เงื่อนไขจริงควรตรวจสอบกับบริษัทประกัน</p>
    <ul>
      <li>ค่ารักษาพยาบาลของคุณและผู้โดยสารซ้อนท้าย</li>
      <li>ประกันอุบัติเหตุส่วนบุคคล (PA) — คุ้มครองบาดเจ็บ ทุพพลภาพ หรือเสียชีวิตจากอุบัติเหตุ</li>
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
          <tr class="coverage-matrix-group"><td colspan="5">คุ้มครองบุคคลภายนอก</td></tr>
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
          <tr class="coverage-matrix-group"><td colspan="5">ความคุ้มครองเพิ่มเติม</td></tr>
          <tr>
            <td class="coverage-matrix-label">ค่ารักษาพยาบาล</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ประกันอุบัติเหตุส่วนบุคคล (PA)</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
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
    <p class="coverage-matrix-note">สรุปจากเงื่อนไขความคุ้มครองมาตรฐานที่ใช้ทั่วไปในตลาด บางบริษัทอาจมีชั้น 2 หรือชั้น 3 ให้เลือกเพิ่มเติม รายละเอียดที่แน่นอนอาจแตกต่างกันไปตามแต่ละบริษัทและแผน ควรตรวจสอบก่อนตัดสินใจซื้อเสมอ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันรถมอเตอร์ไซค์</h3>
    <ol>
      <li>ข้อมูลของรถ — รุ่น ซีซี อายุการใช้งาน และมูลค่ารถ รวมถึงวัตถุประสงค์ในการใช้งาน</li>
      <li>ข้อมูลผู้ขับขี่ — ประวัติการขับขี่และการเคลม ผู้ขับขี่มือใหม่มักมีความเสี่ยงสูงกว่า</li>
      <li>พื้นที่ใช้งานและที่จอดรถ — พื้นที่เสี่ยงสูงหรือไม่มีที่จอดปลอดภัยอาจมีผลต่อเบี้ย เนื่องจากมอเตอร์ไซค์มีความเสี่ยงถูกโจรกรรมสูง</li>
      <li>ระดับความคุ้มครองที่เลือก และบริการเสริมที่เพิ่มเข้าไป</li>
      <li>ส่วนลดประวัติดี (NCB) — ปีที่ไม่มีการเคลมมักได้รับส่วนลด อัตราที่แน่นอนขึ้นอยู่กับแต่ละบริษัท</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถมอเตอร์ไซค์</span><span class="plan-desc">ยี่ห้อ รุ่น ซีซี ปีที่ผลิต เลขไมล์ปัจจุบัน และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
      <li><span class="plan-name">ข้อมูลการใช้งานรถ</span><span class="plan-desc">ความถี่และวัตถุประสงค์ในการใช้รถ เช่น ใช้งานส่วนตัวหรือรับจ้างขนส่ง</span></li>
    </ul>

    <h3>เคล็ดลับเปรียบเทียบประกันรถมอเตอร์ไซค์</h3>
    <ul>
      <li>เทียบความคุ้มค่าระหว่างเบี้ยประกันกับความคุ้มครองที่ได้รับ ไม่ใช่ดูแค่ราคาถูกที่สุด</li>
      <li>เลือกชั้นประกันให้เหมาะกับมูลค่าและลักษณะการใช้งานจริงของรถ เช่น รถใหม่มูลค่าสูงเหมาะกับชั้น 1</li>
      <li>หากใช้งานรับจ้างขนส่ง ควรแจ้งลักษณะการใช้งานตามจริงกับบริษัทประกันเสมอ</li>
      <li>ผู้ขับขี่มือใหม่ควรพิจารณาความคุ้มครองที่ครอบคลุมมากขึ้น เนื่องจากมีความเสี่ยงสูงกว่า</li>
      <li>ตรวจสอบว่าแผนที่เลือกคุ้มครองผู้โดยสารซ้อนท้ายด้วยหรือไม่ หากมักขับซ้อนสองเป็นประจำ</li>
      <li>อ่านเงื่อนไขกรมธรรม์อย่างละเอียดก่อนตัดสินใจซื้อทุกครั้ง</li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามรถหรือลักษณะการใช้งานแต่ละราย ให้เราช่วยเสนอราคาที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถมอเตอร์ไซค์</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>ประกันรถมอเตอร์ไซค์ชั้น 1, 2+, 3+ ต่างกันอย่างไร?</h3>
        <p>ต่างกันที่ขอบเขตความคุ้มครอง ชั้น 1 คุ้มครองกว้างที่สุดรวมถึงกรณีไม่มีคู่กรณีและโจรกรรม/ไฟไหม้ ส่วนชั้น 2+ และ 3+ จะจำกัดเงื่อนไขมากขึ้นตามลำดับ บางบริษัทอาจมีชั้น 2 หรือชั้น 3 ให้เลือกเพิ่มเติม ควรสอบถามรายละเอียดตามรุ่นรถของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>มี พ.ร.บ. แล้ว ยังต้องซื้อภาคสมัครใจไหม?</h3>
        <p>พ.ร.บ. คุ้มครองเฉพาะค่ารักษาพยาบาลเบื้องต้นตามกฎหมายเท่านั้น ไม่คุ้มครองความเสียหายต่อตัวรถหรือทรัพย์สินของคู่กรณี ภาคสมัครใจจึงช่วยปิดความเสี่ยงส่วนที่ พ.ร.บ. ไม่ครอบคลุม ควรพิจารณาตามความเสี่ยงและงบประมาณของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>ประกันรถมอเตอร์ไซค์ราคาขึ้นอยู่กับอะไร?</h3>
        <p>ขึ้นอยู่กับหลายปัจจัย เช่น รุ่นรถ ซีซี อายุการใช้งาน ประวัติผู้ขับขี่ และแผนความคุ้มครองที่เลือก ควรสอบถามราคาที่แน่นอนสำหรับรถของคุณโดยตรง</p>
      </div>
      <div class="faq-item">
        <h3>ใช้มอเตอร์ไซค์รับส่งอาหารหรือพัสดุ ต้องแจ้งบริษัทประกันไหม?</h3>
        <p>ควรแจ้งตามจริง การใช้งานรับจ้างขนส่งมีความเสี่ยงต่างจากการใช้งานส่วนตัว และอาจมีเงื่อนไขหรืออัตราเบี้ยที่ต่างกัน การแจ้งตามจริงช่วยลดปัญหาตอนเคลม</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อประกันมอเตอร์ไซค์ออนไลน์ได้ไหม?</h3>
        <p>ได้ เราช่วยดำเนินการให้ตั้งแต่ขอใบเสนอราคาไปจนถึงออกกรมธรรม์ผ่านช่องทางออนไลน์</p>
      </div>
      <div class="faq-item">
        <h3>ประกันรถมอเตอร์ไซค์ไม่คุ้มครองอะไรบ้าง?</h3>
        <p>ข้อยกเว้นทั่วไปมักรวมถึงความเสียหายที่เกิดขึ้นโดยเจตนา การเสื่อมสภาพตามปกติ ผู้ขับขี่ที่ไม่มีใบอนุญาตขับขี่รถจักรยานยนต์ การดัดแปลงเครื่องยนต์นอกเงื่อนไข และการแข่งขันความเร็ว รายละเอียดที่แน่นอนควรตรวจสอบในกรมธรรม์ของแต่ละบริษัท</p>
      </div>
    </div>

    <h2>คำศัพท์ทั่วไปเกี่ยวกับประกันรถมอเตอร์ไซค์</h2>
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
    <h2>สนใจประกันรถมอเตอร์ไซค์หรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่เหมาะกับคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/contact-us/#topics' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
