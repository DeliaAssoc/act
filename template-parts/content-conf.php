<?php
/**
 * Template part for displaying page content in single-conference.php
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

    <section class="overview p15">
        <div class="constrain md">
            <h2>Conference Overview</h2>
            <?php the_field( 'conference_overview' ); ?>
        </div><!-- .constrain.md -->
    </section><!-- .overview -->

    <section class="conf-dates p15">
        <div class="constrain md">
            <h2>Conference Dates:</h2>
            <?php the_field( 'conference_dates' ); ?>
        </div><!-- .constrain.md -->
    </section><!-- .conf-dates -->

    <section class="conf-location p15">
        <div class="constrain md">
            <h2>Conference Location:</h2>
            <?php the_field( 'conference_address' ); ?>
        </div><!-- .constrain.md -->
    </section><!-- .conf-location -->

    <section class="main-information">
        <div class="constrain md">
            <h2>Conference Information:</h2>
            <?php the_content(); ?>
        </div><!-- .constrain -->
    </section><!-- -->

    <?php if ( have_rows( 'accordion_section' ) ) : ?>
        <section class="accoridion-items p30">
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

    <?php if ( have_rows( 'conference_faqs' ) ) : ?>
        <section class="conf-faq p30">
            <div class="constrain md">
                <div class="faq-section">
                    <h2><?php the_field( 'conference_faqs_heading' ); ?></h2>
                    <?php while ( have_rows( 'conference_faqs' ) ) : the_row(); ?>
                        <div class="faq-block">
                            <a href="#" class="faq-question">
                                <?php the_sub_field( 'question' ); ?>
                            </a>
                            <div class="faq-answer">
                                <?php the_sub_field( 'answer' ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div><!-- .constrain.md -->
        </section><!-- .conf-faq -->
    <?php endif; ?> 

</article><!-- #post-<?php the_ID(); ?> -->
