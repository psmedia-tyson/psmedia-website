<?php if (have_rows('services_feature')) : ?>
  <?php while (have_rows('services_feature')) : the_row(); ?>
    <div class="sticky-feature__wrap position-relative">
      <?php if (have_rows('section_intro')) : ?>
        <?php while (have_rows('section_intro')) : the_row(); ?>
          <div class="app-section__intro app-section__intro--dark padding-top-xxl">
            <div class="container max-width-sm">
              <div class="text-component text-center">
                <div class="app-branding-background">
                  <svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 274.38 428.45">
                    <path class="cls-1" d="M239.89,309.64c-1.93-2.32-4.75-4.35-8.62-6.21-7.27-3.5-17.45-5.96-28.23-8.58-10.39-2.52-21.14-5.12-31.51-9.02-3.65,5.85-8.15,11.14-13.37,15.71-5.22,4.57-11.23,8.48-17.85,11.63-6.68,3.17-14.07,5.6-21.96,7.22-8.01,1.64-16.66,2.48-25.69,2.48h-35.56v37.14h66.8s18.61-45.36,18.61-45.36c9.03,6.48,19.96,11.94,31.59,15.78,5.89,1.94,11.88,3.44,17.8,4.46,6.12,1.05,12.16,1.59,17.94,1.59,11.41,0,20.02-1.68,25.58-4.98,5.08-3.02,7.65-7.41,7.65-13.05,0-1.69-.28-3.3-.82-4.78-.52-1.42-1.32-2.77-2.35-4.01Z" />
                    <path class="cls-1" d="M.36,72.04v87.29h92.3c11.52,0,22.34,1.35,32.15,4.02,9.66,2.62,18.37,6.53,25.9,11.61,7.7-6.37,17.09-11.31,27.91-14.68,11.44-3.56,24.5-5.37,38.79-5.37,9.57,0,19.19.86,28.59,2.55,9.54,1.72,18.62,4.25,26.99,7.53v-92.94H.36Z" />
                    <path class="cls-1" d="M116.05,264.98c2.96-2.74,5.22-6.16,6.72-10.14,1.49-3.96,2.24-8.52,2.24-13.58s-.75-9.77-2.24-13.77c-1.5-4.03-3.76-7.47-6.72-10.24-6.1-5.69-15.15-8.58-26.89-8.58h-32.06v64.85h32.06c5.89,0,11.16-.74,15.69-2.19,4.43-1.43,8.2-3.56,11.2-6.35Z" />
                    <path class="cls-1" d="M217.13,203.61c-11.36,0-19.96,1.96-25.54,5.81-2.51,1.74-4.42,3.87-5.65,6.33-1.16,2.31-1.74,4.93-1.74,7.78,0,1.62.27,3.16.81,4.57.51,1.36,1.29,2.65,2.31,3.83,1.9,2.21,4.67,4.15,8.47,5.93,7.14,3.34,17.17,5.7,27.78,8.2,16.29,3.84,34.76,8.18,49.45,17.32h0v-43.09c-9.55-5.51-19.17-9.72-28.58-12.52-9.32-2.77-18.5-4.17-27.29-4.17Z" />
                    <rect class="cls-1" width="273" height="81" />
                    <path class="cls-1" d="M251.54,420.45c-5.62,0-8.96-2.55-8.96-6.5,0-3.43,2.02-6.24,9.49-6.24h11.33v5.45c-1.85,4.83-6.5,7.29-11.86,7.29ZM253.03,380.38c-7.56,0-14.85,1.93-19.86,5.8l4.31,8c3.51-2.9,8.96-4.66,14.23-4.66,7.82,0,11.69,3.78,11.69,10.19v.7h-12.13c-14.23,0-19.51,6.15-19.51,13.97s6.77,14.06,17.48,14.06c7.03,0,12.13-2.28,14.76-6.33v5.71h10.37v-27.5c0-13.53-7.82-19.95-21.35-19.95ZM209.72,427.83h10.98v-46.92h-10.98v46.92ZM215.25,373.18c4.13,0,7.03-2.99,7.03-6.85,0-3.6-2.99-6.33-7.03-6.33s-7.03,2.9-7.03,6.59,2.99,6.59,7.03,6.59ZM170.53,419.04c-7.91,0-13.97-5.71-13.97-14.67s6.06-14.67,13.97-14.67,13.97,5.71,13.97,14.67-6.06,14.67-13.97,14.67ZM184.32,362.64v24.07c-3.69-4.31-9.05-6.33-15.11-6.33-13.62,0-23.72,9.4-23.72,23.99s10.1,24.07,23.72,24.07c6.41,0,11.86-2.2,15.55-6.68v6.06h10.54v-65.2h-10.98ZM115.09,389.17c7.2,0,12.39,4.66,13.27,11.42h-26.62c1.05-6.85,6.24-11.42,13.36-11.42ZM138.81,404.63c0-14.67-10.02-24.25-23.72-24.25s-24.25,10.02-24.25,23.99,10.19,24.07,25.92,24.07c8.08,0,14.67-2.64,18.89-7.64l-5.89-6.77c-3.34,3.43-7.47,5.1-12.74,5.1-8.17,0-13.88-4.39-15.2-11.25h36.82c.09-1.05.18-2.37.18-3.25ZM60.96,380.38c-7.47,0-13.79,2.99-17.57,7.82-3.25-5.27-8.96-7.82-15.82-7.82-6.41,0-11.86,2.28-15.38,6.5v-5.97H1.74v46.92h10.98v-23.81c0-9.31,4.92-14.06,12.21-14.06,6.68,0,10.54,4.04,10.54,12.39v25.48h10.98v-23.81c0-9.31,5.01-14.06,12.21-14.06,6.68,0,10.54,4.04,10.54,12.39v25.48h10.98v-26.89c0-14.15-7.91-20.56-19.24-20.56Z" />
                  </svg>
                </div>
                <div class="app-section__intro--subheading">
                  <span><?php the_sub_field('subheading'); ?></span>
                </div>
                <h2>
                  <?php the_sub_field('intro_heading'); ?>
                </h2>
                <div class="app-summary">
                  <?php the_sub_field('intro_summary'); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php if (have_rows('service_items')) : ?>
        <?php while (have_rows('service_items')) : the_row(); ?>
          <section class="sticky-feature js-sticky-feature position-relative z-index-2">
            <div class="container max-width-adaptive-lg">
              <div class="grid gap-md@md">
                <div class="sticky-feature-aside col-6@md col-5@lg">
                  <ul class="sticky-feature__content-list grid gap-xl gap-xxl@md js-sticky-feature__content-list">
                    <?php if (have_rows('branding_service')) : ?>
                      <?php while (have_rows('branding_service')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('video_production_service')) : ?>
                      <?php while (have_rows('video_production_service')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('digital_marketing')) : ?>
                      <?php while (have_rows('digital_marketing')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('web_design_and_development')) : ?>
                      <?php while (have_rows('web_design_and_development')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('graphic_design')) : ?>
                      <?php while (have_rows('graphic_design')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('drone_photography_video')) : ?>
                      <?php while (have_rows('drone_photography_video')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('media_placement')) : ?>
                      <?php while (have_rows('media_placement')) : the_row(); ?>
                        <li class="js-sticky-feature__content-item">
                          <h3 class="sticky-feature__title js-sticky-feature__title"><?php the_sub_field('service_heading'); ?></h3>
                          <?php
                          $image = get_sub_field('service_hero');
                          if (!empty($image)) : ?>
                            <figure class="sticky-feature__content-figure">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                  </ul>
                </div>

                <div class="display@md col-6@md offset-1@lg" aria-hidden="true">
                  <ul class="sticky-feature__media-list js-sticky-feature__media-list">

                    <?php if (have_rows('branding_service')) : ?>
                      <?php while (have_rows('branding_service')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('video_production_service')) : ?>
                      <?php while (have_rows('video_production_service')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('digital_marketing')) : ?>
                      <?php while (have_rows('digital_marketing')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('web_design_and_development')) : ?>
                      <?php while (have_rows('web_design_and_development')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('graphic_design')) : ?>
                      <?php while (have_rows('graphic_design')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('drone_photography_video')) : ?>
                      <?php while (have_rows('drone_photography_video')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('media_placement')) : ?>
                      <?php while (have_rows('media_placement')) : the_row(); ?>
                        <li class="sticky-feature__media-item js-sticky-feature__media-item">
                          <figure class="sticky-feature__media-figure">
                            <?php
                            $image = get_sub_field('service_hero');
                            if (!empty($image)) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="figure__content">
                              <p>
                                <?php the_sub_field('service_excerpt'); ?>
                              </p>
                              <a class="app-link__arrow" href="<?php the_sub_field('service_link'); ?>">
                                <div class="app-link__arrow-svg">
                                  <div class="line-bar"></div>
                                  <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20">
                                    <polygon class="cls-1" points="0 1.62 7.93 10 0 18.38 1.54 20 11 10 1.54 0 0 1.62" />
                                  </svg>
                                </div>
                                <span>Learn about our <em><?php the_sub_field('service_heading'); ?></em> service</span>
                              </a>
                            </div>
                          </figure>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>

                  </ul>
                </div>
              </div>
            </div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
      <figure class="bg-decoration-v3 z-index-1" aria-hidden="true">
        <svg class="bg-decoration-v3__svg top-50% left-50% -translate-50% color-accent opacity-30%" viewBox="0 0 1920 660">
          <defs>
            <linearGradient id="bg-dec-v3-gradient-6">
              <stop offset="60%" stop-color="white" stop-opacity="1" />
              <stop offset="1" stop-color="white" stop-opacity="0" />
            </linearGradient>

            <mask id="bg-dec-v3-gradient-mask-6">
              <rect x="0" y="0" width="1920" height="660" fill="url(#bg-dec-v3-gradient-6)" />
            </mask>
          </defs>

          <g fill="none" stroke="currentColor" stroke-miterlimit="10" mask="url(#bg-dec-v3-gradient-mask-6)">
            <path d="M1170.553,376.321,1639.96,647.333c35.658,20.587,80.23-5.146,80.23-46.321V58.988c0-41.175-44.572-66.908-80.23-46.321L1170.553,283.679C1134.9,304.266,1134.9,355.734,1170.553,376.321Z" />
            <path d="M1693.514,599.5,1705.434,86.1c1.871-40.673-40.988-68.119-77.147-49.4L1177.713,283.072c-36.159,18.716-38.5,69.557-4.211,91.514l438.654,267.02C1646.444,663.563,1691.643,640.169,1693.514,599.5Z" />
            <path d="M1666.838,597.98l23.84-484.766c3.743-40.171-37.4-69.33-74.065-52.486l-431.74,221.738c-36.661,16.843-41.339,67.057-8.422,90.384l407.9,263.029C1617.269,659.206,1663.1,638.151,1666.838,597.98Z" />
            <path d="M1640.162,596.464l35.759-456.137c5.615-39.669-33.82-70.541-70.982-55.568l-412.906,197.1c-37.162,14.972-44.18,64.559-12.633,89.256l377.147,259.037C1588.094,654.849,1634.547,636.134,1640.162,596.464Z" />
            <path d="M1613.486,594.948l47.679-427.507c7.486-39.168-30.236-71.752-67.9-58.652L1199.193,281.252c-37.663,13.1-47.021,62.061-16.844,88.128l346.393,255.045C1558.92,650.493,1606,634.116,1613.486,594.948Z" />
            <path d="M1586.809,593.432l59.6-398.878c9.358-38.667-26.651-72.963-64.816-61.734L1206.353,280.645c-38.165,11.229-49.862,59.563-21.054,87L1500.938,618.7C1529.745,646.136,1577.452,632.1,1586.809,593.432Z" />
            <path d="M1560.133,591.916l71.519-370.249c11.229-38.165-23.068-74.174-61.734-64.816l-356.4,123.187c-38.667,9.358-52.7,57.064-25.266,85.872l284.885,247.061C1500.571,641.779,1548.9,630.081,1560.133,591.916Z" />
            <path d="M1533.457,590.4,1616.9,248.781c13.1-37.664-19.483-75.386-58.651-67.9l-337.57,98.55c-39.168,7.487-55.545,54.566-29.477,84.744l254.132,243.069C1471.4,637.422,1520.356,628.064,1533.457,590.4Z" />
            <path d="M1506.781,588.884l95.358-312.99c14.972-37.162-15.9-76.6-55.569-70.982l-318.736,73.913c-39.67,5.614-58.385,52.067-33.688,83.614l223.378,239.078C1442.221,633.065,1491.808,626.046,1506.781,588.884Z" />
            <path d="M1480.105,587.368l107.278-284.361c16.844-36.66-12.315-77.807-52.486-74.064l-299.9,49.275c-40.171,3.743-61.226,49.569-37.9,82.486L1389.72,595.79C1413.047,628.708,1463.261,624.029,1480.105,587.368Z" />
            <path d="M1453.428,585.852l119.2-255.731c18.716-36.16-8.731-79.019-49.4-77.148l-281.069,24.638c-40.673,1.871-64.067,47.07-42.11,81.358l161.871,231.094C1383.872,624.351,1434.713,622.011,1453.428,585.852Z" />
            <path d="M1426.752,584.336l131.118-227.1c20.587-35.658-5.147-80.23-46.321-80.23H1249.314c-41.174,0-66.908,44.572-46.321,80.23l131.118,227.1C1354.7,619.994,1406.165,619.994,1426.752,584.336Z" />
          </g>
        </svg>
      </figure>
    </div>
  <?php endwhile; ?>
<?php endif; ?>