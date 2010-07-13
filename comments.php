<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->


<?php if ( have_comments() ) : ?>

<div id="comments_wrap">
	<h3><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<ol class="commentlist">
	<?php wp_list_comments('avatar_size=70&callback=custom_comment'); ?>
	</ol>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
		<div class="fix"></div>
	</div>
</div> <!-- end #comments_wrap -->
 
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
<div id="comments_wrap">
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
</div> <!-- end #comments_wrap -->

	<?php endif; ?>

<?php endif; ?>


<div id="respond">
<div id="form_wrap">
<?php if ('open' == $post->comment_status) : ?>


<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" onsubmit="if (url.value == 'Website (optional)') {url.value = '';}">

<?php if ( $user_ID ) : ?>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<textarea rows="9" cols="10" name="comment" tabindex="4" onfocus="if (this.value == 'Type your comment here...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type your comment here...';}">Type your comment here...</textarea>
<input type="image" name="submit" tabindex="5" src="<?php bloginfo('template_directory'); ?>/<?php woo_style_path(); ?>/img_leave_comment.gif" class="sb" />

<?php else : ?>

<div class="form-left">
<input type="text" name="author" id="author" tabindex="1" value="Name <?php if ($req) echo "(required)"; ?>" onfocus="if (this.value == 'Name (required)') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Name (required)';}" />
<input type="text" name="email" id="email" tabindex="2" value="Email <?php if ($req) echo "(required)"; ?>" onfocus="if (this.value == 'Email (required)') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email (required)';}" />
<input type="text" name="url" id="url" tabindex="3" value="Website (optional)" onfocus="if (this.value == 'Website (optional)') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Website (optional)';}" />
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

</div>
<div class="form-right">
<textarea rows="9" cols="10" name="comment" id="comment" tabindex="4" onfocus="if (this.value == 'Type your comment here...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type your comment here...';}">Type your comment here...</textarea>
<input type="image" name="submit" tabindex="5" src="<?php bloginfo('template_directory'); ?>/<?php woo_style_path(); ?>/img_leave_comment.gif" class="sb" />

</div>

<?php endif; // If logged in ?>

<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>


<?php endif; // if you delete this the sky will fall on your head ?>
<div class="fix"></div>
</div> <!-- end #form_wrap -->
</div> <!-- end #respond -->
