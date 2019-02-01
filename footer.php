<?php
/*
* Footer Temlate
*/
?>

</div><!-- page -->

<div id="footer-widget">
    <div class="container">
        <?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
            <div id="secondary" class="box row widget-area" role="complementary">
                <?php dynamic_sidebar( 'footer-widget' ); ?>
            </div><!-- #secondary -->
        <?php endif; ?>
    </div>
</div>

<!--footer id="footer" role="contentinfo" >
    <div class="container">
        <?php //endif; ?>
        <div class="row">
            <div class="box col-md-4 col-sm-6 d-none d-sm-block">
                <a class="footer-brand" href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/greenhouse-type-logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop=""/></a>
                <p class="site-info"><small>Copyright © 2018 Greenhouse. All rights reserved</small></p>
            </div>
            <div class="box col-md-3 col-sm-6 col-xs-12">
                <ul  class="menu">
                    <li><a href="#">Market Entry Services</a></li>
                    <li><a href="#">Host An Event</a></li>
                    <li><a href="#">referral program</a></li>
                    <li><a href="#">privacy</a></li>
                    <li><a href="#">terms &amp; condition</a></li>
                </ul>
            </div>
            <div class="box col-md-2 col-sm-6 col-xs-12">
                <ul class="menu">
                    <li><a href="#">about us</a></li>
                    <li><a href="#">press</a></li>
                    <li><a href="#">career</a></li>
                    <li><a href="#">blogs</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>
            <div class="box col-md-3 col-sm-6 col-xs-12">
                <ul class="menu">
                    <li><a href="tel:+622130436000">+62 21 3043 6000</a></li>
                    <li><a href="mailto:hello@greenhouse.id">hello@greenhouse.id</a></li>
                    <li class="addr">MultivisionTower 25th Floor, Jl. Kuningan Mulia Lot 9B, Jakarta 12980</li>
                </ul>
                <div class="socmed">
                    <a href="#" target="_blank" title="follow us on Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" title="follow us on Facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank" title="follow us on Linkedin"><i class="fab fa-linkedin"></i><a>
                </div>
            </div>
            <div class="box col-md-4 col-sm-6 d-block d-sm-none">
                <a class="footer-brand" href="<?php// echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/logos/greenhouse-type-logo.svg" alt="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop=""/></a>
                <p class="site-info"><small>Copyright © 2018 Greenhouse. All rights reserved</small></p>
            </div>
        </div>
    </div>
</footer>< #footer -->

<?php wp_footer(); ?>
</body>
</html>