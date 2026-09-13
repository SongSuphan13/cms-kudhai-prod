<?php
/**
 * Template for the /car-insurance/chubb-insurance/ page.
 * Content is hardcoded directly in this file from the Chubb SEO blueprint.
 */
get_header();

$kudhai_chubb_url         = home_url( '/car-insurance/chubb-insurance/' );
$kudhai_chubb_title       = 'ประกันรถยนต์ Chubb มีแบบไหนบ้าง? พร้อมรู้จักประกันประเภทอื่น';
$kudhai_chubb_description = 'รู้จักประกันรถยนต์ Chubb ทั้งชั้น 1, 2, 2+, 3, 3+ และ พ.ร.บ. พร้อมบริการที่เกี่ยวข้อง รวมถึงประกันสุขภาพ โรคมะเร็ง ชดเชยรายได้ และประกันบ้านและคอนโด';
$kudhai_chubb_faq = array(
  array(
    'q' => 'Chubb มีประกันรถยนต์ประเภทอะไรบ้าง?',
    'a' => 'เว็บไซต์ทางการระบุชั้น 1, ประเภท 2, 2+, 3, 3+ และ พ.ร.บ.',
  ),
  array(
    'q' => 'ประกันรถยนต์ 2+ และ 3+ ต่างกันอย่างไร?',
    'a' => 'ทั้งสองประเภทระบุความคุ้มครองตัวรถจากรถชนรถ แต่ 2+ ยังระบุโจรกรรม ไฟไหม้ และน้ำท่วม รายละเอียดอื่นต้องตรวจกรมธรรม์',
  ),
  array(
    'q' => 'มีบริการรับแจ้งอุบัติเหตุ 24 ชั่วโมงหรือไม่?',
    'a' => 'มี เว็บไซต์ทางการระบุศูนย์รับแจ้งอุบัติเหตุทุกวันตลอด 24 ชั่วโมง',
  ),
  array(
    'q' => 'มีบริการช่วยเหลือฉุกเฉินบนท้องถนนหรือไม่?',
    'a' => 'เว็บไซต์ระบุ Roadside Assistance เช่น พ่วงแบตเตอรี่ เปลี่ยนยาง เติมน้ำมันฉุกเฉิน ช่างกุญแจ และรถยก-ลาก โดยต้องตรวจสิทธิของผลิตภัณฑ์',
  ),
  array(
    'q' => 'นอกจากประกันรถยนต์มีประกันสุขภาพหรือไม่?',
    'a' => 'มี โดยเว็บไซต์ทางการนำเสนอประกันสุขภาพ รวมถึงกลุ่มโรคมะเร็งและชดเชยรายได้',
  ),
  array(
    'q' => 'มีประกันบ้านและคอนโดหรือไม่?',
    'a' => 'มี และเว็บไซต์ยังระบุบริการช่วยเหลือฉุกเฉินภายในบ้าน 24 ชั่วโมงในส่วนบริการเสริม',
  ),
  array(
    'q' => 'ควรเลือกประกันรถยนต์ประเภทใด?',
    'a' => 'ควรเริ่มจากขอบเขตความเสี่ยงที่ต้องการคุ้มครอง แล้วตรวจทุนประกัน วงเงิน เงื่อนไข ข้อยกเว้น และบริการของกรมธรรม์จริง',
  ),
);
$kudhai_chubb_schema = array(
  '@context' => 'https://schema.org',
  '@graph'   => array(
    array(
      '@type'       => 'WebPage',
      '@id'         => $kudhai_chubb_url . '#webpage',
      'url'         => $kudhai_chubb_url,
      'name'        => $kudhai_chubb_title,
      'description' => $kudhai_chubb_description,
      'inLanguage'  => 'th-TH',
      'isPartOf'    => array(
        '@type' => 'WebSite',
        'name'  => get_bloginfo( 'name' ),
        'url'   => home_url( '/' ),
      ),
    ),
    array(
      '@type'           => 'BreadcrumbList',
      'itemListElement' => array(
        array(
          '@type'    => 'ListItem',
          'position' => 1,
          'name'     => 'หน้าแรก',
          'item'     => home_url( '/' ),
        ),
        array(
          '@type'    => 'ListItem',
          'position' => 2,
          'name'     => 'ประกันรถยนต์',
          'item'     => home_url( '/car-insurance/' ),
        ),
        array(
          '@type'    => 'ListItem',
          'position' => 3,
          'name'     => 'Chubb',
          'item'     => $kudhai_chubb_url,
        ),
      ),
    ),
    array(
      '@type'      => 'FAQPage',
      'mainEntity' => array_map(
        static function ( $item ) {
          return array(
            '@type'          => 'Question',
            'name'           => $item['q'],
            'acceptedAnswer' => array(
              '@type' => 'Answer',
              'text'  => $item['a'],
            ),
          );
        },
        $kudhai_chubb_faq
      ),
    ),
  ),
);
?>

