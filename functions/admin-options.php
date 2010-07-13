<?php

// THIS IS THE DIFFERENT FIELDS
$options[] = array(	"name" => "General Settings",
					"type" => "heading");
						
$options[] = array(	"name" => "Theme Stylesheet",
					"desc" => "Please select your colour scheme here.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array(	"name" => "Custom Logo",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo e.g. 'http://www.yoursite.com/logo-trans.png'. <br />NOTE: You need to name the logo 'logoname-trans.png' to make it transparent in IE6 .",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");					 							    

$options[] = array(	"name" => "Google Analytics",
					"desc" => "Please paste your Google Analytics (or other) tracking code here.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");		

$options[] = array(	"name" => "Feedburner RSS URL",
					"desc" => "Enter your Feedburner URL here.",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");	

$options[] = array(	"name" => "Feedburner RSS ID",
					"desc" => "Enter your Feedburner ID here.",
					"id" => $shortname."_feedburner_id",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Navigation Settings",
					"type" => "heading");	

$options[] = array(	"name" => "Menu Home Link",
					"desc" => "Display a home link in the category menu.",
					"id" => $shortname."_home_link",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Menu Home Link Description",
					"desc" => "Enter the text to use as home link.",
					"id" => $shortname."_home_link_text",
					"std" => "Home",
					"type" => "text");	

$options[] = array(	"name" => "Menu Home Link Description",
					"desc" => "Add a description to show under your home link, or leave blank to disable.",
					"id" => $shortname."_home_link_desc",
					"std" => "",
					"type" => "text");	

$options[] = array(	"name" => "Exclude Categories",
					"desc" => "Enter a comma-separated list of the <a href='http://support.wordpress.com/pages/8/'>Category ID's</a> that you'd like to exclude from the main category navigation. (e.g. 1,2,3,4)",
					"id" => $shortname."_cat_ex",
					"std" => "",
					"type" => "text");	

$options[] = array(	"name" => "Layout Options",
					"type" => "heading");	

$options[] = array(	"name" => "Featured Posts",
					"desc" => "Select the number of featured posts you'd like to display. <br />NOTE: Set total number of posts to show on home page in WordPress admin under Settings -> Reading -> Blog posts to show at most.",
					"id" => $shortname."_featured_posts",
					"std" => "Select a number:",
					"type" => "select",
					"options" => $other_entries);					

$options[] = array(	"name" => "One Column Normal Posts",
					"desc" => "Show normal posts in one column instead of default two columns",
					"id" => $shortname."_home_arc",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Disable Sidebar Tabs",
					"desc" => "Disable the tabs in the sidebar if you don't wish to use them.",
					"id" => $shortname."_tabs",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Popular Posts Sidebar Tabs",
					"desc" => "Select the number of popular posts (most commented posts) you'd like to display in the sidebar tabs. Default = 5.",
					"id" => $shortname."_popular_posts",
					"std" => "Select a number:",
					"type" => "select",
					"options" => $other_entries);					

$options[] = array(	"name" => "Recent Comments Sidebar Tabs",
					"desc" => "Select the number of recent comments you'd like to display in the sidebar tabs. Default = 5.",
					"id" => $shortname."_comment_posts",
					"std" => "Select a number:",
					"type" => "select",
					"options" => $other_entries);					

$options[] = array(	"name" => "Video Category",
					"desc" => "Select the category to use with your Video Player Widget. The video category will be excluded from home page.",
					"id" => $shortname."_video_category",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $woo_categories);

$options[] = array(	"name" => "Twitter Username",
					"desc" => "Enter your Twitter username to show your latest tweet instead of the top 468x60 ad.",
					"id" => $shortname."_twitter",
					"std" => "",
					"type" => "text");			

$options[] = array(	"name" => "Display Content or The Excerpt",
					"type" => "heading");

$options[] = array(	"name" => "Featured Section",
					"desc" => "If checked, this section will display the full post content. If unchecked it will display the excerpt only.",
					"id" => $shortname."_content_feat",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Normal Posts",
					"desc" => "If checked, this section will display the full post content. If unchecked it will display the excerpt only.",
					"id" => $shortname."_content",
					"std" => "false",
					"type" => "checkbox");											

$options[] = array(	"name" => "Archive Posts",
					"desc" => "If checked, this section will display the full post content. If unchecked it will display the excerpt only.",
					"id" => $shortname."_content_archives",
					"std" => "false",
					"type" => "checkbox");											

$options[] = array(	"name" => "Image Resizer",
					"type" => "heading");

$options[] = array(	"name" => "Featured Image Width",
					"desc" => "<strong>Default: 540px</strong>. Enter an integer value i.e. 250 for the desired width which will be used when dynamically creating the images.",
					"id" => $shortname."_image_width",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Featured Image Height",
					"desc" => "<strong>Default: 210px</strong>. Enter an integer value i.e. 150 for the desired height which will be used when dynamically creating the images.",
					"id" => $shortname."_image_height",
					"std" => "",
					"type" => "text");																			    								

$options[] = array(	"name" => "Homepage Thumbnail Width",
					"desc" => "<strong>Default: 247px</strong>. Enter an integer value i.e. 150 for the desired width which will be used when dynamically creating the images. ",
					"id" => $shortname."_home_thumb_width",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Homepage Height",
					"desc" => "<strong>Default: 92px</strong>. Enter an integer value i.e. 150 for the desired height which will be used when dynamically creating the images. ",
					"id" => $shortname."_home_thumb_height",
					"std" => "",
					"type" => "text");																			    								

$options[] = array(	"name" => "Thumbnail Width",
					"desc" => "<strong>Default: 88px</strong>. Enter an integer value i.e. 150 for the desired width which will be used when dynamically creating the images. ",
					"id" => $shortname."_thumb_width",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Thumbnail Height",
					"desc" => "<strong>Default: 88px</strong>. Enter an integer value i.e. 150 for the desired height which will be used when dynamically creating the images. ",
					"id" => $shortname."_thumb_height",
					"std" => "",
					"type" => "text");																			    								

$options[] = array(	"name" => "Disable Single Post",
					"desc" => "Check this if you don't want to display the thumbnail on the single posts.",
					"id" => $shortname."_image_single",
					"std" => "false",
					"type" => "checkbox");																

$options[] = array(	"name" => "Single Width",
					"desc" => "<strong>Default: 180px</strong>. Enter an integer value i.e. 150 for the desired height which will be used when dynamically creating the images. ",
					"id" => $shortname."_single_width",
					"std" => "",
					"type" => "text");

$options[] = array(	"name" => "Single Height",
					"desc" => "<strong>Default: 120px</strong>. Enter an integer value i.e. 150 for the desired height which will be used when dynamically creating the images. ",
					"id" => $shortname."_single_height",
					"std" => "",
					"type" => "text");																			    								

$options[] = array(	"name" => "Banner Ad Top (468x60px)",
					"type" => "heading");

$options[] = array(	"name" => "Disable Ad",
					"desc" => "Disable the ad space",
					"id" => $shortname."_ad_top_disable",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Adsense code",
					"desc" => "Enter your adsense code here.",
					"id" => $shortname."_ad_top_adsense",
					"std" => "",
					"type" => "textarea");

$options[] = array(	"name" => "Banner Ad Top - Image Location",
					"desc" => "Enter the URL to the banner ad image location.",
					"id" => $shortname."_ad_top_image",
					"std" => "http://www.woothemes.com/ads/woothemes-468x60-2.gif",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad Top - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_top_url",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad Content (468x60px)",
					"type" => "heading");

$options[] = array(	"name" => "Disable Ad",
					"desc" => "Disable the ad space",
					"id" => $shortname."_ad_content_disable",
					"std" => "false",
					"type" => "checkbox");	

$options[] = array(	"name" => "Adsense code",
					"desc" => "Enter your adsense code here.",
					"id" => $shortname."_ad_content_adsense",
					"std" => "",
					"type" => "textarea");

$options[] = array(	"name" => "Banner Ad Content - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_content_image",
					"std" => "http://www.woothemes.com/ads/woothemes-468x60-2.gif",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad Content - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_content_url",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad Sidebar - Widget (250x250px)",
					"type" => "heading");

$options[] = array(	"name" => "Adsense code",
					"desc" => "Enter your adsense code here.",
					"id" => $shortname."_ad_250_adsense",
					"std" => "",
					"type" => "textarea");

$options[] = array(	"name" => "Banner Ad Content - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_250_image",
					"std" => "http://www.woothemes.com/ads/woothemes-250x250.gif",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad Content - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_250_url",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ads Sidebar - Widget (125x125)",
					"type" => "heading");

$options[] = array(	"name" => "Rotate banners?",
					"desc" => "Check this to randomly rotate the banner ads.",
					"id" => $shortname."_ads_rotate",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Banner Ad #1 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_1",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-1.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #1 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_1",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad #2 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_2",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-2.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #2 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_2",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #3 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_3",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-3.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #3 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_3",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #4 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_4",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #4 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_4",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #5 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_5",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #5 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_5",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #6 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_6",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #6 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_6",
					"std" => "http://www.woothemes.com",
					"type" => "text");
?>