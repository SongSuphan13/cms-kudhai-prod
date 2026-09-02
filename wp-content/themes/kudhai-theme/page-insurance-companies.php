<?php get_header(); ?>

<!-- ============ HERO ============ -->
<section class="co-hero">
  <div class="container co-hero-inner">
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 9h1M9 13h1M9 17h1M14 9h1M14 13h1M14 17h1"/></svg>
      บริษัทประกันภัย
    </span>
    <h1>เปรียบเทียบบริษัทประกันภัยรถยนต์ชั้นนำให้ฟรี</h1>
    <p>เราไม่ผูกติดกับบริษัทประกันเจ้าใดเจ้าหนึ่ง จึงเปรียบเทียบความคุ้มครอง เบี้ยประกัน และบริการหลังการขายจากหลายบริษัท เพื่อเลือกแผนที่เหมาะกับการใช้งานจริงของคุณ</p>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="co-intro">
  <div class="container">
    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> รายชื่อบริษัทด้านล่างเป็นบริษัทที่เรานำมาเปรียบเทียบให้ลูกค้าบ่อยครั้ง ข้อมูลเบี้ยประกันและความคุ้มครองจริงอาจแตกต่างกันตามเงื่อนไขของรถแต่ละคัน หากมีบริษัทที่คุณสนใจเป็นการเฉพาะ แจ้งเราได้ในฟอร์มขอใบเสนอราคา</p>
    </div>
  </div>
</section>

<?php $kudhai_co_list = kudhai_get_companies(); ?>

<!-- ============ COMPANIES ============ -->
<section class="co-companies" id="companies">
  <div class="container">
    <div class="section-head">
      <span class="tab">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        แฟ้ม 03 · บริษัทประกันที่แนะนำ
      </span>
      <h2>บริษัทประกันภัยที่เราเปรียบเทียบให้บ่อยที่สุด</h2>
      <p>แต่ละบริษัทมีจุดเด่นต่างกัน เราช่วยจับคู่ให้เหมาะกับลักษณะการใช้รถและงบประมาณของคุณ กดดูรายละเอียดเพื่ออ่านจุดเด่นของแต่ละบริษัทเพิ่มเติม</p>
    </div>

    <div class="company-grid">
      <?php foreach ( $kudhai_co_list as $kudhai_co_id => $kudhai_co ) : ?>
      <div class="company-card">
        <div class="company-card-head">
          <div class="company-badge logo">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_insure/<?php echo esc_attr( $kudhai_co['logo'] ); ?>" alt="<?php echo esc_attr( $kudhai_co['name'] ); ?>" loading="lazy">
          </div>
          <div>
            <h3><?php echo esc_html( $kudhai_co['name'] ); ?></h3>
            <p><?php echo esc_html( $kudhai_co['desc'] ); ?></p>
          </div>
        </div>
        <div class="company-tags">
          <?php foreach ( $kudhai_co['tags'] as $kudhai_tag ) : ?>
            <span class="company-tag"><?php echo esc_html( $kudhai_tag ); ?></span>
          <?php endforeach; ?>
        </div>
        <div class="company-coverage"><b>แผนที่มี:</b> <?php echo esc_html( $kudhai_co['coverage'] ); ?></div>
        <div class="btn-row">
          <a href="<?php echo esc_url( home_url( '/insurance-companies/' . $kudhai_co_id . '/' ) ); ?>" class="btn-sm">
            ดูรายละเอียด
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn-sm">
            ขอใบเสนอราคา
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>

      <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener" class="company-card cta-line">
        <div class="company-card-head">
          <div class="company-badge">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg>
          </div>
          <div>
            <h3>สนใจเปรียบเทียบบริษัทอื่นๆ</h3>
            <p>มีบริษัทที่สนใจนอกเหนือจากนี้ ทักไลน์คุยกับที่ปรึกษาได้ทันที</p>
          </div>
        </div>
        <div class="btn-row">
          <span class="btn-sm">
            แชทเปรียบเทียบทาง LINE
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </span>
        </div>
      </a>
    </div>

    <div class="companies-note">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      รายชื่อข้างต้นเป็นตัวอย่างบริษัทประกันที่เรานำมาเปรียบเทียบให้ลูกค้าบ่อยครั้ง ไม่ใช่รายชื่อทั้งหมดที่เราให้บริการ
    </div>
  </div>
</section>

<!-- ============ HOW WE CHOOSE ============ -->
<section class="criteria">
  <div class="container">
    <div class="section-head">
      <h2>เราเลือกบริษัทให้คุณอย่างไร</h2>
      <p>ไม่ใช่แค่ราคาถูกที่สุด แต่ต้องคุ้มครองตรงกับสิ่งที่คุณต้องการจริงๆ</p>
    </div>
    <div class="criteria-grid">
      <div class="criteria-card">
        <div class="num">1</div>
        <h3>ความคุ้มครองตรงความต้องการ</h3>
        <p>เทียบเงื่อนไขกรมธรรม์ให้ตรงกับลักษณะการใช้รถและความเสี่ยงของคุณ</p>
      </div>
      <div class="criteria-card">
        <div class="num">2</div>
        <h3>เครือข่ายซ่อมและเคลม</h3>
        <p>พิจารณาความสะดวกของอู่ในเครือและความรวดเร็วในการดำเนินเรื่องเคลม</p>
      </div>
      <div class="criteria-card">
        <div class="num">3</div>
        <h3>ความมั่นคงทางการเงิน</h3>
        <p>เลือกจากบริษัทที่มีฐานะการเงินมั่นคง มั่นใจได้ว่าเคลมได้จริงเมื่อเกิดเหตุ</p>
      </div>
      <div class="criteria-card">
        <div class="num">4</div>
        <h3>เบี้ยประกันคุ้มค่า</h3>
        <p>เปรียบเทียบเบี้ยประกันจากหลายบริษัท เพื่อให้ได้ความคุ้มครองที่คุ้มค่าที่สุด</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="co-cta">
  <div class="container">
    <h2>อยากรู้ว่าบริษัทไหนเหมาะกับคุณที่สุด</h2>
    <p>ส่งข้อมูลรถให้เรา เราจะเปรียบเทียบและแนะนำแผนที่เหมาะที่สุดให้ฟรี</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
