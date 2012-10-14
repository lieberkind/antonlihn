<?php 
/*
Template Name: Forside
*/
?>

<?php get_header(); ?>

<div class="home-container" style="background: url('<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>') center center no-repeat #fff;">
  <div class="home-text">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; endif; ?> 
  </div>
</div>

<?php get_footer(); ?>