<?php get_header(); ?>

<header class="header">
  <img src="" alt="" />
  <div class="header__content">
    <h1><?php single_cat_title(); ?></h1>
    <p class="header-subtitle"><?php echo category_description(); ?></p>
  </div>
</header>
<main class="main">
  <section class="section section--dark-2">
    <div class="container">
    <div class="section__content blog-list">
      <?php 
        $categoryQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'category_name' => 'design'
        ));

        while($categoryQuery->have_posts()) {
          $categoryQuery->the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
        <div class="blog-card">
          <div class="blog-card__image">
            <img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url(); } ?>" alt="<?php echo $altText ?>" />
          </div>
          <div class="blog-card__content">
            <div class="tag tag--design">Design</div>
            <h4><?php the_title(); ?></h4>
          </div>
        </div>
      </a>
      <?php } wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
</main>

  <?php get_footer(); ?>