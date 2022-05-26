<?php get_header();?>
        
<section class="catalog">
<div class="container">

    <div class="catalog__list">

    <?php if ( have_posts() ) : while ( have_posts() ) : 
        the_post(); 

        // if ($post->post_type == 'page') continue;
    ?>

    <?php $content = get_the_content();?>

        <div class="catalog_item">
            <a href="<?php echo get_permalink(); ?>"><h3 class="title"><?php the_title(); ?></h3></a>
            <div class="catalog_item_content">
                <a href="<?php echo get_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(
                        array(180, 180),
                    ); ?>
                </a>
                <?php else: ?>
                    <a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/motor-oil.jpg" width="180" height="180" alt="oil"></a> 
                <?php endif; ?>
                <div class="catalog_item_content_sp">
                    <p>Артикул: <strong><?php the_ID(); ?></strong></p>
                    <?php if (!empty($content)): ?>
                    <?php echo $content; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="catalog_item_price">
                <h2><?php the_field('price'); ?></h2>
                <p><?php the_field('product_availability'); ?></p>
            </div>
            <button class="btn_cart popmake-291"><?php the_field('button'); ?></button>
        </div>

        <?php endwhile; ?>

    </div>
    <?php the_posts_pagination(array(
        'show_all' => false, 
        'end_size' => 1,    
        'mid_size' => 1,    
        'type'     => 'list',
    )); ?>
</div>

<?php else: ?>

<div class="post_content">
    <p>Поиск не дал результатов</p>
</div>

<?php endif; ?>

</section>

        
<?php get_footer() ?>

