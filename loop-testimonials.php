<div class="app-testimonial-tile bg-true-white radius-md padding-md flex@md flex-column@md col-4@md">
  <svg class="icon icon--xl color-primary-lighter margin-bottom-xxs" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64">
    <polygon points="2 36 17 2 26 2 15 36 26 36 26 62 2 62 2 36" />
    <polygon points="38 36 53 2 62 2 51 36 62 36 62 62 38 62 38 36" />
  </svg>

  <blockquote class="line-height-md margin-bottom-md">
    <?php the_content(); ?>
  </blockquote>

  <footer class="margin-top-auto@md">
    <div class="grid gap-sm">
      <?php if (has_post_thumbnail()) : ?>
        <div class="col-3">
          <figure class="app-figure" aria-hidden="true">
            <?php the_post_thumbnail('full', array('class' => 'radius-lg')); ?>
          </figure>
        </div>
        <div class="col-9">
          <?php if (have_rows('testimonial_meta')) : ?>
            <?php while (have_rows('testimonial_meta')) : the_row(); ?>
              <cite class="text-sm">
                <strong><?php the_title(); ?></strong>
                <span class="block opacity-60% margin-top-xxxxs">
                  <?php the_sub_field('position'); ?>, <?php the_sub_field('company'); ?>
                </span>
              </cite>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </footer>
</div>