<?php
/**
 * Template Name: Conferences Template
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Counselor_Training
 */

get_header();
?>

	<div id="primary" class="content-area">
		<?php if ( get_field( 'page_banner' ) ) : ?>
			<?php $pBanner = get_field( 'page_banner' ); ?>
			<section class="page-banner" style="background-image:url( '<?php echo $pBanner[ 'url' ]; ?>' );">			
			</section>

		<?php endif; ?>
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'conferences' );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();