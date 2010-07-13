<?php get_header(); ?>

	<!-- Middle Starts -->
	<div id="middle-out-top">
	<div id="middle-out-bottom">
	<div id="middle-content" class="single">
	<div id="middle-content-bottom">
		<!-- Content Starts -->
		<div id="content" class="wrap">
			<div class="col-left">
				<div id="main-content">

				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				
				<!-- Sing Post Starts -->
					<div class="page post wrap">

				<?php edit_post_link(); ?>


				<?php if (!get_option('woo_image_single')) woo_get_image('image','single','','','thumbnail alignright'); ?>
                
                    <?php if(get_post_meta($post->ID, photo_credit, true) != "") { ?>
<div class="photo-credit"><?php echo get_post_meta( $post->ID,"photo_credit", $single=true ) ; ?></div>
					<?php } ?>
                    
                    
                	<?php if(get_post_meta($post->ID, caption, true) != "") { ?>
<div class="caption"><em><?php echo get_post_meta( $post->ID,"caption", $single=true ) ; ?></em></div>
					<?php } ?>

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        
<?php if(get_post_meta($post->ID, subhead, true) != "") { ?>
<div class="subhead"><?php echo get_post_meta( $post->ID,"subhead", $single=true ) ; ?></div>
<?php } ?>
						<p class="post-details">Posted on <?php the_time('d. M, Y'); ?> in <?php the_category(', ') ?></p>
                        
                        <p>By <?php the_author_posts_link(); ?> | <a href="mailto:<?php the_author_meta('user_email'); ?>"><?php the_author_meta('user_email'); ?></a></p>

						
						<?php the_content(); ?>
						<?php the_tags('<p class="tags">Tags: ', ', ', '</p>'); ?>

					</div>
						<!-- Sing Post Ends -->
					
                    <!-- Content Ad Starts -->
                    <?php if (!get_option('woo_ad_content_disable')) include (TEMPLATEPATH . "/ads/content_ad.php"); ?>
                    <!-- Content Ad Ends -->
						
				</div>
				
				<div id="comments">
				
					<?php comments_template(); ?>
				
					<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
					
				</div>
				
			</div>
			
			<div class="col-right">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<!-- Content Ends -->
	</div>
	</div>
	</div>
	</div>
	<!-- Middle Ends -->
	<?php get_footer(); ?>