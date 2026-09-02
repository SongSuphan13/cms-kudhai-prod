<?php get_header(); ?>

<section class="article-content container" style="padding-top:calc(var(--header-h) + 48px);">
  <div class="prose">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1 style="font-size:clamp(26px,3.6vw,38px); font-weight:800; margin-bottom:24px;"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
