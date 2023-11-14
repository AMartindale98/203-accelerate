<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
                $services = get_field('services');
                $link = get_field('site_link');
                $client = get_field('client'); 
                $image = get_field('image_1');
                $size = 'full';
                ?>

                <article class="case-study-main">
                    <aside class="case-study-main-sidebar">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <h4><?php echo $services; ?></h4>
                        <h6>Client: <?php echo $client; ?></h6>
                        <?php the_content(); ?>
                        <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
                     </aside>

                    <div class="case-study-image">
                        <a href="<?php the_permalink(); ?>"><?php
                            echo wp_get_attachment_image( $image, $size );
                         ?></a>
                    </div>
                </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
