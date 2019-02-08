<?php
/**
 * Template Name: MILDOCS Template
 * Description: Template for MILDOCS pages 
 */
get_header('mildocs'); ?>
<main class="mildocs-main">
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
    <footer>
      <hr />
      <h3><?php echo esc_html__('RESOURCES', 'tol_child'); ?></h3>
      <p><?php echo esc_html__('Here is a list of helpful links to resources you may need:', 'tol_child'); ?></p>
      <?php echo wp_kses_post(get_field('resources')); ?>
    </footer>
  </article>
</main>
<?php get_footer('mildocs');