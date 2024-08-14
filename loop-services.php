<section class="app-service position-relative z-index-1 margin-y-xxl">
  <div class="grid gap-lg items-center">
    <div class="app-summary col-6@md">
      <div class="flex flex-column gap-sm">
        <!-- <p class="text-sm color-contrast-low text-capitalize">Pills &amp; potions</p> -->
        <h2>
          <?php the_title(); ?>
        </h2>
        <p class="line-height-lg">
          <?php the_excerpt(); ?>
        </p>

        <div class="flex flex-wrap gap-sm items-center">
          <a class="app-link__arrow app-link__arrow--dark" href="<?php the_permalink(); ?>">
            <div class="app-link__arrow-svg">
              <div class="line-bar"></div>
              <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
              </svg>
            </div>
            <span>Learn about our <em><?php the_title(); ?></em> service</span>
          </a>
        </div>
      </div>
    </div>

    <div class="app-media col-6@md">
      <?php if (has_post_thumbnail()) : ?>
        <figure>
          <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('full', array('class' => 'block width-100% height-auto radius-lg')); ?>
          </a>
        </figure>
      <?php endif; ?>
    </div>
  </div>
</section>