<?php
/**
 * Template part for displaying page content in faqs.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Counselor_Training
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'p60' ); ?>>
	<header class="entry-header">
		<div class="constrain md">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<?php if ( get_the_content() ) : ?>
		<section class="entry-content">
			<div class="constrain md">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endif; ?>

	<section class="faqs">
		<div class="constrain md">
			<?php if ( have_rows( 'faq_category' ) ) : ?>
				<?php while ( have_rows( 'faq_category' ) ) : the_row(); ?>
					<div class="faq-section">
						<h2><?php the_sub_field( 'faq_title' ); ?></h2>
						<?php while ( have_rows( 'faq_questions' ) ) : the_row(); ?>
							<div class="faq-block">
								<a href="#" class="faq-question">
									<?php the_sub_field( 'faq_question' ); ?>
								</a>
								<div class="faq-answer">
									<?php the_sub_field( 'faq_answer' ); ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
 		</div>
	</section>
		

</article><!-- #post-<?php the_ID(); ?> -->
