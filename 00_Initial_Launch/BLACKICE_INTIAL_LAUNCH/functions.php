<?php

// function wpse52737_enqueue_comment_reply_script() {
//     if ( get_option( 'thread_comments' ) ) {
//         wp_enqueue_script( 'comment_reply' );
//     }
// }
// add_action( 'comment_form_before', 'wpse52737_enqueue_comment_reply_script' );

function resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resources');

//Nav menus
register_nav_menus(array(

	'primary' => __('Primary Menu'),
	'footer' =>__('Footer Menu'),



	));
add_filter('postmeta_form_limit', 'customfield_limit_increase');
function customfield_limit_increase($limit) {
  $limit = 100;
  return $limit;
}

/*Get rid of name, email, url fields from comments*/
function remove_comment_fields($fields) {
	unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_comment_fields');


function custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
<!-- 	  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
 -->	      <!-- <div id="comment-<?php comment_ID(); ?>"> -->
 			<div class="single_comment">
	          	<div class="comment-author-vcard">
	              <?php echo get_avatar($comment, $size='50'); ?>
	              <div class="time"><i>	<?php printf(__('%1$s , %2$s'), get_comment_date(), get_comment_time() ) ?> </i></div>
	             <!--  <?php printf (__('<cite_class="fn">%s</cite> '), get_comment_author_link()) ?> -->
	    		</div>
	          
	          	<?php if ($comment->comment_approved =='0') : ?>
	          	<?php _e('Your comment is awaiting moderation.') ?> 
	          	<br />
	          	<?php endif; ?>
	          
	          	<div class="comment-meta commentmetadata">
	          		<!-- <a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>"> -->
	          	<!-- 	<i>	<?php printf(__('%1$s , %2$s'), get_comment_date(), get_comment_time() ) ?> </i> -->
	          		<!-- </a>  -->
	          <!-- 		<?php edit_comment_link(__(' [Edit] '), '   ', ' ') ?>  -->
	          	</div>                            
				<div class="comment_text">	          
	          	<?php comment_text() ?>
	          </div>
	         	 <div class="reply">
	            	  <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))) ?> 
	          	</div>
	          </div>
	     <?php
}
function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

function my_scripts_method() {
   // register your script location, dependencies and version
   wp_register_script('toggle_script',
       get_template_directory_uri() . '/js/accordian.js',
       array('jquery'),
       '1.0' );
   // enqueue the script
   wp_enqueue_script('toggle_script');
 }
  add_action('wp_enqueue_scripts', 'my_scripts_method');

  ?>