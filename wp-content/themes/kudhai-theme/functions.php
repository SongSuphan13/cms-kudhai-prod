<?php
/**
 * Kudhai Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KUDHAI_THEME_VERSION', '1.0.0' );

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
	wp_enqueue_script( 'kudhai-main', get_template_directory_uri() . '/assets/js/main.js', array(), KUDHAI_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'kudhai_theme_assets' );

// Disable the front-end admin bar (the fixed header relies on the page
// starting at the very top, and the admin bar pushes/overlaps it).
add_filter( 'show_admin_bar', '__return_false' );

/**
 * SEO: meta description, canonical, Open Graph / Twitter card, and
 * JSON-LD structured data. WordPress core outputs none of this on its
 * own, so the theme handles it directly instead of requiring a plugin.
 */

function kudhai_get_seo_description() {
	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$co = $companies[ $slug ];
			return $co['name'] . ' ประกันรถยนต์ ' . $co['coverage'] . ' — ' . $co['desc'] . ' เปรียบเทียบเบี้ยและขอใบเสนอราคาฟรีกับที่ปรึกษาประกันภัยรถยนต์';
		}
	}

	if ( is_front_page() ) {
		return 'ที่ปรึกษาประกันภัยรถยนต์ ให้คำปรึกษาเรื่องมูลละเมิดประกันภัยรถยนต์และการเรียกร้องค่าสินไหมทดแทน เปรียบเทียบแผนประกันรถยนต์ รถไฟฟ้า มอเตอร์ไซค์ที่เหมาะกับคุณ ปรึกษาฟรี ไม่มีค่าใช้จ่ายเบื้องต้น';
	}
	if ( is_page( 'about' ) ) {
		return 'รู้จักทีมที่ปรึกษาประกันภัยรถยนต์ ผู้เชี่ยวชาญด้านมูลละเมิดประกันภัยรถยนต์และการเรียกร้องค่าสินไหม ช่วยเปรียบเทียบแผนประกันรถยนต์ รถไฟฟ้า มอเตอร์ไซค์ที่เหมาะกับคุณ';
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
	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$co = $companies[ $slug ];
			return $co['name'] . ' ประกันรถยนต์ | เปรียบเทียบแผนและเบี้ยประกัน';
		}
	}
	return wp_get_document_title();
}

add_filter( 'document_title_parts', function ( $parts ) {
	if ( is_page_template( 'template-company.php' ) ) {
		$companies = kudhai_get_companies();
		$slug      = get_post_field( 'post_name' );
		if ( isset( $companies[ $slug ] ) ) {
			$parts['title'] = $companies[ $slug ]['name'] . ' ประกันรถยนต์ | เปรียบเทียบแผนและเบี้ยประกัน';
		}
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
	return '#';
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
