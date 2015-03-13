<?php

global $ss_framework;

echo '<article '; post_class('blog-article'); echo '>';

	echo '<div class="media ba-caption">';

		do_action( 'shoestrap_in_article_top' );

		echo '<div class="pull-left">';

			echo '<time datetime="'. get_the_date('Y-m-d') .'" class="item-pub-date">';
				echo '<span class="day">'. get_the_date('j') .'</span>';
				echo '<span class="month">'. get_the_date('M') .'</span>';
			echo '</time>';

		echo '</div>';

		echo '<div class="media-body">';

			shoestrap_title_section( false, 'h2', true, 'title-article' );

			if ( has_action( 'shoestrap_entry_meta_override' ) ) {
				do_action( 'shoestrap_entry_meta_override' );
			} else {
				do_action( 'shoestrap_entry_meta' );
			}

		echo '</div>';

	echo '</div>';

	echo '<div class="a-body">';
		echo '<p>'. apply_filters( 'shoestrap_do_the_excerpt', get_the_excerpt() ) .'</p>';
		echo $ss_framework->clearfix();
	echo '</div>';

	if ( has_action( 'shoestrap_entry_footer' ) ) {
		echo '<footer class="entry-footer">';
		do_action( 'shoestrap_entry_footer' );
		echo '</footer>';
	}

	do_action( 'shoestrap_in_article_bottom' );

echo '</article>';
