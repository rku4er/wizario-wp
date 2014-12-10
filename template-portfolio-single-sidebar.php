<?php
/*-----------------------------------------------------------------*
* Template Name: Single Portfolio (With Sidebar)
*-----------------------------------------------------------------*/

get_header(); ?>

<?php if (function_exists('get_breadcrumbs')) : ?>
    <?php get_breadcrumbs(); ?>
<?php endif; ?>

<?php $options = webuza_get_options(); ?>

    <div class="container main-content">

        <div class="post-header single-portfolio">
            <h2><?php the_title(); ?></h2>

            <?php $_portfolioLink = get_portfolio_page_link( get_the_ID() ); ?>
            <div class="navigation">
                <ul>
                    <li id="prev-item"><?php next_post_link('%link'); ?></li>
                    <li id="all-items"><a href="<?php echo $_portfolioLink; ?>">Back to All Portfolio Items</a></li>
                    <li id="next-item"><?php previous_post_link('%link'); ?></li>
                </ul>
            </div>
        </div>

        <div class="row">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div id="portfolio-data" class="col col_8 align-item-left">

                <?php
                $video_embed = get_post_meta( $post->ID, '_webuza_video_embed', true );
                $video_m4v = get_post_meta( $post->ID, '_webuza_video_m4v', true );

                /***** Gallery *****/
                if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'second-slide' ) ) { webuza_gallery( $post->ID ); }

                /***** Video *****/
                else if( !empty( $video_embed ) || !empty( $video_m4v ) ){
                    if( !empty( $video_embed ) ) {
                        echo '<div class="video-wrap">' . stripslashes(htmlspecialchars_decode( $video_embed )) . '</div>';
                    } else {
                        webuza_video( $post->ID );
                    }
                }

                /***** Featured Image *****/
                else if ( has_post_thumbnail() ) {
                    echo get_the_post_thumbnail( $post->ID, 'full', array( 'title' => '' ) );
                } else {
                    echo '<img src="'. get_template_directory_uri(). '/images/no-portfolio-item-max.jpg" alt="no image" />';
                }
                ?>

                <div id="portfolio-extra">
                    <p>
                        <a href="http://dvsrv.dyndns.org:31213/demo/htdocs/wp-content/uploads/2013/12/jelly-scroll-js1.jpg"><img src="http://dvsrv.dyndns.org:31213/demo/htdocs/wp-content/uploads/2013/12/jelly-scroll-js1.jpg" alt="jelly-scroll-js" width="1400" height="672" class="alignnone size-full wp-image-983" /></a>
                    </p>
                </div>

                <div class="comments-section">
                    <?php comments_template(); ?>
                </div>

            </div>

            <div id="portfolio-sidebar" class="col col_4 align-item-right col_last">
                <div class="sociable">
                    <ul>
                        <li class="post-like"><?php if( function_exists('webuza_love') ) webuza_love(); ?></li>
                        <li class="facebook-share"><a href="#" title="Share this"><i id="icon-facebook" class="icon-facebook icon-large"></i><span class="count">0</span></a></li>
                        <li class="twitter-share"><a href="#" title="Tweet this"><i id="icon-twitter" class="icon-twitter icon-large"></i><span class="count">0</span></a></li>
                        <li class="google-share"><a href="#" title="Google this"><i id="icon-google-plus" class="icon-google-plus icon-large"></i><span class="count"><?php echo get_plusones( get_permalink() ); ?></span></a></li>
                    </ul>
                </div>
                <div class="date">
                    <h6><?php echo __( 'Date:', WEBUZA_THEME_NAME ); ?></h6><?php the_time('d F, Y'); ?>
                </div>
                <div class="categories">
                    <h6><?php echo __( 'Categories:', WEBUZA_THEME_NAME ); ?></h6>
                    <?php echo 'Illustrations, Print'; ?>
                </div>
                <div class="client">
                    <h6><?php echo __( 'Client:', WEBUZA_THEME_NAME ); ?></h6>
                    <a title="google" href="http://www.google.com.ua"> John Doe </a>
                </div>

            </div>

            <div id="portfolio-content" class="col col_4 align-item-right col_last">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>

        <?php endwhile; endif; ?>

        </div>

    </div>

<?php get_footer(); ?>