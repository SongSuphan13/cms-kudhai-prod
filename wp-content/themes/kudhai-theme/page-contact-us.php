<?php
/**
 * Template for the /contact-us/ page.
 * Content is hardcoded directly here (not pulled from a data array in
 * functions.php) so it can be edited in one place.
 */
get_header();
?>

<!-- ============ HERO ============ -->
<section class="about-hero">
  <div class="container about-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <span class="current">ติดต่อเรา</span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      ติดต่อเรา
    </span>
    <h1>ปรึกษาเรื่องประกันรถยนต์ ได้ทุกวัน ไม่มีค่าใช้จ่ายเบื้องต้น</h1>
    <p>ไม่ว่าคุณกำลังมองหาแผนประกันหรือเพิ่งประสบอุบัติเหตุ ทักหาเราได้ทันทีทางโทรศัพท์ LINE หรือกรอกแบบฟอร์มด้านล่าง ทีมที่ปรึกษาของเราพร้อมช่วยดูแล</p>
  </div>
</section>

<!-- ============ CONTACT CARD ============ -->
<section class="contact" id="contact-info">
  <div class="container contact-inner">
    <div class="reveal">
      <h2>คุยกับที่ปรึกษาได้ทันที</h2>
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

<!-- ============ FORM ============ -->
<section class="quote" id="form">
  <div class="container">
    <div class="section-head reveal">
      <h2>ส่งข้อมูลถึงเรา เดี๋ยวติดต่อกลับ</h2>
      <p>ไม่ว่าจะกำลังมองหาประกัน หรือเพิ่งประสบอุบัติเหตุ กรอกแบบฟอร์มไว้ ทีมที่ปรึกษาจะติดต่อกลับโดยเร็วที่สุด</p>
    </div>

    <div class="quote-wrap reveal">
      <div class="quote-side">
        <h2>ทำไมต้องปรึกษาผ่านเรา</h2>
        <p>เราไม่ใช่แค่ขายกรมธรรม์ แต่ดูแลคุณต่อเนื่องไปจนถึงวันที่ต้องเคลม</p>
        <ul class="quote-perks">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            เปรียบเทียบแผนจากหลายบริษัทประกันให้ฟรี
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            ให้คำแนะนำต่อเนื่องหากต้องเรียกร้องสินไหมในอนาคต
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            ไม่ผูกติดกับบริษัทประกันเจ้าใดเจ้าหนึ่ง
          </li>
        </ul>
      </div>

      <div class="quote-form">
        <?php if ( isset( $_GET['contact_status'] ) && 'success' === sanitize_text_field( wp_unslash( $_GET['contact_status'] ) ) ) : ?>
        <div class="form-success show">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
          ได้รับข้อมูลแล้ว ทีมงานจะติดต่อกลับภายใน 24 ชั่วโมง
        </div>
        <?php endif; ?>
        <div class="form-success" id="formSuccess" aria-live="polite">
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
          <input type="hidden" name="source" value="contact-us">
          <div class="form-row">
            <div class="field">
              <label for="cName">ชื่อ-นามสกุล</label>
              <input type="text" id="cName" name="name" placeholder="เช่น สมชาย ใจดี" required>
            </div>
            <div class="field">
              <label for="cPhone">เบอร์โทรศัพท์</label>
              <input type="tel" id="cPhone" name="phone" placeholder="08X-XXX-XXXX" inputmode="tel" pattern="0[0-9]{8,9}" title="กรุณากรอกเบอร์โทรศัพท์ไทย 9-10 หลัก เช่น 0812345678" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field full">
              <label for="cTopic">เรื่องที่ต้องการปรึกษา</label>
              <select id="cTopic" name="topic" required>
                <option value="">เลือกเรื่องที่ต้องการปรึกษา</option>
                <option value="before-buy">ปรึกษาก่อนซื้อประกัน</option>
                <option value="quote">ขอใบเสนอราคา</option>
                <option value="accident">เพิ่งประสบอุบัติเหตุ / ต้องการเคลม</option>
                <option value="compulsory">สอบถามสิทธิ์ พ.ร.บ.</option>
                <option value="other">อื่นๆ</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="field full">
              <label for="cMsg">รายละเอียด (ถ้ามี)</label>
              <textarea id="cMsg" name="message" placeholder="อธิบายเรื่องที่ต้องการปรึกษาโดยย่อ"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary quote-submit">ส่งข้อความ</button>
          <p class="form-note">การส่งข้อมูลถือว่ายินยอมให้เราติดต่อกลับเพื่อให้คำปรึกษาเรื่องประกันภัย</p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="help">
  <div class="container">
    <div class="section-head">
      <h2>คำถามที่พบบ่อยก่อนติดต่อ</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item">
        <h3>ปรึกษาฟรีจริงไหม มีค่าใช้จ่ายแอบแฝงหรือเปล่า</h3>
        <p>การปรึกษาเบื้องต้นไม่มีค่าใช้จ่าย ไม่ว่าจะเป็นการเปรียบเทียบแผนประกันหรือคำแนะนำเรื่องการเรียกร้องสินไหม เราจะแจ้งให้ทราบล่วงหน้าหากมีขั้นตอนใดที่เกี่ยวข้องกับค่าใช้จ่าย</p>
      </div>
      <div class="faq-item">
        <h3>ช่องทางไหนได้รับคำตอบเร็วที่สุด</h3>
        <p>LINE และโทรศัพท์เป็นช่องทางที่เร็วที่สุดในช่วงเวลาทำการ 08:00 - 22:00 น. ส่วนแบบฟอร์มออนไลน์จะได้รับการติดต่อกลับภายใน 24 ชั่วโมง</p>
      </div>
      <div class="faq-item">
        <h3>นอกเวลาทำการ ติดต่อได้ไหม</h3>
        <p>สามารถฝากข้อความผ่าน LINE หรือแบบฟอร์มไว้ได้ตลอด 24 ชั่วโมง ทีมงานจะติดต่อกลับทันทีที่เปิดทำการในวันถัดไป</p>
      </div>
      <div class="faq-item">
        <h3>เพิ่งประสบอุบัติเหตุ ควรติดต่อเรื่องอะไรก่อน</h3>
        <p>โทรแจ้งเราทันทีเพื่อรับคำแนะนำเบื้องต้นเรื่องการเจรจากับคู่กรณีและเอกสารที่ต้องเตรียม ก่อนดำเนินการแจ้งเคลมกับบริษัทประกัน</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="about-cta">
  <div class="container">
    <h2>พร้อมให้เราช่วยดูแลเรื่องของคุณแล้วหรือยัง</h2>
    <p>ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น ไม่ว่าจะเพิ่งเกิดเหตุหรือกำลังมองหาประกัน</p>
    <div class="cta-row">
      <a href="tel:<?php echo esc_attr( str_replace( '-', '', kudhai_get_phone() ) ); ?>" class="btn btn-primary">โทรหาเราตอนนี้</a>
      <a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener" class="btn btn-ghost">แชททาง LINE</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
