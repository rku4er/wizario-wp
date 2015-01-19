<?php

global $ss_framework;

while ( have_posts() ) : the_post();

	echo '<article class="full-page-blog ' . implode( ' ', get_post_class() ) . '">';

		do_action( 'shoestrap_single_top' );

		echo '<div class="media ba-caption ba-control">';

			echo '<div class="media-body">';
				shoestrap_title_section( false, 'h2', false, 'title-article' );
				do_action( 'shoestrap_entry_meta' );

				echo '<div class="page-navigation">';
					echo '<a class="p-control" href=""><i class="fa fa-angle-left"></i></a>';
					echo '<a class="p-control" href=""><i class="p-close-back"></i></a>';
					echo '<a class="p-control" href=""><i class="fa fa-angle-right"></i></a>';
				echo '</div>';

			echo '</div>';
		echo '</div>';


		echo '<div class="a-body">';
			do_action( 'shoestrap_single_pre_content' );
			the_content();
			echo $ss_framework->clearfix();
			do_action( 'shoestrap_single_after_content' );
		echo '</div>';

		echo '<footer>';
			shoestrap_meta( 'cats' );
			shoestrap_meta( 'tags' );
			wp_link_pages( array(
				'before' => '<nav class="page-nav"><p>' . __('Pages:', 'shoestrap'),
				'after'  => '</p></nav>'
			) );
		echo '</footer>';

		// The comments section loaded when appropriate
		if ( post_type_supports( 'post', 'comments' ) ) {
			do_action( 'shoestrap_pre_comments' );

			if ( ! has_action( 'shoestrap_comments_override' ) ) {
				comments_template( '/templates/comments.php' );
			} else {
				do_action( 'shoestrap_comments_override' );
			}

			do_action( 'shoestrap_after_comments' );
		}

		do_action( 'shoestrap_in_article_bottom' );
	echo '</article>';
endwhile;
