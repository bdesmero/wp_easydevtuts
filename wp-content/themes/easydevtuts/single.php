<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="page-header">
          <h2><?php the_title(); ?> <small><em>by: <?php the_author(); ?></em></small></h2>
          <h4><?php the_date(); ?></h4>
        </div>

        <?php the_content(); ?>

        <?php comments_template(); ?>

      <?php endwhile; ?>
        <!-- post navigation -->
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>
    </div>

    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
