<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">About Me</span>
    <h1><?php the_title(); ?></h1>
    <div class="seperator"></div>
  </div>
</header>
<section class="section">
  <div class="container--narrow">
    <?php the_content(); ?>
  </div>
</section>
<section class="section">
  <div class="container--narrow">
    <?php get_template_part('./template-parts/lets-talk'); ?>
  </div>
</section>

<?php get_footer(); ?>