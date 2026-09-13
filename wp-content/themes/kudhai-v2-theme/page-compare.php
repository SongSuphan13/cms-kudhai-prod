<?php
/**
 * Template Name: KUDHai — เปรียบเทียบประกันรถยนต์
 * Template Post Type: page
 */
defined( 'ABSPATH' ) || exit;
kudhai_v2_set_page( 'compare' );
get_header();
$provinces = explode( '|', 'กรุงเทพมหานคร|กระบี่|กาญจนบุรี|กาฬสินธุ์|กำแพงเพชร|ขอนแก่น|จันทบุรี|ฉะเชิงเทรา|ชลบุรี|ชัยนาท|ชัยภูมิ|ชุมพร|เชียงราย|เชียงใหม่|ตรัง|ตราด|ตาก|นครนายก|นครปฐม|นครพนม|นครราชสีมา|นครศรีธรรมราช|นครสวรรค์|นนทบุรี|นราธิวาส|น่าน|บึงกาฬ|บุรีรัมย์|ปทุมธานี|ประจวบคีรีขันธ์|ปราจีนบุรี|ปัตตานี|พระนครศรีอยุธยา|พะเยา|พังงา|พัทลุง|พิจิตร|พิษณุโลก|เพชรบุรี|เพชรบูรณ์|แพร่|ภูเก็ต|มหาสารคาม|มุกดาหาร|แม่ฮ่องสอน|ยโสธร|ยะลา|ร้อยเอ็ด|ระนอง|ระยอง|ราชบุรี|ลพบุรี|ลำปาง|ลำพูน|เลย|ศรีสะเกษ|สกลนคร|สงขลา|สตูล|สมุทรปราการ|สมุทรสงคราม|สมุทรสาคร|สระแก้ว|สระบุรี|สิงห์บุรี|สุโขทัย|สุพรรณบุรี|สุราษฎร์ธานี|สุรินทร์|หนองคาย|หนองบัวลำภู|อ่างทอง|อำนาจเจริญ|อุดรธานี|อุตรดิตถ์|อุทัยธานี|อุบลราชธานี' );
?>
<main id="main-content" class="compare-page" tabindex="-1">
<div class="compare-shell">
<header class="compare-intro">
<nav class="compare-crumb" aria-label="เส้นทางหน้า"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">หน้าหลัก</a><span>/</span><span>ขอใบเสนอราคา</span></nav>
<h1>บอกรายละเอียดรถของคุณ</h1>
<p>ตอบทีละข้อ ใช้เวลาไม่นาน</p>
<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/car-1.png' ) ); ?>" width="1536" height="1024" alt="" class="compare-car" decoding="async">
</header>
<noscript><p class="compare-notice">กรุณาเปิด JavaScript เพื่อใช้แบบฟอร์มทีละขั้น หรือ <a href="https://line.me/R/ti/p/%40582iiruk">ติดต่อ LINE @582iiruk</a></p></noscript>
<form class="compare-form-panel" id="vehicle-compare" hidden novalidate>
<div class="compare-progress"><p id="compare-progress-label" aria-live="polite">คำถาม 1 จาก 6</p><div class="compare-progress-track" role="progressbar" aria-label="ความคืบหน้าการกรอกข้อมูลรถ" aria-valuemin="0" aria-valuemax="6" aria-valuenow="1"><?php for ( $i = 0; $i < 6; $i++ ) : ?><span></span><?php endfor; ?></div></div>
<section class="compare-step" data-step="0" aria-labelledby="step-title-0">
<h2 id="step-title-0" tabindex="-1">รถของคุณยี่ห้ออะไร?</h2>
<label for="compare-brand">ยี่ห้อรถ</label>
<input id="compare-brand" data-field="brand" type="text" maxlength="60" placeholder="ค้นหาหรือพิมพ์ยี่ห้อรถ" autocomplete="off" required aria-describedby="brand-hint">
<p class="compare-hint" id="brand-hint">เลือกจากรายการ หรือพิมพ์ยี่ห้อรถของคุณได้เลย</p>
<div class="compare-brand-grid" aria-label="ยี่ห้อรถที่เลือกได้">
<?php foreach ( array( 'Toyota', 'Honda', 'Isuzu', 'Nissan', 'Mazda', 'Ford', 'Mitsubishi', 'MG', 'BYD', 'Suzuki', 'Mercedes-Benz', 'BMW' ) as $brand ) : ?>
<button type="button" data-brand="<?php echo esc_attr( $brand ); ?>" aria-pressed="false"><?php echo esc_html( $brand ); ?></button>
<?php endforeach; ?>
</div>
<button type="button" class="compare-other" id="compare-other-brand">ยี่ห้ออื่น ๆ</button>
</section>
<section class="compare-step" data-step="1" aria-labelledby="step-title-1" hidden>
<h2 id="step-title-1" tabindex="-1">รถของคุณรุ่นอะไร?</h2><p class="compare-context"></p>
<label for="compare-model">รุ่นรถ</label><input id="compare-model" data-field="model" list="compare-models" maxlength="80" placeholder="เลือกรุ่น หรือพิมพ์รุ่นรถของคุณ" autocomplete="off" required><datalist id="compare-models"></datalist>
<p class="compare-hint">หากไม่มีรุ่นรถในรายการ สามารถพิมพ์ชื่อรุ่นได้เอง</p>
</section>
<section class="compare-step" data-step="2" aria-labelledby="step-title-2" hidden>
<h2 id="step-title-2" tabindex="-1">รถของคุณปีอะไร?</h2><p class="compare-context"></p>
<label for="compare-year">ปีรถ (ค.ศ.)</label><select id="compare-year" data-field="year" required><option value="">เลือกปีรถ</option><?php for ( $year = (int) wp_date( 'Y' ) + 1; $year >= 1950; $year-- ) : ?><option value="<?php echo esc_attr( $year ); ?>"><?php echo esc_html( $year . ' (พ.ศ. ' . ( $year + 543 ) . ')' ); ?></option><?php endfor; ?></select>
<p class="compare-hint">เลือกปีรถตามข้อมูลรถหรือเอกสารที่คุณมี</p>
</section>
<section class="compare-step" data-step="3" aria-labelledby="step-title-3" hidden>
<h2 id="step-title-3" tabindex="-1">รถของคุณรุ่นย่อยอะไร?</h2><p class="compare-context"></p>
<label for="compare-variant">รุ่นย่อย</label><input id="compare-variant" data-field="variant" maxlength="100" placeholder="เช่น 1.8 HEV Premium" autocomplete="off" required>
<button type="button" class="compare-other" id="compare-unknown-variant">ไม่ทราบรุ่นย่อย ให้ที่ปรึกษาช่วยตรวจสอบ</button>
</section>
<section class="compare-step" data-step="4" aria-labelledby="step-title-4" hidden>
<h2 id="step-title-4" tabindex="-1">ป้ายทะเบียนรถของคุณคืออะไร?</h2>
<label for="compare-plate">ป้ายทะเบียนรถ</label><input id="compare-plate" data-field="plate" maxlength="20" placeholder="เช่น กข 1234 หรือ 1กข 1234" autocomplete="off" required>
<p class="compare-hint">กรอกตามป้ายทะเบียนรถ โดยไม่ต้องใส่ชื่อจังหวัด</p>
</section>
<section class="compare-step" data-step="5" aria-labelledby="step-title-5" hidden>
<h2 id="step-title-5" tabindex="-1">รถของคุณจดทะเบียนจังหวัดอะไร?</h2>
<p>เลือกจังหวัดที่ระบุในเล่มทะเบียนรถของคุณ</p>
<label for="compare-province">จังหวัดทะเบียนรถ</label><select id="compare-province" data-field="province" required><option value="">เลือกจังหวัดทะเบียนรถ</option><?php foreach ( $provinces as $province ) : ?><option value="<?php echo esc_attr( $province ); ?>"><?php echo esc_html( $province ); ?></option><?php endforeach; ?></select>
<div class="compare-summary"><h3>ข้อมูลรถที่คุณตอบ</h3><dl id="compare-summary-rows"></dl></div>
<p class="compare-check"><svg aria-hidden="true"><use href="#icon-shield"/></svg>ตรวจสอบข้อมูลให้ถูกต้องก่อนส่งให้ที่ปรึกษา</p>
<p class="compare-privacy">เมื่อกดปุ่ม ข้อมูลรถและทะเบียนจะถูกนำไปใส่ในข้อความถึง LINE @582iiruk โปรดตรวจสอบและกดส่งใน LINE อีกครั้ง <a href="<?php echo esc_url( kudhai_v2_page_url( 'privacy-policy' ) ); ?>">นโยบายความเป็นส่วนตัว</a></p>
<details class="compare-copy-help"><summary>ข้อความใน LINE เป็น ?? หรืออ่านไม่ออก?</summary>
<p>คัดลอกข้อความด้านล่าง แล้วเปิดแชตเพื่อวางข้อความแทน</p>
<label for="compare-message">ข้อความสำหรับส่งให้ที่ปรึกษา</label>
<textarea id="compare-message" rows="10" readonly></textarea>
<button type="button" id="compare-copy">คัดลอกข้อมูลรถ</button>
<a href="https://line.me/R/oaMessage/%40582iiruk/">เปิดแชต LINE @582iiruk</a>
<p id="compare-copy-status" role="status" aria-live="polite"></p>
</details>
</section>
<p class="compare-error" id="compare-error" role="alert" hidden></p>
<div class="compare-controls"><button type="button" class="compare-back" id="compare-back" disabled>← ย้อนกลับ</button><button type="submit" class="compare-next" id="compare-next">ถัดไป →</button><button type="submit" class="compare-line" id="compare-line" hidden>ส่งข้อมูลและคุยต่อใน LINE</button></div>
<p class="compare-line-note" id="compare-line-note" hidden>ระบบจะเปิด LINE พร้อมข้อความสรุปข้อมูลรถของคุณ</p>
</form>
</div>
</main>
<?php get_footer(); ?>
