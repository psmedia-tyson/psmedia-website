<?php
/*
* Template Name: No Sidebar Post Template
* Template Post Type: post
*/
get_header('dark');
?>


<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
    $author_id = get_the_author_meta('ID');
    $author_url = get_author_posts_url($author_id);
?>
    <section class="app-page-header app-page-header__blog bg-gradient-1  diagonal-section-bottom diagonal-section-bottom--flip-x" data-bg-animate="on">
      <div class="container max-width-adaptive-md">

        <div class="text-component text-center">
          <div class="app-page-header__breadcrumb">
            <a href="/">
              <span>Home</span>
            </a>
            <h1>
              <span><?php the_title(); ?></span>
            </h1>
          </div>
          <h2>
            <?php the_title(); ?>
          </h2>
          <div class="story__content">
            <div class="grid gap-md">
              <div class="col">
                <?php the_category(); ?>
              </div>
              <div class="app-post-date col-content">
                <span><?php echo get_the_date(); ?></span>
              </div>
              <div class="col-content">
                <a class="story__author" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
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
            </div>
          </div>
        </div>

      </div>
    </section>

    <div class="app-content-intro ">
      <div class="container max-width-adaptive-md">
        asdf
      </div>
    </div>

    <article <?php post_class('app-article'); ?>>
      <div class="container padding-bottom-xl">

        <div class="app-article__content">
          <?php
          // Include post content
          the_content();
          ?>

          <?php
          $images = get_field('project_gallery');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if ($images) : $count = 0; ?>
            <div class="container max-width-sm">
              <div class="thumbslide js-thumbslide">
                <div class="slideshow slideshow--transition-slide">
                  <p class="sr-only">Slideshow Items</p>

                  <ul class="slideshow__content">
                    <?php foreach ($images as $image_id) :  ?>
                      <li class="slideshow__item bg js-slideshow__item <?php if (!$count) { ?>slideshow__item--selected<?php } else { ?><?php } ?>" style="background-image: url('<?php echo wp_get_attachment_url($image_id, $size); ?>');" data-thumb="<?php echo wp_get_attachment_url($image_id, $size); ?>"></li>

                      </li>
                    <?php $count++;
                    endforeach; ?>
                  </ul>
                </div>

                <div class="thumbslide__nav-wrapper" aria-hidden="true">
                  <nav class="thumbslide__nav">
                    <ol class="thumbslide__nav-list">
                      <!-- this content will be created using JavaScript -->
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          <?php endif; ?>

        </div>

      </div>
    </article>
<?php } // End of the loop.
}
wp_reset_postdata(); ?>

<?php
get_footer(); ?>