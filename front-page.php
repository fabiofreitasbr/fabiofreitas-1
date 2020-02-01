<?php 
get_header();

echo get_template_part('templates/home','banner');
echo get_template_part('templates/home','biography');
echo get_template_part('templates/home','services');
echo get_template_part('templates/home','portfolio');
echo get_template_part('templates/home','contact');

get_footer();
?>