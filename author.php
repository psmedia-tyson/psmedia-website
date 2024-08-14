<?php get_header(); ?>

<?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="container max-width-sm margin-bottom-lg margin-bottom-xl@md">
  <div class="ch-author author--featured">
    <div class="author__img-wrapper">
      <? echo get_avatar(get_the_author_meta('user_email')); ?>
    </div>

    <div class="author__content text-component">
      <h2>Greetings earthling! I'm <?php echo get_author_name(); ?></h2>
      <p><?php echo the_author_description(); ?></p>
    </div>
  </div>
</div>

<section class="io-post-grid">
  <div class="container max-width-lg">

    <div class="margin-top-md">

      <h3 class="margin-bottom-md text-center">
        Recent Posts
      </h3>

      <ul class="grid gap-md">

        <?php get_template_part('loop'); ?>

      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>