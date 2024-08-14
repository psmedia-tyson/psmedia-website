<?php get_header('dark'); ?>

<?php if (have_rows('service_archive', 'option')) : ?>
  <?php while (have_rows('service_archive', 'option')) : the_row(); ?>
    <section class="app-page-header bg-gradient-1" data-bg-animate="on">
      <div class="container max-width-adaptive-lg">

        <div class="text-component text-center">
          <div class="app-page-header__breadcrumb">
            <a href="/">
              <span>Home</span>
            </a>
            <h1>
              <span><?php the_sub_field('intro_heading'); ?></span>
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


<?php if (have_posts()) { ?>
  <section class="app-services">
    <div class="container max-width-adaptive-lg">
      <?php while (have_posts()) {
        the_post(); ?>
        <?= get_template_part('loop-services');  ?>
      <?php } ?>
    </div>
  </section>
<?php wp_reset_postdata();
} else { ?>
  <div class="archived-posts"><?php echo esc_html__('No posts matching the query were found.', 'your-translate-domain'); ?></div>
<?php } ?>


<?php get_footer(); ?>