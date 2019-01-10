    <footer id="footer">
      <div id="footer-nav">
        <div class="container-fluid container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-10 col-sm-height">
              <div class="row">
                <div class="col-sm-2">
                  <a href="<?php echo esc_url(home_url()); ?>" class="footer-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="<?php echo esc_html(bloginfo('name')); ?> Logo" />
                  </a>
                </div>
                <div class="col-sm-10">
                  <ul class="list-inline text-center">
                    <?php
                      $footer_nav_1 = tol_get_menu_by_location('footer-nav-1');
                      $footer_nav_1_title = $footer_nav_1 ? esc_html($footer_nav_1->name) : '';
                      $footer_nav_1_args = array(
                        'theme_location' => 'footer-nav-1',
                        'menu' => 'Footer Navigation 1',
                        'container' => 'li',
                        'container_id' => '',
                        'container_class' => '',
                        'menu_class' => 'list-unstyled',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => false,
                        'items_wrap' => '<h4>' . $footer_nav_1_title . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 1
                      );
                      wp_nav_menu($footer_nav_1_args);

                      $footer_nav_2 = tol_get_menu_by_location('footer-nav-2');
                      $footer_nav_2_title = $footer_nav_2 ? esc_html($footer_nav_2->name) : '';
                      $footer_nav_2_args = array(
                        'theme_location' => 'footer-nav-2',
                        'menu' => 'Footer Navigation 2',
                        'container' => 'li',
                        'container_id' => '',
                        'container_class' => '',
                        'menu_class' => 'list-unstyled',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => false,
                        'items_wrap' => '<h4>' . $footer_nav_2_title . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 1
                      );
                      wp_nav_menu($footer_nav_2_args);

                      $footer_nav_3 = tol_get_menu_by_location('footer-nav-3');
                      $footer_nav_3_title = $footer_nav_3 ? esc_html($footer_nav_3->name) : '';
                      $footer_nav_3_args = array(
                        'theme_location' => 'footer-nav-3',
                        'menu' => 'Footer Navigation 3',
                        'container' => 'li',
                        'container_id' => '',
                        'container_class' => '',
                        'menu_class' => 'list-unstyled',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => false,
                        'items_wrap' => '<h4>' . $footer_nav_3_title . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 1
                      );
                      wp_nav_menu($footer_nav_3_args);

                      $footer_nav_4 = tol_get_menu_by_location('footer-nav-4');
                      $footer_nav_4_title = $footer_nav_4 ? esc_html($footer_nav_4->name) : '';
                      $footer_nav_4_args = array(
                        'theme_location' => 'footer-nav-4',
                        'menu' => 'Footer Navigation 4',
                        'container' => 'li',
                        'container_id' => '',
                        'container_class' => '',
                        'menu_class' => 'list-unstyled',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => false,
                        'items_wrap' => '<h4>' . $footer_nav_4_title . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 1
                      );
                      wp_nav_menu($footer_nav_4_args);

                      $footer_nav_5 = tol_get_menu_by_location('footer-nav-5');
                      $footer_nav_5_title = $footer_nav_5 ? esc_html($footer_nav_5->name) : '';
                      $footer_nav_5_args = array(
                        'theme_location' => 'footer-nav-5',
                        'menu' => 'Footer Navigation 5',
                        'container' => 'li',
                        'container_id' => '',
                        'container_class' => '',
                        'menu_class' => 'list-unstyled',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => false,
                        'items_wrap' => '<h4>' . $footer_nav_5_title . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 1
                      );
                      wp_nav_menu($footer_nav_5_args);
                    ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-sm-height social">
              <div class="social-inner text-center">
                <p>Follow Us</p>
                <?php if(get_field('facebook', 'option')): ?>
                  <a href="<?php echo esc_url(get_field('facebook', 'option')); ?>" class="facebook" target="_blank"><i class="fab fa-facebook-square"></i><span class="sr-only">Facebook</span></a>
                <?php endif; if(get_field('twitter', 'option')): ?>
                  <a href="<?php echo esc_url(get_field('twitter', 'option')); ?>" class="twitter" target="_blank"><i class="fab fa-twitter-square"></i><span class="sr-only">Twitter</span></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="copyright">
        <?php
          $copyright_menu_args = array(
            'theme_location' => 'copyright-nav',
            'menu' => 'Copyright Navigation Menu',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_class' => 'list-inline',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'tol_copyright_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s"><li>AMBA &copy;' . date('Y') . '</li>%3$s</ul>',
            'depth' => 1
          );
          wp_nav_menu($copyright_menu_args);
        ?>
        <p class="childress">website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>