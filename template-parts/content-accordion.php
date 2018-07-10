<?php
/**
 * Template part for displaying page content in accordion.php
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
		</div><!-- .constrain.md -->
	</header><!-- .entry-header -->

	<?php if ( get_the_content() ) : ?>
		<section class="entry-content">
			<div class="constrain md">
				<?php the_content(); ?>
			</div><!-- .constrain.md -->
		</section><!-- .entry-content -->
	<?php endif; ?>

    <?php if ( have_rows( 'accordion_section' ) ) : ?>
        <section class="accoridion-items">
            <div class="constrain md">
                <?php while ( have_rows( 'accordion_section' ) ) : the_row(); ?>
                    <div class="accordion-section">
                    <?php if ( get_sub_field( 'accordion_section_heading' ) ) : ?>
                        <h2><?php the_sub_field( 'accordion_section_heading' ); ?></h2>
                    <?php endif; ?>
                    <?php if ( have_rows( 'accordion_items' ) ) : ?>
                        <?php while ( have_rows( 'accordion_items' ) ) : the_row(); ?>
                            <div class="accordion-item">
                                <a href="#" class="accordion-heading">
                                    <?php the_sub_field( 'accordion_item_heading' ); ?>
                                </a>
                                <div class="accordion-content">
                                    <?php the_sub_field( 'accordion_item_content' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div><!-- .constrain.md -->
	    </section><!-- .accordion-items -->
    <?php endif; ?>

		

</article><!-- #post-<?php the_ID(); ?> -->
