<?php
/**
 * Template part for displaying page content in conferencess.php
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

    <section class="home-confs p30">
        <div class="constrain md flexxed">
            <?php

                $options = array(
                    'post_type'              => array( 'conference' ),
                    'posts_per_page'         => '-1',
                    'order'                  => 'DESC',
                );
                // The Query
                $the_query = new WP_Query( $options );

                // The Loop
                if ( $the_query->have_posts() ) {

                    while ( $the_query->have_posts() ) {
                        
                        $the_query->the_post(); ?>
                        
                       <div class="conference-block">
                           <?php the_post_thumbnail(); ?>
                           <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                           <a href="<?php the_permalink(); ?>" class="register btn btn-md green-bg">Preview</a>
                       </div>
                    
                    <?php }

                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                } 
            ?>
        </div><!-- .constrain -->
    </section><!-- .home-confs -->

    
	<?php if ( get_the_content() ) : ?>
		<section class="entry-content">
			<div class="constrain md">
				<?php the_content(); ?>
			</div><!-- .constrain.md -->
		</section><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
