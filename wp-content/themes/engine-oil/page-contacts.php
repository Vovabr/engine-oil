<?php
/*
Template Name: page-contacts
*/ 
?>

<?php get_header() ?>
        
<section class="contacts">
<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="contacts_content">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>

<form class="contacts_form" method="post">
    <?php echo do_shortcode('[contact-form-7 id="107" title="Форма обратной связи"]'); ?>
</form>

<?php endwhile; endif; ?>  
              
</div>
</section>

<?php get_footer() ?>


