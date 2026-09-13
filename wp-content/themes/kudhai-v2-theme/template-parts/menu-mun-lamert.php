<?php
/** Shared list of the overview and all mun-lamert guides. */
defined( 'ABSPATH' ) || exit;
foreach ( kudhai_v2_pages() as $path => $page ) :
	if ( 'mun-lamert' !== $path && 0 !== strpos( $path, 'mun-lamert/' ) ) {
		continue;
	}
	$label = 'mun-lamert' === $path ? 'ภาพรวมมูลละเมิด' : $page['title'];
	if ( ! empty( $args['list'] ) ) : ?><li><?php endif; ?>
<a href="<?php echo esc_url( kudhai_v2_page_url( $path ) ); ?>"<?php if ( kudhai_v2_is_current_menu_page( $path ) ) : ?> aria-current="page"<?php endif; ?>><?php echo esc_html( $label ); ?></a>
<?php if ( ! empty( $args['list'] ) ) : ?></li><?php endif;
endforeach;
?>
