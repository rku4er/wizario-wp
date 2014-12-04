<?php

global $ss_framework;

while ( have_posts() ) : the_post();

		the_content();

endwhile;