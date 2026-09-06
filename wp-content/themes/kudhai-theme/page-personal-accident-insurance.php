<?php
/**
 * Template for the /personal-accident-insurance/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันอุบัติเหตุ",
  "name": "ประกันอุบัติเหตุ (PA)",
  "description": "ประกันอุบัติเหตุ (PA) คุ้มครองค่ารักษา ทุพพลภาพ และเสียชีวิตจากอุบัติเหตุ ทั้งในและนอกเวลางาน เปรียบเทียบแผนจากที่ปรึกษาประกันภัย ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/personal-accident-insurance/' ) ); ?>",
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
    { "@type": "ListItem", "position": 3, "name": "ประกันอุบัติเหตุ (PA)", "item": "<?php echo esc_url( home_url( '/personal-accident-insurance/' ) ); ?>" }
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
      "name": "ประกันอุบัติเหตุต่างจากประกันสุขภาพอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "ประกันอุบัติเหตุคุ้มครองเฉพาะเหตุการณ์ที่เกิดจากอุบัติเหตุเท่านั้น ไม่ครอบคลุมการเจ็บป่วยทั่วไปเหมือนประกันสุขภาพ ทั้งสองอย่างจึงเสริมกันได้ ไม่ใช่เรื่องเดียวกัน" }
    },
    {
      "@type": "Question",
      "name": "ประกัน PA คุ้มครองเฉพาะอุบัติเหตุร้ายแรงเท่านั้นไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ไม่จำเป็น หลายแผนคุ้มครองตั้งแต่การบาดเจ็บทั่วไปไปจนถึงทุพพลภาพและเสียชีวิต ขอบเขตความคุ้มครองที่แน่นอนขึ้นอยู่กับแผนที่เลือก" }
    },
    {
      "@type": "Question",
      "name": "ซื้อประกันอุบัติเหตุออนไลน์ได้ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ได้ เราช่วยดำเนินการให้ตั้งแต่ขอใบเสนอราคาไปจนถึงออกกรมธรรม์ผ่านช่องทางออนไลน์" }
    },
    {
      "@type": "Question",
      "name": "แผนคุ้มครอง 24 ชั่วโมงกับแผนเฉพาะในเวลางานต่างกันอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "แผน 24 ชั่วโมงคุ้มครองอุบัติเหตุทุกที่ทุกเวลารวมถึงวันหยุดและวันลา ส่วนแผนเฉพาะในเวลางานคุ้มครองเฉพาะช่วงที่ปฏิบัติงานตามที่ระบุ ซึ่งมักมีเบี้ยประกันต่ำกว่า ควรเลือกตามไลฟ์สไตล์และความเสี่ยงนอกเวลางานของคุณ" }
    },
    {
      "@type": "Question",
      "name": "ประกันอุบัติเหตุคุ้มครองระหว่างเดินทางต่างประเทศไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับแผนที่เลือก บางแผน 24 ชั่วโมงคุ้มครองครอบคลุมระหว่างเดินทางต่างประเทศด้วย ควรตรวจสอบเงื่อนไขนี้กับบริษัทประกันหากมีแผนเดินทางบ่อย" }
    },
    {
      "@type": "Question",
      "name": "มีประกันกลุ่มจากที่ทำงานอยู่แล้ว ยังจำเป็นต้องซื้อ PA ส่วนตัวไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ประกันกลุ่มมักมีวงเงินความคุ้มครองจำกัดและสิ้นสุดเมื่อออกจากงาน การมี PA ส่วนตัวเพิ่มเติมช่วยให้มีความคุ้มครองต่อเนื่องและวงเงินที่เหมาะกับความต้องการของคุณเองมากขึ้น ควรพิจารณาตามความเสี่ยงและงบประมาณ" }
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
      <span class="current">ประกันอุบัติเหตุ (PA)</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4zM7 12h2l1.5-3 2 6 1.5-3H17"/></svg>
      ประกันอุบัติเหตุ (PA)
    </span>
    <h1>ประกันอุบัติเหตุ (PA)</h1>
    <p>ความคุ้มครองพื้นฐานที่ควรมีติดตัว ครอบคลุมอุบัติเหตุทั้งในและนอกเวลางาน เปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้เหมาะกับไลฟ์สไตล์ของคุณ</p>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        ขอบเขตความคุ้มครองของประกันอุบัติเหตุ
      </span>
      <h2>แผน 24 ชั่วโมง กับแผนเฉพาะในเวลางาน ต่างกันอย่างไร</h2>
      <p>ผลประโยชน์หลัก (ค่ารักษาพยาบาล ทุพพลภาพ เสียชีวิต) เหมือนกัน แต่ต่างกันที่ขอบเขตเวลาและสถานที่ที่คุ้มครอง</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>แผน 24 ชั่วโมง</h3>
          <span class="coverage-card-badge">คุ้มครองกว้างที่สุด</span>
        </div>
        <p class="coverage-card-tag">คุ้มครองอุบัติเหตุทุกที่ทุกเวลา รวมวันหยุดและวันลา</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลจากอุบัติเหตุ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ทุพพลภาพถาวรหรือชั่วคราว</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>เสียชีวิตจากอุบัติเหตุ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>นอกเวลางานและวันหยุด</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">สูงกว่า</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>แผนเฉพาะในเวลางาน</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองเฉพาะช่วงเวลาปฏิบัติงานตามที่ระบุ เบี้ยประกันมักประหยัดกว่า</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลจากอุบัติเหตุ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ทุพพลภาพถาวรหรือชั่วคราว</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>เสียชีวิตจากอุบัติเหตุ</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>นอกเวลางานและวันหยุด</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ประหยัดกว่า</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      ขอบเขตความคุ้มครองและวงเงินที่แน่นอนแตกต่างกันมากในแต่ละบริษัทและแผน หากไม่แน่ใจว่าควรเลือกแผนใด ให้เราช่วยประเมินตามไลฟ์สไตล์ของคุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">ประกันอุบัติเหตุส่วนบุคคล (Personal Accident หรือ PA) คุ้มครองค่ารักษาพยาบาล ทุพพลภาพ และเสียชีวิตจากอุบัติเหตุ เหมาะเป็นความคุ้มครองพื้นฐานเสริมจากประกันอื่นที่มีอยู่ เนื่องจากเบี้ยประกันมักไม่สูงเมื่อเทียบกับความคุ้มครองที่ได้รับ เราช่วยเปรียบเทียบแผนที่เหมาะกับไลฟ์สไตล์และงบประมาณของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ประกันอุบัติเหตุคุ้มครองเฉพาะเหตุการณ์ที่เกิดจากอุบัติเหตุภายนอกร่างกายเท่านั้น ไม่คุ้มครองการเจ็บป่วยจากโรคภัยทั่วไป จึงควรมีไว้เสริมจากประกันสุขภาพ ไม่ใช่ใช้ทดแทนกัน</p>
    </div>

    <h3>ค่ารักษาพยาบาล</h3>
    <p>คุ้มครองค่ารักษาพยาบาลจากอุบัติเหตุตามวงเงินของแผนที่เลือก มักจ่ายตามค่าใช้จ่ายจริงแต่ไม่เกินวงเงินที่ระบุในกรมธรรม์</p>

    <h3>ทุพพลภาพ</h3>
    <p>คุ้มครองกรณีทุพพลภาพถาวรหรือชั่วคราวจากอุบัติเหตุตามเงื่อนไขกรมธรรม์ วงเงินและระดับความคุ้มครองแตกต่างกันไปตามความรุนแรงและแผนที่เลือก</p>

    <h3>เสียชีวิต</h3>
    <p>คุ้มครองกรณีเสียชีวิตจากอุบัติเหตุตามวงเงินที่ระบุในกรมธรรม์ จ่ายให้ผู้รับผลประโยชน์ที่ระบุไว้</p>

    <h3>ตารางเปรียบเทียบขอบเขตความคุ้มครอง</h3>
    <div class="coverage-matrix-legend">
      <span><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> คุ้มครอง</span>
      <span><span class="cm-no">–</span> ไม่คุ้มครอง / ขึ้นอยู่กับแผน</span>
    </div>
    <div class="table-scroll">
      <table class="coverage-matrix">
        <thead>
          <tr>
            <th class="coverage-matrix-label">ความคุ้มครอง</th>
            <th>แผน 24 ชั่วโมง</th>
            <th>แผนเฉพาะในเวลางาน</th>
          </tr>
        </thead>
        <tbody>
          <tr class="coverage-matrix-group"><td colspan="3">ความคุ้มครองหลัก</td></tr>
          <tr>
            <td class="coverage-matrix-label">ค่ารักษาพยาบาลจากอุบัติเหตุ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ทุพพลภาพถาวร</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ทุพพลภาพชั่วคราว (ชดเชยรายได้)</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">เสียชีวิตจากอุบัติเหตุ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
          </tr>
          <tr class="coverage-matrix-group"><td colspan="3">ขอบเขตเวลาและสถานที่</td></tr>
          <tr>
            <td class="coverage-matrix-label">นอกเวลางานและวันหยุด</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ระหว่างเดินทางต่างประเทศ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="coverage-matrix-note">สรุปจากแนวทางทั่วไปในตลาด รายละเอียดความคุ้มครอง วงเงิน และเงื่อนไขที่แน่นอนแตกต่างกันไปตามแต่ละบริษัทและแผน ควรตรวจสอบก่อนตัดสินใจซื้อเสมอ</p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันอุบัติเหตุ</h3>
    <ol>
      <li>อาชีพและลักษณะงาน — งานที่มีความเสี่ยงสูง (เช่น งานก่อสร้างหรือใช้เครื่องจักร) มักมีเบี้ยสูงกว่า</li>
      <li>ขอบเขตความคุ้มครอง — แผน 24 ชั่วโมงมักมีเบี้ยสูงกว่าแผนเฉพาะในเวลางาน</li>
      <li>อายุ ณ วันสมัคร</li>
      <li>วงเงินความคุ้มครองที่เลือกในแต่ละหมวด (ค่ารักษา ทุพพลภาพ เสียชีวิต)</li>
      <li>ความคุ้มครองเสริม เช่น การชดเชยรายได้ระหว่างพักฟื้น</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลส่วนตัว</span><span class="plan-desc">ชื่อ อายุ และข้อมูลติดต่อ</span></li>
      <li><span class="plan-name">อาชีพและลักษณะงาน</span><span class="plan-desc">ตำแหน่งงานและความเสี่ยงที่เกี่ยวข้องกับการทำงาน</span></li>
      <li><span class="plan-name">ไลฟ์สไตล์</span><span class="plan-desc">กิจกรรมเสี่ยง การเดินทางบ่อย หรือกีฬาที่เล่นเป็นประจำ (ถ้ามี)</span></li>
      <li><span class="plan-name">ความคุ้มครองที่มีอยู่แล้ว</span><span class="plan-desc">ประกันกลุ่มจากที่ทำงานหรือประกันสุขภาพอื่นที่มีอยู่</span></li>
    </ul>

    <h3>เคล็ดลับเลือกประกันอุบัติเหตุ</h3>
    <ul>
      <li>เลือกขอบเขตความคุ้มครอง (24 ชั่วโมง หรือเฉพาะในเวลางาน) ให้ตรงกับไลฟ์สไตล์จริงของคุณ</li>
      <li>ตรวจสอบวงเงินความคุ้มครองแต่ละหมวดให้เหมาะกับความต้องการ ไม่ใช่ดูแค่เบี้ยที่ถูกที่สุด</li>
      <li>แจ้งอาชีพและกิจกรรมเสี่ยงตามจริง เพื่อไม่ให้มีปัญหาตอนเคลม</li>
      <li>พิจารณาความคุ้มครองที่มีอยู่แล้ว เช่น ประกันกลุ่มจากที่ทำงาน ก่อนซื้อเพิ่มเติม</li>
      <li>อ่านข้อยกเว้นกรมธรรม์อย่างละเอียด เช่น กีฬาผาดโผนหรือกิจกรรมเสี่ยงที่อาจไม่รวมอยู่ในความคุ้มครอง</li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามอาชีพและไลฟ์สไตล์แต่ละราย ให้เราช่วยเสนอแผนที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันอุบัติเหตุ</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>ประกันอุบัติเหตุต่างจากประกันสุขภาพอย่างไร?</h3>
        <p>ประกันอุบัติเหตุคุ้มครองเฉพาะเหตุการณ์ที่เกิดจากอุบัติเหตุเท่านั้น ไม่ครอบคลุมการเจ็บป่วยทั่วไปเหมือนประกันสุขภาพ ทั้งสองอย่างจึงเสริมกันได้ ไม่ใช่เรื่องเดียวกัน</p>
      </div>
      <div class="faq-item">
        <h3>ประกัน PA คุ้มครองเฉพาะอุบัติเหตุร้ายแรงเท่านั้นไหม?</h3>
        <p>ไม่จำเป็น หลายแผนคุ้มครองตั้งแต่การบาดเจ็บทั่วไปไปจนถึงทุพพลภาพและเสียชีวิต ขอบเขตความคุ้มครองที่แน่นอนขึ้นอยู่กับแผนที่เลือก</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อประกันอุบัติเหตุออนไลน์ได้ไหม?</h3>
        <p>ได้ เราช่วยดำเนินการให้ตั้งแต่ขอใบเสนอราคาไปจนถึงออกกรมธรรม์ผ่านช่องทางออนไลน์</p>
      </div>
      <div class="faq-item">
        <h3>แผนคุ้มครอง 24 ชั่วโมงกับแผนเฉพาะในเวลางานต่างกันอย่างไร?</h3>
        <p>แผน 24 ชั่วโมงคุ้มครองอุบัติเหตุทุกที่ทุกเวลารวมถึงวันหยุดและวันลา ส่วนแผนเฉพาะในเวลางานคุ้มครองเฉพาะช่วงที่ปฏิบัติงานตามที่ระบุ ซึ่งมักมีเบี้ยประกันต่ำกว่า ควรเลือกตามไลฟ์สไตล์และความเสี่ยงนอกเวลางานของคุณ</p>
      </div>
      <div class="faq-item">
        <h3>ประกันอุบัติเหตุคุ้มครองระหว่างเดินทางต่างประเทศไหม?</h3>
        <p>ขึ้นอยู่กับแผนที่เลือก บางแผน 24 ชั่วโมงคุ้มครองครอบคลุมระหว่างเดินทางต่างประเทศด้วย ควรตรวจสอบเงื่อนไขนี้กับบริษัทประกันหากมีแผนเดินทางบ่อย</p>
      </div>
      <div class="faq-item">
        <h3>มีประกันกลุ่มจากที่ทำงานอยู่แล้ว ยังจำเป็นต้องซื้อ PA ส่วนตัวไหม?</h3>
        <p>ประกันกลุ่มมักมีวงเงินความคุ้มครองจำกัดและสิ้นสุดเมื่อออกจากงาน การมี PA ส่วนตัวเพิ่มเติมช่วยให้มีความคุ้มครองต่อเนื่องและวงเงินที่เหมาะกับความต้องการของคุณเองมากขึ้น ควรพิจารณาตามความเสี่ยงและงบประมาณ</p>
      </div>
    </div>

    <h2>คำศัพท์ทั่วไปเกี่ยวกับประกันอุบัติเหตุ</h2>
    <ul>
      <li><strong>ทุพพลภาพถาวร:</strong> การสูญเสียอวัยวะหรือการทำงานของร่างกายอย่างถาวรจากอุบัติเหตุ ตามเงื่อนไขที่ระบุในกรมธรรม์</li>
      <li><strong>ผู้รับผลประโยชน์ (Beneficiary):</strong> บุคคลที่ระบุไว้ในกรมธรรม์ให้เป็นผู้ได้รับเงินผลประโยชน์กรณีเสียชีวิต</li>
      <li><strong>ข้อยกเว้น (Exclusion):</strong> เหตุการณ์หรือกิจกรรมที่กรมธรรม์ไม่คุ้มครอง เช่น กีฬาผาดโผนบางประเภท ควรอ่านให้ละเอียดก่อนซื้อ</li>
      <li><strong>เบี้ยประกัน:</strong> จำนวนเงินที่จ่ายเพื่อซื้อความคุ้มครองตามกรมธรรม์ โดยทั่วไปจ่ายเป็นรายปี</li>
    </ul>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
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
    <h2>สนใจประกันอุบัติเหตุหรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่เหมาะกับไลฟ์สไตล์ของคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
