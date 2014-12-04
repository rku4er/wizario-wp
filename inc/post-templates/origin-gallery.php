<?php
/*-----------------------------------------------------------------*
*   Template for post-type Gallery
*-----------------------------------------------------------------*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( !is_single() ): ?>

        <div class="post-content" >
            <div class="post-meta">

                <div class="date">
                    <span class="month-day"><?php the_time( 'm.d' ); ?></span>
                    <span class="date-decor">&nbsp;</span>
                    <span class="year"><?php the_time('Y'); ?></span>
                </div>

                <div class="post-like">
                    <?php if( function_exists('webuza_love') ) webuza_love(); ?>
                </div>

            </div>

            <div class="content-inner">

                <div class="post-header">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_author_posts_link(); ?>
                    <div class="categories-ps"><?php the_category(', '); ?></div>
                    <a href="<?php comments_link(); ?>">
                        <?php comments_number( __( 'No Comments', WEBUZA_THEME_NAME ), __( 'One Comment ', WEBUZA_THEME_NAME ), __( '% Comments', WEBUZA_THEME_NAME ) ); ?>
                    </a>
                </div>

            </div>


            <?php if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'second-slide' ) ): ?>
                <?php webuza_gallery( $post->ID ); ?>
            <?php else: ?>

                <?php if ( has_post_thumbnail() ): ?>
                    <a class="post-featured-img" href="<?php echo get_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'title' => '' ) ); ?>
                    </a>
                <?php endif; ?>

            <?php endif; ?>

            <?php the_excerpt(); ?>

        </div>

    <?php endif; ?>


    <?php if( is_single() ): ?>

        <div class="post-header single-post">

            <div class="navigation">
                <ul>
                    <li id="prev-item"><?php previous_post_link('%link'); ?></li>
                    <li id="next-item"><?php next_post_link('%link'); ?></li>
                </ul>
            </div>

            <h1><?php wp_title("",true); ?></h1>

            <div id="single-header">

                <span class="month-day"><?php the_time('F j, Y'); ?></span><?php echo __( 'by', WEBUZA_THEME_NAME ); ?> <?php the_author_posts_link(); ?>
                <div class="categories-ps"><?php the_category(', '); ?></div>
                <a href="<?php comments_link(); ?>"><?php comments_number( __( 'No Comments', WEBUZA_THEME_NAME ), __( 'One Comment ', WEBUZA_THEME_NAME ), __( '% Comments', WEBUZA_THEME_NAME ) ); ?></a>

            </div>

        </div>

        <?php if( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'second-slide' ) ): ?>

            <?php webuza_gallery( $post->ID ); ?>

        <?php else: ?>

            <?php if ( has_post_thumbnail() ): ?>

                <a class="post-featured-img" href="<?php echo get_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'title' => '' ) ); ?>
                </a>

            <?php endif; ?>

        <?php endif; ?>

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
                <?php the_content(); ?>
            </div>

        </div>
    <?php endif; ?>

</article>