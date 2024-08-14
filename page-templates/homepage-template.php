<?php

/**
 * Template Name: Homepage Template
 */
get_header(); ?>

<?= get_template_part('template-parts/components/homepage-hero'); ?>

<?= get_template_part('template-parts/components/homepage-features'); ?>

<?= get_template_part('template-parts/components/homepage-recent-posts'); ?>

<?php get_footer(); ?>