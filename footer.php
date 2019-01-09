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
                    <li>
                      <h4>About</h4>
                      <ul class="list-unstyled">
                        <li><a href="#">About AMBA</a></li>
                        <li><a href="#">Staff</a></li>
                        <li><a href="#">Board</a></li>
                        <li><a href="#">Partner Organizations</a></li>
                      </ul>
                    </li>
                    <li>
                      <h4>News and Events</h4>
                      <ul class="list-unstyled">
                        <li><a href="#">Current News</a></li>
                        <li><a href="#">Current Issues</a></li>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">News & Issues Archive</a></li>
                      </ul>
                    </li>
                    <li>
                      <h4>Events</h4>
                      <ul class="list-unstyled">
                        <li><a href="#">2018 AMBA Annual Workshop</a></li>
                        <li><a href="#">2017 AMBA Fall Workshop</a></li>
                        <li><a href="#">Events Archive</a></li>
                      </ul>
                    </li>
                    <li>
                      <h4>AMBA Membership</h4>
                      <ul class="list-unstyled">
                        <li><a href="#">Membership Directory</a></li>
                        <li><a href="#">Become a Member</a></li>
                        <li><a href="#">Military Banking Resources</a></li>
                      </ul>
                    </li>
                    <li>
                      <h4>Military Community</h4>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-2 col-sm-height social">
              <div class="social-inner text-center">
                <p>Follow Us</p>
                <a href="#" class="facebook" target="_blank"><i class="fab fa-facebook-square"></i><span class="sr-only">Facebook</span></a>
                <a href="#" class="twitter" target="_blank"><i class="fab fa-twitter-square"></i><span class="sr-only">Twitter</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="copyright">
        <ul class="list-inline">
          <li>AMBA &copy;2019</li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cookie Policy</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <p class="childress">website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>