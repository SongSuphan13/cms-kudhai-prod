<?php
/**
 * Template for the /car-insurance/electric-vehicle/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "ประกันรถยนต์ไฟฟ้า",
  "name": "ประกันรถยนต์ไฟฟ้า (EV)",
  "description": "เปรียบเทียบประกันรถยนต์ไฟฟ้า (EV) ครอบคลุมแบตเตอรี่ มอเตอร์ไฟฟ้า และอุปกรณ์ชาร์จ จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี",
  "url": "<?php echo esc_url( home_url( '/car-insurance/electric-vehicle/' ) ); ?>",
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
    { "@type": "ListItem", "position": 4, "name": "ประกันรถยนต์ไฟฟ้า (EV)", "item": "<?php echo esc_url( home_url( '/car-insurance/electric-vehicle/' ) ); ?>" }
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
      "name": "ประกันรถยนต์ไฟฟ้าต่างจากประกันรถยนต์ทั่วไปอย่างไร?",
      "acceptedAnswer": { "@type": "Answer", "text": "โครงสร้างชั้นประกัน (1, 2+, 2, 3+, 3, พ.ร.บ.) เหมือนกัน แต่กรมธรรม์สำหรับ EV มักระบุความคุ้มครองเฉพาะเพิ่มเติม เช่น แบตเตอรี่ มอเตอร์ไฟฟ้า และอุปกรณ์ชาร์จ ซึ่งไม่มีในรถยนต์สันดาปทั่วไป ควรตรวจสอบว่ากรมธรรม์ที่เลือกระบุความคุ้มครองส่วนนี้ไว้ชัดเจนหรือไม่" }
    },
    {
      "@type": "Question",
      "name": "ประกันรถยนต์ไฟฟ้าคุ้มครองแบตเตอรี่ไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "โดยทั่วไปกรมธรรม์ชั้น 1 สำหรับ EV จะคุ้มครองความเสียหายต่อแบตเตอรี่จากอุบัติเหตุหรือไฟไหม้ตามเงื่อนไขที่ระบุ บางบริษัทเปิดให้ซื้อความคุ้มครองส่วนต่างมูลค่าแบตเตอรี่เพิ่มเติมได้ ควรสอบถามรายละเอียดความคุ้มครองแบตเตอรี่กับบริษัทประกันโดยตรงก่อนตัดสินใจ" }
    },
    {
      "@type": "Question",
      "name": "ซ่อมรถยนต์ไฟฟ้าต้องใช้อู่ที่ได้รับการรับรองหรือไม่?",
      "acceptedAnswer": { "@type": "Answer", "text": "หลายกรมธรรม์กำหนดให้ซ่อมที่ศูนย์บริการหรืออู่ที่ได้รับการรับรองจากผู้ผลิต โดยเฉพาะงานที่เกี่ยวข้องกับแบตเตอรี่และระบบไฟฟ้าแรงสูง ควรตรวจสอบเงื่อนไขและเครือข่ายอู่ซ่อมของแต่ละบริษัทก่อนซื้อ" }
    },
    {
      "@type": "Question",
      "name": "ติดตั้งที่ชาร์จที่บ้าน (Wallbox) ต้องแจ้งบริษัทประกันไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ควรแจ้งและสอบถามว่ากรมธรรม์คุ้มครองอุปกรณ์ชาร์จที่ติดตั้งถาวรหรือไม่ เนื่องจากบางกรมธรรม์แยกความคุ้มครองอุปกรณ์ชาร์จที่บ้านออกจากตัวรถ" }
    },
    {
      "@type": "Question",
      "name": "เบี้ยประกันรถยนต์ไฟฟ้าแพงกว่ารถยนต์สันดาปไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ไม่มีคำตอบตายตัว ขึ้นอยู่กับรุ่นรถ มูลค่ารถ และต้นทุนการซ่อม ซึ่งบางกรณีอาจสูงกว่าเนื่องจากราคาชิ้นส่วนแบตเตอรี่และจำนวนอู่ที่รับซ่อม EV ยังมีจำกัด ควรขอใบเสนอราคาเพื่อเปรียบเทียบให้ตรงกับรถของคุณโดยเฉพาะ" }
    },
    {
      "@type": "Question",
      "name": "ซื้อความคุ้มครองแบตเตอรี่เพิ่มเติมคุ้มไหม?",
      "acceptedAnswer": { "@type": "Answer", "text": "ขึ้นอยู่กับมูลค่าแบตเตอรี่ อายุการใช้งาน และเงื่อนไขของแต่ละบริษัท เนื่องจากแบตเตอรี่มักเป็นชิ้นส่วนที่มีมูลค่าสูงและอาจเสื่อมสภาพตามอายุ ควรสอบถามรายละเอียดและเปรียบเทียบก่อนตัดสินใจซื้อเพิ่มเติม" }
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
      <span class="current">ประกันรถยนต์ไฟฟ้า (EV)</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>
      ประกันรถยนต์ไฟฟ้า (EV)
    </span>
    <h1>ประกันรถยนต์ไฟฟ้า (EV)</h1>
    <p>โครงสร้างชั้นประกันเหมือนรถยนต์ทั่วไป แต่มีความคุ้มครองเฉพาะสำหรับแบตเตอรี่ มอเตอร์ไฟฟ้า และอุปกรณ์ชาร์จ ให้เราช่วยเปรียบเทียบแผนที่ครอบคลุมส่วนสำคัญของรถ EV คุณ</p>
  </div>
</section>

<!-- ============ EV-SPECIFIC COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        ความคุ้มครองเฉพาะรถยนต์ไฟฟ้า
      </span>
      <h2>อะไรที่ต่างจากประกันรถยนต์ทั่วไป</h2>
      <p>นอกจากชั้นประกัน 1, 2+, 2, 3+, 3 และ พ.ร.บ. ที่<a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">เหมือนกับประกันรถยนต์ทั่วไป</a> รถยนต์ไฟฟ้ายังมีจุดที่ควรตรวจสอบเพิ่มเติมดังนี้</p>
    </div>

    <div class="coverage-grid">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>แบตเตอรี่</h3>
          <span class="coverage-card-badge">มูลค่าสูงสุด</span>
        </div>
        <p class="coverage-card-tag">ชิ้นส่วนที่มีมูลค่าสูงที่สุดของรถ EV ควรตรวจสอบเงื่อนไขความคุ้มครองให้ชัดเจน</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายจากอุบัติเหตุ (ชั้น 1)</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ไฟไหม้แบตเตอรี่</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>การเสื่อมสภาพตามอายุการใช้งานปกติ</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ความคุ้มครองเพิ่มเติม</div>
          <div class="value">ซื้อเสริมได้บางบริษัท</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>มอเตอร์ไฟฟ้า</h3>
        </div>
        <p class="coverage-card-tag">ระบบขับเคลื่อนหลักแทนเครื่องยนต์สันดาป</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายจากอุบัติเหตุ (ชั้น 1)</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ไฟไหม้หรือน้ำท่วม</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ต้องซ่อมที่</div>
          <div class="value">อู่/ศูนย์ที่รับรอง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>อุปกรณ์ชาร์จ</h3>
        </div>
        <p class="coverage-card-tag">สายชาร์จติดรถและเครื่องชาร์จ (Wallbox) ที่ติดตั้งที่บ้าน</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>สายชาร์จที่ติดมากับรถ (บางกรมธรรม์)</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>เครื่องชาร์จติดตั้งที่บ้าน (มักต้องแจ้งแยก)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ควรแจ้ง</div>
          <div class="value">ก่อนทำประกัน</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ระบบอิเล็กทรอนิกส์ควบคุมรถ</h3>
        </div>
        <p class="coverage-card-tag">ระบบควบคุมแบตเตอรี่ (BMS) และเซนเซอร์ต่าง ๆ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายจากอุบัติเหตุ (ชั้น 1)</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ความผิดพลาดของซอฟต์แวร์/เฟิร์มแวร์</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เงื่อนไข</div>
          <div class="value">แตกต่างตามบริษัท</div>
        </div>
      </div>

    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      ความคุ้มครองเฉพาะรถ EV ส่วนใหญ่ผูกอยู่กับชั้น 1 เท่านั้น และเงื่อนไขจริงแตกต่างกันมากในแต่ละบริษัท ให้เราช่วยเปรียบเทียบแผนที่ครอบคลุมรถ EV รุ่นของคุณได้ฟรี
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">ประกันรถยนต์ไฟฟ้า (EV) ใช้โครงสร้างชั้นประกันเดียวกับ<a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์ทั่วไป</a> คือชั้น 1, 2+, 2, 3+, 3 และ พ.ร.บ. แต่มีรายละเอียดความคุ้มครองเฉพาะที่ต้องตรวจสอบเพิ่มเติม เนื่องจากรถ EV มีชิ้นส่วนสำคัญที่ต่างจากรถยนต์สันดาป ทั้งแบตเตอรี่ มอเตอร์ไฟฟ้า และอุปกรณ์ชาร์จ เราช่วยเปรียบเทียบแผนจากหลายบริษัทให้ครอบคลุมส่วนสำคัญเหล่านี้ให้ตรงกับรุ่นรถของคุณ</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ไม่ใช่ทุกกรมธรรม์ประกันรถยนต์จะระบุความคุ้มครองเฉพาะสำหรับแบตเตอรี่หรือมอเตอร์ไฟฟ้าไว้ชัดเจน บางฉบับอาจถือว่าชิ้นส่วนเหล่านี้เป็นส่วนหนึ่งของตัวรถโดยรวม ควรสอบถามและอ่านเงื่อนไขกรมธรรม์ให้ละเอียดก่อนตัดสินใจซื้อ</p>
    </div>

    <h3>เหตุใดประกัน EV จึงต้องพิจารณาต่างจากรถยนต์ทั่วไป</h3>
    <ul>
      <li>แบตเตอรี่เป็นชิ้นส่วนที่มีมูลค่าสูงที่สุดของรถ ความเสียหายอาจทำให้ค่าซ่อมสูงกว่ารถยนต์สันดาปทั่วไป</li>
      <li>จำนวนอู่หรือศูนย์บริการที่ได้รับการรับรองให้ซ่อมรถ EV ยังมีจำกัดกว่ารถยนต์ทั่วไปในบางพื้นที่</li>
      <li>อุปกรณ์ชาร์จที่บ้าน (Wallbox) มักไม่ถูกนับรวมเป็นส่วนหนึ่งของตัวรถ อาจต้องแจ้งหรือซื้อความคุ้มครองแยก</li>
      <li>ความเสี่ยงจากไฟไหม้ที่เกี่ยวข้องกับระบบไฟฟ้าแรงสูงมีลักษณะต่างจากไฟไหม้ในรถยนต์สันดาป</li>
    </ul>

    <h3>ตารางเปรียบเทียบความคุ้มครองเฉพาะรถ EV</h3>
    <div class="coverage-matrix-legend">
      <span><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> คุ้มครอง</span>
      <span><span class="cm-no">–</span> ไม่คุ้มครอง / ขึ้นอยู่กับเงื่อนไข</span>
      <span>คอลัมน์ไฮไลต์ = ชั้น 1</span>
    </div>
    <div class="table-scroll">
      <table class="coverage-matrix">
        <thead>
          <tr>
            <th class="coverage-matrix-label">ความคุ้มครองเฉพาะ EV</th>
            <th>ชั้น 1</th>
            <th>ชั้น 2+ / 3+</th>
            <th>พ.ร.บ.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="coverage-matrix-label">ความเสียหายต่อแบตเตอรี่จากอุบัติเหตุ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ไฟไหม้แบตเตอรี่ / มอเตอร์ไฟฟ้า</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">สายชาร์จที่ติดมากับรถ</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
          <tr>
            <td class="coverage-matrix-label">ซื้อความคุ้มครองส่วนต่างมูลค่าแบตเตอรี่เพิ่มเติม</td>
            <td class="coverage-matrix-mark"><span class="cm-yes"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
            <td class="coverage-matrix-mark"><span class="cm-no">–</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="coverage-matrix-note">สรุปจากแนวทางทั่วไปในตลาดสำหรับกรมธรรม์ที่ระบุความคุ้มครองเฉพาะ EV ไว้ชัดเจน เงื่อนไข ความคุ้มครอง และตัวเลือกเสริมที่แน่นอนแตกต่างกันไปตามแต่ละบริษัทและรุ่นรถ ควรตรวจสอบก่อนตัดสินใจซื้อเสมอ สำหรับตารางเปรียบเทียบชั้นประกันแบบเต็ม (1, 2+, 2, 3+, 3, พ.ร.บ.) ดูได้ที่<a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">หน้าประกันรถยนต์</a></p>

    <h3>ปัจจัยที่มีผลต่อเบี้ยประกันรถยนต์ไฟฟ้า</h3>
    <ol>
      <li>ยี่ห้อและรุ่นรถ — รุ่นที่มีอู่/ศูนย์ซ่อมรองรับมากอาจมีเบี้ยที่แตกต่างจากรุ่นที่หายาก</li>
      <li>มูลค่าและความจุแบตเตอรี่ — แบตเตอรี่ความจุสูงมักมีมูลค่าสูงตามไปด้วย</li>
      <li>การติดตั้งอุปกรณ์ชาร์จที่บ้าน — ควรแจ้งข้อมูลตามจริงเพื่อพิจารณาความคุ้มครองที่เหมาะสม</li>
      <li>ประวัติการขับขี่และระยะทางที่ใช้งานจริง</li>
      <li>ระดับความคุ้มครองที่เลือกและตัวเลือกเสริมเฉพาะ EV ที่ซื้อเพิ่ม</li>
    </ol>

    <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
    <ul class="plan-list">
      <li><span class="plan-name">ข้อมูลรถยนต์ไฟฟ้า</span><span class="plan-desc">ยี่ห้อ รุ่น ปีที่ผลิต ความจุแบตเตอรี่ และหมายเลขทะเบียนรถ</span></li>
      <li><span class="plan-name">ข้อมูลอุปกรณ์ชาร์จ</span><span class="plan-desc">มีเครื่องชาร์จติดตั้งที่บ้าน (Wallbox) หรือไม่ และยี่ห้อ/รุ่นที่ใช้</span></li>
      <li><span class="plan-name">ข้อมูลผู้ขับขี่</span><span class="plan-desc">ชื่อ ข้อมูลติดต่อ เลขที่ใบขับขี่ และประวัติการขับขี่</span></li>
      <li><span class="plan-name">ข้อมูลประกันภัยปัจจุบัน</span><span class="plan-desc">รายละเอียดกรมธรรม์เดิมและส่วนลดประวัติดี (ถ้ามี)</span></li>
    </ul>

    <h3>เคล็ดลับเลือกประกันรถยนต์ไฟฟ้า</h3>
    <ul>
      <li>ตรวจสอบให้แน่ใจว่ากรมธรรม์ระบุความคุ้มครองแบตเตอรี่และมอเตอร์ไฟฟ้าไว้ชัดเจน ไม่ใช่แค่ "ตัวรถ" แบบกว้าง ๆ</li>
      <li>สอบถามเครือข่ายอู่ซ่อมที่ได้รับการรับรองสำหรับรุ่นรถของคุณก่อนตัดสินใจซื้อ</li>
      <li>พิจารณาซื้อความคุ้มครองส่วนต่างมูลค่าแบตเตอรี่เพิ่มเติม หากรถมีมูลค่าแบตเตอรี่สูง</li>
      <li>แจ้งข้อมูลอุปกรณ์ชาร์จที่บ้านตามจริง เพื่อพิจารณาความคุ้มครองที่ครอบคลุม</li>
      <li>เปรียบเทียบเงื่อนไขจากหลายบริษัท เนื่องจากรายละเอียดความคุ้มครองเฉพาะ EV ยังแตกต่างกันมาก</li>
    </ul>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามรถหรือลักษณะการใช้งานแต่ละราย ให้เราช่วยเสนอราคาที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <h2>คำถามที่พบบ่อยเกี่ยวกับประกันรถยนต์ไฟฟ้า</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>ประกันรถยนต์ไฟฟ้าต่างจากประกันรถยนต์ทั่วไปอย่างไร?</h3>
        <p>โครงสร้างชั้นประกัน (1, 2+, 2, 3+, 3, พ.ร.บ.) เหมือนกัน แต่กรมธรรม์สำหรับ EV มักระบุความคุ้มครองเฉพาะเพิ่มเติม เช่น แบตเตอรี่ มอเตอร์ไฟฟ้า และอุปกรณ์ชาร์จ ซึ่งไม่มีในรถยนต์สันดาปทั่วไป ควรตรวจสอบว่ากรมธรรม์ที่เลือกระบุความคุ้มครองส่วนนี้ไว้ชัดเจนหรือไม่</p>
      </div>
      <div class="faq-item">
        <h3>ประกันรถยนต์ไฟฟ้าคุ้มครองแบตเตอรี่ไหม?</h3>
        <p>โดยทั่วไปกรมธรรม์ชั้น 1 สำหรับ EV จะคุ้มครองความเสียหายต่อแบตเตอรี่จากอุบัติเหตุหรือไฟไหม้ตามเงื่อนไขที่ระบุ บางบริษัทเปิดให้ซื้อความคุ้มครองส่วนต่างมูลค่าแบตเตอรี่เพิ่มเติมได้ ควรสอบถามรายละเอียดความคุ้มครองแบตเตอรี่กับบริษัทประกันโดยตรงก่อนตัดสินใจ</p>
      </div>
      <div class="faq-item">
        <h3>ซ่อมรถยนต์ไฟฟ้าต้องใช้อู่ที่ได้รับการรับรองหรือไม่?</h3>
        <p>หลายกรมธรรม์กำหนดให้ซ่อมที่ศูนย์บริการหรืออู่ที่ได้รับการรับรองจากผู้ผลิต โดยเฉพาะงานที่เกี่ยวข้องกับแบตเตอรี่และระบบไฟฟ้าแรงสูง ควรตรวจสอบเงื่อนไขและเครือข่ายอู่ซ่อมของแต่ละบริษัทก่อนซื้อ</p>
      </div>
      <div class="faq-item">
        <h3>ติดตั้งที่ชาร์จที่บ้าน (Wallbox) ต้องแจ้งบริษัทประกันไหม?</h3>
        <p>ควรแจ้งและสอบถามว่ากรมธรรม์คุ้มครองอุปกรณ์ชาร์จที่ติดตั้งถาวรหรือไม่ เนื่องจากบางกรมธรรม์แยกความคุ้มครองอุปกรณ์ชาร์จที่บ้านออกจากตัวรถ</p>
      </div>
      <div class="faq-item">
        <h3>เบี้ยประกันรถยนต์ไฟฟ้าแพงกว่ารถยนต์สันดาปไหม?</h3>
        <p>ไม่มีคำตอบตายตัว ขึ้นอยู่กับรุ่นรถ มูลค่ารถ และต้นทุนการซ่อม ซึ่งบางกรณีอาจสูงกว่าเนื่องจากราคาชิ้นส่วนแบตเตอรี่และจำนวนอู่ที่รับซ่อม EV ยังมีจำกัด ควรขอใบเสนอราคาเพื่อเปรียบเทียบให้ตรงกับรถของคุณโดยเฉพาะ</p>
      </div>
      <div class="faq-item">
        <h3>ซื้อความคุ้มครองแบตเตอรี่เพิ่มเติมคุ้มไหม?</h3>
        <p>ขึ้นอยู่กับมูลค่าแบตเตอรี่ อายุการใช้งาน และเงื่อนไขของแต่ละบริษัท เนื่องจากแบตเตอรี่มักเป็นชิ้นส่วนที่มีมูลค่าสูงและอาจเสื่อมสภาพตามอายุ ควรสอบถามรายละเอียดและเปรียบเทียบก่อนตัดสินใจซื้อเพิ่มเติม</p>
      </div>
    </div>

    <h2>คำศัพท์ทั่วไปเกี่ยวกับประกันรถยนต์ไฟฟ้า</h2>
    <ul>
      <li><strong>BMS (Battery Management System):</strong> ระบบอิเล็กทรอนิกส์ที่ควบคุมและตรวจสอบการทำงานของแบตเตอรี่รถยนต์ไฟฟ้า</li>
      <li><strong>Wallbox:</strong> เครื่องชาร์จรถยนต์ไฟฟ้าแบบติดตั้งถาวรที่บ้าน ให้กำลังไฟชาร์จสูงกว่าปลั๊กไฟบ้านทั่วไป</li>
      <li><strong>ความคุ้มครองส่วนต่างมูลค่าแบตเตอรี่:</strong> ตัวเลือกเสริมที่บางบริษัทเปิดให้ซื้อ เพื่อชดเชยมูลค่าแบตเตอรี่ที่อาจเสื่อมสภาพตามอายุการใช้งาน</li>
      <li><strong>อู่/ศูนย์ที่ได้รับการรับรอง:</strong> สถานที่ซ่อมที่ผู้ผลิตรถหรือบริษัทประกันรับรองให้ดำเนินการกับชิ้นส่วนไฟฟ้าแรงสูงของรถ EV ได้</li>
    </ul>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ตารางเปรียบเทียบชั้นประกันรถยนต์แบบเต็ม</a>
        ·
        <a href="<?php echo esc_url( home_url( '/insurance-companies/' ) ); ?>">เปรียบเทียบบริษัทประกันภัยที่เราแนะนำ</a>
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
    <h2>สนใจประกันรถยนต์ไฟฟ้าหรือยัง</h2>
    <p>ส่งข้อมูลรถ EV ของคุณให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่ครอบคลุมแบตเตอรี่และอุปกรณ์ชาร์จให้เหมาะกับคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
