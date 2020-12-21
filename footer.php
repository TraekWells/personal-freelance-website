    <footer class="footer">
      <div class="footer__top container">
        <div class="footer-bio">
          <img src="<?php echo get_theme_file_uri( 'img/sidebar-profile-image.jpg' ); ?>" alt="Picture of Traek Wells" class="footer-image">
          <p clas="mb-4">Freelance WordPress Developer and Web Designer</span>, I help small businesses and people who want to increase their online presence.
          </p>
          <a href="<?php echo site_url( '/contact-me' ); ?>" class="text-link">Get a Free Quote <i data-feather="arrow-right"></i></a>
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