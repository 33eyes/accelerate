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
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<div class="featured-content-container">
	<section class="featured-work">
		<div class="site-content">
			<h4>FEATURED WORK</h4>
			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image_1 = get_field("image_1");
						$size = "medium";
					?>
						<li class="individual-featured-work">
							<div class="individual-featured-work-container">
								<figure>
									<?php echo wp_get_attachment_image($image_1, $size); ?>
								</figure>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
						</li>
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>

	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?> 
						<a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>
	
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<section class="recent-tweet">
		<h4>Recent Tweet</h4>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<a class="follow-us-link" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Flocalhost%3A10297%2F&ref_src=twsrc%5Etfw&region=follow_link&screen_name=wordpress&tw_p=followbutton" target="_blank">Follow US <span>&rsaquo;</span></a>
	</section>
	<?php endif; ?>
</div>

<?php get_footer(); ?>