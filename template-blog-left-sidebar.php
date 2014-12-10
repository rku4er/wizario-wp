<?php

/*-----------------------------------------------------------------*
* Template Name: Page - Blog Left Layout
*-----------------------------------------------------------------*/

get_header(); ?>

<?php
$options = get_post_custom( get_the_ID() );
if(isset($options['custom_sidebar'])) {
    $sidebar_choice = $options['custom_sidebar'][0];
}else{
    $sidebar_choice = "default";
}
?>

<div class="container main-content ">
    <div class="row">

        <div id="sidebar" class="col_main col_4 align-main-left" style="padding-top: 24px;">
            <?php if( $sidebar_choice && $sidebar_choice != "default" ) get_sidebar( "custom" ); else get_sidebar(); ?>
        </div>

        <div id="post-area" class="col_main col_8">
            <article id="post-31" class="post-31 post type-post status-publish format-standard hentry category-news category-places category-wizard-2 tag-architecture tag-custom tag-trands">

                <div class="post-header single-post">
                    <div class="navigation">
                        <ul>
                            <li id="prev-item">
                                <a rel="prev" href="#">&nbsp;</a>
                            </li>
                            <li id="next-item">
                                <a rel="next" href="#">&nbsp;</a>
                            </li>
                        </ul>
                    </div>

                    <h1>Post with custom sidebar, left layout</h1>

                    <div id="single-header">

                        <span class="month-day">October 29, 2013</span> by <a rel="author" title="Posts by dv-support" href="http://webuza.com/demo/wp/wizario/?author=1">dv-support</a>
                        <div class="categories-ps">
                            <a rel="category" title="View all posts in News" href="http://webuza.com/demo/wp/wizario/?cat=26">News</a>,
                            <a rel="category" title="View all posts in Places" href="http://webuza.com/demo/wp/wizario/?cat=27"> Places</a>,
                            <a rel="category" title="View all posts in Wizard" href="http://webuza.com/demo/wp/wizario/?cat=25"> Wizard</a>
                        </div>
                        <a href="http://webuza.com/demo/wp/wizario/?p=31#comments">No Comments</a>
                    </div>
                </div>

                <a class="post-featured-img" href="http://webuza.com/demo/wp/wizario/?p=31">
                    <img class="attachment-full wp-post-image" width="1400" height="672" title="" alt="flat-iphone-5s-mockup" src="http://webuza.com/demo/wp/wizario/wp-content/uploads/2013/10/flat-iphone-5s-mockup.jpg">
                </a>


                <div class="single-container">
                    <div class="sociable">
                        <ul>
                            <li class="post-like">
                                <a id="webuza-love-31" class="webuza-love" title="Love this" href="#">
                                    <i id="icon-heart" class="icon-heart"></i>
                                    <span class="webuza-love-count">2</span>
                                </a>
                            </li>
                            <li class="facebook-share">
                                <a title="Share this" href="#">
                                    <i id="icon-facebook" class="icon-facebook icon-large"></i>
                                    <span class="count">0</span>
                                </a>
                            </li>
                            <li class="twitter-share">
                                <a title="Tweet this" href="#">
                                    <i id="icon-twitter" class="icon-twitter icon-large"></i>
                                    <span class="count">0</span>
                                </a>
                            </li>
                            <li class="google-share">
                                <a title="Google this" href="#">
                                    <i id="icon-google-plus" class="icon-google-plus icon-large"></i>
                                    <span class="count">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>
                        <p> </p>
                        <p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>
                    </div>
                </div>
            </article>

            <div class="comments-section">
                <?php comments_template(); ?>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>




