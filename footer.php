    <footer class="footer">
      <div class="footer__top container">
        <div class="footer-bio">
          <img src="https://placeimg.com/100/100/random" alt="" class="footer-image">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <a href="<?php echo site_url( '/contact-me' ); ?>" class="button button--ghost">Get a Free Quote</a>
        </div>
        <div class="footer-list">
          <h4>Pages</h4>
          <p><a href="<?php echo site_url( '/services' ); ?>">Services</a></p>
          <p><a href="<?php echo get_post_type_archive_link( 'project' ); ?>">Portfolio</a></p>
          <p><a href="<?php echo site_url( '/my-story' ); ?>">My Story</a></p>
          <p><a href="<?php echo get_post_type_archive_link( 'faq' ); ?>">FAQs</a></p>
        </div>
        <div class="footer-list">
          <h4>Social Media</h4>
          <p><a href="https://www.twitter.com/TraekWells" target="_blank">Twitter</a></p>
          <p><a href="https://www.instagram.com/TraekWells" target="_blank">LinkedIn</a></p>
          <p><a href="https://www.linkedin.com/in/TraekWells" target="_blank">Instagram</a></p>
        </div>
      </div>
      <div class="footer__bottom">
        <p>© <?php echo date('Y'); ?> Traek Wells. All rights reserved.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>