<?php get_header() ?>

<section class="product">
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
        $content = get_the_content();
        $categoriesArr = get_the_category();

        $categories = [];
        foreach($categoriesArr as $category) {
            array_push($categories, '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>');
        }

        $categories = implode(', ', $categories);
    ?>    
        <div class="product_item">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/motor-oil.jpg" width="480" height="480" alt="oil"> 
            <?php endif; ?>
            <div class="product_item_content">
                <h2><?php the_title(); ?></h2>
                <?php if (!empty($content)): ?>
                <?php echo $content; ?>
                <?php endif; ?>
                <div class="product_item_price">
                    <h3><?php the_field('price'); ?></h3>
                    <button class="btn_cart_pr popmake-592"><?php the_field('button'); ?></button>
                </div>
            </div>
        </div>
        <?php if (!empty($categories)): ?>
        <div class="post_categories"><?php the_field('categories', 108); ?> <?php echo $categories; ?></div>
        <?php endif; ?>
    <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer() ?>