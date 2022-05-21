<footer class="footer" style="background-color: <?php the_field('background-color-footer', 27); ?>"> 
        <div class="container">
            <div class="footer__list">
                <div class="footer_item">
                    <h3><?php the_field('contacts', 27); ?></h3>
                    <div class="footer_item_location">
                        <p><a class="phone" href="tel:<?php the_field('phone-contact', 27); ?>"><?php the_field('phone', 27); ?></a></p>
                        <p><a href="mailto:<?php the_field('email', 27); ?>"><?php the_field('email', 27); ?></a></p>
                        <p><a href="#"><?php the_field('adress', 27); ?></a></p>
                    </div>
                </div>
                <div class="footer_item">
                    <div class="footer_item_socials">
                        <a href="<?php the_field('viber-link', 27) ?>"><img class="scale" src="<?php the_field('viber-icon', 27); ?>" alt="viber"></a>
                        <a href="<?php the_field('whatsapp-link', 27) ?>"><img class="scale" src="<?php the_field('whatsapp-icon', 27); ?>" alt="whatsapp"></a>
                        <a href="<?php the_field('telegram-link', 27) ?>"><img class="scale" src="<?php the_field('telegram-icon', 27); ?>" alt="telegram"></a>
                        <a href="<?php the_field('instagram-link', 27) ?>"><img class="scale" src="<?php the_field('instagram-icon', 27); ?>" alt="instagram"></a>
                    </div>
                    <div class="footer_item_copyrights">&copy; <?php the_field('copyright', 27); ?> <?php bloginfo('name'); ?></div>
                </div>
                <div class="footer_item">
                <h3><?php the_field('payment', 27); ?></h3>
                    <div class="pay-system-wrap">
                        <img src="<?php the_field('visa-img', 27); ?>" alt="visa">
                        <img src="<?php the_field('mastercard-img', 27); ?>" alt="mastercard">
                        <img src="<?php the_field('discover-img', 27); ?>" alt="discover">
                        <!-- <div class="pay-system_visa"></div>
                        <div class="pay-system_mastercard"></div>
                        <div class="pay-system_discover"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div> 
    <?php wp_footer(); ?>
</body>
</html>