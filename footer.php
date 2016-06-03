<footer class="navbar-default">
        <div class="container">
            <div class="row">             
                <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                    <h5 class="text-info">Links</h5>
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'secondary',
                        'theme_location'    => 'secondary',
                        'depth'             => 2,
                        'container_id'      => 'footer_menu',
                        'menu_class'        => 'list-inline',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                    <h5 class="text-info">Social</h5>
                    <?php echo do_shortcode("[feather_follow  skin='balloon' size='32']"); ?>
                </div>
                
                <div class="col-xs-12">
                    <p align="center" style="padding-top:20px" class="text-info">
                    Powered by <a href="http://www.wordpress.org" target="_blank" class="text-warning">Wordpress version <?php bloginfo('version'); ?></a> © Copyright <?php echo date('Y'); ?> <?php echo esc_attr( get_bloginfo( ‘name’, ‘display’ ) ); ?>
                    </p>
                </div>
                
                <!--
                <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                    <p align="center" style="padding-top:0">
                    Powered by <a href="http://www.wordpress.org" target="_blank" class="text-warning">Wordpress</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                    <p align="center" style="padding-top:0">
                    © Copyright <?php echo date('Y'); ?> <?php echo esc_attr( get_bloginfo( ‘name’, ‘display’ ) ); ?>
                    </p>
                </div>
                -->
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"><\/script>')</script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo('template_url'); ?>/js/ie10-viewport-bug-workaround.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>
