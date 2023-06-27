<?php

/**
 * Template Name: Front page
 */
get_header()
?>

<?php get_template_part('template-parts/home/home-page') ?>
<?php echo get_template_part('template-parts/home/get-plant'); ?>
<?php echo get_template_part('template-parts/home/offers'); ?>

<?php get_footer(); ?>