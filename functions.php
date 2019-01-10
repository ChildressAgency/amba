<?php
add_action('wp_enqueue_scripts', 'tol_child_enqueue_styles');
function tol_child_enqueue_styles(){
  wp_enqueue_style(
    'bootstrap-css',
    '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
  );

  wp_enqueue_style(
    'google-fonts',
    '//fonts.googleapis.com/css?family=Crimson+Text:400,700|Lato:300,400,700,900'
  );

  wp_enqueue_style(
    'font-awesome',
    '//use.fontawesome.com/releases/v5.1.0/css/all.css'
  )

  wp_enqueue_style(
    'parent-style', 
    get_template_directory() . '/style.css'
  );

  wp_enqueue_style(
    'child-style', 
    get_stylesheet_directory() . '/style.css',
    array('parent-style'),
    wp_get_theme()->get('Version')
  );
}

//add meta to enqueued styles
add_filter('style_loader_tag', 'tol_add_css_meta', 10, 2);
function tol_add_css_meta($link, $handle){
  if($handle == 'bootstrap-css'){
    $link = str_replace('/>', ' integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />', $link);
  }
  elseif($handle == 'font-awesome'){
    $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />', $link);
  }

  return $link;
}

remove_action('after_theme_setup', 'tol_custom_header_setup');
add_action('after_setup_theme', 'tol_setup');
function tol_setup(){
  register_nav_menus(array(
    'header-nav' => esc_html__('Header Navigation', 'tol_child'),
    'footer-nav-1' => esc_html__('Footer Navigation 1', 'tol_child'),
    'footer-nav-2' => esc_html__('Footer Navigation 2', 'tol_child'),
    'footer-nav-3' => esc_html__('Footer Navigation 3', 'tol_child'),
    'footer-nav-4' => esc_html__('Footer Navigation 4', 'tol_child'),
    'footer-nav-5' => esc_html__('Footer Navigation 5', 'tol_child')
  ));

  load_child_theme_text_domain('tol_child', get_stylesheet_directory() . '/languages');
}

function tol_header_fallback_menu(){ ?>
  <nav id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo esc_url(home_url('about')); ?>">About AMBA</a></li>
          <li><a href="<?php echo esc_url(home_url('about#staff')); ?>">Staff</a></li>
          <li><a href="<?php echo esc_url(home_url('about#board')); ?>">Board</a></li>
          <li><a href="<?php echo esc_url(home_url('about/partner-organizations')); ?>">Partner Organizations</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News & Issues<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo esc_url(home_url('news-issues')); ?>">Current News</a></li>
          <li><a href="<?php echo esc_url(home_url('news-issues#issues')); ?>">Current Issues</a></li>
          <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug('press-releases')->term_id)); ?>">Press Releases</a></li>
          <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug('news-issues')->term_id)); ?>">News & Issues Archive</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo esc_url(home_url('events/2018-amba-annual-workshop')); ?>">2018 AMBA Annual Workshop</a></li>
          <li><a href="<?php echo esc_url(home_url('events/2017-amba-fall-workshop')); ?>">2017 AMBA Fall Workshop</a></li>
          <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug('events'))); ?>">Events Archive</a></li>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AMBA Membership</a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo esc_url(home_url('banks')); ?>">Membership Directory</a></li>
          <li><a href="<?php echo esc_url(home_url('membership')); ?>">Become a Member</a></li>
          <li><a href="<?php echo esc_url(home_url('military-banking-resources')); ?>">Military Banking Resources</a></li>
      </li>
      <li><a href="<?php echo esc_url(home_url('military-community')); ?>">Military Community</a></li>
    </ul>
  </nav>
<?php }

function tol_copyright_fallback_menu(){ ?>
  <ul class="list-inline">
    <li>AMBA &copy;<?php echo date('Y'); ?></li>
    <li><a href="<?php echo esc_url(home_url('privacy-policy')); ?>">Privacy Policy</a></li>
    <li><a href="<?php echo esc_url(home_url('cookie-policy')); ?>">Cookie Policy</a></li>
    <li><a href="<?php echo esc_url(home_url('contact-us')); ?>">Contact Us</a></li>
  </ul>
<?php }

function tol_get_menu_by_location($location){
  if(empty($location)){ return false; }

  $locations = get_nav_menu_locations();
  if(!isset($locations[$location])){ return false; }

  $menu_obj = get_term($locations[$location], 'nav_menu');
  return $menu_obj;
}

require_once dirname(__FILE__) . '/includes/tol-acf-setup.php';