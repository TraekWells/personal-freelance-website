<?php get_header(); ?>
<header class="header header--home background-secondary-light">
  <div class="container">
    <div class="header--home">
      <div class="header--home__text">
        <h1>Need a beautiful website to go along with your business?</h1>
        <p class="lead mb-4">
          You’ve come to the right place! I’m Traek and I'm a freelance Web Developer who
          helps small businesses and people wanting to increase their online
          presence.
        </p>
        <div class="button-group">
          <a class="button button--primary mr-3" href="<?php echo site_url( '/contact-me' ); ?>">Get a Free Quote</a>
          <a href="<?php echo get_post_type_archive_link( 'project' ); ?>" class="text-link">See My Projects <i data-feather="arrow-right"></i></a>
        </div>
      </div>
      <div class="header--home__image-container">
        <img src="https://placeimg.com/350/450/people" alt="" />
      </div>
    </div>
  </div>
</header>
<section class="section mt-3">
  <div class="container--narrow">
    <h2 class="text-center">Why You Need A Website</h2>
    <div class="seperator"></div>
    <p class="text-center">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      aliquip ex ea commodo consequat. Duis aute irure dolor in
      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur.
    </p>
  </div>
</section>
<section class="section">
  <div class="container--narrow">
    <h2 class="text-center">Ok.. So Why Hire Me?</h2>
    <div class="seperator"></div>
    <p class="text-center mb-3">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      aliquip ex ea commodo consequat.
    </p>
  </div>
  <div class="container--wide">
    <div class="cards">
      <div class="card">
        <h3 class="card__title">WordPress Theme Development</h3>
        <p class="card__content">Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="card">
        <h3 class="card__title">Convert an Existing Website into WordPress</h3>
        <p class="card__content">Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="card">
        <h3 class="card__title">User Interface Design</h3>
        <p class="card__content">Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</section>
<section class="section background-secondary-light">
  <h2>Take a look at who I've helped recently</h2>
  <div class="seperator"></div>
  <div class="container">
    <div class="homepage-projects">
      <?php
        $args = array(
          'post_type' => 'project',
          'posts_per_page' => -1
        );
        $projectQuery = new WP_Query($args);

        while($projectQuery->have_posts()) {
          $projectQuery->the_post();
          $imageId = get_post_thumbnail_id(get_the_ID());
          $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);  

          if (get_field('featured_project') === true) {
      ?>
      <div class="homepage-project">
        <div class="homepage-project__image">
          <img src="https://placeimg.com/1550/400/people" alt="<?php echo $altText; ?>">
        </div>
        <div class="homepage-project__content">
          <h3><?php echo the_title(); ?></h3>
          <p><?php echo the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="button button--ghost">Project Details</a>
        </div>
      </div>
      <?php } } wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <?php get_template_part('./template-parts/testimonials') ?>
  </div>
</section>
<section class="section">
  <h2>A Little Bit About Me</h2>
  <div class="seperator"></div>
  <div class="container--narrow">
    <div class="about-me">
      <div class="about-me__image">
        <img src="https://placeimg.com/450/600/people" alt="">
      </div>
      <div class="about-me__content">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas amet fugit minima deleniti at corporis laboriosam ea culpa quam deserunt?</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas amet fugit minima deleniti at corporis laboriosam ea culpa quam deserunt?</p>
        <a href="<?php echo site_url( '/my-story' ); ?>" class="text-link">Learn More <i data-feather="arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <h2>Frequently Asked Questions</h2>
  <div class="seperator"></div>
  <div class="container--narrow">
    <div class="faqs">
      <?php 
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => 2
      );
      $faqQuery = new WP_Query($args);

      while($faqQuery->have_posts()) {
        $faqQuery->the_post();
      ?>
      <div class="faq">
        <div class="faq__question">
          <p><?php echo the_title(); ?></p>
          <i data-feather="chevron-down"></i>
        </div>
        <div class="faq__answer">
          <p><?php echo the_content(); ?></p>
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    </div>
    <a href="<?php echo get_post_type_archive_link( 'faq' ); ?>" class="text-link mt-3 jc-c">See All FAQs <i data-feather="arrow-right"></i></a>
  </div>
</section>

<?php get_footer(); ?>