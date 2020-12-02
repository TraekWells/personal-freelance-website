<?php get_header(); 
  while(have_posts()) {
    the_post();
  ?>
<header class="header">
  <img src="<?php the_post_thumbnail_url('hero-image'); ?>" alt="" />
  <div class="header__content">
    <h1 class="margin-bottom-2"><?php the_title(); ?></h1>
     <div class="button-group">
      <a href="<?php echo get_field('link_to_project') ?>" class="button button--primary margin-right-3" target="_blank" rel="noopener noreferrer">Visit Website <ion-icon name="link-outline"></ion-icon>
      </a>
      <?php if (get_field('link_to_code') !== "") { ?>
      <a href="<?php echo get_field('link_to_code') ?>" class="button button--ghost margin-right-3" target="_blank" rel="noopener noreferrer">See The Code <ion-icon name="code-outline"></ion-icon>
        </a>
      <?php } ?>
    </div>
  </div>
</header>
<main class="main">
  <section class="section section--dark-1">
    <div class="container">
      <div class="section__content">
        <div class="section__content-column">
          <p class="section-intro">The Client</p>
          <p><?php echo get_field('the_client') ?></p>
        </div>
        <div class="section__content-column">
          <p class="section-intro">The Goal</p>
          <p><?php echo get_field('the_goal') ?></p>
        </div>
      </div>
        <?php the_content(); ?>
      <div class="section__content">
        <div class="section__content-column">
          <p class="section-intro">The Result</p>
          <p><?php echo get_field('the_result') ?></p>
        </div>
        <div class="section__content-column">
          <img src="<?php echo the_post_thumbnail_url('project-thumbnail'); ?>" alt="<?php echo $altText; ?>" loading="lazy" />
        </div>
      </div>
      <h2>Here are a few more projects</h2>
      <?php 
        $projectQuery = new WP_Query(array(
          'post_type' => 'project',
          'post__not_in' => array($post->ID),
          'posts_per_page' => 2
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
            <?php the_excerpt(); ?>
            <div class="button-group">
              <a href="<?php the_permalink() ?>" class="button button--primary">Project Details <ion-icon name="arrow-forward-outline"></ion-icon>
              </a>
            </div>
          </div>
        </div>
          <?php } wp_reset_postdata(); ?>
    </div>
  </section>
</main>
<?php } get_footer(); ?>