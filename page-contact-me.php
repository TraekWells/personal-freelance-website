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
    <form action="#" class="form">
      <div class="form__group">
        <label for="name" class="form__label">Name</label>
        <input type="text" id="name" placeholder="Enter your name" class="form__input">
      </div>
      <div class="form__group">
        <label for="email" class="form__label">Email Address</label>
        <input type="email" id="email" placeholder="Enter your email address" class="form__input">
      </div>
      <div class="form__group">
        <label for="service-needed" class="form__label">Name</label>
        <select name="service-needed" id="service-needed">
          <option value="wordpress-theme-development">WordPress Theme Development</option>
          <option value="convert-website-to-wordpress">Convert Website to Wordpress</option>
          <option value="web-design">Web Design</option>
        </select>
      </div>
      <div class="form__group">
        <textarea name="additional-notes" id="additional-notes" cols="30" rows="10" placeholder="Additional Notes"></textarea>
      </div>
      <button class="button button--primary">Send Message <i data-feather="send"></i></button>
    </form>
  </div>
</section>

<?php get_footer(); ?>