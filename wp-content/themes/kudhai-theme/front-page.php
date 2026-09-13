<?php
add_action( 'wp_head', function () {
	$home_url = home_url( '/' );
	$mun_url  = home_url( '/mun-lamert/' );
	$schema   = array(
		'@context' => 'https://schema.org',
		'@graph'   => array(
			array(
				'@type'       => 'Organization',
				'@id'         => $home_url . '#organization',
				'name'        => get_bloginfo( 'name' ),
				'url'         => $home_url,
				'telephone'   => kudhai_get_phone(),
				'description' => 'ที่ปรึกษาประกันภัยรถยนต์และการเรียกร้องค่าสินไหมจากอุบัติเหตุ รวมถึงการเตรียมข้อมูลเกี่ยวกับมูลละเมิด',
				'knowsAbout'  => array(
					'มูลละเมิดจากอุบัติเหตุรถยนต์',
					'การเรียกร้องค่าสินไหมทดแทน',
					'ค่าขาดประโยชน์จากการใช้รถ',
					'ค่ารักษาพยาบาลจากอุบัติเหตุรถยนต์',
					'เอกสารเรียกร้องค่าเสียหายจากประกันคู่กรณี',
				),
			),
			array(
				'@type'      => 'WebSite',
				'@id'        => $home_url . '#website',
				'url'        => $home_url,
				'name'       => get_bloginfo( 'name' ),
				'publisher'  => array( '@id' => $home_url . '#organization' ),
				'inLanguage' => 'th',
			),
			array(
				'@type'       => 'WebPage',
				'@id'         => $home_url . '#webpage',
				'url'         => $home_url,
				'name'        => 'ที่ปรึกษาประกันภัยรถยนต์และมูลละเมิด | ' . get_bloginfo( 'name' ),
				'description' => 'ปรึกษาการเรียกร้องค่าสินไหมทดแทนหลังอุบัติเหตุรถยนต์ ทำความเข้าใจมูลละเมิด สิทธิ์ พ.ร.บ. เอกสาร และการเรียกร้องค่าเสียหายจากคู่กรณี',
				'isPartOf'    => array( '@id' => $home_url . '#website' ),
				'about'       => array( '@id' => $mun_url . '#service' ),
				'mentions'    => array(
					array( '@type' => 'Thing', 'name' => 'มูลละเมิด', 'url' => $mun_url ),
					array( '@type' => 'Thing', 'name' => 'การเรียกร้องค่าเสียหายจากคู่กรณี', 'url' => $mun_url ),
				),
				'inLanguage'  => 'th',
			),
			array(
				'@type'       => 'Service',
				'@id'         => $mun_url . '#service',
				'name'        => 'ปรึกษามูลละเมิดและการเรียกร้องค่าสินไหมรถยนต์',
				'serviceType' => 'ที่ปรึกษาการเรียกร้องค่าสินไหมทดแทนจากอุบัติเหตุรถยนต์',
				'description' => 'ช่วยจัดลำดับข้อมูลหลังรถชน แยกความรับผิด รายการความเสียหาย เอกสารประกอบ และแนวทางติดต่อประกันคู่กรณี',
				'url'         => $mun_url,
				'provider'    => array( '@id' => $home_url . '#organization' ),
				'areaServed'  => array( '@type' => 'Country', 'name' => 'Thailand' ),
			),
			array(
				'@type'      => 'FAQPage',
				'@id'        => $home_url . '#mun-lamert-faq',
				'mainEntity' => array(
					array(
						'@type'          => 'Question',
						'name'           => 'มูลละเมิดคืออะไรในกรณีรถชน?',
						'acceptedAnswer' => array(
							'@type' => 'Answer',
							'text'  => 'มูลละเมิดคือฐานความรับผิดทางแพ่งเมื่อมีการกระทำที่ทำให้ผู้อื่นเสียหาย ในบริบทรถชนจึงต้องดูเหตุ ความรับผิด ความเสียหายจริง และหลักฐานประกอบกัน',
						),
					),
					array(
						'@type'          => 'Question',
						'name'           => 'รถชนเป็นฝ่ายถูกควรเริ่มจากอะไร?',
						'acceptedAnswer' => array(
							'@type' => 'Answer',
							'text'  => 'ควรเริ่มจากเก็บข้อมูลเหตุ คู่กรณี เอกสารการแจ้งเหตุ รายการความเสียหาย ใบเสร็จ ใบรับรองแพทย์ และหลักฐานช่วงเวลาที่เสียประโยชน์จากการใช้รถ',
						),
					),
					array(
						'@type'          => 'Question',
						'name'           => 'ประกันคู่กรณีต้องจ่ายทุกอย่างที่เรียกร้องหรือไม่?',
						'acceptedAnswer' => array(
							'@type' => 'Answer',
							'text'  => 'ต้องพิจารณาความรับผิดตามกฎหมาย ความเสียหายจริง หลักฐาน เงื่อนไขกรมธรรม์ และจำนวนเงินจำกัดความรับผิด ไม่ใช่ยอดที่ผู้เสียหายตั้งขึ้นฝ่ายเดียว',
						),
					),
				),
			),
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT ) . '</script>' . "\n";
}, 2 );

get_header();
?>

<!-- ============ HERO ============ -->
<section class="hero" id="home">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/></svg>
        ที่ปรึกษาประกันภัยรถยนต์
      </span>
      <h1>อุบัติเหตุจบที่ถนน<br>แต่เรื่อง<em>สินไหม</em>เพิ่งเริ่ม<br>เราเคียงข้างคุณจนจบเรื่อง</h1>
      <p class="lead">ให้คำปรึกษาการเรียกร้องค่าสินไหมทดแทนและการพิจารณาความรับผิด โดยผู้เชี่ยวชาญที่เข้าใจทั้งคู่มือตีความประกันภัยรถยนต์และขั้นตอนของบริษัทประกัน เพื่อไม่ให้คุณเสียเปรียบแม้แต่บาทเดียว</p>
      <div class="cta-row">
        <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" class="btn btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg>
          ปรึกษาฟรี ทัก LINE
        </a>
        <a href="tel:<?php echo esc_attr( str_replace( '-', '', kudhai_get_phone() ) ); ?>" class="btn btn-ghost">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          โทรด่วน 24 ชม.
        </a>
      </div>
    </div>

    <div>
      <div class="hero-card">
        <div class="hero-card-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
        </div>
        <h3>ซื้อประกันรถยนต์ออนไลน์</h3>
        <p>เปรียบเทียบแผนจากหลายบริษัท เลือกความคุ้มครองที่ใช่ ซื้อได้ทันทีไม่ต้องรอ</p>
        <ul class="hero-card-list">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>
            เปรียบเทียบฟรี ไม่มีค่าใช้จ่าย
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>
            อนุมัติไว รับกรมธรรม์ทันที
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>
            ให้บริการหลักโดย รู้ใจ ประกันภัย
          </li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>" class="btn btn-primary hero-card-btn">
          ดูแผนประกันรถยนต์
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROBLEMS ============ -->
<section class="problems" id="problems">
  <div class="container">
    <div class="section-head reveal">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 9v4M12 17h.01M10.29 3.86l-8.18 14.14A2 2 0 0 0 3.82 21h16.36a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg>
        แฟ้ม 01 · ปัญหาที่พบบ่อย
      </span>
      <h2>เมื่อเกิดอุบัติเหตุ คุณอาจกำลังเจอเรื่องเหล่านี้</h2>
      <p>เหตุการณ์เดียวกัน แต่ผลลัพธ์ต่างกันมาก ขึ้นอยู่กับว่าใครรู้ขั้นตอนและสิทธิ์ของตัวเองมากกว่ากัน</p>
    </div>

    <div class="problem-grid">
      <div class="problem-card reveal">
        <span class="problem-card-index">01</span>
        <div class="problem-card-body">
          <div class="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div class="problem-card-text">
            <h3>ร้อยเวรยังไม่ชี้ จะใช้สิทธิ์ต่ออย่างไร</h3>
            <p>หลายเคสต้องรอเจ้าหน้าที่ร้อยเวรนัดคู่กรณีมาชี้แจงที่โรงพัก ซึ่งอาจใช้เวลาหลายวันถึงหลายสัปดาห์ ระหว่างนั้นหลายคนไม่รู้ว่าต้องเตรียมหลักฐานอะไรไปเสริม หรือจะติดตามความคืบหน้าจากใคร ทำให้รู้สึกเคว้งและกังวลว่าจะเสียเปรียบหรือไม่</p>
          </div>
        </div>
        <a href="#contact" class="problem-card-cta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          ติดต่อเราไม่มีค่าใช้จ่าย
        </a>
      </div>

      <div class="problem-card reveal">
        <span class="problem-card-index">02</span>
        <div class="problem-card-body">
          <div class="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.5-1.5 3-3.5 3-6a5 5 0 0 0-9-3 5 5 0 0 0-9 3c0 2.5 1.5 4.5 3 6l6 6z"/></svg>
          </div>
          <div class="problem-card-text">
            <h3>มีผู้บาดเจ็บ ไม่รู้จะเบิกค่ารักษาจากใคร</h3>
            <p>เมื่อมีคนบาดเจ็บ ไม่ว่าจะเป็นตัวคุณเอง คู่กรณี หรือผู้โดยสาร มักสับสนว่าจะใช้สิทธิ์ พ.ร.บ. ก่อน หรือสำรองจ่ายแล้วเบิกคืนทีหลัง รวมถึงกรณีมีทั้งประกันสังคมและประกันสุขภาพส่วนตัวด้วย ทำให้บางคนเสียสิทธิ์บางส่วนไปโดยไม่รู้ตัว เพราะยื่นเรื่องผิดขั้นตอนหรือผิดหน่วยงาน</p>
          </div>
        </div>
        <a href="#contact" class="problem-card-cta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          ติดต่อเราไม่มีค่าใช้จ่าย
        </a>
      </div>

      <div class="problem-card reveal">
        <span class="problem-card-index">03</span>
        <div class="problem-card-body">
          <div class="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/><path d="M12 8v4M12 15h.01"/></svg>
          </div>
          <div class="problem-card-text">
            <h3>ไม่รู้สิทธิ์ว่าเบิก พ.ร.บ. ยังไง</h3>
            <p>พ.ร.บ. คุ้มครองทั้งค่ารักษาพยาบาลและค่าชดเชยกรณีเสียชีวิตหรือทุพพลภาพ แต่มีวงเงินและเงื่อนไขเฉพาะที่หลายคนไม่เคยรู้มาก่อน เช่น ต้องใช้เอกสารอะไรบ้าง ยื่นกับบริษัทประกันของฝ่ายไหน และต้องยื่นภายในกี่วันหลังเกิดเหตุ ทำให้บางคนพลาดสิทธิ์ที่ควรได้รับไปอย่างน่าเสียดาย</p>
          </div>
        </div>
        <a href="#contact" class="problem-card-cta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          ติดต่อเราไม่มีค่าใช้จ่าย
        </a>
      </div>

      <div class="problem-card reveal">
        <span class="problem-card-index">04</span>
        <div class="problem-card-body">
          <div class="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13.73 21a2 2 0 0 1-3.46 0"/><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M2 2l20 20"/></svg>
          </div>
          <div class="problem-card-text">
            <h3>แจ้งเคลมไปแล้วเงียบหาย ไม่มีใครติดต่อกลับ</h3>
            <p>แจ้งเคลมและส่งเอกสารครบตามที่บริษัทขอไปแล้ว แต่ผ่านไปหลายสัปดาห์กลับไม่มีใครติดต่อกลับ โทรไปก็ต้องรอสาย หรือถูกโอนสายไปมาจนไม่รู้ว่าเรื่องของตัวเองไปถึงขั้นตอนไหนแล้ว ทำให้รู้สึกเหมือนถูกปล่อยทิ้งไว้กลางทางโดยไม่มีคำตอบ</p>
          </div>
        </div>
        <a href="#contact" class="problem-card-cta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          ติดต่อเราไม่มีค่าใช้จ่าย
        </a>
      </div>

      <div class="problem-card reveal">
        <span class="problem-card-index">05</span>
        <div class="problem-card-body">
          <div class="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14M5 17a2 2 0 1 0 4 0M15 17a2 2 0 1 0 4 0M5 17V10l2-5h10l2 5v7"/><path d="M12 3v2"/></svg>
          </div>
          <div class="problem-card-text">
            <h3>รถจอดรออู่นาน ไม่รู้สิทธิ์รถทดแทน</h3>
            <p>รถเข้าอู่ซ่อมแล้วแต่ผ่านไปเป็นสัปดาห์หรือเป็นเดือนยังไม่มีความคืบหน้า ต้องหาทางเดินทางเองทั้งที่รถควรจะซ่อมเสร็จนานแล้ว หลายคนไม่รู้ว่าตัวเองมีสิทธิ์เรียกรถทดแทนระหว่างซ่อม หรือเรียกค่าขาดประโยชน์จากการใช้รถเป็นรายวันได้ ทำให้เสียสิทธิ์ที่ควรได้รับไปโดยไม่รู้ตัว</p>
          </div>
        </div>
        <a href="#contact" class="problem-card-cta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg>
          ติดต่อเราไม่มีค่าใช้จ่าย
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ COVERAGE TYPES ============ -->
<section class="coverage" id="types">
  <div class="container">
    <div class="section-head reveal">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แฟ้ม 02 · ประเภทประกันภัยรถยนต์
      </span>
      <h2>ประกันแต่ละชั้นต่างกันอย่างไร คุ้มครองอะไรบ้าง</h2>
      <p>ก่อนตัดสินใจซื้อหรือต่อประกัน ควรรู้ก่อนว่าแต่ละชั้นให้ความคุ้มครองต่างกันตรงไหน เพื่อเลือกให้เหมาะกับการใช้งานและงบประมาณ</p>
    </div>

    <div class="coverage-grid reveal">

      <div class="coverage-card highlight">
        <div class="coverage-card-head">
          <h3>ชั้น 1</h3>
          <span class="coverage-card-badge">คุ้มครองสูงสุด</span>
        </div>
        <p class="coverage-card-tag">ครอบคลุมทุกกรณี เหมาะกับรถใหม่หรือรถที่ใช้งานบ่อย</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อคู่กรณี/บุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ไฟไหม้ / รถหาย / โจรกรรม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ช่วยเหลือฉุกเฉิน 24 ชม.</li>
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
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อคู่กรณี/บุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ไฟไหม้ / รถหาย / โจรกรรม</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ช่วยเหลือฉุกเฉิน 24 ชม.</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ปานกลาง-สูง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3+</h3>
        </div>
        <p class="coverage-card-tag">คุ้มครองพื้นฐาน เหมาะกับรถที่ใช้งานทั่วไป</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อคู่กรณี/บุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ไฟไหม้ / รถหาย / โจรกรรม</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-partial"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><circle cx="12" cy="12" r="9"/><path d="M12 8v4M12 16h.01"/></svg>ช่วยเหลือฉุกเฉิน (แล้วแต่บริษัท)</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ปานกลาง</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>ชั้น 3</h3>
        </div>
        <p class="coverage-card-tag">ราคาประหยัดสุด คุ้มครองเฉพาะคู่กรณี</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อคู่กรณี/บุคคลภายนอก</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ไฟไหม้ / รถหาย / โจรกรรม</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ช่วยเหลือฉุกเฉิน 24 ชม.</li>
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
        <p class="coverage-card-tag">ประกันภาคบังคับ รถทุกคันต้องมี</p>
        <ul class="coverage-list">
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง แม้ไม่มีคู่กรณี</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ซ่อมรถตัวเอง กรณีมีคู่กรณี</li>
          <li class="cov-partial"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><circle cx="12" cy="12" r="9"/><path d="M12 8v4M12 16h.01"/></svg>ค่ารักษาพยาบาล/ปลงศพผู้ประสบภัย (ไม่รวมทรัพย์สิน)</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ไฟไหม้ / รถหาย / โจรกรรม</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>น้ำท่วม / ภัยธรรมชาติ</li>
          <li class="cov-no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>ช่วยเหลือฉุกเฉิน 24 ชม.</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ต่ำสุด (ภาคบังคับ)</div>
        </div>
      </div>

      <div class="coverage-card">
        <div class="coverage-card-head">
          <h3>รถไฟฟ้า (EV)</h3>
          <span class="coverage-card-badge alt">สำหรับ EV</span>
        </div>
        <p class="coverage-card-tag">ออกแบบเฉพาะรถยนต์ไฟฟ้า ครอบคลุมรุ่นรถ EV มากที่สุดในตลาด</p>
        <ul class="coverage-list">
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>คุ้มครองแบตเตอรี่และมอเตอร์ไฟฟ้า</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ซ่อมรถตัวเอง ทั้งมีและไม่มีคู่กรณี</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ความเสียหายต่อคู่กรณี/บุคคลภายนอก</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>ไฟไหม้ / ระเบิดจากแบตเตอรี่</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>อุปกรณ์ชาร์จและสายชาร์จ</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>รถยกฉุกเฉิน ส่งศูนย์บริการรถ EV เฉพาะทาง</li>
          <li class="cov-yes"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>เลือกซื้อความคุ้มครองแบตเตอรี่เพิ่มเติมได้</li>
        </ul>
        <div class="coverage-premium">
          <div class="label">ระดับเบี้ยประกัน</div>
          <div class="value">ตามรุ่นและทุนประกัน</div>
        </div>
      </div>

      <a href="<?php echo esc_url( kudhai_get_qrcode_link_url() ); ?>" target="_blank" rel="noopener" class="coverage-card cta-poster">
        <img src="<?php echo esc_url( kudhai_get_qrcode_url() ); ?>" alt="สแกน QR โค้ด รู้ใจ ประกันภัย เพื่อขอใบเสนอราคาประกันรถยนต์ มอเตอร์ไซค์ และอุบัติเหตุ" loading="lazy">
      </a>

    </div>

    <div class="coverage-note reveal">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      เงื่อนไขความคุ้มครองจริงอาจแตกต่างกันในแต่ละบริษัทประกัน หากไม่แน่ใจว่าควรเลือกชั้นไหน ให้เราช่วยประเมินตามลักษณะการใช้รถของคุณได้ที่ฟอร์มขอใบเสนอราคาด้านล่าง
    </div>
  </div>
</section>

<!-- ============ COMPANIES ============ -->
<section class="companies" id="companies">
  <div class="container">
    <div class="section-head reveal">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 9h1M9 13h1M9 17h1M14 9h1M14 13h1M14 17h1"/></svg>
        แฟ้ม 03 · บริษัทประกันที่แนะนำ
      </span>
      <h2>เปรียบเทียบบริษัทประกันชั้นนำให้ฟรี</h2>
      <p>เราไม่ผูกติดกับบริษัทใดบริษัทหนึ่ง จึงเลือกแผนที่เหมาะกับคุณจริงๆ จากบริษัทประกันที่น่าเชื่อถือหลายแห่ง</p>
    </div>

    <div class="company-grid">
      <div class="company-card reveal">
        <div class="company-badge logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/vriyah100x100.png" alt="วิริยะประกันภัย" loading="lazy">
        </div>
        <div>
          <h3>วิริยะประกันภัย</h3>
          <p>เครือข่ายอู่ซ่อมในเครือใหญ่ที่สุดในประเทศ เคลมสะดวก ครอบคลุมทุกจังหวัด</p>
          <span class="company-tag">เคลมไว เครือข่ายกว้าง</span>
        </div>
      </div>
      <div class="company-card reveal">
        <div class="company-badge logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/dhipaya100x100.png" alt="ทิพยประกันภัย" loading="lazy">
        </div>
        <div>
          <h3>ทิพยประกันภัย</h3>
          <p>บริษัทที่มีภาครัฐร่วมถือหุ้น มั่นคง คุ้มครองครบทุกประเภทตั้งแต่ชั้น 1 ถึง พ.ร.บ.</p>
          <span class="company-tag">มั่นคง น่าเชื่อถือ</span>
        </div>
      </div>
      <div class="company-card reveal">
        <div class="company-badge logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/bangkokinsurance100x100.png" alt="กรุงเทพประกันภัย" loading="lazy">
        </div>
        <div>
          <h3>กรุงเทพประกันภัย</h3>
          <p>ดำเนินธุรกิจมากว่า 78 ปี เน้นบริการลูกค้าองค์กรและกรมธรรม์ที่ปรับแต่งได้</p>
          <span class="company-tag">ประสบการณ์ยาวนาน</span>
        </div>
      </div>
      <div class="company-card reveal">
        <div class="company-badge logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/muangthai100x100.png" alt="เมืองไทยประกันภัย" loading="lazy">
        </div>
        <div>
          <h3>เมืองไทยประกันภัย</h3>
          <p>เบี้ยประกันคุ้มค่า มีตัวแทนและศูนย์บริการกระจายอยู่ทั่วประเทศ</p>
          <span class="company-tag">เบี้ยคุ้มค่า</span>
        </div>
      </div>
      <div class="company-card reveal">
        <div class="company-badge logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/roojai100x100.png" alt="รู้ใจ ประกันภัย" loading="lazy">
        </div>
        <div>
          <h3>รู้ใจ ประกันภัย</h3>
          <p>ซื้อและเคลมผ่านออนไลน์ได้ทันที มีแผนเฉพาะสำหรับรถยนต์ไฟฟ้าโดยเฉพาะ</p>
          <span class="company-tag">ออนไลน์ครบวงจร · รองรับ EV</span>
        </div>
      </div>

      <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener" class="company-card cta-line reveal">
        <div class="company-badge line">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg>
        </div>
        <div>
          <h3>สนใจเปรียบเทียบบริษัทอื่นๆ</h3>
          <p>มีบริษัทที่สนใจนอกเหนือจากนี้ ทักไลน์คุยกับที่ปรึกษาได้ทันที</p>
          <span class="company-tag line">แชทเปรียบเทียบทาง LINE</span>
        </div>
      </a>
    </div>

    <div class="companies-note reveal">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายชื่อข้างต้นเป็นตัวอย่างบริษัทประกันที่เรานำมาเปรียบเทียบให้ลูกค้าบ่อยครั้ง หากมีบริษัทที่คุณสนใจเป็นการเฉพาะ แจ้งเราได้ในฟอร์มขอใบเสนอราคา
    </div>
  </div>
</section>

<!-- ============ ABOUT (excerpt) ============ -->
<section class="about" id="about">
  <div class="container">
    <div class="section-head reveal">
      <span class="tab" style="background:var(--color-secondary-dark)">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/></svg>
        แฟ้ม 05 · แนะนำตัว
      </span>
      <h2>รู้จักเรา ที่ปรึกษาที่อยู่เคียงข้างคุณ</h2>
      <p>ก่อนจะเป็นคนที่คุณไว้ใจให้ดูแลเรื่องเคลม เราอยากให้คุณรู้จักเราก่อน</p>
    </div>

    <div class="about-grid reveal">
      <div class="about-text">
        <p>เราเป็นทีมที่ปรึกษาด้านประกันภัยรถยนต์ ทำงานร่วมกับลูกค้ามาแล้วกว่า 1,200 เคส ทั้งเรื่องเรียกร้องค่าสินไหมทดแทนและการพิจารณาความรับผิด เข้าใจทั้งมุมของผู้ประสบภัยและขั้นตอนการทำงานของบริษัทประกัน จึงช่วยให้คุณไม่เสียเปรียบในทุกขั้นตอน</p>
        <p>เราไม่ใช่ตัวแทนขายของบริษัทประกันเจ้าใดเจ้าหนึ่ง แต่เป็นนายหน้าประกันภัย ที่คอยหาประกันรถยนต์ที่เหมาะกับคุณ เพื่อให้คุณได้รับความเป็นธรรมสูงสุดจากทุกฝ่ายที่เกี่ยวข้อง</p>

        <ul class="about-principles">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            โปร่งใสทุกขั้นตอน แจ้งความคืบหน้าให้คุณทราบตลอดเรื่อง
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            ไม่ผูกติดกับบริษัทประกันเจ้าใดเจ้าหนึ่ง เลือกสิ่งที่ดีที่สุดให้คุณ
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            อยู่เคียงข้างจนกว่าเรื่องจะจบ ไม่ทิ้งคุณไว้กลางทาง
          </li>
        </ul>

        <div class="cta-row" style="margin-top:28px;">
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-ghost" style="border-color:var(--color-line); color:var(--color-primary);">
            อ่านเรื่องราวของเราเพิ่มเติม
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ ADVICE / PROCESS ============ -->
<section class="process" id="process">
  <div class="container">
    <div class="section-head reveal">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 8v4l3 3M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แฟ้ม 06 · คำแนะนำที่เรามีให้
      </span>
      <h2>เตรียมคุณให้พร้อมก่อนเจอสถานการณ์จริง</h2>
      <p>นอกจากให้คำปรึกษาแบบเคสต่อเคส เรายังมีเครื่องมือและตัวอย่างให้คุณศึกษาไว้ล่วงหน้า</p>
    </div>

    <div class="steps">
      <div class="step reveal">
        <div class="step-num">1</div>
        <div class="step-content">
          <h3>บอกถึงเคสที่คุณได้เจอ</h3>
          <p>เล่ารายละเอียดอุบัติเหตุหรือสถานการณ์ที่คุณเจอให้เราฟัง เพื่อประเมินแนวทางที่เหมาะกับคุณ</p>
        </div>
      </div>
      <div class="step reveal">
        <div class="step-num">2</div>
        <div class="step-content">
          <h3>ส่งคลิปเคสตัวอย่างให้ศึกษา</h3>
          <p>เราส่งคลิปวิดีโอเคสจริงที่เคยให้คำปรึกษา ให้คุณดูเป็นแนวทางก่อนเจอสถานการณ์จริงด้วยตัวเอง</p>
        </div>
      </div>
      <div class="step reveal">
        <div class="step-num">3</div>
        <div class="step-content">
          <h3>ตัวอย่างเคสการเขียนมูลละเมิด</h3>
          <p>มีตัวอย่างการเขียนสรุปข้อเท็จจริงและระบุฝ่ายที่ต้องรับผิดชอบ ให้ใช้เป็นแนวทางอ้างอิงตามคู่มือตีความประกันภัยรถยนต์</p>
        </div>
      </div>
      <div class="step reveal">
        <div class="step-num">4</div>
        <div class="step-content">
          <h3>ซักซ้อมการตอบข้อโต้แย้ง</h3>
          <p>จำลองสถานการณ์เจรจากับคู่กรณีหรือบริษัทประกัน ช่วยให้คุณตอบข้อโต้แย้งต่างๆ ได้อย่างมั่นใจ</p>
        </div>
      </div>
      <div class="step reveal">
        <div class="step-num">5</div>
        <div class="step-content">
          <h3>นัดคู่กรณีเพื่อเรียกร้อง</h3>
          <p>นัดหมายคู่กรณีเพื่อเจรจาเรียกร้องค่าสินไหมตามที่เตรียมไว้ พร้อมมีเราคอยประกบให้คำแนะนำ</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUOTE FORM ============ -->
<section class="quote" id="quote">
  <div class="container">
    <div class="section-head reveal">
      <span class="tab" style="background:var(--color-secondary-dark)">
        แฟ้ม 07 · ขอใบเสนอราคาประกัน
      </span>
      <h2>สนใจซื้อ หรือต่อประกันรถยนต์? กรอกข้อมูลไว้ เดี๋ยวเราติดต่อกลับ</h2>
      <p>ไม่ว่าจะซื้อใหม่หรือต่ออายุ ทีมที่ปรึกษาจะช่วยเทียบแผนความคุ้มครองให้เหมาะกับการใช้งานและงบประมาณของคุณ</p>
    </div>

    <div class="quote-wrap reveal">
      <div class="quote-side">
        <h2>ทำไมต้องขอใบเสนอราคาผ่านเรา</h2>
        <p>เราไม่ใช่แค่ขายกรมธรรม์ แต่ดูแลคุณต่อเนื่องไปจนถึงวันที่ต้องเคลม</p>
        <ul class="quote-perks">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            เปรียบเทียบแผนจากหลายบริษัทประกันให้ฟรี
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            แนะนำความคุ้มครองที่เหมาะกับลักษณะการใช้รถจริง
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            ดูแลต่อเนื่องหากเกิดเหตุและต้องเรียกร้องสินไหมในอนาคต
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            ไม่มีค่าใช้จ่ายในการขอใบเสนอราคา
          </li>
        </ul>
      </div>

      <div class="quote-form">
        <div class="form-success" id="formSuccess">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
          ได้รับข้อมูลแล้ว ทีมงานจะติดต่อกลับภายใน 24 ชั่วโมง
        </div>
        <div class="form-success form-error" id="formError" aria-live="polite">
          บันทึกข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง
        </div>
        <form id="quoteForm" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" novalidate>
          <input type="hidden" name="action" value="kudhai_contact_submit">
          <input type="hidden" name="kudhai_contact_nonce" value="<?php echo esc_attr( wp_create_nonce( 'kudhai_contact_submit' ) ); ?>">
          <input type="hidden" name="kudhai_ajax" value="1">
          <input type="hidden" name="source" value="front-page-quote">
          <input type="hidden" name="topic" value="quote">
          <div class="form-row">
            <div class="field">
              <label for="qName">ชื่อ-นามสกุล</label>
              <input type="text" id="qName" name="name" placeholder="เช่น สมชาย ใจดี" required>
            </div>
            <div class="field">
              <label for="qPhone">เบอร์โทรศัพท์</label>
              <input type="tel" id="qPhone" name="phone" placeholder="08X-XXX-XXXX" inputmode="tel" pattern="0[0-9]{8,9}" title="กรุณากรอกเบอร์โทรศัพท์ไทย 9-10 หลัก เช่น 0812345678" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="qMake">ยี่ห้อรถ</label>
              <input type="text" id="qMake" name="make" placeholder="เช่น Toyota" required>
            </div>
            <div class="field">
              <label for="qModel">รุ่นรถ</label>
              <input type="text" id="qModel" name="model" placeholder="เช่น Yaris" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="qSubmodel">รุ่นย่อย</label>
              <input type="text" id="qSubmodel" name="submodel" placeholder="เช่น 1.2 Sport" required>
            </div>
            <div class="field">
              <label for="qYear">ปีรถ</label>
              <input type="text" id="qYear" name="year" placeholder="เช่น 2021" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="qPlate">ทะเบียนรถ</label>
              <input type="text" id="qPlate" name="plate" placeholder="เช่น กข 1234">
            </div>
            <div class="field">
              <label for="qProvince">จังหวัดที่จดทะเบียน</label>
              <input type="text" id="qProvince" name="province" placeholder="เช่น กรุงเทพมหานคร" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field full">
              <label for="qType">ประเภทประกันที่สนใจ</label>
              <select id="qType" name="type" required>
                <option value="">เลือกประเภทประกัน</option>
                <option value="class1">ชั้น 1</option>
                <option value="class2plus">ชั้น 2+</option>
                <option value="class3plus">ชั้น 3+</option>
                <option value="class3">ชั้น 3</option>
                <option value="unsure">ยังไม่แน่ใจ อยากให้แนะนำ</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="field full">
              <label for="qMsg">ข้อความเพิ่มเติม (ถ้ามี)</label>
              <textarea id="qMsg" name="message" placeholder="เช่น กรมธรรม์เดิมใกล้หมดอายุ, ต้องการทุนประกันเท่าไหร่"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary quote-submit">ขอใบเสนอราคา</button>
          <p class="form-note">การส่งข้อมูลถือว่ายินยอมให้เราติดต่อกลับเพื่อให้คำปรึกษาเรื่องประกันภัย</p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section class="contact" id="contact">
  <div class="container contact-inner">
    <div class="reveal">
      <span class="tab" style="background:rgba(255,255,255,0.14)">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        แฟ้ม 08 · ปรึกษาเราวันนี้
      </span>
      <h2>อย่าปล่อยให้ความไม่รู้ ทำให้คุณเสียเปรียบ</h2>
      <p class="sub">ทักหาเราได้ทันทีที่เกิดเหตุ ให้คำปรึกษาเบื้องต้นฟรี ไม่มีค่าใช้จ่าย และไม่มีข้อผูกมัด</p>
      <div class="cta-row">
        <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg>
          แชทกับที่ปรึกษา
        </a>
      </div>
    </div>

    <div class="contact-card reveal">
      <div class="contact-row">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.36 1.78.7 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.27a2 2 0 0 1 2.11-.45c.82.34 1.7.58 2.6.7A2 2 0 0 1 22 16.92z"/></svg></div>
        <div><div class="t">โทรด่วน 24 ชั่วโมง</div><div class="v"><?php echo esc_html( kudhai_get_phone() ); ?></div></div>
      </div>
      <div class="contact-row">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg></div>
        <div><div class="t">LINE Official</div><div class="v"><?php echo esc_html( kudhai_get_line_id() ); ?></div></div>
      </div>
      <div class="contact-row">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
        <div><div class="t">เวลาให้บริการ</div><div class="v">ทุกวัน 08:00 – 22:00 น.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ INTRO MODAL ============ -->
<div class="intro-modal-overlay" id="introModalOverlay">
  <div class="intro-modal">
    <button type="button" class="intro-modal-close" id="introModalClose" aria-label="ปิด">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <div class="intro-modal-head">
      <span class="mark">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/></svg>
      </span>
      <h2>รู้จักเราก่อนเริ่มต้น</h2>
    </div>
    <div class="intro-modal-body">
      <div class="intro-modal-block">
        <h3>เราคือใคร</h3>
        <p>เราเป็นทีมที่ปรึกษาด้านประกันภัยรถยนต์ ทำงานร่วมกับลูกค้ามาแล้วกว่า 1,200 เคส ทั้งเรื่องเรียกร้องค่าสินไหมทดแทนและการพิจารณาความรับผิด ไม่ผูกติดกับบริษัทประกันเจ้าใดเจ้าหนึ่ง จึงเลือกสิ่งที่ดีที่สุดให้คุณได้</p>
      </div>
      <div class="intro-modal-block">
        <h3>มูลละเมิดคืออะไร</h3>
        <p>มูลละเมิด คือฐานทางกฎหมายที่ระบุว่าใครทำให้คุณเสียหายจากความจงใจหรือประมาท ต้องรับผิดชดใช้ค่าสินไหมทดแทน แม้ประกันจะจ่ายให้แล้ว คุณอาจยังมีสิทธิ์เรียกร้องส่วนต่างเพิ่มเติมที่หลายคนไม่เคยรู้</p>
        <a href="<?php echo esc_url( home_url( '/mun-lamert/' ) ); ?>" class="intro-modal-link">
          อ่านเพิ่มเติมเรื่องมูลละเมิด
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
      <div class="intro-modal-block">
        <h3>ทำไมควรซื้อกับเรา</h3>
        <p>ซื้อกับเรา ไม่ใช่เพราะเราให้ <strong>ส่วนลด</strong> หรือ <strong>ของแถม</strong> มากที่สุด แต่เพราะเราให้ <strong>คำปรึกษาที่ตรงกับคุณที่สุด</strong> พร้อม <strong>แบ่งชำระได้สูงสุด 10 เดือน</strong></p>
        <p>และแม้ครั้งนี้คุณจะยังไม่ได้ซื้อประกันกับเรา เราก็ยินดีให้คำปรึกษาเรื่อง<strong>การเรียกร้องค่าสินไหม ฟรี ไม่มีค่าใช้จ่าย</strong> ขอเพียงแค่ครั้งนี้คุณ<strong>เรียกร้องได้ตามที่ตั้งใจไว้</strong> แล้วค่อยกลับมาซื้อกับเรา</p>
      </div>
    </div>
    <div class="intro-modal-actions">
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-ghost">อ่านเกี่ยวกับเรา</a>
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary" id="introModalStart">ขอใบเสนอราคาประกัน</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
