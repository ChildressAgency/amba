<?php get_header(); ?>

	<div id="primary" class="content-area">
		
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div class="full-wd-header" style="background-image: url('<?php echo $image[0]; ?>')"></div>
		<h1 class="text-center landing-title landing-title--<?php the_title() ?>"> <?php the_title(); ?> </h1>
		<?php endif; ?>

		<main id="main" class="container" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- 
          <header class="entry-header">
            <?php// the_title( '<h1 class="entry-title entry-title-landing">', '</h1>' ); ?>
          </header>.entry-header
        -->
          <div class="entry-content">
            <?php
              the_content();

              if(have_rows('staff')): ?>

                <hr />
                <h2 id="staff">AMBA Staff</h2>
                <div class="row">
                  <?php $s = 0; while(have_rows('staff')): the_row(); ?>

                    <?php if($s % 2 == 0){ echo '<div class="clearfix visible-xs-block"></div>'; } ?>
                    <?php if($s % 4 == 0){ echo '<div class="clearfix visible-sm-block"></div>'; } ?>
                    <?php if($s % 6 == 0){ echo '<div class="clearfix hidden-xs hidden-sm"></div>'; } ?>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                      <?php if(get_sub_field('staff_link')): ?>
                        <a href="<?php echo esc_url(get_sub_field('staff_link')); ?>">
                          <img src="<?php echo esc_url(get_sub_field('staff_image')); ?>" alt="<?php echo esc_html(get_sub_field('staff_name')); ?>" />
                        </a>
                        <h4><a href="<?php echo esc_url(get_sub_field('staff_link')); ?>"><?php echo esc_html(get_sub_field('staff_name')); ?></a></h4>
                      <?php else: ?>
                        <img src="<?php echo esc_url(get_sub_field('staff_image')); ?>" alt="<?php echo esc_html(get_sub_field('staff_name')); ?>" />
                        <h4><?php echo esc_html(get_sub_field('staff_name')); ?></h4>
                      <?php endif; ?>
                      <h5><?php echo esc_html(get_sub_field('staff_title')); ?></h5>
                    </div>

                  <?php $s++; endwhile; ?>
                </div><?php //.row

              endif; 
              if(have_rows('board_of_directors')): ?>

                <hr />
                <h2 id="board">Board of Directors</h2>
                <div class="row">

                  <?php $b = 0; while(have_rows('board_of_directors')): the_row(); ?>

                    <?php if($b % 2 == 0){ echo '<div class="clearfix visible-xs-block"></div>'; } ?>
                    <?php if($b % 4 == 0){ echo '<div class="clearfix hidden-xs"></div>'; } ?>
                    <div class="col-sm-3 col-xs-6">
                      <?php if(get_sub_field('director_link')): ?>
                        <a href="<?php echo esc_url(get_sub_field('director_link')); ?>">
                          <img src="<?php echo esc_url(get_sub_field('director_image')); ?>" alt="<?php echo esc_html(get_sub_field('director_name')); ?>" />
                        </a>
                        <h4>
                          <a href="<?php echo esc_url(get_sub_field('director_link')); ?>"><?php echo esc_html(get_sub_field('director_name')); ?></a>
                          <small><strong><?php echo esc_html(get_sub_field('director_position')); ?></strong></small>
                        </h4>
                      <?php else: ?>
                        <img src="<?php echo esc_url(get_sub_field('director_image')); ?>" alt="<?php echo esc_html(get_sub_field('director_name')); ?>" />
                        <h4><?php echo esc_html(get_sub_field('director_name')); ?><small><strong><?php echo esc_html(get_sub_field('director_position')); ?></strong></small></h4>
                      <?php endif; ?>
                       <p><?php echo esc_html(get_sub_field('director_title')); ?></p>
                    </div>

                  <?php $b++; endwhile; ?>

                </div>

            <?php endif;            

              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tol' ),
                'after'  => '</div>',
              ) );
            ?>
          </div><!-- .entry-content -->

          <footer class="entry-footer">
            <?php
              edit_post_link(
                sprintf(
                  /* translators: %s: Name of current post */
                  esc_html__( 'Edit %s', 'tol' ),
                  the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
              );
            ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

        <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();