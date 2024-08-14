<?php get_header(); ?>

<article class="t-article-v3 padding-bottom-lg">
  <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
  <div class="t-article-v3__hero margin-bottom-lg" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container max-width-adaptive-sm">
      <div class="t-article-v3__intro-text text-component text-center">
        <h1 class="text-xxxl color-inherit">
          <?php the_title(); ?>
        </h1>

      </div>
    </div>
  </div>

  <div class="container max-width-adaptive-sm margin-bottom-xl js-sticky-sharebar-target">
    <div class="text-component line-height-lg text-space-y-md">
      <?php the_content(); ?>
    </div>
  </div>
</article>



<?php get_footer(); ?>