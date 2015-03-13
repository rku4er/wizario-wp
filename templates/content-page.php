<?php

global $ss_framework;

while ( have_posts() ) : the_post();
	do_action( 'shoestrap_page_pre_content' );

	echo '<div class="entry-content">';
		the_content();
		echo $ss_framework->clearfix();
	echo '</div>';

	do_action( 'shoestrap_page_after_content' );
endwhile;