<?php get_header(); ?>

<main>
      <div class="eyecatch">
        <div class="eyecatch__bg">
          <div class="eyecatch__content">
          <h2 class="eyecatch__txt">
            Interview<br /><span class="eyecatch__sub-txt">インタビュー</span>
          </h2>
          </div>
        </div>
      </div>
        

      <div class="single__container flex__item flex__item--around container">

    <div class="relation flex__item flex__item--between">

<?php
              $interview_query = new WP_Query(
                array(
                  'post_type'      => 'post',
                  'category_name' => 'interview',
                  'posts_per_page' => 3,
                )
              );
              ?>
            <?php if ( $interview_query->have_posts() ) : ?>
            <?php while ( $interview_query->have_posts() ) : ?>
            <?php $interview_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="review__child">
            <div class="review___child-inner">
              <div class="review___chil-img">
                <?php if( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>
              </div>
              <div class="review__child-content">
                <h3 class="review__child-content-ttl"><?php the_title(); ?></h3>
                <p class="review-child__name">
                  <?php echo get_post_meta($post->ID, '名前', true); ?>
                </p>
                <p class="review-child__name">
                  <?php echo get_post_meta($post->ID, '職業', true); ?>
                </p>
                <p class="review-child_ttl"></p>
              </div>
            </div>
          </a>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

              </div>
            </div>
              </main>
<?php get_footer(); ?>
