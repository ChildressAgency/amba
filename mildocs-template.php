<?php
/**
 * Template Name: MILDOCS Template
 * Description: Template for MILDOCS pages 
 */
get_header('mildocs'); ?>
<main class="mildocs-main">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
      <header>
        <?php 
          if(get_field('icon_file_type') == 'svg'){
            echo get_field('mildoc_icon');
          }
          else{
            $img_id = get_post_meta(get_the_ID(), 'mildoc_icon', true);
            $img_url = wp_get_attachment_image_src($img_id, 'full');
            echo '<img src="' . esc_url($img_url) . '" alt="' . esc_html(get_the_title()) . ' Icon" />';
          }
        ?>
        <h1 class="icon"><?php the_title(); ?></h1>
      </header>
      <?php the_content(); ?>

      <?php if(is_page('mildocs')): ?>
        <?php if(have_rows('tips_lists_section')): ?>
          <div class="row">
            <?php $i = 0; while(have_rows('tips_lists_section')): the_row(); ?>
              <?php 
                if($i % 2 == 0){ echo '<div class="clearfix visible-sm-block"></div>'; }
                if($i % 3 == 0){ echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; }
              ?>
              <div class="col-sm-6 col-md-4">
                <?php echo wp_kses_post(get_sub_field('tips_list')); ?>
              </div>
            <?php $i++; endwhile; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <?php if(get_field('resources')): ?>
        <footer>
          <hr />
          <h3><?php echo esc_html__('RESOURCES', 'tol_child'); ?></h3>
          <p><?php echo esc_html__('Here is a list of helpful links to resources you may need:', 'tol_child'); ?></p>
          <?php echo wp_kses_post(get_field('resources')); ?>
        </footer>
      <?php endif; ?>
    </article>
  <?php endwhile; else: ?>
    <p><?php echo esc_html__('Sorry, we could not find that page.', 'tol_child'); ?></p>
  <?php endif; ?>
</main>
<?php get_footer('mildocs');