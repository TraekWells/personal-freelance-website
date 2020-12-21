<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Contact Me</span>
    <h1>Almost There</h1>
    <div class="seperator"></div>
    <p>I'd love to help you with your next project. Tell me a few details by filling out the form below for a free, no obligation quote from me.</p>
  </div>
</header>
<section class="section">
  <div class="container--narrow">
    <?php echo do_shortcode('[ninja_form id="1"]'); ?>
  </div>
</section>

<?php get_footer(); ?>