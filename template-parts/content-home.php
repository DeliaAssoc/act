<?php
/**
 * Template part for displaying page content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Counselor_Training
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( have_rows( 'hero_slider' ) ) : ?>
        <div class="hero-slider">
        
        <?php while ( have_rows( 'hero_slider' ) ) : the_row(); ?>
            <div class="slide">
                <?php $sImage = get_sub_field( 'slide_image' ); ?>
                <img src="<?php echo $sImage[ 'url' ]; ?>" alt="<?php echo $sImage[ 'alt' ]; ?>">
                <div class="slide-content-block flexxed">
                    <div class="constrain">
                        <div class="slide-content">
                            <?php the_sub_field( 'slide_content' ); ?>
                        </div>
                        <?php if ( have_rows( 'slide_buttons' ) ) : ?>
                            <div class="hero-slide-btns">
                                <?php while ( have_rows( 'slide_buttons' ) ) : the_row(); ?>
                                    <a href="<?php the_sub_field( 'button_link' ); ?>" class="btn btn-md <?php the_sub_field( 'button_color' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div><!-- .constrain -->
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <section class="main-content p60">
        <div class="constrain">
            <?php the_content(); ?>
        </div>
    </section>

    <?php testimonials_slider_module(); ?>

    <section class="recent-products p60">
        <div class="constrain">
            <?php echo do_shortcode( '[recent_products per_page="4" columns="4"]' ); ?>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
