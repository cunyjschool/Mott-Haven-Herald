<?php
/*
Template Name: Image Gallery
*/
?>
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
						
					<div class="page post wrap">
            
						<h2 class="arh"><?php the_title(); ?></h2>			
    
                        <?php query_posts('showposts=30'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>				
                            <?php $wp_query->is_home = false; ?>
    
                            <?php woo_get_image('image','thumbnail','','','thumbnail gallery'); ?>
                        
                        <?php endwhile; endif; ?>	

					</div>
                    
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