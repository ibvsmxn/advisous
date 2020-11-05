<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<section class="banner">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('wp-content/themes/understrap/images/city-5041143.jpg')">
        <div class="overlay">
            <div class="container">
                <h1 class="display-4">We are Project: Advisous.</h1>
                <h2 class="lead">we are an HR Consultancy firm.</h2>
                <a class="cta" href="#">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="blocks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 block">What do we do?</div>
            <div class="col-6 block">Overiew</div>
        </div>
    </div>
</section>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
