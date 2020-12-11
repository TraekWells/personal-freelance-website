<?php get_header(); 
  while(have_posts()) {
    the_post();
  ?>
<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Portfolio</span>
    <h1><?php the_title(); ?></h1>
    <div class="seperator"></div>
    <p><?php the_excerpt(); ?></p>
  </div>
</header>

<img src="<?php echo the_post_thumbnail_url('hero-image'); ?>" alt="<?php echo $altText; ?>" loading="lazy" class="project-image" />

<section class="section">
  <div class="project container">
    <div class="project__details">
      <?php echo the_content(); ?>
    </div>
    <div class="project__sidebar">
      <h4>My Role</h4>
      <p class="project__tasks mb-3">
        <?php 
          echo get_field('role')[0];
          if (get_field('role')[1]) {
            echo ' and ' . get_field('role')[1];
          }
        ?>
      </p>
      <h4>Visit the Website</h4>
      <a href="<?php echo get_field('link_to_project'); ?>"> <?php echo get_field('link_to_project'); ?> <i data-feather="external-link"></i></a>
    </div>
  </div>
</section>


<?php } get_footer(); ?>