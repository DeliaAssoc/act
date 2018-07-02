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

    <section class="overview">
        <div class="constrain md">
            <?php the_field( 'conference_overview' ); ?>
        </div><!-- .constrain -->
    </section>

    <section class="conf-dates">
        <div class="constrain md">
            <?php the_field( 'conference_dates' ); ?>
        </div><!-- .constrain -->
    </section>

    <section class="conf-location">
        <div class="constrain md">
            <?php the_field( 'conference_address' ); ?>
        </div><!-- .constrain -->
    </section>

    <section class="main-information">
        <div class="constrain md">
            <?php the_content(); ?>
        </div><!-- .constrain -->
    </section>

    <?php if ( have_rows( 'conference_faqs' ) ) : ?>
        <section class="conf-faq">
            <div class="constrain md">
            <?php while ( have_rows( 'conference_faqs' ) ) : the_row(); ?>
                <div class="conf-faq">
                    <a href="#" class="faq-question">
                        <?php the_sub_field( 'question' ); ?>
                    </a>
                    <div class="faq-answer">
                        <?php the_sub_field( 'answer' ); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            </div><!-- .constrain -->
        </section>
    <?php endif; ?> 

</article><!-- #post-<?php the_ID(); ?> -->
