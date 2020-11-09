<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<script>
    var myNav = document.querySelector("#wrapper-navbar > nav");

    window.onscroll = function() {
        "use strict";
        if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
            myNav.classList.add("scrolled");
        } else {
            myNav.classList.remove("scrolled");
        }
    };

    console.log(document.body.scrollTop);
</script>

<div class="wrapper" id="wrapper-footer">



	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

            <div class="col-md-12">
                <div class="row">
                    <?php if ( ! has_custom_logo() ) { ?>

                    <?php if ( is_front_page() && is_home() ) : ?>

                        <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                    <?php else : ?>

                        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>


                    <?php } else {
                        the_custom_logo();
                    } ?><!-- end custom logo -->
                </div>
                <div class="row">
                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'footer-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                </div>

            </div>

			<div class="col-md-12">

                <hr

				<footer class="site-footer" id="colophon">

					<div class="site-info">

                        &copy; <?php echo date("Y"); ?> Advisous, D'André Phillips. All rights reserved.

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

