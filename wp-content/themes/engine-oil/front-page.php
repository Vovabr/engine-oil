<?php
/*
Template Name: front-page
*/ 
?>

<?php get_header() ?>

<section class="promo">
<div class="container" style="background-image:url(<?php the_field('background-main'); ?>)">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div div class="promo_list">
    <h2><strong><?php bloginfo('name'); ?></strong></h2>
    <?php the_content(); ?>     

</div>
<?php endwhile; endif; ?>

</div>
</section>

<?php
echo do_shortcode('[smartslider3 slider="1"]');
?>


<?php get_footer() ?>

