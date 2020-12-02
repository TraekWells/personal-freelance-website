<?php get_header(); ?>

<header class="header">
  <?php while(have_posts()) {
    the_post();
  ?>
  <img src="<?php the_post_thumbnail('hero-image'); ?>" alt="" />
  <div class="header__content">
    <h1><?php the_title(); ?></h1>
  </div>
</header>
<main class="main">
  <section class="section section--dark-2">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </section>
</main>

<?php } get_footer(); ?>