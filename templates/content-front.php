<?php

global $ss_framework;

while ( have_posts() ) : the_post();
	do_action( 'shoestrap_page_pre_content' );

	do_action( 'shoestrap_page_pre_content' );
		the_content();
		echo $ss_framework->clearfix();

	do_action( 'shoestrap_page_after_content' );

endwhile;