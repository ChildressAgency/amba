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
<body <?php body_class('mildocs-body');?>>
  <div class="banner"></div>
  <div id="mildocs" class="container-fluid container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-4 col-lg-3 col-sm-height nav-side">
        <?php
          $mildocs_nav_header = '<h2><a href="' . esc_url(home_url('mildocs')) . '">MILDOCS</a></h2>';
          $mildocs_nav_args = array(
            'theme_location' => 'mildocs-nav',
            'menu' => '',
            'container' => 'nav',
            'container_id' => '',
            'container_class' => 'mildocs-nav',
            'menu_id' => '',
            'menu_class' => 'list-unstyled',
            'echo' => true,
            'fallback_cb' => false,
            'items_wrap' => $mildocs_nav_header . '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 1,
          );
          wp_nav_menu($mildocs_nav_args);
        ?>
      </div>
      <div class="col-sm-8 col-lg-9 col-sm-height content-side">