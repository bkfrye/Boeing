<footer id="footer">
  <div class="footer-wrapper">
    <div class="contact-form">
      <h3>Drop us a line anytime and we will get back to you as soon as possible</h3>
      <div class="form">
        <?php echo do_shortcode('[wpforms id="8"]'); ?>
      </div>
    </div>

    <div class="footer-nav">
      <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
        <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_class' => 'footer-menu',
          'container_id' => false,
          'menu_class' => false,
          'menu_id' => false,
          'menu_item_class' => false,
        ) ); ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="footer-base">
    <div class="footer-base-wrapper">
      <div class="copyright">
        <p>&copy<?php echo date("Y"); ?> Pro-ficiency - All Rights Reserved</p>
      </div>
      <div class="contact">
        <div class="address">
          <p>201 W Main St, #104 Durham, NC</p>
        </div>
        <ul class="social">
          <li>
            <a href="https://www.facebook.com/proficiencysim/" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="facebook icon">
            </a>
          </li>
          <!-- <li>
            <a href="#" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="twitter icon">
            </a>
          </li> -->
          <li>
            <a href="https://www.linkedin.com/company/propatient/" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.svg" alt="linkedin icon">
            </a>
          </li>
          <!-- <li>
            <a href="#" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube.svg" alt="youtube icon">
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
