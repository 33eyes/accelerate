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
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="page-404-container">
				<h2 class="page-404-title">Soooo...</h2>
				<p>
					we can't find the page you're looking for. Sorry about that.
					<br>
					That page probably wasn't that great anyway. 
					<br>
					Here are some pages that are definitely way better:
				</p>
				<div class="page-404-links">
					<ul>
						<li><a href="<?php echo home_url(); ?>/blog">Our Blog</a></li>
						<li><a href="<?php echo home_url(); ?>/case-studies">Featured Work</a></li>
						<li><a href="<?php echo home_url(); ?>">Homepage</a></li>
					</ul>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>