<?php
/**
 * Template Name: Insurance Type Detail
 * Description: SEO landing page for one insurance product line (car, motorbike,
 * truck, van, cancer, personal accident). Assign this template to a page whose
 * slug matches a key in kudhai_get_insurance_types() (functions.php).
 */

get_header();

$kudhai_types = kudhai_get_insurance_types();
$kudhai_slug  = get_post_field( 'post_name' );
$kudhai_type  = isset( $kudhai_types[ $kudhai_slug ] ) ? $kudhai_types[ $kudhai_slug ] : null;
?>

<?php if ( $kudhai_type ) : ?>

<!-- ============ HERO ============ -->
<section class="co-hero">
  <div class="container co-hero-inner">
    <nav class="ml-crumb" aria-label="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าแรก</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>">ประกันภัยทั้งหมด</a>
      <span>/</span>
      <span class="current"><?php echo esc_html( $kudhai_type['name'] ); ?></span>
    </nav>
    <span class="eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 17v-4.5a1 1 0 0 1 .3-.7l1.9-1.9A2 2 0 0 1 7.6 9h8.8a2 2 0 0 1 1.4.6l1.9 1.9a1 1 0 0 1 .3.7V17M4 17h16M4 17a1.5 1.5 0 0 0 3 0M17 17a1.5 1.5 0 0 0 3 0M4 13h16"/></svg>
      <?php echo esc_html( $kudhai_type['eyebrow'] ); ?>
    </span>
    <h1><?php echo esc_html( $kudhai_type['name'] ); ?></h1>
    <?php if ( ! empty( $kudhai_type['hero_subtitle'] ) ) : ?>
      <p><?php echo esc_html( $kudhai_type['hero_subtitle'] ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php if ( ! empty( $kudhai_type['coverage_cards'] ) ) :
  $kudhai_csec = ! empty( $kudhai_type['coverage_section'] ) ? $kudhai_type['coverage_section'] : array();
?>
<!-- ============ COVERAGE CARDS ============ -->
<section class="coverage" id="type-coverage">
  <div class="container">
    <?php if ( ! empty( $kudhai_csec ) ) : ?>
      <div class="section-head">
        <?php if ( ! empty( $kudhai_csec['tab'] ) ) : ?>
          <span class="tab">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
            <?php echo esc_html( $kudhai_csec['tab'] ); ?>
          </span>
        <?php endif; ?>
        <?php if ( ! empty( $kudhai_csec['title'] ) ) : ?><h2><?php echo esc_html( $kudhai_csec['title'] ); ?></h2><?php endif; ?>
        <?php if ( ! empty( $kudhai_csec['desc'] ) ) : ?><p><?php echo esc_html( $kudhai_csec['desc'] ); ?></p><?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="coverage-grid">
      <?php foreach ( $kudhai_type['coverage_cards'] as $kudhai_card ) : ?>
        <div class="coverage-card<?php echo ! empty( $kudhai_card['highlight'] ) ? ' highlight' : ''; ?>">
          <div class="coverage-card-head">
            <h3><?php echo esc_html( $kudhai_card['name'] ); ?></h3>
            <?php if ( ! empty( $kudhai_card['badge'] ) ) : ?>
              <span class="coverage-card-badge<?php echo ! empty( $kudhai_card['badge_alt'] ) ? ' alt' : ''; ?>"><?php echo esc_html( $kudhai_card['badge'] ); ?></span>
            <?php endif; ?>
          </div>
          <?php if ( ! empty( $kudhai_card['tag'] ) ) : ?>
            <p class="coverage-card-tag"><?php echo esc_html( $kudhai_card['tag'] ); ?></p>
          <?php endif; ?>
          <ul class="coverage-list">
            <?php foreach ( $kudhai_card['items'] as $kudhai_item ) : ?>
              <li class="<?php echo $kudhai_item['yes'] ? 'cov-yes' : 'cov-no'; ?>">
                <?php if ( $kudhai_item['yes'] ) : ?>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>
                <?php else : ?>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6L6 18M6 6l12 12"/></svg>
                <?php endif; ?>
                <?php echo esc_html( $kudhai_item['label'] ); ?>
              </li>
            <?php endforeach; ?>
          </ul>
          <?php if ( ! empty( $kudhai_card['premium'] ) ) : ?>
            <div class="coverage-premium">
              <div class="label">ระดับเบี้ยประกัน</div>
              <div class="value"><?php echo esc_html( $kudhai_card['premium'] ); ?></div>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if ( ! empty( $kudhai_csec['note'] ) ) : ?>
      <div class="coverage-note">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <?php echo esc_html( $kudhai_csec['note'] ); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- ============ CONTENT ============ -->
<section class="article-content container" id="type-detail-content">
  <div class="prose">
    <?php if ( ! empty( $kudhai_type['lead'] ) ) : ?>
      <p class="lead"><?php echo esc_html( $kudhai_type['lead'] ); ?></p>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['mandatory_note'] ) ) : ?>
      <div class="callout">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
        <p><?php echo esc_html( $kudhai_type['mandatory_note'] ); ?></p>
      </div>
    <?php endif; ?>

    <?php if ( empty( $kudhai_type['coverage_cards'] ) && ( ! empty( $kudhai_type['plans'] ) || ! empty( $kudhai_type['considerations'] ) ) ) : ?>
      <h2><?php echo esc_html( $kudhai_type['name'] ); ?> คุ้มครองอะไรบ้าง</h2>
      <?php if ( ! empty( $kudhai_type['coverage_intro'] ) ) : ?>
        <p><?php echo esc_html( $kudhai_type['coverage_intro'] ); ?></p>
      <?php endif; ?>

      <?php if ( ! empty( $kudhai_type['plans'] ) ) : ?>
        <ul class="plan-list">
          <?php foreach ( $kudhai_type['plans'] as $kudhai_plan_name => $kudhai_plan_desc ) : ?>
            <li>
              <span class="plan-name"><?php echo esc_html( $kudhai_plan_name ); ?></span>
              <span class="plan-desc"><?php echo esc_html( $kudhai_plan_desc ); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if ( ! empty( $kudhai_type['considerations'] ) ) : ?>
        <ul class="plan-list">
          <?php foreach ( $kudhai_type['considerations'] as $kudhai_point ) : ?>
            <li>
              <span class="plan-desc"><?php echo esc_html( $kudhai_point ); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php elseif ( ! empty( $kudhai_type['coverage_intro'] ) ) : ?>
      <p><?php echo esc_html( $kudhai_type['coverage_intro'] ); ?></p>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['coverage_categories'] ) ) : ?>
      <?php foreach ( $kudhai_type['coverage_categories'] as $kudhai_cat ) : ?>
        <h3><?php echo esc_html( $kudhai_cat['title'] ); ?></h3>
        <?php if ( ! empty( $kudhai_cat['desc'] ) ) : ?>
          <p><?php echo esc_html( $kudhai_cat['desc'] ); ?></p>
        <?php endif; ?>
        <?php if ( ! empty( $kudhai_cat['items'] ) ) : ?>
          <ul>
            <?php foreach ( $kudhai_cat['items'] as $kudhai_cat_item ) : ?>
              <li><?php echo esc_html( $kudhai_cat_item ); ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['coverage_matrix'] ) ) :
      $kudhai_matrix = $kudhai_type['coverage_matrix'];
    ?>
      <h3>ตารางเปรียบเทียบความคุ้มครอง</h3>
      <div class="table-scroll">
        <table class="coverage-matrix">
          <thead>
            <tr>
              <th class="coverage-matrix-label">ความคุ้มครอง</th>
              <?php foreach ( $kudhai_matrix['columns'] as $kudhai_col ) : ?>
                <th><?php echo esc_html( $kudhai_col ); ?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ( $kudhai_matrix['rows'] as $kudhai_row ) : ?>
              <tr>
                <td class="coverage-matrix-label"><?php echo esc_html( $kudhai_row['label'] ); ?></td>
                <?php foreach ( $kudhai_row['marks'] as $kudhai_mark ) : ?>
                  <td class="coverage-matrix-mark">
                    <?php if ( $kudhai_mark ) : ?>
                      <svg viewBox="0 0 24 24" width="18" height="18" stroke="#1e9e4f" stroke-width="2.6" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <?php else : ?>
                      <svg viewBox="0 0 24 24" width="18" height="18" stroke="#c3c9d1" stroke-width="2.6" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    <?php endif; ?>
                  </td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php if ( ! empty( $kudhai_matrix['note'] ) ) : ?>
        <p class="coverage-matrix-note"><?php echo esc_html( $kudhai_matrix['note'] ); ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['premium_factors'] ) ) : ?>
      <h3>ปัจจัยที่มีผลต่อเบี้ยประกัน<?php echo esc_html( $kudhai_type['name'] ); ?></h3>
      <ol>
        <?php foreach ( $kudhai_type['premium_factors'] as $kudhai_factor ) : ?>
          <li><?php echo esc_html( $kudhai_factor ); ?></li>
        <?php endforeach; ?>
      </ol>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['documents_needed'] ) ) : ?>
      <h3>ข้อมูลที่ควรเตรียมก่อนขอใบเสนอราคา</h3>
      <ul class="plan-list">
        <?php foreach ( $kudhai_type['documents_needed'] as $kudhai_doc ) : ?>
          <li>
            <span class="plan-name"><?php echo esc_html( $kudhai_doc['title'] ); ?></span>
            <span class="plan-desc"><?php echo esc_html( $kudhai_doc['desc'] ); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['tips'] ) ) : ?>
      <h3>เคล็ดลับเปรียบเทียบ<?php echo esc_html( $kudhai_type['name'] ); ?></h3>
      <ul>
        <?php foreach ( $kudhai_type['tips'] as $kudhai_tip ) : ?>
          <li><?php echo esc_html( $kudhai_tip ); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['highlights'] ) ) : ?>
      <div class="intro-modal-block">
        <h3>เราช่วยคุณเลือก<?php echo esc_html( $kudhai_type['name'] ); ?>อย่างไร</h3>
        <ul class="company-modal-strengths">
          <?php foreach ( $kudhai_type['highlights'] as $kudhai_highlight ) : ?>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6L9 17l-5-5"/></svg>
              <?php echo esc_html( $kudhai_highlight ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="disclaimer-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      <p><strong>เราเป็นนายหน้าประกันภัย ไม่ใช่บริษัทประกัน</strong> ข้อมูลด้านบนเป็นข้อมูลเบื้องต้นเพื่อการเปรียบเทียบ ความคุ้มครอง เงื่อนไข และเบี้ยประกันจริงอาจแตกต่างกันไปตามรถหรือลักษณะการใช้งานแต่ละราย ให้เราช่วยเสนอราคาที่แน่นอนให้คุณโดยตรง</p>
    </div>

    <?php if ( ! empty( $kudhai_type['faq'] ) ) : ?>
      <h2>คำถามที่พบบ่อยเกี่ยวกับ<?php echo esc_html( $kudhai_type['name'] ); ?></h2>
      <div class="faq-list">
        <?php foreach ( $kudhai_type['faq'] as $kudhai_faq_item ) : ?>
          <div class="faq-item">
            <h3><?php echo esc_html( $kudhai_faq_item['q'] ); ?></h3>
            <p><?php echo esc_html( $kudhai_faq_item['a'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['glossary'] ) ) : ?>
      <h2>คำศัพท์ทั่วไปเกี่ยวกับ<?php echo esc_html( $kudhai_type['name'] ); ?></h2>
      <ul>
        <?php foreach ( $kudhai_type['glossary'] as $kudhai_term ) : ?>
          <li><strong><?php echo esc_html( $kudhai_term['term'] ); ?>:</strong> <?php echo esc_html( $kudhai_term['desc'] ); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if ( ! empty( $kudhai_type['related'] ) ) : ?>
      <div class="companies-note">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13.5 6.5l4 4L7 21H3v-4L13.5 6.5z"/><path d="M12 8l4 4"/></svg>
        <span>
          อ่านเพิ่มเติม:
          <?php
          $kudhai_related_links = array();
          foreach ( $kudhai_type['related'] as $kudhai_rel ) {
            $kudhai_related_links[] = '<a href="' . esc_url( home_url( '/' . $kudhai_rel['url'] . '/' ) ) . '">' . esc_html( $kudhai_rel['label'] ) . '</a>';
          }
          echo wp_kses_post( implode( ' · ', $kudhai_related_links ) );
          ?>
        </span>
      </div>
    <?php endif; ?>

    <a href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้ารวมประกันภัยทั้งหมด
    </a>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="co-cta">
  <div class="container">
    <h2>สนใจ<?php echo esc_html( $kudhai_type['name'] ); ?>หรือยัง</h2>
    <p>ส่งข้อมูลให้เรา เราจะช่วยเปรียบเทียบและเสนอแผนที่เหมาะกับคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น</p>
    <div class="cta-row">
      <a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn btn-primary">ขอใบเสนอราคา</a>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-ghost">ติดต่อเรา</a>
    </div>
  </div>
</section>

<?php else : ?>

<section class="article-content container" style="padding-top:calc(var(--header-h) + 48px);">
  <div class="prose">
    <h1 style="font-size:28px; font-weight:800; margin-bottom:16px;">ไม่พบข้อมูลประกันภัยประเภทนี้</h1>
    <p>ลองกลับไปดูประกันภัยทุกประเภทที่เราให้คำปรึกษาแทน</p>
    <a href="<?php echo esc_url( home_url( '/insurance-types/' ) ); ?>" class="back-link">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
      กลับไปหน้ารวมประกันภัยทั้งหมด
    </a>
  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>
