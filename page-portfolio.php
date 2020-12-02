<?php get_header(); ?>

<header class="header">
  <img src="<?php echo get_template_directory_uri() . '/img/portfolio-hero-image.jpg'; ?>" alt="" />
  <div class="header__content">
    <h1>Portfolio</h1>
    <p class="header-subtitle">
      Here are a few projects that I've completed that I'm proud of.
    </p>
  </div>
</header>
<main class="main">
  <section class="section section--dark-2">
    <div class="container">
      <p class="section-intro text-muted">What I've Done</p>
      <h2>More Projects</h2>
      <?php 
        $projectQuery = new WP_Query(array(
          'post_type' => 'project',
          'posts_per_page' => -1
        ));

        while($projectQuery->have_posts()) {
          $projectQuery->the_post();
          $imageId = get_post_thumbnail_id(get_the_ID());
          $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);
      ?>
        <div class="section__content project">
          <div class="section__content-column">
            <img src="<?php the_post_thumbnail_url('project-thumbnail'); ?>" alt="<?php echo $altText; ?>" />
          </div>
          <div class="section__content-column">
            <h3 class="margin-bottom-0"><?php the_title(); ?></h3>
            <p class="project-tasks text-muted">
              <?php 
                echo get_field('role')[0];
                if (get_field('role')[1]) {
                  echo '/' . get_field('role')[1];
                }
              ?>
            </p>
            <?php the_content(); ?>
            <div class="button-group">
              <a href="<?php echo get_field('link_to_project') ?>" class="button button--primary margin-right-3" target="_blank" rel="noopener noreferrer">View Project
              </a>
              <?php if(get_field('link_to_code') !== "" ) { ?>
              <a href="<?php echo get_field('link_to_code') ?>" class="button button--ghost" target="_blank" rel="noopener noreferrer">View Code</a>
              <?php } ?>
            </div>
          </div>
        </div>
          <?php } wp_reset_postdata(); ?>
    </div>
    <div class="link margin-top-4">
      <a href="https://codepen.io/traekwells" target="_blank" rel="noopener noreferrer">See More Smaller Projects</a>
      <ion-icon name="arrow-forward-outline"></ion-icon>
    </div>
  </section>
</main>

<?php get_footer(); ?>