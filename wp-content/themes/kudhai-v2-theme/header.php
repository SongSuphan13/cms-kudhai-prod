<?php
defined( 'ABSPATH' ) || exit;
$kudhai_v2_slug = kudhai_v2_current_page();
?>
<!doctype html>
<html <?php if ( $kudhai_v2_slug ) : ?>lang="th"<?php else : language_attributes(); endif; ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part( 'template-parts/header', 'site' ); ?>
