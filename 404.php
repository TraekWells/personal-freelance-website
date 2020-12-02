<?php get_header(); ?>

<header class="header">
  <img src="<?php echo get_template_directory_uri() . '/img/contact-me-hero-image.jpg'; ?>" alt="" />
  <div class="header__content">
    <h1>Uh oh. How did you end up here?</h1>
  </div>
</header>
<main class="main">
  <section class="section section--dark-1">
    <div class="container">
    <div class="section__content">
      <div class="section__content-column">
      <p>Maybe you're looking for one of these?</p>
      <div class="button-group">
        <a href="<?php echo site_url('/portfolio') ?>" class="button button--primary margin-right-3"
          >See My Work
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>
        <a href="<?php echo site_url('/contact-me') ?>" class="button button--ghost">Contact Me</a>
      </div>
      </div>
      <div class="section__content-column">
        <img src="https://media.giphy.com/media/xT0xeh7KMi11ijnE9W/giphy.gif" alt="">
      </div>
    </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>