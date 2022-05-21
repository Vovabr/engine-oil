<?php
/*
Template Name: page-about
*/ 
?>

<?php get_header() ?>

<section class="about">
<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="about_content">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
</div>

<?php endwhile; endif; ?>
         
</div>
</section>

<?php get_footer() ?>