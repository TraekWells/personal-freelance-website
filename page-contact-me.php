<?php get_header(); ?>

<header class="header">
  <?php while(have_posts()) {
    the_post();
  ?>
  <img src="<?php echo get_template_directory_uri() . '/img/contact-me-hero-image.jpg'; ?>" alt="" />
  <div class="header__content">
    <h1><?php the_title(); ?></h1>
    <p class="header-subtitle">
      Let's build something together.
    </p>
  </div>
</header>
<main class="main">
  <section class="section section--dark-1">
    <div class="container">
    <div class="section__content">
    <div class="section__content-column">
        <?php the_content(); ?>
      </div>
      <div class="section__content-column">
        <p>Send me a message at any time of the day or night and I'll do my best to get back to you as soon as possible.</p>
      </div>
    </div>
    </div>
  </section>
</main>

<?php } get_footer(); ?>