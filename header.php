<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta2)/IE7.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/menu.js"></script>	
<![endif]-->

<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>

<body>

<!-- Set video category -->
<?php $cat = get_option('woo_video_category'); $GLOBALS[vid_cat] = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE name='$cat'"); ?>

<div id="wrap">
	<!-- Top Starts -->
	<div id="top-out">
		<div id="top">
		<!-- Page Nav Starts -->
			<div id="page_navi" class="wrap">
				<div class="col-left">
					<ul id="nav">
				<?php if (get_option('woo_home_link')) : ?>
					<li><a href="<?php bloginfo('url'); ?>"><?php echo get_option('woo_home_link_text'); ?><br /><span><?php echo get_option('woo_home_link_desc'); ?></span></a></li>
					<?php endif; ?>

					<?php foreach ( (get_categories('exclude='.get_option('woo_cat_ex') ) ) as $category ) { if ( $category->category_parent == '0' ) { ?>
  
                    <li>
                        <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?><br/> <span><?php echo $category->category_description; ?></span></a>
                        
                        <?php if (get_category_children($category->cat_ID) ) { ?>
                        <ul><?php wp_list_categories('title_li&child_of=' . $category->cat_ID ); ?></ul>
                        <?php } ?>
                    </li>
	
					<?php } } ?>
					</ul>
				</div>
			</div>
			<!-- Page Nav Ends -->
			<div id="header">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><img class="title" src="<?php if ( get_option('woo_logo') <> "" ) { echo get_option('woo_logo').'"'; } else { bloginfo('template_directory'); ?>/images/logo-trans.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				
				<!-- Top Ad Starts -->
				<?php if (!get_option('woo_ad_top_disable') && !get_option('woo_twitter')) include (TEMPLATEPATH . "/ads/top_ad.php"); ?>
				<!-- Top Ad Ends -->

				<!-- Twitter Starts -->
				<?php if (get_option('woo_twitter')) { ?>
                <div class="latest_twitter">
                	<a href="http://www.twitter.com/<?php echo get_option('woo_twitter'); ?>" title="Follow me on Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-trans.png" alt="Latest Tweet from Twitter" /></a>
					<ul id="twitter_update_list"><li></li></ul>
                </div>
                <?php } ?>
				<!-- Twitter Ad Ends -->
                
				
			</div>
			<!-- Category Nav Starts -->
			<div id="cat_navi" class="wrap">
				<ul id="secnav">
					
			<?php if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
			<li class="<?php echo $highlight; ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
			<?php wp_list_pages('sort_column=menu_order&depth=0&title_li='); ?>
                    
				</ul>
			</div>
			<!-- Category Nav Ends -->
		</div>
	</div>
	<!-- Top Ends -->