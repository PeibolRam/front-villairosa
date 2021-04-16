<?php
/*
Template Name: Home
*/
get_header();
?>

<?php get_template_part('/layouts/home/', 'hero'); ?>
<?php get_template_part('/layouts/home/', 'about'); ?>
<?php get_template_part('/layouts/home/', 'casa'); ?>
<?php get_template_part('/layouts/home/', 'lotes'); ?>
<?php get_template_part('/layouts/home/', 'preventa'); ?>
<?php get_template_part('/layouts/home/', 'paralax'); ?>
<?php get_template_part('/layouts/home/', 'ubicacion'); ?>
<?php get_template_part('/layouts/home/', 'contacto'); ?>

<?php get_footer(); ?>