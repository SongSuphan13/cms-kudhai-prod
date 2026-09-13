<?php
/**
 * Template Name: KUDHai — ประกันมะเร็ง
 * Template Post Type: page
 * Template for the /cancer-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'cancer-insurance' );
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันมะเร็ง",
  "name": "ประกันมะเร็ง",
  "description": "ประกันมะเร็ง คุ้มครองค่ารักษาและเงินก้อนเมื่อตรวจพบโรค เปรียบเทียบแผนจากที่ปรึกษาประกันภัย ช่วยเลือกความคุ้มครองที่เหมาะกับคุณ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/cancer-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 3, "name": "ประกันมะเร็ง", "item": "<?php echo esc_url( home_url( '/cancer-insurance/' ) ); ?>" }
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
      "name": "ประกันมะเร็งคุ้มครองอะไรบ้าง?",
      "acceptedAnswer": { "@type": "Answer", "text": "โดยทั่วไปครอบคลุมทั้งเงินก้อนเมื่อตรวจพบโรคและค่ารักษาพยาบาลต่อเนื่อง รายละเอียดความคุ้มครองที่แน่นอนแตกต่างกันไปตามแผนและบริษัท ควรตรวจสอบก่อนตัดสินใจซื้อ" }
    },
    {
      "@type": "Question",
      "name": "มีประกันสุขภาพอยู่แล้ว ยังจำเป็นต้องซื้อประกันมะเร็งไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ประกันมะเร็งเป็นความคุ้มครองเฉพาะทางที่เสริมจากประกันสุขภาพทั่วไป ไม่ใช่เรื่องเดียวกัน ควรพิจารณาตามความเสี่ยงและงบประมาณของแต่ละคน" }
    },
    {
      "@type": "Question",
      "name": "อายุเท่าไหร่ถึงซื้อประกันมะเร็งได้?",
      "acceptedAnswer": { "@type": "Answer", "text": "เงื่อนไขอายุรับประกันแตกต่างกันไปตามแต่ละบริษัทและแผน ควรสอบถามรายละเอียดที่แน่นอนกับบริษัทประกันที่สนใจ" }
    },
    {
      "@type": "Question",
      "name": "ประกันมะเร็งมีระยะเวลารอคอย (Waiting Period) ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ส่วนใหญ่มี โดยทั่วไปกรมธรรม์จะเริ่มคุ้มครองการตรวจพบมะเร็งหลังจากผ่านระยะเวลารอคอยตามที่ระบุไว้ ระยะเวลาที่แน่นอนแตกต่างกันไปตามแต่ละบริษัทและแผน ควรอ่านเงื่อนไขนี้ให้ละเอียดก่อนซื้อ" }
    },
    {
      "@type": "Question",
      "name": "หากเคยมีประวัติเนื้องอกหรือมะเร็งมาก่อน ยังซื้อประกันมะเร็งได้ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับการพิจารณารับประกันของแต่ละบริษัท ประวัติสุขภาพที่เกี่ยวข้องอาจทำให้ถูกปฏิเสธหรือมีเงื่อนไขยกเว้นเฉพาะจุด ควรแจ้งประวัติสุขภาพตามจริงในใบคำขอเอาประกันเสมอ" }
    },
    {
      "@type": "Question",
      "name": "ประกันมะเร็งจ่ายเงินก้อนครั้งเดียวหรือจ่ายซ้ำได้?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับแบบกรมธรรม์ที่เลือก บางแผนจ่ายเงินก้อนเมื่อตรวจพบครั้งแรกเพียงครั้งเดียว บางแผนออกแบบให้จ่ายตามระยะของโรคหรือคุ้มครองการกลับมาเป็นซ้ำ ควรอ่านเงื่อนไขการจ่ายผลประโยชน์ให้ละเอียดก่อนตัดสินใจ" }
    }
  ]
}
</script>

<!-- ============ HERO ============ -->
<main id="main-content" class="product-content">
<div class="hero-backdrop">
<section class="insurance-hero insurance-mobile-layout" id="product-main-hero">
<img class="insurance-hero-image" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/pages/cancer-insurance-hero-v2.png' ) ); ?>" width="2172" height="724" alt="แพทย์ให้คำปรึกษากับคู่สามีภรรยาในคลินิกที่สว่างและอบอุ่น" fetchpriority="high" decoding="async">
<div class="wrap insurance-hero-copy">
<nav class="breadcrumb" aria-label="เส้นทางหน้า">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันภัยทั้งหมด</a>
      <span>/</span>
      <span class="current">ประกันมะเร็ง</span>
    </nav>
<h1>ประกันมะเร็ง</h1>
<h2>เข้าใจความคุ้มครอง ก่อนเลือกแผน</h2>
<p>ช่วยลดภาระค่าใช้จ่ายก้อนใหญ่ของครอบครัวหากตรวจพบโรคมะเร็ง เปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้เหมาะกับอายุและความต้องการของคุณ</p>
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
        ความคุ้มครองหลักของประกันมะเร็ง
      </span>
      <h2>ประกันมะเร็งคุ้มครองอะไรบ้าง</h2>
      <p>ประกันมะเร็งโดยทั่วไปให้ความคุ้มครองสองส่วนหลัก คือเงินก้อนเมื่อตรวจพบโรคและค่ารักษาพยาบาลต่อเนื่อง บางแผนมีความคุ้มครองเสริมเพิ่มเติมให้เลือกซื้อ</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>เงินก้อนเมื่อตรวจพบ</h3>
          <span class="coverage-card-badge">ผลประโยชน์หลัก</span>
        </div>
        <p class="coverage-card-tag">จ่ายเป็นเงินก้อนทันทีเมื่อตรวจพบโรคตามเงื่อนไขกรมธรรม์ นำไปใช้จ่ายได้อย่างอิสระ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ตรวจพบระยะเริ่มต้น</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ตรวจพบระยะลุกลาม (บางแผนจ่ายเพิ่มจากระยะเริ่มต้น)</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่ารักษาพยาบาลต่อเนื่อง (แยกผลประโยชน์)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ลักษณะการจ่าย</div>
          <div class="value">เงินก้อน</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ค่ารักษาพยาบาลต่อเนื่อง</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองค่าใช้จ่ายในการรักษาที่เกี่ยวเนื่องกับโรคมะเร็งตามวงเงินของแผน</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>เคมีบำบัด</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>รังสีรักษา</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ยามุ่งเป้า/ภูมิคุ้มกันบำบัด (ขึ้นอยู่กับแผน)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ลักษณะการจ่าย</div>
          <div class="value">ตามค่าใช้จ่ายจริง/วงเงิน</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ความคุ้มครองเสริม</h3>
          <span class="coverage-card-badge alt">ตัวเลือกเพิ่มเติม</span>
        </div>
        <p class="coverage-card-tag">ไม่ได้รวมในทุกแผน ควรสอบถามและซื้อเพิ่มเติมหากต้องการ</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ค่าชดเชยรายวันขณะนอนโรงพยาบาล</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความคุ้มครองโรคร้ายแรงอื่นนอกจากมะเร็ง</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ต้องซื้อเพิ่ม</div>
          <div class="value">บางบริษัทเท่านั้น</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายละเอียดความคุ้มครอง วงเงิน และเงื่อนไขที่แน่นอนแตกต่างกันมากในแต่ละบริษัทและแผน ให้เราช่วยเปรียบเทียบแผนที่เหมาะกับอายุและงบประมาณของคุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">ประกันมะเร็ง ช่วยลดภาระค่าใช้จ่ายก้อนใหญ่หากตรวจพบโรคมะเร็ง โดยทั่วไปให้ความคุ้มครองทั้งเงินก้อนเมื่อตรวจพบและค่ารักษาพยาบาลต่อเนื่อง มะเร็งเป็นหนึ่งในสาเหตุการเจ็บป่วยร้ายแรงที่พบบ่อยและมีค่ารักษาที่อาจสูงต่อเนื่องเป็นระยะเวลานาน เราช่วยเปรียบเทียบแผนความคุ้มครองที่เหมาะกับอายุและความต้องการของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ประกันมะเร็งเป็นความคุ้มครองเฉพาะทาง ไม่ใช่สิ่งเดียวกับประกันสุขภาพทั่วไปหรือประกันโรคร้ายแรงแบบครอบคลุมหลายโรค ควรพิจารณาร่วมกับความคุ้มครองอื่นที่มีอยู่แล้ว ไม่ใช่ซื้อซ้ำซ้อนโดยไม่จำเป็น</p>
    </div>

    <h3>เงินก้อนเมื่อตรวจพบ (Diagnosis Benefit)</h3>
    <p>จ่ายเป็นเงินก้อนทันทีเมื่อแพทย์วินิจฉัยว่าเป็นมะเร็งตามเงื่อนไขกรมธรรม์ นำไปใช้จ่ายส่วนใดก็ได้ตามต้องการ ไม่จำเป็นต้องเป็นค่ารักษาพยาบาลเท่านั้น</p>
    <ul>
      <li>บางแผนแบ่งจ่ายตามระยะของโรค เช่น จ่ายน้อยกว่าสำหรับระยะเริ่มต้น และจ่ายเพิ่มเติมหากลุกลามในภายหลัง</li>
      <li>บางแผนจ่ายเป็นเงินก้อนเดียวครั้งเดียวไม่ว่าจะพบในระยะใด</li>
    </ul>

    <h3>ค่ารักษาพยาบาลต่อเนื่อง (Treatment Benefit)</h3>
    <p>คุ้มครองค่าใช้จ่ายในการรักษาที่เกี่ยวเนื่องกับโรคมะเร็งตามวงเงินของแผน มักครอบคลุมการรักษาหลัก เช่น เคมีบำบัดและรังสีรักษา ส่วนการรักษาแบบใหม่ เช่น ยามุ่งเป้าหรือภูมิคุ้มกันบำบัด ควรตรวจสอบว่าอยู่ในความคุ้มครองหรือไม่</p>

    <h3>ตารางเปรียบเทียบตามระยะของโรค</h3>
    <div class="coverage-matrix-legend">
      <span><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> มักคุ้มครอง</span>
      <span><span class="cm-no">–</span> ขึ้นอยู่กับแผน / ไม่รวม</span>
    </div>
    <div class="table-scroll">
      <table class="coverage-matrix">
        <thead>
          <tr>
            <th class="coverage-matrix-label">ระยะของโรค</th>
            <th>เงินก้อนเมื่อตรวจพบ</th>
            <th>ค่ารักษาพยาบาลต่อเนื่อง</th>
            <th>ค่าชดเชยรายวัน</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="coverage-matrix-label">ระยะเริ่มต้น (Non-invasive / ระยะที่ 1)</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ระยะลุกลาม (Invasive / ระยะที่ 2 ขึ้นไป)</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="coverage-matrix-note">หลายแผนในตลาดจ่ายเงินก้อนสำหรับระยะลุกลามสูงกว่าระยะเริ่มต้น และค่าชดเชยรายวันมักเป็นตัวเลือกเสริมที่ต้องซื้อเพิ่ม รายละเอียดที่แน่นอนแตกต่างกันไปตามแต่ละบริษัทและแผน ควรตรวจสอบก่อนตัดสินใจซื้อเสมอ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันมะเร็ง</h3>
    <ol>
      <li>อายุ ณ วันสมัคร — อายุมากขึ้นมักมีเบี้ยประกันสูงขึ้น</li>
      <li>ประวัติสุขภาพส่วนตัวและครอบครัว — ประวัติมะเร็งในครอบครัวอาจมีผลต่อการพิจารณารับประกัน</li>
      <li>วงเงินความคุ้มครองที่เลือก — วงเงินสูงมักมีเบี้ยสูงตามไปด้วย</li>
      <li>รูปแบบกรมธรรม์ — แบบระยะสั้นรายปีหรือแบบคุ้มครองระยะยาว/ตลอดชีพ</li>
      <li>เพศ — บางบริษัทกำหนดเบี้ยแยกตามเพศ เนื่องจากความเสี่ยงมะเร็งบางชนิดต่างกัน</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลส่วนตัว</span><span class="plan-desc">ชื่อ อายุ เพศ และข้อมูลติดต่อ</span></li>
      <li><span class="plan-name">ประวัติสุขภาพ</span><span class="plan-desc">ประวัติสุขภาพส่วนตัวและประวัติมะเร็งในครอบครัว (ถ้ามี)</span></li>
      <li><span class="plan-name">ความคุ้มครองที่มีอยู่แล้ว</span><span class="plan-desc">ประกันสุขภาพหรือประกันโรคร้ายแรงที่มีอยู่ เพื่อไม่ให้ซื้อซ้ำซ้อน</span></li>
      <li><span class="plan-name">งบประมาณและวงเงินที่ต้องการ</span><span class="plan-desc">จำนวนเบี้ยที่รับได้ต่อปีและวงเงินความคุ้มครองที่ต้องการ</span></li>
    </ul>

    <h3>เคล็ดลับเลือกประกันมะเร็ง</h3>
    <ul>
      <li>เช็กระยะเวลารอคอย (Waiting Period) ของแต่ละแผนก่อนตัดสินใจ</li>
      <li>เปรียบเทียบว่าแผนจ่ายเงินก้อนอย่างไร ครั้งเดียวหรือแบ่งตามระยะของโรค</li>
      <li>พิจารณาความคุ้มครองที่มีอยู่แล้วก่อน เพื่อไม่ให้ซื้อซ้ำซ้อนโดยไม่จำเป็น</li>
      <li>แจ้งประวัติสุขภาพตามจริงในใบคำขอเอาประกันเสมอ เพื่อไม่ให้มีปัญหาตอนเคลม</li>
      <li>อ่านข้อยกเว้นและเงื่อนไขกรมธรรม์อย่างละเอียดก่อนตัดสินใจซื้อทุกครั้ง</li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามอายุและประวัติสุขภาพแต่ละราย ให้เราช่วยเสนอแผนที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันมะเร็ง</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>ประกันมะเร็งคุ้มครองอะไรบ้าง?</h3>
        <p>โดยทั่วไปครอบคลุมทั้งเงินก้อนเมื่อตรวจพบโรคและค่ารักษาพยาบาลต่อเนื่อง รายละเอียดความคุ้มครองที่แน่นอนแตกต่างกันไปตามแผนและบริษัท ควรตรวจสอบก่อนตัดสินใจซื้อ</p>
      </div>
      <div class="faq-item">
        <h3>มีประกันสุขภาพอยู่แล้ว ยังจำเป็นต้องซื้อประกันมะเร็งไหม?</h3>
        <p>ประกันมะเร็งเป็นความคุ้มครองเฉพาะทางที่เสริมจากประกันสุขภาพทั่วไป ไม่ใช่เรื่องเดียวกัน ควรพิจารณาตามความเสี่ยงและงบประมาณของแต่ละคน</p>
      </div>
      <div class="faq-item">
        <h3>อายุเท่าไหร่ถึงซื้อประกันมะเร็งได้?</h3>
        <p>เงื่อนไขอายุรับประกันแตกต่างกันไปตามแต่ละบริษัทและแผน ควรสอบถามรายละเอียดที่แน่นอนกับบริษัทประกันที่สนใจ</p>
      </div>
      <div class="faq-item">
        <h3>ประกันมะเร็งมีระยะเวลารอคอย (Waiting Period) ไหม?</h3>
        <p>ส่วนใหญ่มี โดยทั่วไปกรมธรรม์จะเริ่มคุ้มครองการตรวจพบมะเร็งหลังจากผ่านระยะเวลารอคอยตามที่ระบุไว้ ระยะเวลาที่แน่นอนแตกต่างกันไปตามแต่ละบริษัทและแผน ควรอ่านเงื่อนไขนี้ให้ละเอียดก่อนซื้อ</p>
      </div>
      <div class="faq-item">
        <h3>หากเคยมีประวัติเนื้องอกหรือมะเร็งมาก่อน ยังซื้อประกันมะเร็งได้ไหม?</h3>
        <p>ขึ้นอยู่กับการพิจารณารับประกันของแต่ละบริษัท ประวัติสุขภาพที่เกี่ยวข้องอาจทำให้ถูกปฏิเสธหรือมีเงื่อนไขยกเว้นเฉพาะจุด ควรแจ้งประวัติสุขภาพตามจริงในใบคำขอเอาประกันเสมอ</p>
      </div>
      <div class="faq-item">
        <h3>ประกันมะเร็งจ่ายเงินก้อนครั้งเดียวหรือจ่ายซ้ำได้?</h3>
        <p>ขึ้นอยู่กับแบบกรมธรรม์ที่เลือก บางแผนจ่ายเงินก้อนเมื่อตรวจพบครั้งแรกเพียงครั้งเดียว บางแผนออกแบบให้จ่ายตามระยะของโรคหรือคุ้มครองการกลับมาเป็นซ้ำ ควรอ่านเงื่อนไขการจ่ายผลประโยชน์ให้ละเอียดก่อนตัดสินใจ</p>
      </div>
    </div>

    <h2>คำศัพท์ทั่วไปเกี่ยวกับประกันมะเร็ง</h2>
    <ul>
      <li><strong>ระยะเวลารอคอย (Waiting Period):</strong> ช่วงเวลาหลังทำประกันที่ยังไม่ได้รับความคุ้มครองสำหรับการตรวจพบโรค หากตรวจพบในช่วงนี้มักไม่ได้รับผลประโยชน์</li>
      <li><strong>โรคที่เป็นมาก่อนการทำประกัน (Pre-existing Condition):</strong> โรคหรืออาการที่มีอยู่ก่อนวันทำประกัน ซึ่งมักถูกยกเว้นความคุ้มครองหรือต้องแจ้งให้บริษัททราบ</li>
      <li><strong>ผู้รับผลประโยชน์ (Beneficiary):</strong> บุคคลที่ระบุไว้ในกรมธรรม์ให้เป็นผู้ได้รับเงินผลประโยชน์</li>
      <li><strong>เบี้ยประกัน:</strong> จำนวนเงินที่จ่ายเพื่อซื้อความคุ้มครองตามกรมธรรม์ โดยทั่วไปจ่ายเป็นรายปี</li>
    </ul>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
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
    <h2>สนใจประกันมะเร็งหรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่เหมาะกับอายุและงบประมาณของคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/contact-us/#topics' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
