<?php get_header('dark'); ?>

<?php if (have_rows('blog_archive', 'option')) : ?>
  <?php while (have_rows('blog_archive', 'option')) : the_row(); ?>
    <section class="app-page-header bg-gradient-1  diagonal-section-bottom diagonal-section-bottom--flip-x" data-bg-animate="on">
      <div class="container max-width-adaptive-lg">

        <div class="text-component text-center">
          <div class="app-page-header__breadcrumb">
            <a href="/">
              <span>Home</span>
            </a>
            <h1>
              <span>The PSMedia Blog</span>
            </h1>
          </div>
          <h2>
            <?php the_sub_field('intro_heading'); ?>
          </h2>
          <div class="app-summary">
            <?php the_sub_field('intro_summary'); ?>
          </div>
        </div>

      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php if (have_posts()) {  ?>
  <section class="app-post">
    <div class="container max-width-adaptive-lg padding-y-xxl">
      <div class="grid gap-lg">
        <?php $count = 1; ?>
        <?php
        while (have_posts()) {
          the_post(); ?>
          <article class="story  <?php if ($count == 1) {
                                    echo 'story--featured';
                                  } else {
                                    echo 'col-4@md';
                                  } ?>">
            <a class="story__img" href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <figure class="app-figure">
                  <?php the_post_thumbnail('full', array('class' => 'block width-100% height-auto')); ?>
                </figure>
              <?php endif; ?>
            </a>

            <div class="story__content">
              <div class="margin-bottom-xs">
                <?php the_category(); ?>
              </div>

              <div class="text-component">
                <h2 class="story__title">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
              </div>
              <div class="app-post-date margin-bottom-xs margin-top-xs">
                <span><?php echo get_the_date(); ?></span>
              </div>
              <a class="story__author margin-top-sm" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <div class="block" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                  <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                </div>
                <div class="app-author-meta">
                  <address class="story__author-name">
                    <?php echo get_the_author(); ?>
                  </address>
                  <p class="story__meta">
                    <?php
                    $author_id = get_the_author_meta('ID');
                    $author_badge = get_field('position', 'user_' . $author_id);

                    ?>
                    <?php echo esc_html($author_badge); ?>
                  </p>
                </div>
              </a>
            </div>
          </article>
          <?php $count++; ?>
        <?php
        } ?>
      </div>
    </div>
  </section>
<?php wp_reset_postdata();
} else { ?>
  <div class="archived-posts"><?php echo esc_html__('No posts matching the query were found.', 'your-translate-domain'); ?></div>
<?php } ?>


<?php get_footer(); ?>