<script type="application/ld+json">
<?php echo wp_json_encode( $kudhai_chubb_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ); ?>
</script>

<!-- ============ HERO ============ -->
<section class="co-hero">
  <div class="container co-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์</a>
      <span>/</span>
      <span class="current">Chubb</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      ประกันรถยนต์ Chubb
    </span>
    <h1><?php echo esc_html( $kudhai_chubb_title ); ?></h1>
    <p>Chubb มีผลิตภัณฑ์ประกันภัยสำหรับลูกค้าบุคคลหลายกลุ่ม โดยประกันภัยรถยนต์มีทั้งประกันภาคสมัครใจหลายระดับความคุ้มครองและประกันภัยรถยนต์ภาคบังคับ พ.ร.บ. ผู้ใช้รถจึงสามารถเริ่มพิจารณาจากประเภทความคุ้มครองที่ต้องการ ก่อนตรวจรายละเอียดทุนประกัน เงื่อนไข และข้อยกเว้นของกรมธรรม์ที่สนใจ</p>
  </div>
</section>

<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แผนความคุ้มครองของ Chubb
      </span>
      <h2>ประกันรถยนต์ Chubb มีประเภทอะไรบ้าง?</h2>
      <p>เว็บไซต์ทางการระบุประกันภัยรถยนต์ชั้น 1, ประเภท 2, 2+, 3, 3+ และประกันภัยรถยนต์ภาคบังคับ พ.ร.บ. แต่ละประเภทมีขอบเขตความคุ้มครองต่างกัน จึงควรตรวจรายละเอียดกรมธรรม์ก่อนตัดสินใจ</p>
    </div>

    <div class="coverage-grid">
      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">เว็บไซต์ระบุความคุ้มครองความเสียหายต่อตัวรถยนต์และอุปกรณ์ตกแต่งเพิ่มเติมในผลิตภัณฑ์ที่นำเสนอ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อตัวรถยนต์และอุปกรณ์ตกแต่งเพิ่มเติม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>บริการช่วยเหลือฉุกเฉินบนท้องถนน 24 ชั่วโมงในผลิตภัณฑ์ที่กำหนด</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ผลิตภัณฑ์ชั้น 1 บางรายการระบุว่ารับประกันรถอายุสูงสุดถึง 20 ปี</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">เหมาะกับ</div>
          <div class="value">ผู้ที่ต้องการตรวจความคุ้มครองตัวรถในขอบเขตกว้าง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ประเภท 2</h3>
        </div>
        <p class="coverage-card-tag">เว็บไซต์ระบุความคุ้มครองกรณีรถถูกโจรกรรม สูญหาย หรือไฟไหม้</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม สูญหาย หรือไฟไหม้</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>อุบัติเหตุส่วนบุคคลสำหรับผู้ขับขี่และผู้โดยสาร</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ศูนย์รับแจ้งอุบัติเหตุ 24 ชั่วโมง</li>
        </ul>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ประเภท 2+</h3>
        </div>
        <p class="coverage-card-tag">เว็บไซต์ระบุความเสียหายต่อตัวรถจากการเฉี่ยวชนกับยานพาหนะทางบกหรือรถชนรถ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>รถชนรถหรือเฉี่ยวชนกับยานพาหนะทางบก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>โจรกรรม ไฟไหม้ และน้ำท่วม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ศูนย์รับแจ้งอุบัติเหตุ 24 ชั่วโมง</li>
        </ul>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ประเภท 3</h3>
        </div>
        <p class="coverage-card-tag">เน้นความรับผิดต่อบุคคลภายนอกทั้งชีวิตและทรัพย์สิน</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความรับผิดต่อบุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลสำหรับผู้ขับขี่และผู้โดยสาร</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ศูนย์รับแจ้งอุบัติเหตุ 24 ชั่วโมง</li>
        </ul>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ประเภท 3+</h3>
        </div>
        <p class="coverage-card-tag">เพิ่มความคุ้มครองความเสียหายต่อตัวรถจากรถชนรถจากฐานของประเภท 3</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อตัวรถจากรถชนรถ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>อุบัติเหตุส่วนบุคคลสำหรับผู้ขับขี่และผู้โดยสาร</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ศูนย์รับแจ้งอุบัติเหตุ 24 ชั่วโมง</li>
        </ul>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>พ.ร.บ.</h3>
          <span class="coverage-card-badge alt">ภาคบังคับ</span>
        </div>
        <p class="coverage-card-tag">ประกันภัยรถยนต์ภาคบังคับสำหรับผู้ประสบภัยจากรถ</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ค่ารักษาพยาบาลผู้ประสบภัย</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>กรณีสูญเสียอวัยวะหรือทุพพลภาพถาวรสิ้นเชิง</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>กรณีเสียชีวิตจากอุบัติเหตุทางรถยนต์</li>
        </ul>
      </div>
    </div>

    <div class="coverage-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายการนี้เป็นข้อมูลสรุปจากเว็บไซต์ทางการและเป็น Checklist สำหรับตรวจรายละเอียด ไม่ได้หมายความว่าทุกผลิตภัณฑ์มีเงื่อนไขหรือบริการเหมือนกัน
    </div>
  </div>
