<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="main-content" class="wrap kudhai-content" tabindex="-1">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<?php if ( is_singular() ) : ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); wp_link_pages(); ?>
			<?php else : ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
	<?php the_posts_navigation(); ?>
<?php else : ?>
	<h1>ไม่พบเนื้อหา</h1>
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">กลับหน้าแรก</a></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
