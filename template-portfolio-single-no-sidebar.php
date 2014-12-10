<?php
/*-----------------------------------------------------------------*
* Template Name: Single Portfolio (Without Sidebar)
*-----------------------------------------------------------------*/


get_header(); ?>

<?php if (function_exists('get_breadcrumbs')) get_breadcrumbs(); ?>

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

            <div id="portfolio-data" class="col col_12 col_last">

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


                <div id="portfolio-sidebar" class="col col_4">
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

                    <div id="portfolio-content">
                        <?php the_content(); ?>
                    </div>

                </div>

                <?php// if(!empty($extra_content)): ?>
                    <div id="portfolio-extra" class="col col_8 col_last" >
                        <?php //echo do_shortcode( $extra_content ); ?>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        <br />
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                <?php //endif; ?>

                <div class="clear"></div>

                <div class="comments-section">
                    <?php comments_template(); ?>
                </div>

            </div>

            <?php endwhile; endif; ?>

        </div>

    </div>

<?php get_footer(); ?>