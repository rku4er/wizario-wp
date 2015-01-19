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




/*<article class="blog-article">
	<div class="media ba-caption">
		<div class="pull-left">

			<time datetime="2014-10-10" class="item-pub-date">
				<span class="day">30</span>
				<span class="month">Aug</span>
			</time>

		</div>
		<div class="media-body">
			<h3 class="title-article">Post with custom image</h3>
			<ul class="meta-post">
				<li class="firstItem"><time class="bright-col" datetime="2014-12-12">13 August</time> <span class="bridge-col">by dv-support</span></li>
				<li><span class="bridge-col">News, Places, Wizard</span></li>
				<li><span class="bright-col">132 Comments</span></li>
				<li class="lastItem"><a class="mp-comment" href=""><i class="fa fa-heart"></i><span class="bridge-col">214</span></a></li>
			</ul>
			<b class="type-post pic-post"></b>
		</div>
	</div>
	<div class="a-body">
		<figure class="ab-thumb">
			<img alt="" src="img/staticks/image13.jpg">
		</figure>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa.</p>
		<a class="read-more" href="">Continue reading &gt;</a>
	</div>
</article>*/