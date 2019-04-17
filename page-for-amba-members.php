<?php get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="container" role="main">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
          <?php the_content(); ?>
          <hr />

          <?php if(have_rows('resources')): ?>
            <h2><?php echo esc_html__('Military Bank Resources', 'tol_child'); ?></h2>

            <div id="resources" class="panel-group" role="tablist" aria-multiselectable="true">
              <?php $i=0; while(have_rows('resources')): the_row(); ?>

                <div class="panel panel-default">
                  <div id="resource-heading-<?php echo $i; ?>" class="panel-heading" role="tab">
                    <h3 class="panel-title">
                      <a href="#resource-<?php echo $i; ?>" role="button" data-toggle="collapse" data-parent="#resources" aria-expanded="false" aria-controls="resource-<?php echo $i; ?>"><?php echo esc_html(get_sub_field('resource_title')); ?></a>
                    </h3>
                  </div>
                  <div id="resource-<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="resource-heading-<?php echo $i; ?>">
                    <div class="panel-body">
                      <?php echo wp_kses_post(get_sub_field('resource_content')); ?>
                    </div>
                  </div>
                </div>

              <?php $i++; endwhile; ?>
            </div>
          <?php endif; ?>
        </div>

      </article>
    <?php endwhile; endif; ?>

  </main>
</div>
<?php get_footer();