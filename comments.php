<?php if (have_comments()) : ?>
	<h4> <?php comments_number( 'No Comments', 'One Comment', '% Comments'); ?> </h4>
	<?php wp_list_comments(); ?>
<?php endif; ?>



<?php
	$comments_args = array(
		'label_submit' => 'Submit Comment',
		'title_reply' =>'Post a Comment',
		'comment_notes_after' => ''
	);

	comment_form( $comments_args );
?>