<?php get_header(); ?>

<header class="header intro">
  <div class="container--narrow">
    <span class="header-lead">Contact Me</span>
    <h1>Almost There</h1>
    <div class="seperator"></div>
    <p>Si sine causa, mox videro; interea hoc tenebo, si ob aliquam causam non provident, similique sunt vitae dicta sunt, fecerint, virtutem iis per se esse appetendum, alterum esse fugiendum itaque turbent.</p>
  </div>
</header>
<section class="section">
  <div class="container--narrow">
    <?php echo do_shortcode('[ninja_form id="1"]'); ?>
    <!-- <form action="send-email.php" class="form" method="POST">
      <div class="form__group">
        <input type="text" id="name" placeholder="Enter your name" class="form__input" required>
        <label for="name" class="form__label">Name</label>
      </div>
      <div class="form__group">
        <input type="email" id="email" placeholder="Enter your email address" class="form__input" required>
        <label for="email" class="form__label">Email Address</label>
      </div>
      <div class="form__group">
        <i data-feather="chevron-down"></i>
        <select name="service-needed" id="service-needed"> 
          <option value="none" selected disabled hidden>How can I help with your project?</option>
          <option value="wordpress-theme-development">WordPress Theme Development</option>
          <option value="convert-website-to-wordpress">Convert Website to Wordpress</option>
          <option value="web-design">Web Design</option>
        </select>
      </div>
      <div class="form__group">
        <textarea name="additional-notes" id="additional-notes" cols="30" rows="10" placeholder="Additional Notes" class="form__input"></textarea>
        <label for="additional-notes" class="form__label--message">Additional Notes</label>
      </div>
      <button class="button button--primary">Send Message</button>
    </form> -->
  </div>
</section>

<?php get_footer(); ?>