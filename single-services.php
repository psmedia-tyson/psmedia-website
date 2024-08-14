<?php
/*
* Template Name: No Sidebar Post Template
* Template Post Type: post
*/
$related_testomonial = get_field('service_testimonial');
get_header('dark');
?>

<section class="app-page-header app-page-header__single app-page-header__single diagonal-section-bottom diagonal-section-bottom--flip-x video-production-header bg-gradient-1" data-bg-animate="on">
  <div class="container max-width-adaptive-lg">

    <div class="text-component text-center">
      <?= get_template_part('template-parts/components/breadcrumbs/service-breadcrumbs'); ?>
      <h2>
        <?php the_field('service_subheading'); ?>
      </h2>
      <div class="app-summary">
        <?php the_sub_field('intro_summary'); ?>
      </div>
    </div>

  </div>
</section>

<section class="app-service__intro--video">
  <div class="container max-width-adaptive-md">
    <div class="aspect-ratio-16:9">
      <iframe src="https://player.vimeo.com/video/966783852?title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
</section>

<article class="app-article">

  <!-- content intro -->
  <?php if (have_rows('content_intro')) : ?>
    <?php while (have_rows('content_intro')) : the_row(); ?>
      <div class="app-content-intro ">
        <div class="container max-width-adaptive-md">
          <div class="grid">
            <div class="app-content col-9">
              <?php the_sub_field('intro_content'); ?>
            </div>
            <?php if (have_rows('list_column')) : ?>
              <?php while (have_rows('list_column')) : the_row(); ?>
                <div class="app-what-we-do col-3">
                  <aside class="app-aside app-content-intro__aside">
                    <h2>
                      <?php the_sub_field('heading'); ?>
                    </h2>
                    <?php if (have_rows('sub_service_list')) : ?>
                      <ul>
                        <?php while (have_rows('sub_service_list')) : the_row(); ?>

                          <?php if (have_rows('service_item')) : ?>
                            <?php while (have_rows('service_item')) : the_row(); ?>
                              <li>
                                <a href="<?php the_sub_field('section_anchor_link'); ?>">
                                  <span><?php the_sub_field('service_name'); ?></span>
                                </a>
                              </li>
                            <?php endwhile; ?>
                          <?php endif; ?>

                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                  </aside>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <!-- / content intro -->

  <!-- trusted by confidence builder -->
  <?= get_template_part('template-parts/components/trusted-by-logos'); ?>
  <!-- / trusted by confidence builder -->

  <!-- page content -->
  <div class="app-article__content app-article__service-single diagonal-section diagonal-section--flip-x">
    <div class="container max-width-adaptive-md">
      <div class="grid">
        <div class="app-content app-content__main col-9 padding-y-xxl">
          <?php the_content(); ?>
        </div>
        <aside class="app-aside app-content__main-aside col-3 padding-y-xxl">
          <?php if (have_rows('related_content')) : ?>
            <?php while (have_rows('related_content')) : the_row(); ?>
              <?php
              $featured_posts = get_sub_field('related_projects');
              if ($featured_posts) : ?>
                <h2>
                  Related Projects
                </h2>
                <ul>
                  <?php foreach ($featured_posts as $post) :

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
              <?php endif; ?>
              <?php
              $featured_posts = get_sub_field('related_posts');
              if ($featured_posts) : ?>
                <h2>
                  Related Posts
                </h2>
                <ul>
                  <?php foreach ($featured_posts as $post) :

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </aside>
      </div>
    </div>
    <?php if ($related_testomonial) : ?>
      <section class="app-testimonial-bar">
        <div class="container max-width-adaptive-md">
          <div class="grid">
            <div class="app-media col-3 padding-y-xl">
              <figure class="app-figure">
                <?php echo get_the_post_thumbnail($related_testomonial->ID, 'full'); ?>
              </figure>
            </div>
            <div class="app-summary col-6 padding-y-xl">
              <div class="app-subheading">
                <span><?php the_title(); ?> Success Story</span>
              </div>
              <h2>
                <span>
                  <?php echo $related_testomonial->post_title; ?>
                </span>
              </h2>
              <blockquote>
                <?php echo $related_testomonial->post_content; ?>
              </blockquote>
            </div>
            <aside class="app-aside app-content__testimonial-aside col-3  padding-y-xl">
              <div class="app-container">
                <h2>
                  More Success Stories
                </h2>
                <?php $loop = new WP_Query(array('post_type' => 'testimonials', 'posts_per_page' => 5)); ?>
                <ul>
                  <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php wp_reset_postdata(); ?>
                  <?php endwhile; ?>
                </ul>
              </div>
              <div class="app-aside__actions">
                <a class="app-link__arrow" href="/testimonials/">
                  <div class="app-link__arrow-svg">
                    <div class="line-bar"></div>
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                      <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                    </svg>
                  </div>
                  <span>Read more</span>
                </a>
              </div>
            </aside>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <div class="container max-width-adaptive-md">
      <div class="grid">
        <div class="app-content app-content__main col-9 padding-y-xxl">
          <?php the_content(); ?>
        </div>
        <aside class="app-aside app-content__main-aside col-3 padding-y-xxl">
        </aside>
      </div>
    </div>
  </div>

  <?php if (have_rows('employee_quote')) : ?>
    <?php while (have_rows('employee_quote')) : the_row(); ?>
      <section class="app-meet-expert-bar diagonal-section-top diagonal-section-top--flip-x">
        <div class="container max-width-adaptive-md padding-y-xl">
          <div class="app-content">
            <div class="grid gap-lg">
              <?php if (have_rows('media')) : ?>
                <?php while (have_rows('media')) : the_row(); ?>
                  <div class="app-media col-5">
                    <div class="app-box-shadow">
                      <figure class="app-figure">
                        <?php
                        $image = get_sub_field('portrait');
                        if (!empty($image)) : ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                      </figure>
                      <?php if (have_rows('quote_meta_data')) : ?>
                        <?php while (have_rows('quote_meta_data')) : the_row(); ?>
                          <div class="app-quote-meta-data">
                            <div class="app-author">
                              <?php
                              $user = get_sub_field("quote_author");
                              if ($user) : ?>
                                <div class="author-box">
                                  </span><a href="<?php echo esc_attr($user->user_url); ?>"><?php echo $user->display_name; ?></a>
                                </div>
                              <?php endif; ?>
                            </div>
                            <?php if (have_rows('socials')) : ?>
                              <div class="app-socials">
                                <?php while (have_rows('socials')) : the_row(); ?>
                                  <?php if (have_rows('social')) : ?>
                                    <?php while (have_rows('social')) : the_row(); ?>
                                      <a class="app-social <?php if (get_sub_field('social_network') == "Facebook") { ?>app-social__facebook<?php } ?><?php if (get_sub_field('social_network') == "Instagram") { ?>app-social__instagram<?php } ?><?php if (get_sub_field('social_network') == "X") { ?>app-social__x<?php } ?>" href="<?php the_sub_field('social_link'); ?>">
                                        <?php if (get_sub_field('social_network') == "Facebook") { ?>
                                          <i class="fa-brands fa-square-facebook"></i>
                                        <?php } ?>
                                        <?php if (get_sub_field('social_network') == "Instagram") { ?>
                                          <i class="fa-brands fa-instagram"></i>
                                        <?php } ?>
                                        <?php if (get_sub_field('social_network') == "X") { ?>
                                          <i class="fa-brands fa-x-twitter"></i>
                                        <?php } ?>
                                      </a>
                                    <?php endwhile; ?>
                                  <?php endif; ?>
                                <?php endwhile; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php if (have_rows('summary')) : ?>
                <?php while (have_rows('summary')) : the_row(); ?>
                  <div class="app-summary col-7 padding-top-lg">
                    <div class="app-subheading">
                      <span>Meet our expert</span>
                    </div>
                    <h2>
                      <span><?php the_sub_field('name'); ?></span><span>, <?php the_sub_field('role'); ?></span>
                    </h2>
                    <blockquote>
                      <p>
                        <span>
                          <?php the_sub_field('quote'); ?>
                        </span>
                      </p>
                    </blockquote>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>

</article>
<?php
get_footer(); ?>