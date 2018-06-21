<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Advanced_Counselor_Training
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="top-footer">
			<div class="constrain flexxed">

			</div>
		</div>
		<div class="bottom-footer">
			<div class="constrain flexxed">
				<div class="legal">&copy; <?php the_date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<a href="#" class="back-to-top">
	<i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
</body>
</html>
