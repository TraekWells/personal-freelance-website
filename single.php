<?php get_header(); 
  while(have_posts()) {
    the_post();
  ?>
<header class="header">
  <img src="<?php the_post_thumbnail_url('hero-image'); ?>" alt="" />
  <div class="header__content">
    <a href="<?php echo esc_url(get_category_link(get_the_category()[0]->term_id)); ?>">
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
    </a>
    <h1><?php the_title(); ?></h1>
  </div>
</header>
<main class="main">
  <section class="section--dark-1">
    <div class="container post-layout">
      <article class="post-layout__content">
        <p class="text-small">Last Updated <?php the_modified_date(); ?></p>
        <p class="intro"><?php echo get_field('post_intro'); ?></p>
          <?php the_content();
            get_template_part('./template-parts/post-extras');
          ?>
          <?php 
            $postQuery = new WP_Query(array(
              'post_type' => 'post',
              'category__in' => wp_get_post_categories($post->ID),
              'post__not_in' => array($post->ID),
              'posts_per_page' => 2
            ));
          ?>
          <?php if ($postQuery->found_posts > 0) { ?>
            <h3>You may also like these posts</h3>
            <div class="section__content blog-list">
          <?php } 

            while($postQuery->have_posts()) {
              $postQuery->the_post();
              $imageId = get_post_thumbnail_id(get_the_ID());
              $altText = get_post_meta($imageId, '_wp_attachment_image_alt', true);
            ?>
            <a href="<?php the_permalink(); ?>">
              <div class="blog-card">
                <div class="blog-card__image">
                  <img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url(); } ?>" alt="<?php echo $altText ?>" loading="lazy" />
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
      </article>
      <article class="post-layout__sidebar">
        <article class="recent-posts">
          
          <h4>Recent Posts</h4>
          <ul>
            <?php 
            $query = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => 3
            ));

              while($query->have_posts()) {
                $query->the_post();
              ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php } 
              wp_reset_postdata(); ?>
          </ul>
        </article>
      </article>
    </div>
  </section>
</main>
<?php } get_footer(); ?>