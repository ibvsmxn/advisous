<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

</div>
</div>
</div>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    <div class="jumbotron jumbotron-fluid" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">

        <div class="overlay">
            <div class="container">

                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <div class="entry-meta">

                    <!--                --><?php //understrap_posted_on(); ?>

                </div><!-- .entry-meta -->

            </div>
        </div>



	</div><!-- .entry-header -->

<!--	--><?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="wrapper container">

        <div class="introduction col-12 col-md-10 offset-md-1">
            <?php the_field("introduction") ?>
        </div>



	<div class="entry-content col-12 col-md-8 offset-md-2">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
