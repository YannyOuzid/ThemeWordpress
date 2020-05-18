
	<div class="container">
			<?php if (have_comments()) : ?>
				<h4> <?php comments_number( 'Aucun commentaire', 'Un commentaire', '% commentaires'); ?> </h4>
			</br>
				
				<?php wp_list_comments();?>	

			<?php endif; ?>

	<?php
		$comments_args = array(
			'label_submit' => 'Publier',
			'title_reply' =>'Publier un commentaire',
			'comment_notes_after' => '',
			'class' => 'form-control',
		);

		comment_form( $comments_args );
	?>

	</div>
