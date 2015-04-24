<?php
/**
 * The Template for displaying an single course item content
 *
 * Override this template by copying it to yourtheme/learner/content-single-course.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('learner learner-course-content'); ?>>
  <header class="entry-header">
    <?php if ( is_single() ) : ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php else : ?>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'learner' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h2>
    <?php endif; // is_single() ?>
  </header><!-- .entry-header -->


  <div class="entry-content">
    <?php the_content( ); ?>

    <div class="course-lesson-list">
      <h2><?php echo __("Lessons", "learner") ?></h2>

      <?php learner_get?>
    </div>

  </div><!-- .entry-content -->
</article><!-- #post -->
