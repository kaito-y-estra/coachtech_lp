<?php
/*
Template Name: rules
*/
?>

<?php get_header(); ?>

<main>
      <div class="eyecatch">
        <div class="eyecatch__bg">
          <div class="eyecatch__content">
          <h2 class="eyecatch__txt">
            <?php single_post_title(); ?>
          </h2>
          </div>
        </div>
      </div>
        

      <div class="single__container flex__item flex__item--around container">

        <div class="relation">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        </div>
    </main>
    <style>
.eyecatch__txt{
    line-height:1;
}
</style>
<?php get_footer(); ?>

