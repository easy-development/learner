<?php
/**
 * The Template for displaying an single lesson item content
 *
 * Override this template by copying it to yourtheme/learner/content-single-lesson.php
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
  </div>
</article><!-- #post -->
