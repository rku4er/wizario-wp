<?php

/*-----------------------------------------------------------------*
* Template Name: Page - Blog Without Sidebar
*-----------------------------------------------------------------*/

get_header();

$post = get_post( 37 );
?>

<div class="container main-content ">
    <div class="row">
        <div id="post-area" class="col_main col_12">

            <article id="post-37" class="post-37 post type-post status-publish format-gallery hentry category-places category-stories tag-layout tag-wizard">

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

                    <h1>Post without sidebar</h1>

                    <div id="single-header">
                        <span class="month-day">September 30, 2012</span> by
                        <a rel="author" title="Posts by dv-support" href="http://webuza.com/demo/wp/wizario/?author=1">dv-support</a>
                        <div class="categories-ps">
                            <a rel="category" title="View all posts in Places" href="http://webuza.com/demo/wp/wizario/?cat=27">Places</a>,
                            <a rel="category" title="View all posts in Stories" href="http://webuza.com/demo/wp/wizario/?cat=28"> Stories</a>
                        </div>
                        <a href="http://webuza.com/demo/wp/wizario/?p=37#comments">No Comments</a>
                    </div>
                </div>

                <?php webuza_gallery( $post->ID ); ?>

                <div class="single-container">
                    <div class="sociable">
                        <ul>
                            <li class="post-like"><?php if( function_exists('webuza_love') ) webuza_love(); ?></li>
                            <li class="facebook-share"><a href="#" title="Share this"><i id="icon-facebook" class="icon-facebook icon-large"></i><span class="count">0</span></a></li>
                            <li class="twitter-share"><a href="#" title="Tweet this"><i id="icon-twitter" class="icon-twitter icon-large"></i><span class="count">0</span></a></li>
                            <li class="google-share"><a href="#" title="Google this"><i id="icon-google-plus" class="icon-google-plus icon-large"></i><span class="count"><?php echo get_plusones( get_permalink() ); ?></span></a></li>
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