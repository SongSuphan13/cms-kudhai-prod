<?php
/** Additional insurance products and insurers. */
defined( 'ABSPATH' ) || exit;
foreach ( array( 'other' => 'ประกันประเภทอื่น ๆ' ) as $group => $heading ) :
	if ( ! empty( $args['list'] ) ) : ?><li class="kh-menu-group"><?php else : ?><div class="kh-menu-group"><?php endif; ?>
<span class="kh-menu-heading"><?php echo esc_html( $heading ); ?></span>
<?php if ( ! empty( $args['list'] ) ) : ?></li><?php else : ?></div><?php endif;
	foreach ( kudhai_v2_pages() as $path => $page ) :
		if ( ( $page['menu_group'] ?? '' ) !== $group ) { continue; }
		if ( ! empty( $args['list'] ) ) : ?><li><?php endif; ?>
<a href="<?php echo esc_url( kudhai_v2_page_url( $path ) ); ?>"<?php if ( kudhai_v2_is_current_menu_page( $path ) ) : ?> aria-current="page"<?php endif; ?>><?php echo esc_html( $page['title'] ); ?></a>
<?php if ( ! empty( $args['list'] ) ) : ?></li><?php endif;
	endforeach;
endforeach;
?>
