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

<?php 
  $image = get_field('showcase_image');
  if (!empty($image)) { ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>" loading="lazy" class="project-image" />    
  <?php }; ?>

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
      <a href="<?php echo get_field('link_to_project'); ?>" target="_blank"> <?php echo get_field('link_to_project'); ?> <i data-feather="external-link"></i></a>
    </div>
  </div>
</section>
<section class="section">
  <div class="container--narrow">
    <?php get_template_part('./template-parts/lets-talk'); ?>
  </div>
</section>
<section class="section">
  <div class="container">
    <h2 class="text-center mb-4">Here's Another Project You Might Like</h2>
    <?php 
      $projectQuery = new WP_Query(array(
        'post_type' => 'project',
        'posts_per_page' => 1,
        'post__not_in' => array( $post->ID ),
        'orderby' => 'rand'
      ));

      while($projectQuery->have_posts()) {
        $projectQuery->the_post();
        $imageId = get_post_thumbnail_id(get_the_ID());
        $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);
    ?>
    <div class="horizontal-feed" data-aos="fade-up">
      <div class="horizontal-feed__image">
        <img src="<?php the_post_thumbnail_url('project-thumbnail'); ?>" alt="<?php echo $altText; ?>" />
      </div>
      <div class="horizontal-feed__content">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php echo the_permalink(); ?>" class="text-link">Project Details <i data-feather="arrow-right"></i></a>
      </div>
    </div>
    <?php } wp_reset_postdata(); ?>
  </div>
</section>



<?php } get_footer(); ?>