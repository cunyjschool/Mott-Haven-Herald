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
				<h2 class="arh">Search results</h2>
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
							<?php the_excerpt('[...]'); ?>
							<h4 class="continue"><a href="<?php the_permalink() ?>">Continue Reading</a></h4>
						</div>
					
					</div>
					<!-- Latest Ends -->
					
				<?php endwhile; ?>
				<div class="more_entries wrap">
					<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
				</div>
				
				<?php else : ?>
				
				<h2 class="arh">Search results</h2>
				<p>No matches. Please try again, or use the navigation menus to find what you are looking for.</p>
				
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