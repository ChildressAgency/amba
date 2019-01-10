<?php get_header(); ?>
<?php
  $page_id = get_the_ID();
  $hero_img_id = get_post_meta($page_id, 'hero_image', true);
  $hero_img = wp_get_attachment_image_src($hero_img_id, 'full');
  $hero_img_url = $hero_img[0];

  $hero_img_css = get_post_meta($page_id, 'hero_image_css', true);
?>
<section id="hp-hero" class="hero" style="background-image:url(<?php echo esc_url($hero_img_url); ?>); <?php echo esc_attr($hero_img_css); ?>">
  <div class="hero-caption">
    <?php echo wp_kses_post(get_field('hero_section_caption')); ?>
    <?php 
      $hero_caption_link = get_field('hero_caption_link');
      if($hero_caption_link): ?>
        <a href="<?php echo esc_url($hero_caption_link['url']); ?>" class="btn-main" target="<?php echo esc_attr($hero_caption_link['target']); ?>"><?php echo esc_html($hero_caption_link['title']); ?></a>
    <?php endif; ?>
  </div>
  <div class="hero-overlay"></div>
</section>

<section id="hp-about" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/blue-texture.jpg); background-position:center center;">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 text-side">
        <article>
          <?php echo wp_kses_post(get_field('about_section_content')); ?>
          <?php
            $about_section_link = get_field('about_section_link');
            if($about_section_link): ?>
              <a href="<?php echo esc_url($about_section_link['url']); ?>" class="btn-main" target="<?php echo esc_attr($about_section_link['target']); ?>"><?php echo esc_html($about_section_link['title']); ?></a>
          <?php endif; ?>
        </article>
      </div>
      <div class="col-sm-5 image-side">
        <?php
          $about_section_img_id = get_post_meta($page_id, 'about_section_image', true);
          $about_section_img = wp_get_attachment_image_src($about_section_img_id, 'full');
          $about_section_img_url = $about_section_img[0];
          $about_section_img_alt = get_post_meta($about_section_img_id, '_wp_attachment_image_alt', true);

          if($about_section_img_url): ?>
            <img src="<?php echo esc_url($about_section_img_url); ?>" class="img-responsive center-block" alt="<?php echo esc_attr($about_section_img_alt); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
  $workshop_section_bg_img_id = get_post_meta($page_id, 'workshop_section_background_image', true);
  $workshop_section_bg_img = wp_get_attachment_image_src($workshop_section_bg_img_id, 'full');
  $workshop_section_bg_img_url = $workshop_section_bg_img[0];
  $workshop_section_bg_img_css = get_post_meta($page_id, 'workshop_section_background_image_css', true);
?>
<section id="workshop" style="background-image:url(<?php echo esc_url($workshop_section_bg_img_url); ?>); <?php echo esc_attr($workshop_section_bg_img_css); ?>">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-6 col-sm-push-6 col-sm-height image-side">
        <?php
          $workshop_section_img_id = get_post_meta($page_id, 'workshop_section_image', true);
          $workshop_section_img = wp_get_attachment_image_src($workshop_section_img_id, 'full');
          $workshop_section_img_url = $workshop_section_img[0];
          $workshop_section_img_alt = get_post_meta($workshop_section_img_id, '_wp_attachment_image_alt', true);

          if($workshop_section_img_url): ?>
            <img src="<?php echo esc_url($workshop_section_img_url); ?>" class="img-responsive" alt="<?php echo esc_attr($workshop_section_img_alt); ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-6 col-sm-pull-6 col-sm-height text-side">
        <article>
          <h1><?php echo esc_html(get_field('workshop_section_title')); ?></h1>
          <h2 class="workshop-meta">
            <?php echo esc_html(get_field('workshop_section_date')); ?>
            <br />
            <?php echo wp_kses_post(get_field('workshop_section_location')); ?>
          </h2>
          <?php echo wp_kses_post(get_field('workshop_section_description')); ?>
          <?php
            $workshop_section_link = get_field('workshop_section_link');
            if($workshop_section_link): ?>
              <a href="<?php echo esc_url($workshop_section_link['url']); ?>" class="btn-main" target="<?php echo esc_attr($workshop_section_link['target']); ?>"><?php echo esc_html($workshop_section_link['title']); ?></a>
          <?php endif; ?>
        </article>
      </div>
    </div>
  </div>
</section>

<section id="find-bank">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/find-bank-icon.png" class="img-responsive center-block platter-icon" alt="" />
      </div>
      <div class="col-md-7">
        <div class="row row-sm-height">
          <div class="col-sm-8 col-sm-height text-center">
            <h2><?php echo esc_html(get_field('find_a_bank_section_title')); ?></h2>
          </div>
          <div class="col-sm-4 col-sm-height text-center">
            <?php
              $find_a_bank_link = get_field('find_a_bank_section_link');
              if($find_a_bank_link): ?>
                <a href="<?php echo esc_url($find_a_bank_link['url']); ?>" target="<?php echo esc_attr($find_a_bank_link['target']); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-icon.png" class="img-responsive center-block" alt="" /></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="newsletter-signup">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-push-7">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/newsletter-icon.png" class="img-responsive center-block platter-icon" alt="" />
      </div>
      <div class="col-md-7 col-md-pull-5">
        <div class="newsletter-form text-center">
          <?php echo do_shortcode(get_field('newsletter_signup_form_shortcode')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog-summary" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/gold-texture.jpg);">
  <div class="container">
    <h2>News & Issues</h2>
  </div>
  <div class="container">
    <div class="blog-cards">
      <?php
        $recent_posts = new WP_Query(array(
          'posts_per_page' => 3
        ));

        if($recent_posts->have_posts()): while($recent_posts->have_posts()): $recent_posts->the_post();
          $bg_img_url = '';
          if(has_post_thumbnail()){
            $bg_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
          } ?>

          <div class="blog-card" style="background-image:url(<?php echo esc_url($bg_img_url); ?>);">
              <div class="card-header">
                <?php 
                  $cats = get_the_category(); 
                  $cat_color = get_field('category_color', 'category_' . $cats[0]->term_id);
                ?>
                <a href="<?php echo esc_url(get_category_link($cats[0]->term_id)); ?>" class="btn-cat" style="background-color:<?php echo $cat_color; ?>"><?php echo esc_html($cats[0]->name); ?></a>
              </div>
              <div class="card-body">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <p class="blog-date"><?php echo get_the_date('F j, Y'); ?></p>
              </div>
              <div class="card-overlay"></div>
          </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>