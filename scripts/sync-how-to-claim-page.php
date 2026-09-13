<?php
/** Run: docker compose exec -T wordpress php /var/www/html/scripts/sync-how-to-claim-page.php */
if ( PHP_SAPI !== 'cli' ) { exit; }
require_once dirname( __DIR__ ) . '/wp-load.php';
if ( 'kudhai-v2-theme' !== get_stylesheet() ) { fwrite( STDERR, "KUDHai V2 must be active.\n" ); exit( 1 ); }
$parent = get_page_by_path( 'services' );
$parent_id = $parent ? $parent->ID : wp_insert_post( array(
    'post_type' => 'page', 'post_status' => 'publish', 'post_name' => 'services',
    'post_title' => 'บริการของเรา',
    'post_content' => '<h2>เรื่องเคลมและค่าสินไหม</h2><p>ดูขั้นตอนการแจ้งเคลม การเตรียมเอกสาร และการติดตามสถานะ</p><p><a href="' . esc_url( home_url( '/services/how-to-claim/' ) ) . '">วิธีแจ้งเคลมประกันรถยนต์</a></p>',
), true );
if ( is_wp_error( $parent_id ) ) { fwrite( STDERR, $parent_id->get_error_message() ); exit( 1 ); }
$page = get_page_by_path( 'services/how-to-claim' );
$id = $page ? $page->ID : wp_insert_post( array(
    'post_type' => 'page', 'post_status' => 'publish', 'post_name' => 'how-to-claim',
    'post_title' => 'วิธีแจ้งเคลมประกันรถยนต์', 'post_parent' => $parent_id,
), true );
if ( is_wp_error( $id ) ) { fwrite( STDERR, $id->get_error_message() ); exit( 1 ); }
update_post_meta( $id, '_wp_page_template', 'page-services-how-to-claim.php' );
echo get_permalink( $id ) . "\n";
