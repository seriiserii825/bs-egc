<section id="contacts">
	<?php if ( is_front_page() ) { ?>
        <h2 class="section-title"><?php echo carbon_get_theme_option('crb_contacts_title'.get_lang()); ?></h2>
	<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-xs-12">
                <div class="item first">
                    <?php
                        $phone1 = carbon_get_theme_option('crb_contacts_phone_1');
	                    $phone2 = carbon_get_theme_option('crb_contacts_phone_2');
                    ?>
                    <h2 class="phone_head"><?php echo carbon_get_theme_option('crb_contacts_title_call'.get_lang()); ?>:
                        <a href="tel:<?php clear_phone($phone1); ?>"><?php echo $phone1; ?></a>
                    </h2>
                    <h3><?php echo carbon_get_theme_option('crb_contacts_title_address'.get_lang()); ?>:</h3>
                    <p>
						<?php
							$currentlang = get_bloginfo( 'language' );
						?>
						<?php if ( $currentlang == "ro-RO" ): ?><?php the_field( 'aress_footer_md', 'options' ); ?><?php elseif ( $currentlang == "en-US" ): ?><?php the_field( 'aress_footer_en', 'options' ); ?><?php elseif ( $currentlang == "ru-RU" ): ?><?php the_field( 'aress_footer', 'options' ); ?><?php endif; ?>
						<?php echo carbon_get_theme_option('crb_contacts_phone'.get_lang()) ?>:
                        <a href="tel:<?php clear_phone($phone2); ?>"><?php echo $phone2; ?></a>
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 footer-form-contacts">
                <div class="item ">
                    <h2><?php echo carbon_get_theme_option('crb_contacts_title_message'.get_lang()); ?>:</h2>
					<?php if ( $currentlang == "ro-RO" ): ?>
                        <?php echo do_shortcode( '[contact-form-7 id="233" title="Forma rom"]' ); ?>
                    <?php elseif ( $currentlang == "en-US" ): ?>
                        <?php echo do_shortcode( '[contact-form-7 id="234" title="Form eng"]' ); ?>
                    <?php elseif ( $currentlang == "ru-RU" ): ?>
                        <?php echo do_shortcode( '[contact-form-7 id="146" title="Контактная форма rus"]' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="map">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
				<?php if ( $currentlang == "ro-RO" ): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
				<?php elseif ( $currentlang == "en-US" ): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
				<?php elseif ( $currentlang == "ru-RU" ): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.2967.0/node_modules/wix-santa/static/external/googleMap.html?language=ru&amp;lat=47.04084899999999&amp;long=28.891227999999956&amp;address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&amp;addressInfo=Р. Молдова, мун. Кишинев, блв. Мирча чел Бэтрын 8/1&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <?php $phoneClear = carbon_get_theme_option('crb_contacts_phone_1'); ?>
    <div class="footer-buttons">
        <a target="_blank" class="footer-buttons__phone" href="tel:<?php echo $phoneClear; ?>"><i class="fas fa-phone"></i></a>
        <a target="_blank" class="footer-buttons__facebook" href="https://msng.link/fm/euconsult.md"><i class="fab fa-facebook-square"></i></a>
    </div>
</footer></body>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body></html>