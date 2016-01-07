
<div class="comments">

	<center>
		<?php do_action( 'wordpress_social_login' ); ?>
	<?php 
		$comments_args = array (
			'label_submit'=>'SUBMIT',
			'title_reply' => 'Post a Comment',
			'comment_notes_after' => '',
			  'logged_in_as' => '',
			   'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . 
    '</label><textarea id="comment" name="comment" aria-required="true">' .
    '</textarea></p>',
    	'comment_notes_before' => ''

			);

		comment_form($comments_args);

	?>
	</center>

	<?php if(have_comments()) : ?>
	<br><br><br>
		<?php comments_number('No Comments', '1 Comment', '% Comments' );?>
		<br><br>
		<?php wp_list_comments('callback=custom_comments'); ?>
		<input name="comment_post_ID" value="1" type="hidden">
	<?php endif; ?>
</div> 
