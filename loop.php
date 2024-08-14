<?php

/**
 * @package Shape
 * @since Shape 1.0
 */
?>
<?php $count = 1; ?>
<article class="story story--featured post<?php echo $count; ?>">
  <a class="story__img radius-md" href="#0">
    <?php if (has_post_thumbnail()) : ?>
      <figure class="aspect-ratio-4:3">
        <?php the_post_thumbnail('full', array('class' => 'block width-100% height-auto radius-lg')); ?>
      </figure>
    <?php endif; ?>
  </a>

  <div class="story__content">
    <div class="margin-bottom-xs">
      <?php the_category(); ?>
    </div>

    <div class="text-component">
      <h2 class="story__title">
        <a href="#0">
          <?php the_title(); ?>
        </a>
      </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At iusto sit quasi aliquam quod laboriosam. Nobis, modi repellendus.</p>
    </div>

    <div class="story__author margin-top-sm">
      <a class="block" href="#0">
        <img src="../../../app/assets/img/article-gallery-img-author-1.svg" alt="Author picture">
      </a>

      <div class="line-height-xs">
        <address class="story__author-name"><a href="#0" rel="author">Olivia Gribben</a></address>
        <p class="story__meta"><time>May 16</time> &mdash; 5 min read</p>
      </div>
    </div>
  </div>
</article>