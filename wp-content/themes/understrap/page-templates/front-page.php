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
    <div class="jumbotron jumbotron-fluid" style="background-image: url('wp-content/themes/understrap/images/ryan-tang-HrBNsh-wzN8-unsplash.jpg')">
        <div class="overlay">
            <div class="container">
                <div class="jumbo-content">
                    <h1 class="display-4">We're <span>Advisous</span>.</h1>
                    <h2 class="lead">We’re a forward-thinking independent HR advisory firm made for people of the 21st Century.</h2>
                    <a class="cta prominent" href="#">Get in touch</a>
                    <a class="cta secondary" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blocks">
    <div class="row no-gutters" style="background: rgb(21,143,153); background: linear-gradient(22deg, rgb(44 62 139) 33%, rgb(76 37 141) 100%);">
        <div class="col-6 block">
            <div class="block-content">
                <div class="graphic-content">
                    <h2>What we do</h2>
                    <img class="graphic back" src="wp-content/themes/understrap/images/jakob-owens-RKhidwWby28-unsplash.jpg">
                    <img class="graphic fore" src="wp-content/themes/understrap/images/jakob-owens-RKhidwWby28-unsplash.jpg">
                </div>
            </div>

        </div>
        <div class="col-6 block">
            <div class="block-content">
                <h3>We provide HR consultants to your organisation that <u>delivers solid results</u>.</h3>
                <h4>Leaving you free to focus on your endless array of Zoom meetings.</h4>
                <a href="#" class="cta btn btn-primary">Read more</a>
            </div>
        </div>
    </div>
    <div class="row no-gutters"
         style="background: url(https://images.unsplash.com/photo-1561015476-2f4fd3506fab?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=999&q=80);
                background-size: cover;
                background-attachment: fixed;">
        <div class="col-12 block light text-center">
            <div class="block-content">
                <h2 class="align-center">You are...</h2>
                <br>
                <a class="btn btn-primary cta" href="#">an employer</a>
                <a class="btn btn-primary cta" href="#">an employee</a>
            </div>
        </div>
    </div>
    <div class="row no-gutters"
         style="background: linear-gradient(22deg, #009688 33%, rgb(112 144 113) 100%);
">
        <div class="col-sm-6 block">
            <div class="d-block block-text">
                <h2>For employers</h2>
                <p>We provide CIPD qualified independent bespoke services to employers, enabling your company to maximise your business resources, minimise cost and reduce risk whilst understanding your culture, protecting your brand and reputation.</p>
                <ul>
                    <li><a>Restructure</a></li>
                    <li><a>Dismissal</a></li>
                    <li><a>Grievance</a></li>
                    <li><a>Welfare & Wellbeing</a></li>
                </ul>
            </div>
           </div>
        <div class="col-sm-6 block">
            <div class="block-content">
                <div class="graphic-content">
                    <img class="graphic back" src="wp-content/themes/understrap/images/simone-hutsch-hGBqfjv7eQ4-unsplash.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters"
         style="    background: linear-gradient(22deg, #24668e 33%, rgb(91 67 189) 100%);
">
        <div class="col-sm-6 block">
            <div class="block-content">
                <div class="graphic-content">
                    <img class="graphic back" src="wp-content/themes/understrap/images/simone-hutsch-0aFrSMJ3i-g-unsplash.jpg">
                </div>
            </div>
        </div>
        <div class="col-sm-6 block">
            <div class="d-block block-text">
                <h2>For employees</h2>
                <p>Impartial employee advise on work related issues or grievances. Working on your behalf to ensure your issue is dealt with in a fair, timely and cost-effective way, more information in the employee advise section.</p>
            </div>
        </div>

    </div>
    <div class="row no-gutters"
         style="background: #e3d6ce;
                background-size: cover;
                background-attachment: fixed;
">
        <div class="col-12 block light text-center">
            <div class="block-content">
                <h2 class="align-center">For Employees</h2>
            </div>
        </div>
    </div>

    <div class="row no-gutters" style="background: rgb(21,143,153); background: linear-gradient(22deg, rgb(44 62 139) 33%, rgb(76 37 141) 100%);
}">
        <div class="col-6 offset-md-1 block">
            <div class="block-content">
                <div class="block-content">
                    <h3>We provide HR consultants to your organisation that <u>deliver solid results</u>.</h3>
                    <h4>Leaving you free to focus on your endless array of Zoom meetings.</h4>
                    <a href="#" class="cta btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-3 block">
            <div class="block-content"></div>
            <h2>What do we do?</h2>
        </div>
    </div>
    <div class="row no-gutters" style="background: rgb(160 45 77);">
        <div class="col-12 block">
            <div class="block-content">
                <div class="block-content">
                    <h3>We provide HR consultants to your organisation that <u>deliver solid results</u>.</h3>
                    <h4>Leaving you free to focus on your endless array of Zoom meetings.</h4>
                    <a href="#" class="cta btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters" style="background: url('wp-content/themes/understrap/images/kid-circus-HyVXOAxah10-unsplash.jpg');background-position: 0 15%; background-size: 185%; background-attachment: fixed">
        <div class="col-12 block">
            <div class="block-content">
                <div class="block-content">
                    <h3>We provide HR consultants to your organisation that <u>deliver solid results</u>.</h3>
                    <h4>Leaving you free to focus on your endless array of Zoom meetings.</h4>
                    <a href="#" class="cta btn btn-primary">Read more</a>
                </div>
            </div>
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
