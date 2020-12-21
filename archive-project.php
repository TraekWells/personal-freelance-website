<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Portfolio</span>
    <h1>Projects That I’ve Worked On Recently</h1>
    <div class="seperator"></div>
    <p>Being a freelance WordPress Developer has given me the pleasure of working with a handful of clients and with each project, I got to learn something about myself and improve some aspect of my process. Here are few of the larger projects that I’ve done for people.</p>
  </div>
</header>
  <section class="section">
    <div class="container">
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
      <div class="horizontal-feed" data-aos="fade-up">
        <div class="horizontal-feed__image">
          <img src="<?php the_post_thumbnail_url('project-thumbnail'); ?>" alt="<?php echo $altText; ?>" />
        </div>
        <div class="horizontal-feed__content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php echo the_permalink(); ?>" class="text-link">Project Details <i data-feather="arrow-right"></i></a>
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    </div>
  </section>
  <section class="section">
    <div class="container--narrow">
      <?php get_template_part('./template-parts/lets-talk'); ?>
    </div>
  </section>

<?php get_footer(); ?>