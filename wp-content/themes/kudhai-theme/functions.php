<?php
/**
 * Kudhai Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KUDHAI_THEME_VERSION', '1.0.1' );

function kudhai_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kudhai-theme' ),
	) );
}
add_action( 'after_setup_theme', 'kudhai_theme_setup' );

/**
 * Post permalinks use /article/%category%/%postname%/ (see permalink_structure),
 * but WordPress's auto-generated category-archive rule (article/(.+?)/?$) is
 * greedy enough to swallow the postname segment too, since category_base is
 * also "article". Register a stricter, higher-priority rule so a 2-segment
 * /article/{category}/{postname}/ request resolves to the single post
 * instead of getting misrouted to the category archive.
 */
function kudhai_article_post_rewrite_rule() {
	add_rewrite_rule( '^article/([^/]+)/([^/]+)/?$', 'index.php?category_name=$matches[1]&name=$matches[2]', 'top' );
}
add_action( 'init', 'kudhai_article_post_rewrite_rule' );

function kudhai_theme_assets() {
	wp_enqueue_style( 'kudhai-fonts', 'https://fonts.googleapis.com/css2?family=Prompt:wght@500;600;700;800&family=IBM+Plex+Sans+Thai:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'kudhai-style', get_stylesheet_uri(), array(), KUDHAI_THEME_VERSION );
	if ( kudhai_is_mun_lamert_template() ) {
		wp_enqueue_style( 'kudhai-mun-guide', get_template_directory_uri() . '/assets/css/mun-lamert.css', array( 'kudhai-style' ), filemtime( get_template_directory() . '/assets/css/mun-lamert.css' ) );
	}
	wp_enqueue_script( 'kudhai-main', get_template_directory_uri() . '/assets/js/main.js', array(), KUDHAI_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'kudhai_theme_assets' );

function kudhai_is_mun_lamert_template() {
	if ( is_page( array(
		'mun-lamert',
		'what-is',
		'car-accident',
		'how-to-claim',
		'compensation',
		'loss-of-use',
		'repair-cost',
		'medical-expenses',
		'lost-income',
		'depreciation',
		'injury',
		'death',
		'documents',
		'claim-rejected',
	) ) ) {
		return true;
	}

	return is_page_template( array(
		'page-mun-lamert.php',
		'page-mun-lamert-what-is.php',
		'page-mun-lamert-car-accident.php',
		'page-mun-lamert-how-to-claim.php',
		'page-mun-lamert-compensation.php',
		'page-mun-lamert-loss-of-use.php',
		'page-mun-lamert-repair-cost.php',
		'page-mun-lamert-medical-expenses.php',
		'page-mun-lamert-lost-income.php',
		'page-mun-lamert-depreciation.php',
		'page-mun-lamert-injury.php',
		'page-mun-lamert-death.php',
		'page-mun-lamert-documents.php',
		'page-mun-lamert-claim-rejected.php',
	) );
}

// Disable the front-end admin bar (the fixed header relies on the page
// starting at the very top, and the admin bar pushes/overlaps it).
add_filter( 'show_admin_bar', '__return_false' );

function kudhai_register_contact_submission_type() {
	register_post_type( 'kudhai_submission', array(
		'labels' => array(
			'name'          => 'Contact Submissions',
			'singular_name' => 'Contact Submission',
			'menu_name'     => 'Contact Leads',
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'supports'     => array( 'title', 'editor', 'custom-fields' ),
		'menu_icon'    => 'dashicons-email-alt2',
	) );
}
add_action( 'init', 'kudhai_register_contact_submission_type' );

function kudhai_handle_contact_submission() {
	$is_ajax = ! empty( $_POST['kudhai_ajax'] ) || wp_doing_ajax() || (
		isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && 'XMLHttpRequest' === sanitize_text_field( wp_unslash( $_SERVER['HTTP_X_REQUESTED_WITH'] ) )
	) || (
		isset( $_SERVER['HTTP_ACCEPT'] ) && false !== strpos( sanitize_text_field( wp_unslash( $_SERVER['HTTP_ACCEPT'] ) ), 'application/json' )
	);

	if ( empty( $_POST['kudhai_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['kudhai_contact_nonce'] ) ), 'kudhai_contact_submit' ) ) {
		if ( $is_ajax ) {
			wp_send_json_error( array( 'message' => 'ไม่สามารถยืนยันการส่งข้อมูลได้ กรุณาลองใหม่อีกครั้ง' ), 403 );
		}
		wp_safe_redirect( add_query_arg( 'contact_status', 'invalid', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
		exit;
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$phone_digits = preg_replace( '/\D+/', '', $phone );
	$topic   = isset( $_POST['topic'] ) ? sanitize_text_field( wp_unslash( $_POST['topic'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
	$source  = isset( $_POST['source'] ) ? sanitize_text_field( wp_unslash( $_POST['source'] ) ) : 'contact-us';
	$make    = isset( $_POST['make'] ) ? sanitize_text_field( wp_unslash( $_POST['make'] ) ) : '';
	$model   = isset( $_POST['model'] ) ? sanitize_text_field( wp_unslash( $_POST['model'] ) ) : '';
	$submodel = isset( $_POST['submodel'] ) ? sanitize_text_field( wp_unslash( $_POST['submodel'] ) ) : '';
	$year    = isset( $_POST['year'] ) ? sanitize_text_field( wp_unslash( $_POST['year'] ) ) : '';
	$plate   = isset( $_POST['plate'] ) ? sanitize_text_field( wp_unslash( $_POST['plate'] ) ) : '';
	$province = isset( $_POST['province'] ) ? sanitize_text_field( wp_unslash( $_POST['province'] ) ) : '';
	$type    = isset( $_POST['type'] ) ? sanitize_text_field( wp_unslash( $_POST['type'] ) ) : '';
	$is_quote = 'quote' === $topic || 'front-page-quote' === $source || '' !== $type || '' !== $make || '' !== $model;

	if ( '' === $name || '' === $phone || '' === $topic ) {
		if ( $is_ajax ) {
			wp_send_json_error( array( 'message' => 'กรุณากรอกชื่อ เบอร์โทรศัพท์ และเรื่องที่ต้องการปรึกษา' ), 422 );
		}
		wp_safe_redirect( add_query_arg( 'contact_status', 'missing', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
		exit;
	}
	if ( $is_quote && ( '' === $make || '' === $model || '' === $submodel || '' === $year || '' === $province || '' === $type ) ) {
		if ( $is_ajax ) {
			wp_send_json_error( array( 'message' => 'กรุณากรอกยี่ห้อรถ รุ่นรถ รุ่นย่อย ปีรถ จังหวัดที่จดทะเบียน และประเภทประกันที่สนใจ' ), 422 );
		}
		wp_safe_redirect( add_query_arg( 'contact_status', 'missing_quote', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
		exit;
	}
	if ( ! preg_match( '/^0\d{8,9}$/', $phone_digits ) ) {
		if ( $is_ajax ) {
			wp_send_json_error( array( 'message' => 'กรุณากรอกเบอร์โทรศัพท์ไทย 9-10 หลัก เช่น 0812345678' ), 422 );
		}
		wp_safe_redirect( add_query_arg( 'contact_status', 'invalid_phone', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
		exit;
	}
	$phone = $phone_digits;

	$topic_labels = array(
		'before-buy' => 'ปรึกษาก่อนซื้อประกัน',
		'quote'      => 'ขอใบเสนอราคา',
		'accident'   => 'เพิ่งประสบอุบัติเหตุ / ต้องการเคลม',
		'compulsory' => 'สอบถามสิทธิ์ พ.ร.บ.',
		'other'      => 'อื่นๆ',
	);
	$type_labels = array(
		'class1'     => 'ชั้น 1',
		'class2plus' => 'ชั้น 2+',
		'class3plus' => 'ชั้น 3+',
		'class3'     => 'ชั้น 3',
		'unsure'     => 'ยังไม่แน่ใจ อยากให้แนะนำ',
	);
	$topic_label = $topic_labels[ $topic ] ?? $topic;
	$type_label  = $type_labels[ $type ] ?? $type;

	$details = array_filter( array(
		'ชื่อ' => $name,
		'เบอร์โทรศัพท์' => $phone,
		'เรื่องที่ต้องการปรึกษา' => $topic_label,
		'ประเภทประกันที่สนใจ' => $type_label,
		'ยี่ห้อรถ' => $make,
		'รุ่นรถ' => $model,
		'รุ่นย่อย' => $submodel,
		'ปีรถ' => $year,
		'ทะเบียนรถ' => $plate,
		'จังหวัดที่จดทะเบียน' => $province,
		'ข้อความเพิ่มเติม' => $message,
		'แหล่งที่มา' => $source,
	) );
	$content_lines = array(
		'**เรื่องที่ต้องการปรึกษา ' . ( $topic_label ?: '-' ) . '**',
		'',
	);
	foreach ( $details as $label => $value ) {
		$content_lines[] = $label . ': ' . $value;
	}

	$title_prefix = $is_quote ? 'ใบเสนอราคา' : 'ติดต่อ';
	$title = sprintf( '%s %s - %s', $title_prefix, $name, current_time( 'mysql' ) );
	$post_id = wp_insert_post( array(
		'post_type'    => 'kudhai_submission',
		'post_status'  => 'private',
		'post_title'   => $title,
		'post_content' => implode( "\n", $content_lines ),
		'meta_input'   => array(
			'_kudhai_contact_name'       => $name,
			'_kudhai_contact_phone'      => $phone,
			'_kudhai_contact_topic'      => $topic,
			'_kudhai_contact_message'    => $message,
			'_kudhai_contact_source'     => $source,
			'_kudhai_quote_make'         => $make,
			'_kudhai_quote_model'        => $model,
			'_kudhai_quote_submodel'     => $submodel,
			'_kudhai_quote_year'         => $year,
			'_kudhai_quote_plate'        => $plate,
			'_kudhai_quote_province'     => $province,
			'_kudhai_quote_type'         => $type,
			'_kudhai_contact_page_url'   => esc_url_raw( wp_get_referer() ?: home_url( '/contact-us/' ) ),
			'_kudhai_contact_ip'         => isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '',
			'_kudhai_contact_user_agent' => isset( $_SERVER['HTTP_USER_AGENT'] ) ? sanitize_text_field( wp_unslash( $_SERVER['HTTP_USER_AGENT'] ) ) : '',
		),
	), true );

	if ( is_wp_error( $post_id ) ) {
		if ( $is_ajax ) {
			wp_send_json_error( array( 'message' => 'บันทึกข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง' ), 500 );
		}
		wp_safe_redirect( add_query_arg( 'contact_status', 'error', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
		exit;
	}

	if ( $is_ajax ) {
		wp_send_json_success( array(
			'id'      => $post_id,
			'message' => 'ได้รับข้อมูลแล้ว ทีมงานจะติดต่อกลับภายใน 24 ชั่วโมง',
		) );
	}

	wp_safe_redirect( add_query_arg( 'contact_status', 'success', wp_get_referer() ?: home_url( '/contact-us/' ) ) );
	exit;
}
add_action( 'admin_post_kudhai_contact_submit', 'kudhai_handle_contact_submission' );
add_action( 'admin_post_nopriv_kudhai_contact_submit', 'kudhai_handle_contact_submission' );

add_filter( 'manage_kudhai_submission_posts_columns', function ( $columns ) {
	return array(
		'cb'      => $columns['cb'],
		'title'   => 'Submission',
		'name'    => 'Name',
		'phone'   => 'Phone',
		'topic'   => 'Topic',
		'type'    => 'Insurance',
		'source'  => 'Source',
		'date'    => $columns['date'],
	);
} );

add_action( 'manage_kudhai_submission_posts_custom_column', function ( $column, $post_id ) {
	$meta_key = array(
		'name'   => '_kudhai_contact_name',
		'phone'  => '_kudhai_contact_phone',
		'topic'  => '_kudhai_contact_topic',
		'type'   => '_kudhai_quote_type',
		'source' => '_kudhai_contact_source',
	);
	if ( isset( $meta_key[ $column ] ) ) {
		echo esc_html( get_post_meta( $post_id, $meta_key[ $column ], true ) );
	}
}, 10, 2 );

/**
 * SEO: meta description, canonical, Open Graph / Twitter card, and
 * JSON-LD structured data. WordPress core outputs none of this on its
 * own, so the theme handles it directly instead of requiring a plugin.
 */

function kudhai_get_seo_description() {
	if ( ! empty( $GLOBALS['kudhai_mun_lamert_meta']['description'] ) ) {
		return $GLOBALS['kudhai_mun_lamert_meta']['description'];
	}

	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$co = $companies[ $slug ];
			return $co['name'] . ' ประกันรถยนต์ ' . $co['coverage'] . ' — ' . $co['desc'] . ' เปรียบเทียบเบี้ยและขอใบเสนอราคาฟรีกับที่ปรึกษาประกันภัยรถยนต์';
		}
	}

	if ( is_page_template( 'template-insurance-type.php' ) ) {
		$types = kudhai_get_insurance_types();
		$slug  = get_post_field( 'post_name' );
		if ( isset( $types[ $slug ] ) ) {
			return $types[ $slug ]['meta_description'];
		}
	}

	if ( is_page( 'car-insurance' ) ) {
		return 'เช็กเบี้ยและเปรียบเทียบประกันรถยนต์ชั้น 1, 2+, 2, 3+, 3 และ พ.ร.บ. จากที่ปรึกษาประกันภัยรถยนต์ ช่วยเลือกความคุ้มครองให้ตรงกับการใช้งานและงบประมาณ ปรึกษาฟรี';
	}

	if ( is_page( 'motorbike-insurance' ) ) {
		return 'เปรียบเทียบประกันรถมอเตอร์ไซค์ทั้งภาคสมัครใจและ พ.ร.บ. จากที่ปรึกษาประกันภัย ช่วยเลือกแผนที่เหมาะกับรุ่นรถและการใช้งานจริง ปรึกษาฟรี';
	}

	if ( is_page( 'electric-vehicle' ) ) {
		return 'เปรียบเทียบประกันรถยนต์ไฟฟ้า (EV) ครอบคลุมแบตเตอรี่ มอเตอร์ไฟฟ้า และอุปกรณ์ชาร์จ จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี';
	}

	if ( is_page( 'compulsory-car-insurance' ) ) {
		return 'พ.ร.บ. รถยนต์ ประกันภาคบังคับตามกฎหมายที่รถทุกคันต้องมี คุ้มครองค่ารักษาพยาบาลเบื้องต้นของผู้ประสบภัย เช็กความคุ้มครองและวิธีต่อ พ.ร.บ. กับที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี';
	}

	if ( is_page( 'viriyah-insurance' ) ) {
		return 'รู้จักวิริยะประกันภัยและที่มาบริษัท พร้อมประกันรถยนต์ชั้น 1, 2, 2+, 3+, 3, พ.ร.บ. และ EV รวมถึงประกันอุบัติเหตุ บ้าน และเดินทาง โดย คัดให้';
	}

	if ( is_page( 'roojai-insurance' ) ) {
		return 'รู้จักประกันรถยนต์ Roojai ทั้งชั้น 1, 2+, 2, 3+, 3, รถยนต์ไฟฟ้า และ พ.ร.บ. เปรียบเทียบความคุ้มครอง วิธีเช็กราคา และประกันประเภทอื่นที่มี';
	}

	if ( is_page( 'muang-thai-insurance' ) ) {
		return 'เปรียบเทียบแผนประกันรถยนต์เมืองไทยประกันภัย ชั้น 1, 2+, 3+ และ พ.ร.บ. เบี้ยคุ้มค่า มีศูนย์บริการและตัวแทนทั่วประเทศ จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี';
	}

	if ( is_page( 'bangkok-insurance' ) ) {
		return 'เปรียบเทียบแผนประกันรถยนต์กรุงเทพประกันภัย ชั้น 1, 2+ และ พ.ร.บ. เชี่ยวชาญกรมธรรม์ที่ปรับแต่งได้สำหรับลูกค้าองค์กร จากที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรี';
	}

	if ( is_page( 'chubb-insurance' ) ) {
		return 'รู้จักประกันรถยนต์ Chubb ทั้งชั้น 1, 2, 2+, 3, 3+ และ พ.ร.บ. พร้อมบริการที่เกี่ยวข้อง รวมถึงประกันสุขภาพ โรคมะเร็ง ชดเชยรายได้ และประกันบ้านและคอนโด';
	}

	if ( is_page( 'truck-insurance' ) ) {
		return 'ปรึกษาประกันรถบรรทุกทุกขนาด ทั้ง 6 ล้อและ 10 ล้อ เปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้เหมาะกับลักษณะการใช้งานขนส่ง ปรึกษาฟรี';
	}

	if ( is_page( 'van-insurance' ) ) {
		return 'ปรึกษาประกันรถตู้ทั้งใช้งานส่วนบุคคลและรับส่งผู้โดยสาร เปรียบเทียบแผนความคุ้มครองจากหลายบริษัทให้เหมาะกับการใช้งานจริง ปรึกษาฟรี';
	}

	if ( is_page( 'cancer-insurance' ) ) {
		return 'ประกันมะเร็ง คุ้มครองค่ารักษาและเงินก้อนเมื่อตรวจพบโรค เปรียบเทียบแผนจากที่ปรึกษาประกันภัย ช่วยเลือกความคุ้มครองที่เหมาะกับคุณ ปรึกษาฟรี';
	}

	if ( is_page( 'personal-accident-insurance' ) ) {
		return 'ประกันอุบัติเหตุ (PA) คุ้มครองค่ารักษา ทุพพลภาพ และเสียชีวิตจากอุบัติเหตุ ทั้งในและนอกเวลางาน เปรียบเทียบแผนจากที่ปรึกษาประกันภัย ปรึกษาฟรี';
	}

	if ( is_front_page() ) {
		return 'ที่ปรึกษาประกันภัยรถยนต์ ให้คำปรึกษาเรื่องมูลละเมิดประกันภัยรถยนต์และการเรียกร้องค่าสินไหมทดแทน เปรียบเทียบแผนประกันรถยนต์ รถไฟฟ้า มอเตอร์ไซค์ที่เหมาะกับคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น';
	}
	if ( is_page( 'about' ) ) {
		return 'รู้จักทีมที่ปรึกษาประกันภัยรถยนต์ ผู้เชี่ยวชาญด้านมูลละเมิดประกันภัยรถยนต์และการเรียกร้องค่าสินไหม ช่วยเปรียบเทียบแผนประกันรถยนต์ รถไฟฟ้า มอเตอร์ไซค์ที่เหมาะกับคุณ';
	}
	if ( is_page( 'contact-us' ) ) {
		return 'ติดต่อทีมที่ปรึกษาประกันภัยรถยนต์ ปรึกษาฟรีทางโทรศัพท์ LINE หรือกรอกแบบฟอร์มขอใบเสนอราคา ให้บริการทุกวัน 08:00 - 22:00 น.';
	}
	if ( is_page( 'insurance-companies' ) ) {
		return 'เปรียบเทียบบริษัทประกันภัยรถยนต์ชั้นนำที่เราแนะนำ ไม่ผูกติดกับบริษัทใดบริษัทหนึ่ง ช่วยเลือกแผนความคุ้มครองที่เหมาะกับการใช้งานและงบประมาณของคุณ';
	}
	if ( is_page( 'insurance-types' ) ) {
		return 'รวมประกันภัยทุกประเภทที่เราให้คำปรึกษา ทั้งประกันรถยนต์ รถยนต์ไฟฟ้า รถมอเตอร์ไซค์ ประกันมะเร็ง และประกันอุบัติเหตุ เปรียบเทียบแผนจากหลายบริษัทให้ฟรี';
	}
	if ( is_page( 'articles' ) ) {
		return 'รวมบทความให้ความรู้เรื่องประกันภัยรถยนต์ การเรียกร้องค่าสินไหม สิทธิ์ พ.ร.บ. และการเลือกแผนความคุ้มครองที่เหมาะกับการใช้งานจริง อ่านฟรีจากทีมที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'mun-lamert' ) ) {
		return 'มูลละเมิดคืออะไร ทำไมหลายคนไม่รู้ว่าตัวเองมีสิทธิ์เรียกร้องค่าเสียหายเพิ่มเติมนอกเหนือจากที่ประกันจ่ายให้ อธิบายง่ายๆ พร้อมตัวอย่างจริง';
	}
	if ( is_singular( 'post' ) ) {
		$excerpt = get_the_excerpt();
		return $excerpt ? wp_strip_all_tags( $excerpt ) : get_the_title();
	}

	return get_bloginfo( 'name' ) . ' — ที่ปรึกษาประกันภัยรถยนต์ ให้คำปรึกษาเรื่องมูลละเมิดและการเรียกร้องค่าสินไหมทดแทน';
}

function kudhai_get_seo_title() {
	if ( ! empty( $GLOBALS['kudhai_mun_lamert_meta']['title'] ) ) {
		return $GLOBALS['kudhai_mun_lamert_meta']['title'];
	}

	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$co = $companies[ $slug ];
			return $co['name'] . ' ประกันรถยนต์ | เปรียบเทียบแผนและเบี้ยประกัน';
		}
	}
	if ( is_page_template( 'template-insurance-type.php' ) ) {
		$types = kudhai_get_insurance_types();
		$slug  = get_post_field( 'post_name' );
		if ( isset( $types[ $slug ] ) ) {
			return $types[ $slug ]['seo_title'];
		}
	}
	if ( is_page( 'car-insurance' ) ) {
		return 'ประกันรถยนต์ เช็กเบี้ย เปรียบเทียบแผนกับที่ปรึกษาประกันภัยรถยนต์';
	}
	if ( is_page( 'motorbike-insurance' ) ) {
		return 'ประกันรถมอเตอร์ไซค์ เปรียบเทียบแผนภาคสมัครใจและ พ.ร.บ.';
	}
	if ( is_page( 'electric-vehicle' ) ) {
		return 'ประกันรถยนต์ไฟฟ้า (EV) เปรียบเทียบแผนความคุ้มครองแบตเตอรี่และมอเตอร์ไฟฟ้า';
	}
	if ( is_page( 'compulsory-car-insurance' ) ) {
		return 'พ.ร.บ. รถยนต์ ประกันภาคบังคับ เช็กความคุ้มครองและวิธีต่อ พ.ร.บ.';
	}
	if ( is_page( 'viriyah-insurance' ) ) {
		return 'วิริยะประกันภัย ประวัติบริษัท ประกันรถยนต์และผลิตภัณฑ์อื่น';
	}
	if ( is_page( 'roojai-insurance' ) ) {
		return 'ประกันรถยนต์ Roojai มีแบบไหนบ้าง? เปรียบเทียบความคุ้มครอง | KUDHAI';
	}
	if ( is_page( 'muang-thai-insurance' ) ) {
		return 'ประกันรถยนต์ เมืองไทยประกันภัย เปรียบเทียบแผนทุกชั้นกับที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'bangkok-insurance' ) ) {
		return 'ประกันรถยนต์ กรุงเทพประกันภัย เปรียบเทียบแผนทุกชั้นกับที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'chubb-insurance' ) ) {
		return 'ประกันรถยนต์ Chubb มีแบบไหนบ้าง? ความคุ้มครองและประกันอื่น ๆ | KUDHAI';
	}
	if ( is_page( 'truck-insurance' ) ) {
		return 'ประกันรถบรรทุก 6 ล้อ 10 ล้อ เปรียบเทียบแผนให้เหมาะกับงานขนส่ง';
	}
	if ( is_page( 'van-insurance' ) ) {
		return 'ประกันรถตู้ ส่วนบุคคลและรับส่งผู้โดยสาร เปรียบเทียบแผนความคุ้มครอง';
	}
	if ( is_page( 'cancer-insurance' ) ) {
		return 'ประกันมะเร็ง คุ้มครองอะไรบ้าง เปรียบเทียบแผนกับที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'personal-accident-insurance' ) ) {
		return 'ประกันอุบัติเหตุ (PA) คุ้มครองทุกที่ทุกเวลา เปรียบเทียบแผนก่อนซื้อ';
	}
	return wp_get_document_title();
}

add_filter( 'document_title_parts', function ( $parts ) {
	if ( ! empty( $GLOBALS['kudhai_mun_lamert_meta']['title'] ) ) {
		$parts['title'] = $GLOBALS['kudhai_mun_lamert_meta']['title'];
		return $parts;
	}

	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$parts['title'] = $companies[ $slug ]['name'] . ' ประกันรถยนต์ | เปรียบเทียบแผนและเบี้ยประกัน';
		}
	}
	if ( is_page_template( 'template-insurance-type.php' ) ) {
		$types = kudhai_get_insurance_types();
		$slug  = get_post_field( 'post_name' );
		if ( isset( $types[ $slug ] ) ) {
			$parts['title'] = $types[ $slug ]['seo_title'];
		}
	}
	if ( is_page( 'car-insurance' ) ) {
		$parts['title'] = 'ประกันรถยนต์ เช็กเบี้ย เปรียบเทียบแผนกับที่ปรึกษาประกันภัยรถยนต์';
	}
	if ( is_page( 'motorbike-insurance' ) ) {
		$parts['title'] = 'ประกันรถมอเตอร์ไซค์ เปรียบเทียบแผนภาคสมัครใจและ พ.ร.บ.';
	}
	if ( is_page( 'electric-vehicle' ) ) {
		$parts['title'] = 'ประกันรถยนต์ไฟฟ้า (EV) เปรียบเทียบแผนความคุ้มครองแบตเตอรี่และมอเตอร์ไฟฟ้า';
	}
	if ( is_page( 'compulsory-car-insurance' ) ) {
		$parts['title'] = 'พ.ร.บ. รถยนต์ ประกันภาคบังคับ เช็กความคุ้มครองและวิธีต่อ พ.ร.บ.';
	}
	if ( is_page( 'viriyah-insurance' ) ) {
		$parts['title'] = 'วิริยะประกันภัย ประวัติบริษัท ประกันรถยนต์และผลิตภัณฑ์อื่น';
	}
	if ( is_page( 'roojai-insurance' ) ) {
		$parts['title'] = 'ประกันรถยนต์ Roojai มีแบบไหนบ้าง? เปรียบเทียบความคุ้มครอง | KUDHAI';
		unset( $parts['site'], $parts['tagline'] );
	}
	if ( is_page( 'muang-thai-insurance' ) ) {
		$parts['title'] = 'ประกันรถยนต์ เมืองไทยประกันภัย เปรียบเทียบแผนทุกชั้นกับที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'bangkok-insurance' ) ) {
		$parts['title'] = 'ประกันรถยนต์ กรุงเทพประกันภัย เปรียบเทียบแผนทุกชั้นกับที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'chubb-insurance' ) ) {
		$parts['title'] = 'ประกันรถยนต์ Chubb มีแบบไหนบ้าง? ความคุ้มครองและประกันอื่น ๆ | KUDHAI';
	}
	if ( is_page( 'truck-insurance' ) ) {
		$parts['title'] = 'ประกันรถบรรทุก 6 ล้อ 10 ล้อ เปรียบเทียบแผนให้เหมาะกับงานขนส่ง';
	}
	if ( is_page( 'van-insurance' ) ) {
		$parts['title'] = 'ประกันรถตู้ ส่วนบุคคลและรับส่งผู้โดยสาร เปรียบเทียบแผนความคุ้มครอง';
	}
	if ( is_page( 'cancer-insurance' ) ) {
		$parts['title'] = 'ประกันมะเร็ง คุ้มครองอะไรบ้าง เปรียบเทียบแผนกับที่ปรึกษาประกันภัย';
	}
	if ( is_page( 'personal-accident-insurance' ) ) {
		$parts['title'] = 'ประกันอุบัติเหตุ (PA) คุ้มครองทุกที่ทุกเวลา เปรียบเทียบแผนก่อนซื้อ';
	}
	return $parts;
} );

function kudhai_seo_head() {
	if ( is_admin() ) {
		return;
	}

	$description = kudhai_get_seo_description();
	$page_title  = kudhai_get_seo_title();

	if ( is_singular() ) {
		$canonical = get_permalink();
	} elseif ( is_front_page() ) {
		$canonical = home_url( '/' );
	} elseif ( is_category() ) {
		$canonical = get_category_link( get_queried_object_id() );
	} else {
		$canonical = home_url( '/' );
	}

	echo "\n<!-- SEO meta (kudhai-theme) -->\n";
	printf( '<meta name="description" content="%s">' . "\n", esc_attr( $description ) );
	printf( '<link rel="canonical" href="%s">' . "\n", esc_url( $canonical ) );
	printf( '<meta property="og:type" content="%s">' . "\n", is_singular( 'post' ) ? 'article' : 'website' );
	printf( '<meta property="og:site_name" content="%s">' . "\n", esc_attr( get_bloginfo( 'name' ) ) );
	printf( '<meta property="og:locale" content="th_TH">' . "\n" );
	printf( '<meta property="og:title" content="%s">' . "\n", esc_attr( $page_title ) );
	printf( '<meta property="og:description" content="%s">' . "\n", esc_attr( $description ) );
	printf( '<meta property="og:url" content="%s">' . "\n", esc_url( $canonical ) );

	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$logo_url = get_template_directory_uri() . '/assets/logo_insure/' . $companies[ $slug ]['logo'];
			printf( '<meta property="og:image" content="%s">' . "\n", esc_url( $logo_url ) );
		}
	}

	printf( '<meta name="twitter:card" content="summary">' . "\n" );
	printf( '<meta name="twitter:title" content="%s">' . "\n", esc_attr( $page_title ) );
	printf( '<meta name="twitter:description" content="%s">' . "\n", esc_attr( $description ) );

	kudhai_output_company_schema();
	kudhai_output_insurance_type_schema();
	kudhai_output_mun_lamert_schema();

	echo "<!-- /SEO meta -->\n";
}
add_action( 'wp_head', 'kudhai_seo_head', 1 );

// Avoid a duplicate canonical tag — kudhai_seo_head() above already
// outputs one for every page type, including the ones core doesn't
// cover (front page, category archives).
remove_action( 'wp_head', 'rel_canonical' );

/**
 * JSON-LD structured data for company detail pages: InsuranceAgency,
 * BreadcrumbList, and FAQPage (built from each company's faq entries).
 */
function kudhai_output_company_schema() {
	if ( ! is_page_template( 'template-company.php' ) ) {
		return;
	}

	$companies = kudhai_get_companies();
	$slug      = get_post_field( 'post_name' );
	if ( ! isset( $companies[ $slug ] ) ) {
		return;
	}
	$co  = $companies[ $slug ];
	$url = get_permalink();

	$agency = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'InsuranceAgency',
		'name'        => $co['name'],
		'description' => $co['desc'],
		'url'         => $url,
		'image'       => get_template_directory_uri() . '/assets/logo_insure/' . $co['logo'],
		'areaServed'  => 'TH',
	);

	$breadcrumb = array(
		'@context'        => 'https://schema.org',
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
				'name'     => 'บริษัทประกันภัย',
				'item'     => home_url( '/insurance-companies/' ),
			),
			array(
				'@type'    => 'ListItem',
				'position' => 3,
				'name'     => $co['name'],
				'item'     => $url,
			),
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $agency, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";

	if ( ! empty( $co['faq'] ) ) {
		$faq_entities = array();
		foreach ( $co['faq'] as $item ) {
			$faq_entities[] = array(
				'@type'          => 'Question',
				'name'           => $item['q'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $item['a'],
				),
			);
		}
		$faq_schema = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => $faq_entities,
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
	}
}

/**
 * JSON-LD structured data for insurance-type pages (car-insurance,
 * motorbike-insurance, etc.): Service, BreadcrumbList, and FAQPage.
 */
function kudhai_output_insurance_type_schema() {
	if ( ! is_page_template( 'template-insurance-type.php' ) ) {
		return;
	}

	$types = kudhai_get_insurance_types();
	$slug  = get_post_field( 'post_name' );
	if ( ! isset( $types[ $slug ] ) ) {
		return;
	}
	$type = $types[ $slug ];
	$url  = get_permalink();

	$service = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'Service',
		'serviceType'     => $type['name'],
		'name'            => $type['name'],
		'description'     => $type['meta_description'],
		'url'             => $url,
		'areaServed'      => 'TH',
		'provider'        => array(
			'@type' => 'Organization',
			'name'  => get_bloginfo( 'name' ),
			'url'   => home_url( '/' ),
		),
	);

	$breadcrumb = array(
		'@context'        => 'https://schema.org',
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
				'name'     => 'ประกันภัยทั้งหมด',
				'item'     => home_url( '/insurance-types/' ),
			),
			array(
				'@type'    => 'ListItem',
				'position' => 3,
				'name'     => $type['name'],
				'item'     => $url,
			),
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $service, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";

	if ( ! empty( $type['faq'] ) ) {
		$faq_entities = array();
		foreach ( $type['faq'] as $item ) {
			$faq_entities[] = array(
				'@type'          => 'Question',
				'name'           => $item['q'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $item['a'],
				),
			);
		}
		$faq_schema = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => $faq_entities,
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
	}
}

function kudhai_output_mun_lamert_schema() {
	$page = $GLOBALS['kudhai_mun_lamert_meta'] ?? null;
	if ( ! $page ) {
		return;
	}

	$url = get_permalink();
	$breadcrumbs = array();
	foreach ( $page['breadcrumbs'] as $i => $item ) {
		$breadcrumbs[] = array(
			'@type'    => 'ListItem',
			'position' => $i + 1,
			'name'     => $item['name'],
			'item'     => home_url( $item['path'] ),
		);
	}

	$web_page = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'WebPage',
		'@id'         => $url . '#webpage',
		'url'         => $url,
		'name'        => $page['title'],
		'headline'    => $page['h1'],
		'description' => $page['description'],
		'inLanguage'  => 'th',
		'author'      => array( '@type' => 'Organization', 'name' => 'ทีมเรียบเรียง คัดให้' ),
		'publisher'   => array( '@type' => 'Organization', 'name' => 'คัดให้', 'url' => home_url( '/' ) ),
	);
	if ( ! empty( $page['reviewed_at'] ) ) {
		$web_page['dateModified'] = $page['reviewed_at'];
	}

	$questions = array();
	foreach ( $page['faq'] as $faq ) {
		$questions[] = array(
			'@type'          => 'Question',
			'name'           => $faq['q'],
			'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $faq['a'] ),
		);
	}

	$graph = array(
		$web_page,
		array( '@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $breadcrumbs ),
		array( '@context' => 'https://schema.org', '@type' => 'FAQPage', '@id' => $url . '#faq', 'mainEntity' => $questions ),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( array( '@context' => 'https://schema.org', '@graph' => $graph ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
}

add_filter( 'wp_robots', function ( $robots ) {
	if ( ! empty( $GLOBALS['kudhai_mun_lamert_meta'] ) && empty( $GLOBALS['kudhai_mun_lamert_meta']['reviewed_at'] ) ) {
		unset( $robots['index'] );
		$robots['noindex'] = true;
	}
	return $robots;
} );

/**
 * Site-wide contact details used in the header top-bar, floating LINE
 * button, and the contact section. Edit these to update everywhere.
 */
function kudhai_get_phone() {
	return '090-432-2873';
}

function kudhai_get_line_id() {
	return '@kudhai';
}

function kudhai_get_line_url() {
	return 'https://lin.ee/Yszw5MY';
}

function kudhai_get_qrcode_url() {
	return get_template_directory_uri() . '/assets/QRCodeTH20260902.png';
}

function kudhai_get_qrcode_link_url() {
	return 'https://portal.roojaipartners.com/#/066cf412e701ee26';
}

/**
 * Format a post date Thai-style with the Buddhist Era year (Gregorian + 543),
 * e.g. "1 ก.ย. 2569" — matches the original design mockups.
 */
function kudhai_thai_date( $post_id = null ) {
	$months = array( 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.' );
	$day    = get_the_date( 'j', $post_id );
	$month  = $months[ (int) get_the_date( 'n', $post_id ) - 1 ];
	$year   = (int) get_the_date( 'Y', $post_id ) + 543;
	return "{$day} {$month} {$year}";
}

/**
 * Rough reading time estimate in minutes, based on the post's word count.
 */
function kudhai_reading_time( $post_id = null ) {
	$post_id     = $post_id ? $post_id : get_the_ID();
	$word_count  = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', $post_id ) ) );
	$minutes     = (int) ceil( $word_count / 200 );
	return max( 1, $minutes );
}

/**
 * Insurance companies shown on the insurance-companies page and on each
 * company's own detail page (template-company.php). Keyed by slug — a
 * company's detail page must be a child page of "insurance-companies"
 * with a matching post_name.
 */
function kudhai_get_companies() {
	return array(
		'viriyah' => array(
			'name'      => 'วิริยะประกันภัย',
			'logo'      => 'vriyah100x100.png',
			'desc'      => 'เครือข่ายอู่ซ่อมในเครือใหญ่ที่สุดในประเทศ เคลมสะดวก ครอบคลุมทุกจังหวัด',
			'overview'  => 'วิริยะประกันภัย เป็นหนึ่งในบริษัทประกันวินาศภัยรายใหญ่ของไทย จุดเด่นที่ลูกค้าพูดถึงบ่อยที่สุดคือเครือข่ายอู่ซ่อมในเครือที่กระจายอยู่แทบทุกจังหวัด ทำให้การนำรถเข้าซ่อมหลังเกิดอุบัติเหตุทำได้สะดวก ไม่ว่าจะอยู่ในกรุงเทพฯ หรือต่างจังหวัด เหมาะกับผู้ที่ต้องการความมั่นใจว่าเมื่อเกิดเหตุแล้วจะมีอู่ในเครือรองรับใกล้บ้าน',
			'tags'      => array( 'เคลมไว', 'เครือข่ายกว้าง' ),
			'coverage'  => 'ชั้น 1 · ชั้น 2+ · ชั้น 3+ · พ.ร.บ.',
			'strengths' => array(
				'เครือข่ายอู่ซ่อมในเครือกระจายอยู่ทั่วทุกจังหวัด สะดวกไม่ว่าเกิดเหตุที่ไหน',
				'ทีมสำรวจภัยเข้าถึงจุดเกิดเหตุได้รวดเร็ว ลดเวลารอคอย',
				'มีสายด่วนช่วยเหลือฉุกเฉินตลอด 24 ชั่วโมง',
				'มีแผนความคุ้มครองให้เลือกตั้งแต่ชั้น 1 ถึงชั้น 3+ ครอบคลุมงบประมาณหลายระดับ',
			),
			'plans' => array(
				'ชั้น 1'  => 'คุ้มครองครบทุกกรณี ทั้งกรณีมีคู่กรณีและไม่มีคู่กรณี รวมไฟไหม้ รถหาย และน้ำท่วม เหมาะกับรถใหม่หรือรถที่ใช้งานบ่อย',
				'ชั้น 2+' => 'คุ้มครองใกล้เคียงชั้น 1 แต่ไม่คุ้มครองกรณีรถเสียหายเองโดยไม่มีคู่กรณี เบี้ยประหยัดกว่าชั้น 1',
				'ชั้น 3+' => 'คุ้มครองเฉพาะกรณีมีคู่กรณี เหมาะกับรถที่มีอายุการใช้งานปานกลางถึงมาก',
				'พ.ร.บ.'  => 'ประกันภาคบังคับตามกฎหมาย คุ้มครองค่ารักษาพยาบาลเบื้องต้นของผู้ประสบภัยจากรถ',
			),
			'faq' => array(
				array(
					'q' => 'เคลมกับวิริยะต้องรอนานไหม',
					'a' => 'ด้วยเครือข่ายอู่ในเครือที่กว้างและทีมสำรวจภัยจำนวนมาก โดยทั่วไปการนัดสำรวจความเสียหายมักทำได้รวดเร็ว แต่ระยะเวลาที่แน่นอนขึ้นอยู่กับความซับซ้อนของแต่ละเคส ให้เราช่วยติดตามความคืบหน้าให้ได้',
				),
				array(
					'q' => 'มีแผนสำหรับรถที่ใช้งานเป็นแท็กซี่หรือรถรับจ้างไหม',
					'a' => 'บริษัทมีแผนความคุ้มครองสำหรับรถที่ใช้งานเชิงพาณิชย์แยกต่างหาก เงื่อนไขและเบี้ยจะต่างจากรถใช้งานส่วนบุคคล แนะนำให้แจ้งลักษณะการใช้งานจริงกับเราเพื่อขอใบเสนอราคาที่ตรงกับประเภทรถ',
				),
			),
		),
		'dhipaya' => array(
			'name'      => 'ทิพยประกันภัย',
			'logo'      => 'dhipaya100x100.png',
			'desc'      => 'บริษัทที่มีภาครัฐร่วมถือหุ้น มั่นคง คุ้มครองครบทุกประเภทตั้งแต่ชั้น 1 ถึง พ.ร.บ.',
			'overview'  => 'ทิพยประกันภัย เป็นบริษัทประกันวินาศภัยที่มีหน่วยงานภาครัฐร่วมถือหุ้น จึงมีความมั่นคงทางการเงินเป็นที่ยอมรับในวงกว้าง มีผลิตภัณฑ์ประกันภัยรถยนต์ให้เลือกครบทุกระดับความคุ้มครองตั้งแต่ชั้น 1 ไปจนถึง พ.ร.บ. เหมาะกับผู้ที่ให้ความสำคัญกับความน่าเชื่อถือของบริษัทเป็นอันดับแรก',
			'tags'      => array( 'มั่นคง น่าเชื่อถือ' ),
			'coverage'  => 'ชั้น 1 · ชั้น 2+ · ชั้น 3+ · ชั้น 3 · พ.ร.บ.',
			'strengths' => array(
				'มีภาครัฐร่วมถือหุ้น สร้างความมั่นใจด้านฐานะการเงิน',
				'มีแผนความคุ้มครองให้เลือกครบทุกระดับ ตั้งแต่ชั้น 1 ถึง พ.ร.บ.',
				'เครือข่ายสาขาและตัวแทนกระจายอยู่ทั่วประเทศ',
				'เป็นหนึ่งในไม่กี่บริษัทที่เรานำมาเปรียบเทียบที่มีแผนครบทั้งชั้น 1 ถึงชั้น 3',
			),
			'plans' => array(
				'ชั้น 1'  => 'คุ้มครองสูงสุด ครอบคลุมทั้งซ่อมรถตัวเอง คู่กรณี ไฟไหม้ รถหาย และน้ำท่วม',
				'ชั้น 2+' => 'คุ้มครองใกล้เคียงชั้น 1 ในราคาที่ประหยัดกว่า เหมาะกับรถอายุปานกลาง',
				'ชั้น 3+' => 'คุ้มครองพื้นฐานสำหรับรถที่ใช้งานทั่วไป เน้นความเสียหายต่อคู่กรณี',
				'ชั้น 3'  => 'ราคาประหยัดที่สุดในกลุ่มภาคสมัครใจ คุ้มครองเฉพาะคู่กรณีเท่านั้น',
				'พ.ร.บ.'  => 'ประกันภาคบังคับ คุ้มครองค่ารักษาพยาบาลเบื้องต้นตามที่กฎหมายกำหนด',
			),
			'faq' => array(
				array(
					'q' => 'ทิพยมั่นคงจริงไหม',
					'a' => 'การมีหน่วยงานภาครัฐร่วมถือหุ้นเป็นหนึ่งในปัจจัยที่ช่วยเสริมความมั่นใจด้านฐานะการเงิน แต่การประเมินความมั่นคงควรพิจารณาจากหลายปัจจัยประกอบกัน เราสามารถช่วยให้ข้อมูลเปรียบเทียบเพิ่มเติมได้',
				),
				array(
					'q' => 'มีแผนชั้น 3 ราคาประหยัดสุดไหม',
					'a' => 'มี เป็นหนึ่งในไม่กี่บริษัทที่เรานำมาเปรียบเทียบที่มีแผนครบทั้งชั้น 1 ถึงชั้น 3 ให้เลือกตามงบประมาณ',
				),
			),
		),
		'bangkokinsurance' => array(
			'name'      => 'กรุงเทพประกันภัย',
			'logo'      => 'bangkokinsurance100x100.png',
			'desc'      => 'ดำเนินธุรกิจมากว่า 78 ปี เน้นบริการลูกค้าองค์กรและกรมธรรม์ที่ปรับแต่งได้',
			'overview'  => 'กรุงเทพประกันภัย ดำเนินธุรกิจประกันวินาศภัยมาอย่างยาวนาน มีความเชี่ยวชาญด้านการออกแบบกรมธรรม์สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ เหมาะกับเจ้าของรถที่ต้องการกรมธรรม์ที่ปรับแต่งเงื่อนไขความคุ้มครองให้ตรงกับความต้องการเฉพาะราย มากกว่าแผนสำเร็จรูปทั่วไป',
			'tags'      => array( 'ประสบการณ์ยาวนาน' ),
			'coverage'  => 'ชั้น 1 · ชั้น 2+ · พ.ร.บ.',
			'strengths' => array(
				'ประสบการณ์ยาวนานในธุรกิจประกันภัย',
				'มีความเชี่ยวชาญด้านกรมธรรม์สำหรับลูกค้าองค์กรและกลุ่มธุรกิจ',
				'ปรับแต่งเงื่อนไขความคุ้มครองให้เหมาะกับความต้องการเฉพาะรายได้',
			),
			'plans' => array(
				'ชั้น 1'  => 'คุ้มครองครบวงจร เหมาะกับรถส่วนบุคคลและรถของกิจการที่ต้องการความคุ้มครองสูงสุด',
				'ชั้น 2+' => 'คุ้มครองกรณีมีคู่กรณีและภัยอื่นๆ ในราคาที่ประหยัดกว่าชั้น 1',
				'พ.ร.บ.'  => 'ประกันภาคบังคับตามกฎหมาย คุ้มครองค่ารักษาพยาบาลเบื้องต้นของผู้ประสบภัย',
			),
			'faq' => array(
				array(
					'q' => 'เหมาะกับรถยนต์ส่วนบุคคลทั่วไปไหม',
					'a' => 'เหมาะ แม้จะโดดเด่นเรื่องกรมธรรม์สำหรับองค์กร แต่ก็มีแผนความคุ้มครองสำหรับรถยนต์ส่วนบุคคลให้เลือกเช่นกัน',
				),
				array(
					'q' => 'ปรับแต่งเงื่อนไขความคุ้มครองได้แค่ไหน',
					'a' => 'ขึ้นอยู่กับเงื่อนไขที่บริษัทเสนอในแต่ละช่วงเวลา แนะนำให้แจ้งความต้องการเฉพาะของคุณกับเรา เราจะช่วยตรวจสอบว่าปรับแต่งได้ตามที่ต้องการหรือไม่',
				),
			),
		),
		'muangthai' => array(
			'name'      => 'เมืองไทยประกันภัย',
			'logo'      => 'muangthai100x100.png',
			'desc'      => 'เบี้ยประกันคุ้มค่า มีตัวแทนและศูนย์บริการกระจายอยู่ทั่วประเทศ',
			'overview'  => 'เมืองไทยประกันภัย เน้นความคุ้มค่าของเบี้ยประกันเมื่อเทียบกับความคุ้มครองที่ได้รับ มีเครือข่ายตัวแทนและศูนย์บริการกระจายอยู่ทั่วประเทศ ทำให้ติดต่อขอรับบริการหรือสอบถามข้อมูลได้สะดวก ไม่ว่าจะอยู่จังหวัดใด',
			'tags'      => array( 'เบี้ยคุ้มค่า' ),
			'coverage'  => 'ชั้น 1 · ชั้น 2+ · ชั้น 3+ · พ.ร.บ.',
			'strengths' => array(
				'เบี้ยประกันแข่งขันได้ในระดับคุ้มค่า',
				'มีศูนย์บริการและตัวแทนกระจายอยู่ทั่วประเทศ',
				'มีช่องทางติดต่อหลากหลายทั้งออนไลน์และหน้าสาขา',
			),
			'plans' => array(
				'ชั้น 1'  => 'คุ้มครองครบทุกกรณีในราคาที่แข่งขันได้ เหมาะกับรถที่ใช้งานเป็นประจำ',
				'ชั้น 2+' => 'คุ้มครองใกล้เคียงชั้น 1 เบี้ยประหยัดกว่า เหมาะกับรถอายุปานกลาง',
				'ชั้น 3+' => 'คุ้มครองพื้นฐานสำหรับความเสียหายต่อคู่กรณี เหมาะกับงบจำกัด',
				'พ.ร.บ.'  => 'ประกันภาคบังคับ คุ้มครองค่ารักษาพยาบาลเบื้องต้นตามกฎหมาย',
			),
			'faq' => array(
				array(
					'q' => 'เบี้ยถูกแล้วความคุ้มครองจะลดลงไหม',
					'a' => 'เบี้ยที่คุ้มค่าไม่ได้แปลว่าความคุ้มครองลดลงเสมอไป ขึ้นอยู่กับแผนที่เลือกและลักษณะการใช้รถ ให้เราช่วยเทียบรายละเอียดความคุ้มครองแต่ละแผนให้ก่อนตัดสินใจ',
				),
				array(
					'q' => 'ติดต่อสาขาได้จังหวัดไหนบ้าง',
					'a' => 'มีศูนย์บริการและตัวแทนกระจายอยู่หลายจังหวัดทั่วประเทศ หากไม่แน่ใจว่าใกล้บ้านคุณมีสาขาหรือไม่ แจ้งเราได้ เราจะช่วยตรวจสอบให้',
				),
			),
		),
		'roojai' => array(
			'name'      => 'รู้ใจ ประกันภัย',
			'logo'      => 'roojai100x100.png',
			'desc'      => 'ซื้อและเคลมผ่านออนไลน์ได้ทันที มีแผนเฉพาะสำหรับรถยนต์ไฟฟ้าโดยเฉพาะ',
			'overview'  => 'รู้ใจ ประกันภัย เป็นบริษัทประกันภัยที่เน้นให้บริการผ่านช่องทางออนไลน์เป็นหลัก ตั้งแต่การขอใบเสนอราคา ซื้อกรมธรรม์ ไปจนถึงการแจ้งเคลม สามารถทำได้โดยไม่ต้องเดินทางไปสาขา และมีแผนความคุ้มครองที่ออกแบบมาเฉพาะสำหรับรถยนต์ไฟฟ้า เหมาะกับผู้ที่คุ้นเคยกับการทำธุรกรรมออนไลน์และเจ้าของรถ EV',
			'tags'      => array( 'ออนไลน์ครบวงจร', 'รองรับ EV' ),
			'coverage'  => 'ชั้น 1 · ชั้น 2+ · ชั้น 3+ · พ.ร.บ. · EV',
			'strengths' => array(
				'ซื้อกรมธรรม์และแจ้งเคลมผ่านช่องทางออนไลน์ได้ทั้งหมด ไม่ต้องเดินทางไปสาขา',
				'มีแผนความคุ้มครองที่ออกแบบเฉพาะสำหรับรถยนต์ไฟฟ้า',
				'กระบวนการอนุมัติและออกกรมธรรม์รวดเร็ว',
			),
			'plans' => array(
				'ชั้น 1'   => 'คุ้มครองครบวงจร ซื้อและจัดการผ่านออนไลน์ได้ทั้งหมด',
				'ชั้น 2+'  => 'คุ้มครองใกล้เคียงชั้น 1 ในราคาย่อมเยากว่า',
				'ชั้น 3+'  => 'คุ้มครองพื้นฐานสำหรับคู่กรณี เหมาะกับงบจำกัด',
				'พ.ร.บ.'   => 'ประกันภาคบังคับตามกฎหมาย',
				'EV'       => 'แผนเฉพาะสำหรับรถยนต์ไฟฟ้า ครอบคลุมระบบแบตเตอรี่และมอเตอร์ไฟฟ้า',
			),
			'faq' => array(
				array(
					'q' => 'ไม่มีสาขาแล้วเคลมยังไง',
					'a' => 'แจ้งเคลมผ่านช่องทางออนไลน์หรือแอปพลิเคชันของบริษัทได้โดยตรง ทีมงานจะประสานเรื่องอู่ซ่อมหรือการสำรวจภัยให้ตามขั้นตอนของบริษัท',
				),
				array(
					'q' => 'รถ EV มือสองซื้อประกันรู้ใจได้ไหม',
					'a' => 'โดยทั่วไปรับพิจารณา แต่เงื่อนไขด้านอายุแบตเตอรี่และสภาพรถอาจมีผลต่อการพิจารณา แนะนำให้แจ้งรายละเอียดรถกับเราเพื่อขอใบเสนอราคาที่แม่นยำ',
				),
			),
		),
	);
}

/**
 * Insurance-type detail pages that still use the shared
 * template-insurance-type.php + data-array pattern, keyed by slug.
 * All six insurance-type pages (car, motorbike, truck, van, cancer,
 * personal-accident) now have their own standalone page-{slug}.php
 * template instead, so this is currently empty — kept for any future
 * insurance-type page that should use the shared template again.
 */
function kudhai_get_insurance_types() {
	return array();
}
