<?php
/**
 * Template Name: Simple Full-Width Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header-carousel'); ?>
  <div class="layout-container full--until-large">
    <div class="flex-container cf">
      <div class="column__primary bg--white can-be--dark-light no-pad--btm">
        <div class="spacing--double flex h--100p">
          <div class="pad--primary spacing text">
            <h2 class="font--tertiary--l theme--primary-text-color"><?php if (get_post_meta($post->ID, 'display_title', true)): get_post_meta($post->ID, 'display_title', true); else: the_title(); endif; ?></h2>
            <?php the_content(); ?>
          </div>
          <?php if (is_active_sidebar('widget_area_primary')): ?>
            <div class="with-divider grid--uniform">
            </div>
          <?php endif; ?>
          <?php include(locate_template('patterns/blocks/block-story.php')); ?>
          <?php if (is_active_sidebar('widget_area_primary_bottom')): ?>
            <div class="pad--primary spacing text">
              <?php dynamic_sidebar('widget_area_primary_bottom'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div> <!-- /.shift-left--fluid -->
    </div> <!-- /.flex-container -->
  </div> <!-- /.layout-container -->
<?php endwhile; ?>
