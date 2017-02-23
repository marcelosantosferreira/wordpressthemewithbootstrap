<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'comBootstrap' ),
    'secondary' => __( 'Secondary Menu', 'comBootstrap' )
) );
?>
<?php
/*
Customizing the Comment List
*/
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	

	<li <?php comment_class(); ?> style='list-style: none;' id="li-comment-<?php comment_ID() ?>">
	
	<div class="panel_ panel-primary" id="comment-<?php comment_ID(); ?>">
		<!--
        <div class="panel-heading">
            <h3 class="panel-title">
			<?php printf(__('%s'), get_comment_author_link()) ?>
			</h3>
        </div>-->
        <div class="panel-body">
			<div class="media">
				<div class="media-left">
					<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
				</div>
				<div class="media-body">
					<?php printf(__('%s'), get_comment_author_link()) ?>
					<br>
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
					<?php edit_comment_link(__('(Edit)'),'  ','') ?>
				</div>
			</div>
			<p><?php comment_text() ?></p>
		</div>
        
		<div class="panel-footer clearfix">
			<div class="pull-right">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
			<span class="glyphicon glyphicon-hand-right"></span> <em><?php _e('Your comment is awaiting moderation.') ?></em>
			<?php endif; ?>
		</div>
    </div>
	</li>
<?php
    }

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}

function catch_that_image_oustide_loop($some_id) {
	$fetch_content = get_post($some_id);
	$content_to_search_through = $fetch_content->post_content;
	$first_img = ”;
	ob_start();
	ob_end_clean();
	//echo "<!-- " . $content_to_search_through . " -->";
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content_to_search_through, $matches);
		//preg_match_all(‘//i’, $content_to_search_through, $matches);
	$first_img = $matches[1][0];

	if(empty($first_img)) {
	$first_img = “”;
	}
	return $first_img;
}// Catch that image outside the loop
?>