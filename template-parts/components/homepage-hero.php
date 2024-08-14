<?php if (have_rows('homepage_hero')) : ?>
  <?php while (have_rows('homepage_hero')) : the_row(); ?>
    <section class="hero-video-bg position-relative">

      <div class="hero-video-bg__content">
        <?php if (have_rows('app_heading')) : ?>
          <?php while (have_rows('app_heading')) : the_row(); ?>
            <div class="hero-video-bg__content--title">
              <span><?php the_sub_field('subheading'); ?></span>
              <h1><?php the_sub_field('page_title'); ?></h1>
              <span><?php the_sub_field('byline'); ?></span>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('confidence_bar')) : ?>
          <?php while (have_rows('confidence_bar')) : the_row(); ?>
            <div class="app-confidence-grid">
              <div class="grid gap-md">
                <?php if (have_rows('confidence_left')) : ?>
                  <?php while (have_rows('confidence_left')) : the_row(); ?>
                    <div class="col">
                      <?php if (have_rows('confidence_item')) : ?>
                        <?php while (have_rows('confidence_item')) : the_row(); ?>
                          <div class="app-confidence">
                            <span><?php the_sub_field('subheading'); ?></span>
                            <span><?php the_sub_field('heading'); ?></span>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

                <div class="col confidence__cta">
                  <?php
                  $link = get_sub_field('call_to_action');
                  if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    <a class="btn btn__hero" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </div>

                <?php if (have_rows('confidence_right')) : ?>
                  <?php while (have_rows('confidence_right')) : the_row(); ?>
                    <div class="col">
                      <?php if (have_rows('confidence_item')) : ?>
                        <?php while (have_rows('confidence_item')) : the_row(); ?>
                          <div class="app-confidence">
                            <span><?php the_sub_field('subheading'); ?></span>
                            <span><?php the_sub_field('heading'); ?></span>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <figure class="hero-video-bg__video" aria-hidden="true">
        <!-- <img src="../../assets/img/video-background-hero-img-1.jpg" alt="Video Preview"> -->
        <video autoplay muted playsInline src="/wp-content/uploads/2024/07/digital-marketing-placeholder.mp4"></video>
      </figure>
    </section>
  <?php endwhile; ?>
<?php endif; ?>