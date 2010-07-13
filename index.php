<?php get_header(); ?>



	<?php if (is_paged()) $is_paged = true; ?>



	<!-- Middle Starts -->

	<div id="middle-out-top">

	<div id="middle-out-bottom">

	<div id="middle-content">

	<div id="middle-content-bottom">

		<!-- Content Starts -->

		<div id="content" class="wrap">

			<div class="col-left">

				<div id="main-content">

																			

					<!-- Latest Starts -->

					<div class="<?php if ($is_paged || get_option('woo_home_arc')) { echo 'archives'; } else { echo 'latest'; } ?> post wrap">

						

					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=-".$GLOBALS[vid_cat]."&paged=$paged"); ?>

					<?php if (have_posts()) : $count = 0; ?>

					<?php while (have_posts()) : the_post(); $postcount++;?>

	

                        <!-- Featured Starts -->

                        <?php if ( $postcount <= get_option('woo_featured_posts') && !$is_paged ) { ?>

                        

                        <div class="featured">

                            <?php woo_get_image('image','featured'); ?> 



                            <?php if(get_post_meta($post->ID, caption, true) != "") { ?>

<div class="caption"><em><?php echo get_post_meta( $post->ID,"caption", $single=true ) ; ?></em></div>

<?php } ?>

                                    

                            <div class="post-title">

                              <div class="comment-cloud">
<a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a>
							  </div>
                              
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                              
<?php if(get_post_meta($post->ID, subhead, true) != "") { ?>
<div class="subhead"><?php echo get_post_meta( $post->ID,"subhead", $single=true ) ; ?></div>
<?php } ?>

                                <p class="post-details">Posted on <?php the_time('d. M, Y'); ?></p>
                                
                                <p>By <?php the_author_posts_link(); ?> | <a href="mailto:<?php the_author_meta('user_email'); ?>"><?php the_author_meta('user_email'); ?></a></p>

 

                            </div>

                            <?php if ( get_option('woo_content_feat') ) { the_content('[...]'); } else { the_excerpt(); ?><?php } ?>

                            

                            <h4 class="continue"><a href="<?php the_permalink() ?>">Continue Reading</a></h4>

                        

                        </div>

 

                        <!-- Content Ad Starts -->

                        <?php if (!get_option('woo_ad_content_disable') && !$is_paged && !$ad_shown) { include (TEMPLATEPATH . "/ads/content_ad.php"); $ad_shown = true; } ?>

                        <!-- Content Ad Ends -->

                        

						<?php continue; } ?>

                        <!-- Featured Ends -->

    



                        <!-- Normal Post Starts -->

                        <div class="block">

                        

							<?php if (!$is_paged && !get_option('woo_home_arc')) { ?>

								<?php woo_get_image('image','home'); ?> 
                                
                                <div class="comment-cloud">
                                <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a>
                                </div>

                                <div class="post-title">

                                    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

                                    <p class="post-details">Posted on <?php the_time('d. M, Y'); ?></p>
                                    
                                    <p>By <?php the_author_posts_link(); ?> | <a href="mailto:<?php the_author_meta('user_email'); ?>"><?php the_author_meta('user_email'); ?></a></p>



                                </div>

                            <?php } else { ?>

								<?php woo_get_image('image','thumbnail','','','thumbnail alignleft'); ?>                            

                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                                <p class="post-details">Posted on <?php the_time('d. M, Y'); ?> by  <?php the_author_posts_link(); ?>.</p>

                                <div class="comment-cloud">

                                    <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a>

                                </div>

                            <?php } ?>



                            <?php if ( get_option('woo_content') ) { the_content('[...]'); } else { the_excerpt(); ?><?php } ?>

                            <h4 class="continue"><a href="<?php the_permalink() ?>">Continue Reading</a></h4>

                        

                        </div>

                        <!-- Normal Post Ends -->

                        

                        <?php if (!get_option('woo_home_arc')) { $count++; if ($count == 2) { $count = 0; ?><div class="fix"></div><?php } } ?>

					

					<?php endwhile; ?>

					<?php endif; ?>



					</div>

					<!-- Latest Ends -->

					

                    <div class="more_entries wrap">

                        <?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>

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