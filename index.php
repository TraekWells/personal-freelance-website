<?php get_header(); ?>
<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Blog</span>
    <h1>Sharing What I've Learned</h1>
    <div class="seperator"></div>
  </div>
</header>
<section class="section">
  <div class="container">
    <?php 
      $args = new WP_Query(array(
        'post_type' => 'posts',
        'posts_per_page' => -1
      ));

      $posts = new WP_Query($args);

      while($posts->have_posts()) {
        $posts->the_post();
        $imageId = get_post_thumbnail_id(get_the_ID());
        $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);
    ?>
      <div class="horizontal-feed" data-aos="fade-up">
        <div class="horizontal-feed__image">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $altText; ?>" />
        </div>
        <div class="horizontal-feed__content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="text-link">Read Article <i data-feather="arrow-right"></i></a>
        </div>
      </div>
    <?php } wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer(); ?>