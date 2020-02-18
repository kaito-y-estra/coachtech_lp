<?php
/*
Template Name: 固定ページの新規テンプレート１
*/
?>

<?php get_header(); ?>
<div class="sec ">
     <h2><?php the_title(); ?></h2>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
 
<?php the_content(); ?>
 
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>