<?php get_header(); ?>

<section class="article-content container" style="padding-top:calc(var(--header-h) + 48px);">
  <div class="prose">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      <?php endwhile; ?>
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <p>ไม่พบเนื้อหา</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
