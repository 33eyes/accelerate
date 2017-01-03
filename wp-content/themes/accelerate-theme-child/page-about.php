<?php
/**
 * The template for displaying the About page
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

get_header(); 
global $wp_query;
$postid = $wp_query->post->ID;
?>
				
<div class="about-banner">
	<p><?php echo get_post_meta($postid, 'banner_text', true); ?></p>
</div>
<?php wp_reset_query(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
			$banner_text = get_field("banner_text");
			$content_block_1_title = get_field("content_block_1_title");
			$content_block_1_text = get_field("content_block_1_text");
			$content_block_1_image = get_field("content_block_1_image");
			$content_block_2_title = get_field("content_block_2_title");
			$content_block_2_text = get_field("content_block_2_text");
			$content_block_2_image = get_field("content_block_2_image");
			$content_block_3_title = get_field("content_block_3_title");
			$content_block_3_text = get_field("content_block_3_text");
			$content_block_3_image = get_field("content_block_3_image");
			$content_block_4_title = get_field("content_block_4_title");
			$content_block_4_text = get_field("content_block_4_text");
			$content_block_4_image = get_field("content_block_4_image");
			$contact_us_blurb = get_field("contact_us_blurb");
			
			$size = "full"; 
			?>
				<article class="about-page-default-content">
					<?php the_content(); ?>
				</article>
				
				<article class="about-page-content-block">
					<div class="block-text">
						<h2><?php echo $content_block_1_title; ?></h2>
						<p><?php echo $content_block_1_text; ?></p>
					</div>
					<?php if($content_block_1_image) { ?>
						<div class="block-img"><?php echo wp_get_attachment_image( $content_block_1_image, $size ); ?></div>
					<?php } ?>
				</article>
				
				<article class="about-page-content-block">
					<div class="block-text">
						<h2><?php echo $content_block_2_title; ?></h2>
						<p><?php echo $content_block_2_text; ?></p>
					</div>
					<?php if($content_block_2_image) { ?>
						<div class="block-img"><?php echo wp_get_attachment_image( $content_block_2_image, $size ); ?></div>
					<?php } ?>
				</article>
				
				<article class="about-page-content-block">
					<div class="block-text">
						<h2><?php echo $content_block_3_title; ?></h2>
						<p><?php echo $content_block_3_text; ?></p>
					</div>
					<?php if($content_block_3_image) { ?>
						<div class="block-img"><?php echo wp_get_attachment_image( $content_block_3_image, $size ); ?></div>
					<?php } ?>
				</article>
				
				<article class="about-page-content-block">
					<div class="block-text">
						<h2><?php echo $content_block_4_title; ?></h2>
						<p><?php echo $content_block_4_text; ?></p>
					</div>
					<?php if($content_block_4_image) { ?>
						<div class="block-img"><?php echo wp_get_attachment_image( $content_block_4_image, $size ); ?></div>
					<?php } ?>
				</article>
				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
			
			
<div class="contact-us-container">
	<p><?php echo get_post_meta($postid, 'contact_us_blurb', true); ?></p>
	<div class="contact-us-button"><a href="http://accelerateari.wpengine.com/contact-us">Contact Us</a></div>
</div>
<?php wp_reset_query(); ?>
<!-- .contact-us-container -->


<?php get_footer(); ?>