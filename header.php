<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="cache-control" content="private">

    <?php wp_head(); ?>

    <title><?php echo esc_html(bloginfo('name')); ?></title>
  </head>
  <body <?php body_class();?>>
    <div id="header-nav">
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-5 col-sm-height">
            <div class="brand-info">
              <div class="logo-left">
                <a href="<?php echo esc_url(home_url()); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="<?php echo esc_html(bloginfo('name')); ?> Logo" />
                </a>
              </div>
              <div class="logo-body">
                <p class="brand-name">The Official Website of the<span class="d-block">Association of Military Banks of America</span></p>
                <p class="slogan">Those Who Serve <span>Bank On Us</span></p>
              </div>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> 
          </div>
          <div class="col-sm-7 col-sm-height">
            <?php
              $header_nav_args = array(
                'theme_location' => 'header-nav',
                'menu' => '',
                'container' => 'nav',
                'container_id' => 'navbar',
                'container_class' => 'navbar-collapse collapse',
                'menu_id' => '',
                'menu_class' => 'nav navbar-nav navbar-right',
                'echo' => true,
                'fallback_cb' => 'tol_header_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new wp_bootstrap_navwalker();
              );
              wp_nav_menu($header_nav_args);
            ?>
          </div>
        </div>
      </div>
    </div>
