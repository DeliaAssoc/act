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
		<div class="top-footer p30">
			<div class="constrain flexxed">
				<?php if ( is_active_sidebar( 'col_1' ) ) : ?>
					<div class="footer-col col1">
						<?php dynamic_sidebar( 'col_1' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'col_2' ) ) : ?>
					<div class="footer-col col2">
						<?php dynamic_sidebar( 'col_2' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'col_3' ) ) : ?>
					<div class="footer-col col3">
						<?php dynamic_sidebar( 'col_3' ); ?>
					</div>
				<?php endif; ?>
				<div class="footer-col col4">
					<div class="footer-social">
						<?php social_media_list(); ?>
					</div>
					<div class="footer-phone">
						<a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"><?php echo get_theme_mod( 'theme_company_phone' ); ?></a>
					</div>
					<div class="footer-email">
						<a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"><?php echo get_theme_mod( 'theme_company_email' ); ?></a>
					</div>
				</div>
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
<a href="#top" id="back-to-top">
	<i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
</body>
</html>
