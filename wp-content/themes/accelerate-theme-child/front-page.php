<?php
/**
 * The template for displaying the homepage
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
<!--<pre> <?php /* print_r($wp_query); exit; */?> </pre> -->
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
	<section class="featured-work">
		<h4 class="featured-title">Featured Work</h4>
		<ul class="featured-flex">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 
			$image = get_field('image_1');
			$size = 'medium';
			?>
			<a href="<?php the_permalink(); ?>">
				<li>
					<figure>
						<?php echo wp_get_attachment_image( $image, $size ); ?>
					</figure>
					<h3><?php the_title(); ?></h3>
				</li>
			</a>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</section>
	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
				<!-- need to add query first -->
				<?php query_posts('posts_per_page=1'); ?>
				<!-- then loop over posts -->
					<?php while (have_posts()) : the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
