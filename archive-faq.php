<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">FAQ</span>
    <h1>Frequently Asked Questions</h1>
    <div class="seperator"></div>
    <p>Web Development can be extremely confusing. Here are my answers to some of the most common questions that I’ve been asked about WordPress and Web Development in general.</p>
  </div>
</header>
<section class="section">
  <div class="container--narrow">
    <div class="faqs">
    <?php 
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1
      );
      $faqQuery = new WP_Query($args);

      while($faqQuery->have_posts()) {
        $faqQuery->the_post();
      ?>
      <div class="faq">
      <div class="faq__question">
        <h4><?php echo the_title(); ?></h4>
        <i data-feather="chevron-down"></i>
      </div>
      <div class="faq__answer">
        <p><?php echo the_content(); ?></p>
      </div>
      </div>
    <?php } wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="container--narrow">
    <?php get_template_part('./template-parts/lets-talk'); ?>
  </div>
</section>

<?php get_footer(); ?>