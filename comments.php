	<?php if ( have_comments() ) : ?>
	<br>
	<hr>
	<?php endif; ?>

	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php echo 'This post is password protected. Enter the password to view any comments.', 'wpeden'; ?></p>
	</div><!-- #comments -->
	<?php
 
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<small><span class="glyphicon glyphicon-bullhorn"></span></small>
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'wpeden' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'wpeden' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link(  '&larr; Previous Comments' ); ?></div>
			<div class="nav-next"><?php next_comments_link(  'Next Comments &rarr;' ); ?></div>
		</nav>
		<?php endif; ?>
		
		<div>
		<!--<ul class="commentlist">-->
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use sensitive_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define sensitive_comment() and that will be used instead.
				 * See sensitive_comment() in wpeden/functions.php for more.
				 */
				//wp_list_comments(array('avatar_size'=>64, 'reply_text'=>'<span class="glyphicon glyphicon-send"></span> Reply')); 
				wp_list_comments('type=comment&callback=mytheme_comment&reply_text=<span class="glyphicon glyphicon-send"></span> Reply');
			?>
		<!--</ul>-->
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'wpeden' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link(  '&larr; Older Comments' ); ?></div>
			<div class="nav-next"><?php next_comments_link('Newer Comments &rarr;' ); ?></div>
		</nav>
		<?php endif; ?>

	<?php	 
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php echo 'Comments are closed.'; ?></p>
	<?php endif; ?>

	<?php
	/* Tentando customizar o form */
	$args = array(
	'fields' => apply_filters(
		'comment_form_default_fields', array(
			'author' =>'<p class="comment-form-author">' . '<input id="author" class="form-control" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
				'<label for="author">' . __( 'Your Name' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' )  .
				'</p>'
				,
			'email'  => '<p class="comment-form-email">' . '<input id="email" class="form-control" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ' />'  .
				'<label for="email">' . __( 'Your Email' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' ) 
				 .
				'</p>',
			'url'    => '<p class="comment-form-url">' .
			 '<input id="url" name="url" class="form-control" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
			'<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
	           '</p>'
		)
	),
	'comment_field' => '<p class="comment-form-comment">' .
		'<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
		'<textarea id="comment" name="comment" class="form-control" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="70" rows="7" aria-required="true"></textarea>' .
		'</p>',
    'comment_notes_after' => '',
    'title_reply' => '<div><h2><small><span class="glyphicon glyphicon-console"></span></small> Post Your Comments & Reviews</h2></div>'
);
	?>
	<br>
	<hr>
	<?php comment_form($args); ?>
	<br><br>

</div><!-- #comments -->

<script>
	var btnSubmit = document.getElementById("submit");
	if (submit){
		submit.className = "btn btn-info";		
	}
</script>
