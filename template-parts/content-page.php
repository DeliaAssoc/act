<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Counselor_Training
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="constrain">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div><!-- .constrain -->
	</header><!-- .entry-header -->

	<?php act_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="constrain">
			<?php the_content(); ?>
		</div><!-- .constrain -->
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
