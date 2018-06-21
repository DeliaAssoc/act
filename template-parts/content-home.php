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
    <section class="main-content">
        <div class="constrain">
            <?php the_content(); ?>
        </div>
    </section>

    <?php testimonials_slider_module(); ?>

    <section class="recent-products">
        <div class="constrain">
            <?php echo do_shortcode( '[recent_products per_page="4" columns="4"]' ); ?>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
