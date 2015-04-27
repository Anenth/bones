<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

  <?php query_posts('showposts=3'); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink() ?>"><?php the_title() ?></a><br />
  <?php endwhile; endif; ?>


 </div>
