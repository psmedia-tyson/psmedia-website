<?php if (have_rows('trusted_by')) : ?>
  <?php while (have_rows('trusted_by')) : the_row(); ?>
    <section class="app-trusted-by position-relative z-index-1">
      <div class="container max-width-lg">
        <?php if (have_rows('section_intro')) : ?>
          <?php while (have_rows('section_intro')) : the_row(); ?>
            <div class="text-center margin-bottom-lg">
              <p><?php the_sub_field('heading'); ?></p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('brands')) : ?>
          <div>
            <ul class="app-trusted-by__grid flex flex-wrap gap-lg flex-center">
              <?php while (have_rows('brands')) : the_row(); ?>
                <li>
                  <?php
                  $image = get_sub_field('logo');
                  if (!empty($image)): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>