<?php
/** Insurer links shared by desktop and mobile navigation. */
defined( 'ABSPATH' ) || exit;
foreach ( kudhai_v2_pages() as $path => $page ) :
	if ( ( $page['menu_group'] ?? '' ) !== 'companies' ) { continue; }
	if ( ! empty( $args['list'] ) ) : ?><li><?php endif; ?>
<a href="<?php echo esc_url( kudhai_v2_page_url( $path ) ); ?>"<?php if ( kudhai_v2_is_current_menu_page( $path ) ) : ?> aria-current="page"<?php endif; ?>><?php echo esc_html( $page['title'] ); ?></a>
<?php if ( ! empty( $args['list'] ) ) : ?></li><?php endif;
endforeach;
?>
