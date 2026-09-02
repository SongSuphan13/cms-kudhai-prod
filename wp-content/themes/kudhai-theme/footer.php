<footer>
  &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> &middot; ให้คำปรึกษาเรื่องสินไหมและการพิจารณาความรับผิดด้วยความเป็นธรรม<br>เนื้อหาทั้งหมดอ้างอิงตามคู่มือตีความประกันภัยรถยนต์ ไม่ใช่คำแนะนำทางกฎหมาย
  <?php $kudhai_privacy = get_page_by_path( 'privacy-policy' ); $kudhai_terms = get_page_by_path( 'terms-and-conditions' ); ?>
  <?php if ( $kudhai_privacy || $kudhai_terms ) : ?>
    <div class="footer-links">
      <?php if ( $kudhai_privacy ) : ?>
        <a href="<?php echo esc_url( get_permalink( $kudhai_privacy ) ); ?>">นโยบายความเป็นส่วนตัว</a>
      <?php endif; ?>
      <?php if ( $kudhai_privacy && $kudhai_terms ) : ?>
        <span class="divider"></span>
      <?php endif; ?>
      <?php if ( $kudhai_terms ) : ?>
        <a href="<?php echo esc_url( get_permalink( $kudhai_terms ) ); ?>">ข้อกำหนดและเงื่อนไข</a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</footer>

<a href="<?php echo esc_url( kudhai_get_line_url() ); ?>" target="_blank" rel="noopener" class="line-float" aria-label="ติดต่อทางไลน์">
  <span class="pulse"></span>
  <span class="icon-wrap">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.66 1.4 5.02 3.6 6.6-.12 1.14-.5 2.6-1.4 3.8 0 0 2.24-.1 4.4-1.6 1.06.32 2.2.5 3.4.5 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/></svg>
  </span>
</a>

<button type="button" class="assess-float" id="assessFloatBtn" aria-label="ประเมินเคสเบื้องต้น">
  <span class="icon-wrap">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
  </span>
</button>

<div class="assess-modal-overlay" id="assessModalOverlay">
  <div class="assess-modal">
    <button type="button" class="assess-modal-close" id="assessModalClose" aria-label="ปิด">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <div class="chat-card">
      <div class="chat-header">
        <div class="chat-avatar">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/></svg>
        </div>
        <div>
          <div class="chat-title">ผู้ช่วยประเมินเคส</div>
          <div class="chat-status">พร้อมช่วยประเมิน</div>
        </div>
      </div>
      <div class="chat-progress"><div class="chat-progress-bar" id="chatProgressBar"></div></div>
      <div class="chat-body" id="chatBody"></div>
      <div class="chat-options" id="chatOptions"></div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
