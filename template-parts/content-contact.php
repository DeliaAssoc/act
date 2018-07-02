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

    <?php if ( get_the_content() ) : ?>
        <section class="main-information">
            <div class="constrain md">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="contact-elements">
        <div class="constrain md">
            <div class="contact-info flexxed">
                <div class="one-third flexxed">
                    <div class="contact-block address-block">
                        <h2>Address</h2>
                        <?php if ( get_theme_mod( 'theme_company_street' ) || get_theme_mod( 'theme_company_city' ) || get_theme_mod( 'theme_company_state' ) || get_theme_mod( 'theme_company_zip' ) ) : ?>
                            <div class="address location">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <?php echo get_theme_mod( 'theme_company_street' ); ?> &mdash; <?php echo get_theme_mod( 'theme_company_city' ); ?>, <?php echo get_theme_mod( 'theme_company_state' ); ?> <?php echo get_theme_mod( 'theme_company_zip' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'theme_company_phone' ) ) : ?>
                            <div class="address phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"><?php echo get_theme_mod( 'theme_company_phone' ); ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'theme_company_fax' ) ) : ?>
                            <div class="address fax">
                                <i class="fa fa-fax" aria-hidden="true"></i>
                                <?php echo get_theme_mod( 'theme_company_fax' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'theme_company_email' ) ) : ?>
                            <div class="address email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"><?php echo get_theme_mod( 'theme_company_email' ); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="contact-block social-block">
                        <h2>Follow Us</h2>
                        <div class="flexxed">
                            <?php social_media_list(); ?>
                        </div>
                    </div>
                    <?php if ( get_field( 'secondary_content' ) ) : ?>
                        <div class="contact-block secondary-block">
                            <?php the_field( 'secondary_content' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="two-third">
                   <div class="contact-form">
                       <h2>Get In Touch</h2>
                       <?php $code = get_field( 'form_shortcode' );
                            echo do_shortcode( $code ); ?>
                   </div>
                </div>
            </div>
        </div><!-- .constrain -->
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