</section>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <p class="lead">หน้านี้สรุปข้อมูลจากเว็บไซต์ทางการของ Chubb เพื่อช่วยให้เห็นภาพว่าประกันรถยนต์แต่ละประเภทต่างกันอย่างไร มีบริการเกี่ยวกับรถยนต์อะไรบ้าง และนอกจากประกันรถยนต์แล้วยังมีผลิตภัณฑ์ด้านสุขภาพ การชดเชยรายได้ รวมถึงประกันบ้านและคอนโด</p>

    <div class="callout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
      <p>ข้อมูลนี้ใช้เพื่อช่วยเปรียบเทียบประเภทความคุ้มครองก่อนตัดสินใจ รายละเอียดทุนประกัน วงเงิน ความเสียหายส่วนแรก เงื่อนไข และข้อยกเว้นต้องตรวจจากกรมธรรม์จริงทุกครั้ง</p>
    </div>

    <h2>สรุปความต่างของประกันรถยนต์</h2>
    <p>ประเภท 3 เน้นความรับผิดต่อบุคคลภายนอก ขณะที่ประเภท 3+ มีความคุ้มครองความเสียหายต่อตัวรถจากรถชนรถเพิ่มเข้ามา ส่วนประเภท 2+ นอกจากรถชนรถแล้ว เว็บไซต์ยังระบุโจรกรรม ไฟไหม้ และน้ำท่วม สำหรับผู้ที่ต้องการตรวจความคุ้มครองตัวรถในขอบเขตที่กว้างขึ้นควรดูรายละเอียดประกันชั้น 1 ส่วน พ.ร.บ. เป็นประกันภัยรถยนต์ภาคบังคับและควรแยกพิจารณาจากประกันภาคสมัครใจ</p>

    <h2>บริการที่เกี่ยวข้องกับประกันรถยนต์</h2>
    <div class="criteria-grid">
      <div class="criteria-card">
        <div class="num">1</div>
        <h3>ศูนย์รับแจ้งอุบัติเหตุ 24 ชั่วโมง</h3>
        <p>เว็บไซต์ทางการระบุบริการด้านสินไหมรถยนต์และศูนย์รับแจ้งอุบัติเหตุทุกวันตลอด 24 ชั่วโมง สำหรับการแจ้งเหตุและดำเนินการด้านสินไหมรถยนต์</p>
      </div>
      <div class="criteria-card">
        <div class="num">2</div>
        <h3>อู่คู่สัญญา</h3>
        <p>เว็บไซต์มีระบบค้นหาอู่ซ่อมคู่สัญญา พร้อมข้อมูลติดต่อ สถานที่ตั้ง และแผนที่ เพื่อให้ผู้ใช้ตรวจสอบอู่ในเครือข่าย</p>
      </div>
      <div class="criteria-card">
        <div class="num">3</div>
        <h3>บริการช่วยเหลือฉุกเฉินบนท้องถนน</h3>
        <p>Roadside Assistance ที่เว็บไซต์ระบุมีบริการพ่วงแบตเตอรี่ เปลี่ยนยางอะไหล่ เติมน้ำมันฉุกเฉิน ช่างกุญแจฉุกเฉิน และรถยก-ลากฉุกเฉิน โดยสิทธิและเงื่อนไขต้องตรวจตามผลิตภัณฑ์หรือกรมธรรม์</p>
      </div>
    </div>

    <h2>ก่อนเลือกประกันรถยนต์ Chubb ควรตรวจอะไร?</h2>
    <ul>
      <li>ประเภทความคุ้มครองที่ต้องการ</li>
      <li>ขอบเขตความเสียหายต่อตัวรถและความรับผิดต่อบุคคลภายนอก</li>
      <li>ทุนประกัน วงเงิน ความเสียหายส่วนแรก และข้อยกเว้น</li>
      <li>เกณฑ์รถที่รับประกัน เช่น อายุรถ</li>
      <li>บริการเสริมของผลิตภัณฑ์ที่เลือก</li>
      <li>เงื่อนไขการซ่อมและเครือข่ายอู่/ศูนย์บริการ</li>
    </ul>

    <h2>นอกจากประกันรถยนต์ Chubb มีประกันอะไรอีก?</h2>
    <p>เว็บไซต์ทางการยังนำเสนอผลิตภัณฑ์ประกันสำหรับลูกค้าบุคคลด้านสุขภาพและที่อยู่อาศัย โดยส่วนนี้สรุปเฉพาะกลุ่มที่ตรวจสอบจากแหล่งข้อมูลที่กำหนด</p>

    <h3>ประกันสุขภาพ</h3>
    <p>Chubb มีประกันสุขภาพให้เลือกตามความต้องการของบุคคลและครอบครัว เว็บไซต์ด้านสุขภาพระบุผลิตภัณฑ์ที่เกี่ยวข้องกับค่ารักษาพยาบาลและการเจ็บป่วยบางกลุ่ม รายละเอียดโรค วงเงิน ระยะรอคอย และข้อยกเว้นต้องตรวจจากกรมธรรม์</p>

    <h3>ประกันโรคมะเร็ง</h3>
    <p>เว็บไซต์ทางการมีประกันภัยโรคมะเร็ง โดยระบุลักษณะความคุ้มครองแบบเงินก้อนและเงินชดเชยบางประเภท ควรตรวจเงื่อนไขการวินิจฉัย จำนวนเงินเอาประกันภัย และข้อยกเว้นจากเอกสารจริง</p>

    <h3>ประกันชดเชยรายได้</h3>
    <p>มีผลิตภัณฑ์ที่ให้ความคุ้มครองในรูปแบบเงินชดเชยรายได้รายวันจากอุบัติเหตุหรือการเจ็บป่วย และมีรายการความคุ้มครองค่ารักษาพยาบาลตามที่เว็บไซต์ระบุ รายละเอียดต้องตรวจตามกรมธรรม์</p>

    <h3>ประกันบ้านและคอนโด</h3>
    <p>Chubb มีประกันภัยสำหรับบ้านและคอนโดหลายระดับ เว็บไซต์ยังระบุบริการช่วยเหลือฉุกเฉินภายในบ้าน 24 ชั่วโมงสำหรับเหตุฉุกเฉินที่ต้องรีบแก้ไขเพื่อป้องกันความเสียหายเพิ่มเติมหรือความไม่ปลอดภัยต่อการพักอาศัย</p>

    <h2>เลือกประกันจากความเสี่ยงที่ต้องการดูแล</h2>
    <p>หากจุดประสงค์หลักคือความเสี่ยงจากการใช้รถ ให้เริ่มจากเปรียบเทียบประเภทประกันรถยนต์และขอบเขตความคุ้มครอง หากต้องการดูแลค่ารักษาพยาบาลหรือผลกระทบด้านรายได้จากการเจ็บป่วย สามารถตรวจกลุ่มประกันสุขภาพ โรคมะเร็ง และชดเชยรายได้เพิ่มเติม ส่วนความเสี่ยงของบ้านหรือคอนโดควรพิจารณากลุ่มประกันที่อยู่อาศัยแยกต่างหาก</p>
    <p>การมีผลิตภัณฑ์หลายประเภทไม่ได้หมายความว่าต้องซื้อทั้งหมด ควรตรวจความเสี่ยง งบประมาณ ความคุ้มครองที่มีอยู่แล้ว และรายละเอียดกรมธรรม์ก่อนตัดสินใจ</p>

    <h2>คำถามที่พบบ่อย</h2>
    <div class="faq-list">
      <?php foreach ( $kudhai_chubb_faq as $kudhai_chubb_item ) : ?>
      <div class="faq-item">
        <h3><?php echo esc_html( $kudhai_chubb_item['q'] ); ?></h3>
        <p><?php echo esc_html( $kudhai_chubb_item['a'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
      <span>
        อ่านเพิ่มเติม:
        <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>">ประกันรถยนต์</a>
        ·
        <a href="<?php echo esc_url( home_url( '/car-insurance/type-1/' ) ); ?>">ประกันรถยนต์ชั้น 1</a>
        ·
        <a href="<?php echo esc_url( home_url( '/car-insurance/2-plus/' ) ); ?>">ประกัน 2+</a>
        ·
        <a href="<?php echo esc_url( home_url( '/car-insurance/3-plus/' ) ); ?>">ประกัน 3+</a>
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
    <h2>กำลังเลือกประกันรถยนต์ Chubb?</h2>
    <p>เปรียบเทียบประเภทความคุ้มครองก่อนตัดสินใจ และตรวจรายละเอียดกรมธรรม์ให้ตรงกับรถและความเสี่ยงที่ต้องการดูแล</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">เช็กเบี้ยประกันรถยนต์</a>
      <a href="<?php echo esc_url( home_url( '/car-insurance/' ) ); ?>" class="btn btn-ghost">เปรียบเทียบประกันรถยนต์</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
