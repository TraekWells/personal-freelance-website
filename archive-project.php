<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Portfolio</span>
    <h1>Projects That I’ve Worked On Recently</h1>
    <div class="seperator"></div>
    <p>Si sine causa, mox videro; interea hoc tenebo, si ob aliquam causam non provident, similique sunt vitae dicta sunt, fecerint, virtutem iis per se esse appetendum, alterum esse fugiendum itaque turbent.</p>
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
          <h3 class="margin-bottom-0"><?php the_title(); ?></h3>
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