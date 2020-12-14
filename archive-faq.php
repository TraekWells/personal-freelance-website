<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">FAQ</span>
    <h1>Frequently Asked Questions</h1>
    <div class="seperator"></div>
    <p>Si sine causa, mox videro; interea hoc tenebo, si ob aliquam causam non provident, similique sunt vitae dicta sunt, fecerint, virtutem iis per se esse appetendum, alterum esse fugiendum itaque turbent.</p>
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
        <p><?php echo the_title(); ?></p>
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