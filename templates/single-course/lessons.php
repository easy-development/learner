<h2><?php echo apply_filters( "learner_course_lessons_title", __("Lessons", "learner") );?></h2>

<?php $lessons = Learner_Lesson::get_by_course_id(get_the_ID()); ?>

<ul class="course-lessons-container">
  <?php while( $lessons->have_posts() ) : $lessons->the_post() ?>
    <li class="course-lesson-item">
      <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
    </li>
  <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>