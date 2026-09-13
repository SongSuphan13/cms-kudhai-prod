<?php
/** Metadata carried over from the existing mun-lamert guides. */
defined( 'ABSPATH' ) || exit;
function kudhai_v2_output_mun_lamert_schema() {
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

add_action( 'wp_head', 'kudhai_v2_output_mun_lamert_schema' );
add_filter( 'pre_get_document_title', function ( $title ) {
	return ! empty( $GLOBALS['kudhai_mun_lamert_meta']['title'] ) ? $GLOBALS['kudhai_mun_lamert_meta']['title'] : $title;
} );
add_action( 'wp_head', function () {
	if ( ! empty( $GLOBALS['kudhai_mun_lamert_meta']['description'] ) ) {
		echo '<meta name="description" content="' . esc_attr( $GLOBALS['kudhai_mun_lamert_meta']['description'] ) . '">' . "\n";
	}
} );
