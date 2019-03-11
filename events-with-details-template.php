<?php
/**
 * Template Name: Events with Details Template
 * Template Post Type: post
 * Description: Template for Events Posts
 */
get_header(); ?>
<div id="primary" class="content-area">
  <div class="spacer"></div>
  <div class="container wrapper-primary landing-title-2">
    <div class="col-xs-12 col-md-12">
      <h3 class="pull-left"><?php echo esc_html(get_the_title()); ?></h3>
    </div>
  </div>
  
  <main id="main" class="container no-padding" role="main">
    <div class="row flex-row">
      <div class="col-xs-12 col-sm-8 col-md-8">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php
                if(is_single()){
                  the_title('<h1 class="entry-title">', '</h1>');
                }
                else{
                  the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                }
              ?> 
            </header>

            <div class="entry-content">
              <div class="row">
                <div class="col-xs-12">
                  <?php the_content(); ?>
                </div>
              </div>

              <?php if(get_field('details_section_title')): ?>
                <div class="row">
                  <div class="col-xs-12">
                    <h3><?php echo esc_html(get_field('details_section_title')); ?></h3>

                    <?php if(get_field('details_section_title_button')): ?>
                      <?php $details_section_btn = get_field('details_section_title_button'); ?>
                      <a class="btn btn-primary pull-right" href="<?php echo esc_url($details_section_btn['url']); ?>" target="<?php echo $details_section_btn['target'] ? $details_section_btn['target'] : '_self'; ?>" rel="noopener"><?php echo esc_html($details_section_btn['title']); ?></a>
                    <?php endif; ?>

                  </div>
                </div>
              <?php endif; ?>

              <?php if(have_rows('event_details')): ?>
                <div id="event-details" class="panel-group workshop-accordion">
                  <?php $i = 0; while(have_rows('event_details')): the_row(); ?>
                    <div class="panel panel-default">

                      <div id="heading-<?php echo $i; ?>" class="panel-heading">
                        <h4 class="panel-title">
                          <a href="#collapse-<?php echo $i; ?>" data-parent="#event-details" data-toggle="collapse"><strong><?php echo esc_html(get_sub_field('detail_section_title')); ?></strong></a>
                        </h4>
                      </div>

                      <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                          <?php if(have_rows('content_type')): while(have_rows('content_type')): the_row(); ?>

                            <?php if(get_row_layout() == 'image_cards'): ?>

                              <div class="row" style="padding-right:5%;">
                                <?php if(have_rows('cards')): $c = 0; while(have_rows('cards')): the_row(); ?>
                                  <?php if($c % 4 == 0){ echo '<div class="clearfix visible-lg-block"></div>'; } ?>
                                  <?php if($c % 2 == 0){ echo '<div class="clearfix hidden-lg"></div>'; } ?>
                                  <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="wp-caption aligncenter" style="width:250px;">
                                      <img src="<?php echo esc_url(get_sub_field('card_image')); ?>" class="size-medium wp-image-<?php echo $c; ?>" alt="<?php echo esc_attr(get_sub_field('card_name')); ?>" width="240" height="300" />
                                      <p class="wp-caption-text">
                                        <?php if(get_sub_field('card_name_link')): ?>
                                          <a href="<?php echo esc_url(get_sub_field('card_name_link')); ?>" target="_blank"><?php echo esc_html(get_sub_field('card_name')); ?></a>
                                        <?php else: ?>
                                          <?php echo esc_html(get_sub_field('card_name')); ?>
                                        <?php endif; ?>
                                        <br />
                                        <?php echo esc_html(get_sub_field('card_title')); ?>
                                      </p>
                                    </div>
                                  </div>
                                <?php $c++; endwhile; endif; ?>
                              </div>

                            <?php elseif(get_row_layout() == 'standard_editor'): ?>
                              <?php echo wp_kses_post(get_sub_field('event_detail_section_content')); ?>
                            <?php endif; ?>

                          <?php endwhile; endif; ?>
                        </div>
                      </div>

                    </div>
                  <?php $i++; endwhile; ?>
                </div>
              <?php endif; ?>
            </div>

            <footer class="entry-footer">
              <?php tol_entry_footer(); ?>
            </footer>
          </article>

          <?php the_post_navigation(); ?>

          <?php
            if(comments_open() || get_comments_number()){
              comments_template();
            }
          ?>

        <?php endwhile; endif; ?>
      </div>

      <div class="col-xs-12 col-sm-4 col-sm-offset-0 col-md-3 col-md-offset-1 single-sidebar">
        <div class="spacer"></div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer();