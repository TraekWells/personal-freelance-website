<?php get_header(); 
  while(have_posts()) {
    the_post();

    $imageId = get_post_thumbnail_id(get_the_ID());
    $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);
  ?>
<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Blog</span>
    <h1><?php the_title(); ?></h1>
    <div class="seperator"></div>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $altText; ?>" />
  </div>
</header>
<section class="section">
  <div class="container--narrow">
    <div class="post">
      <div class="post__content">
        <p><?php echo get_field('post_intro'); ?></p>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container--narrow">
    <?php get_template_part('./template-parts/lets-talk'); ?>
  </div>
</section>
<?php } get_footer(); ?>