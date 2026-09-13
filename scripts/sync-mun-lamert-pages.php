<?php
/**
 * Create/update the real WordPress pages for the mun-lamert page templates.
 *
 * Run inside the WordPress container:
 * docker compose exec -T wordpress php /var/www/html/scripts/sync-mun-lamert-pages.php --apply
 */

require_once '/var/www/html/wp-load.php';

$apply = in_array( '--apply', $argv, true );

$pages = array(
	array( 'slug' => 'mun-lamert', 'title' => 'รถชน เรียกร้องค่าเสียหายจากคู่กรณีอะไรได้บ้าง? คู่มือมูลละเมิดรถยนต์', 'template' => 'page-mun-lamert.php', 'parent' => 0, 'order' => 0 ),
	array( 'slug' => 'what-is', 'title' => 'มูลละเมิดคืออะไร', 'template' => 'page-mun-lamert-what-is.php', 'parent' => 'mun-lamert', 'order' => 1 ),
	array( 'slug' => 'car-accident', 'title' => 'มูลละเมิดจากอุบัติเหตุรถยนต์', 'template' => 'page-mun-lamert-car-accident.php', 'parent' => 'mun-lamert', 'order' => 2 ),
	array( 'slug' => 'how-to-claim', 'title' => 'วิธีเรียกร้องค่าเสียหายจากคู่กรณี', 'template' => 'page-mun-lamert-how-to-claim.php', 'parent' => 'mun-lamert', 'order' => 3 ),
	array( 'slug' => 'compensation', 'title' => 'รถชนเรียกร้องค่าเสียหายอะไรได้บ้าง', 'template' => 'page-mun-lamert-compensation.php', 'parent' => 'mun-lamert', 'order' => 4 ),
	array( 'slug' => 'loss-of-use', 'title' => 'ค่าขาดประโยชน์จากการใช้รถ', 'template' => 'page-mun-lamert-loss-of-use.php', 'parent' => 'mun-lamert', 'order' => 5 ),
	array( 'slug' => 'repair-cost', 'title' => 'ค่าซ่อมรถจากคู่กรณี', 'template' => 'page-mun-lamert-repair-cost.php', 'parent' => 'mun-lamert', 'order' => 6 ),
	array( 'slug' => 'medical-expenses', 'title' => 'ค่ารักษาพยาบาลจากอุบัติเหตุรถยนต์', 'template' => 'page-mun-lamert-medical-expenses.php', 'parent' => 'mun-lamert', 'order' => 7 ),
	array( 'slug' => 'lost-income', 'title' => 'ค่าขาดรายได้จากอุบัติเหตุรถยนต์', 'template' => 'page-mun-lamert-lost-income.php', 'parent' => 'mun-lamert', 'order' => 8 ),
	array( 'slug' => 'depreciation', 'title' => 'ค่าเสื่อมราคารถหลังเกิดอุบัติเหตุ', 'template' => 'page-mun-lamert-depreciation.php', 'parent' => 'mun-lamert', 'order' => 9 ),
	array( 'slug' => 'injury', 'title' => 'บาดเจ็บจากอุบัติเหตุรถยนต์เรียกร้องอะไรได้', 'template' => 'page-mun-lamert-injury.php', 'parent' => 'mun-lamert', 'order' => 10 ),
	array( 'slug' => 'death', 'title' => 'เสียชีวิตจากอุบัติเหตุรถยนต์ สิทธิทายาท', 'template' => 'page-mun-lamert-death.php', 'parent' => 'mun-lamert', 'order' => 11 ),
	array( 'slug' => 'documents', 'title' => 'เอกสารเรียกร้องค่าเสียหายจากประกันคู่กรณี', 'template' => 'page-mun-lamert-documents.php', 'parent' => 'mun-lamert', 'order' => 12 ),
	array( 'slug' => 'claim-rejected', 'title' => 'ประกันคู่กรณีไม่จ่าย', 'template' => 'page-mun-lamert-claim-rejected.php', 'parent' => 'mun-lamert', 'order' => 13 ),
);

$ids = array();
$snapshot = array();

foreach ( $pages as $page ) {
	$parent_id = is_string( $page['parent'] ) ? ( $ids[ $page['parent'] ] ?? 0 ) : 0;
	$existing = get_page_by_path( $parent_id ? 'mun-lamert/' . $page['slug'] : $page['slug'], OBJECT, 'page' );
	if ( ! $existing ) {
		$existing = get_page_by_path( $page['slug'], OBJECT, 'page' );
	}

	if ( $existing ) {
		$snapshot[] = array(
			'ID'       => $existing->ID,
			'uri'      => get_page_uri( $existing->ID ),
			'title'    => $existing->post_title,
			'slug'     => $existing->post_name,
			'status'   => $existing->post_status,
			'parent'   => $existing->post_parent,
			'template' => get_page_template_slug( $existing->ID ),
		);
	}

	$post = array(
		'post_title'   => $page['title'],
		'post_name'    => $page['slug'],
		'post_type'    => 'page',
		'post_status'  => $existing ? $existing->post_status : 'publish',
		'post_parent'  => $parent_id,
		'menu_order'   => $page['order'],
	);

	if ( $existing ) {
		$post['ID'] = $existing->ID;
		$action = 'updated';
	} else {
		$post['post_content'] = '';
		$action = 'created';
	}

	if ( ! $apply ) {
		$id = $existing ? $existing->ID : 0;
		if ( $id ) {
			$ids[ $page['slug'] ] = $id;
		}
		echo 'dry-run ' . $action . ' ' . ( $parent_id ? 'mun-lamert/' : '' ) . $page['slug'] . ' -> ' . $page['template'] . PHP_EOL;
		continue;
	}

	$id = $existing ? wp_update_post( wp_slash( $post ), true ) : wp_insert_post( wp_slash( $post ), true );

	if ( is_wp_error( $id ) ) {
		fwrite( STDERR, $page['slug'] . ': ' . $id->get_error_message() . PHP_EOL );
		exit( 1 );
	}

	update_post_meta( $id, '_wp_page_template', $page['template'] );
	$ids[ $page['slug'] ] = $id;
	echo $action . ' ' . get_page_uri( $id ) . ' -> ' . $page['template'] . PHP_EOL;
}

if ( $apply ) {
	$file = '/tmp/mun-lamert-pages-before-' . gmdate( 'Ymd-His' ) . '.json';
	file_put_contents( $file, wp_json_encode( $snapshot, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) );
	echo 'snapshot ' . $file . PHP_EOL;
}
