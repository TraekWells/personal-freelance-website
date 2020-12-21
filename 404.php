<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Uh.. Oh</span>
    <h1>I Think You're Lost</h1>
    <div class="seperator"></div>
    <p>Hopefully one of these links get you back on track.</p>
    <div class="button-group jc-c">
      <a class="button button--primary mr-3" href="<?php echo site_url( '/' ); ?>">Go to the Homepage</a>
      <a href="<?php echo get_post_type_archive_link( 'project' ); ?>" class="text-link">See My Work <i data-feather="arrow-right"></i></a>
    </div>
  </div>
</header>
<section>
  <div class="container">
    <img src="<?php echo get_theme_file_uri( 'img/404-image.png' ); ?>" alt="">
  </div>
</section>

<?php get_footer(); ?>