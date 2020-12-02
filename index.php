<?php get_header(); ?>
<header class="header">
  <img src="<?php echo get_template_directory_uri() . '/img/blog-hero-image.jpg'; ?>" alt="" />
  <div class="header__content">
    <h1>Blog</h1>
    <p class="header-subtitle">
      Welcome to my cyber journal about coding, design, believing in yourself and other random thoughts.
    </p>
  </div>
</header>
<main class="main">
  <section class="section section--dark-1">
    <div class="container">
      <p class="section-intro text-muted">What I've Written</p>
      <h2>Recent Blogs</h2>
      <div class="section__content blog-list">
        <?php 
          $postQuery = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1
          ));

          while($postQuery->have_posts()) {
            $postQuery->the_post();
            $imageId = get_post_thumbnail_id(get_the_ID());
            $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);
          ?>
          <a href="<?php the_permalink(); ?>">
            <div class="blog-card">
              <div class="blog-card__image">
                <img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url('post-thumbnail'); } ?>" alt="<?php echo $altText ?>" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <?php
                  $category = get_the_category()[0]->name; 
                  switch($category) {
                    case 'Random':
                      echo '<div class="tag tag--random">' . $category . '</div>';
                      break;
                    case 'Coding':
                      echo '<div class="tag tag--coding">' . $category . '</div>';
                      break;
                    case 'Self':
                      echo '<div class="tag tag--self">' . $category . '</div>';
                      break;
                    case 'Design':
                      echo '<div class="tag tag--design">' . $category . '</div>';
                      break;
                  }
                ?>
                <h3><?php the_title(); ?></h3>
              </div>
            </div>
          </a>
        <?php } wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>