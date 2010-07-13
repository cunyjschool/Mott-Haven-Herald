<?php get_header(); ?>

	<!-- Middle Starts -->
	<div id="middle-out-top">
	<div id="middle-out-bottom">
	<div id="middle-content">
	<div id="middle-content-bottom">
		<!-- Content Starts -->
		<div id="content" class="wrap">
			<div class="col-left">
				<div id="main-content">
				
				<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; ?>

				<?php if (is_category()) { ?><h2 class="arh">Archive for '<?php echo single_cat_title(); ?>'</h2>
				<?php } elseif (is_day()) { ?><h2 class="arh">Archive for <?php the_time('F jS, Y'); ?></h2>
				<?php } elseif (is_month()) { ?><h2 class="arh">Archive for <?php the_time('F, Y'); ?></h2>
				<?php } elseif (is_year()) { ?><h2 class="arh">Archive for the year <?php the_time('Y'); ?></h2>
				<?php } elseif (is_author()) { ?><h2 class="arh">Archive by Author</h2>
				<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2 class="arh">Archives</h2>
				<?php } elseif (is_tag()) { ?><h2 class="arh">Tag Archives: <?php echo single_tag_title('', true); ?></h2>	

				<?php } ?>
	
				<?php while (have_posts()) : the_post(); ?>
				
				<!-- Latest Starts -->
					<div class="archives post wrap">
					
						<div class="block">
							
							<?php woo_get_image('image','thumbnail','','','thumbnail alignleft'); ?>
                            
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<p class="post-details">Posted on <?php the_time('d. M, Y'); ?> by  <?php the_author_posts_link(); ?>.</p>
							<div class="comment-cloud">
								<a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a>
							</div>
                            
							<?php 
							// If this is the video category
							if ( is_category($GLOBALS[vid_cat]) ) {

									the_content();
							
							} else {

								if ( get_option('woo_content_archives') ) 
									the_content('[...]'); 
								else 
									the_excerpt(); 
							
							}
							?>
							
                            <h4 class="continue"><a href="<?php the_permalink() ?>">Continue Reading</a></h4>
						</div>
					
					</div>
					<!-- Latest Ends -->
					
				<?php endwhile; ?>
				<div class="more_entries wrap">
					<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
				</div>
				
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