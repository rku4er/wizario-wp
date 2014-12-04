<?php
/*-----------------------------------------------------------------*
*   Template for post-type Link
*-----------------------------------------------------------------*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( !is_single() ): ?>
        <div class="post-content" >

            <div class="post-meta">
                <div class="date">
                    <span class="month-day"><?php the_time('m.d'); ?></span>
                    <span class="date-decor">&nbsp;</span>
                    <span class="year"><?php the_time('Y'); ?></span>
                </div>

                <div class="post-like">
                    <?php if( function_exists('webuza_love') ) webuza_love(); ?>
                </div>
            </div>

            <div class="content-inner">
                <?php $link = get_post_meta( $post->ID, '_webuza_link', true ); ?>
                <a target="_blank" href="<?php echo $link; ?>">
                    <div class="link-inner">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <span class="destination"><?php echo $link; ?></span>
                        <span class="icon"></span>
                    </div>
                </a>
            </div>

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
                <span class="month-day"><?php the_time('F j, Y'); ?></span><?php echo __('by', WEBUZA_THEME_NAME); ?> <?php the_author_posts_link(); ?>
                <div class="categories-ps"><?php the_category(', '); ?></div>
                <a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', WEBUZA_THEME_NAME), __('One Comment ', WEBUZA_THEME_NAME), __('% Comments', WEBUZA_THEME_NAME) ); ?></a>
            </div>
        </div>
        <?php $link = get_post_meta( $post->ID, '_webuza_link', true ); ?>

            <a target="_blank" href="<?php echo $link; ?>">
                <div class="link-inner">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <span class="destination"><?php echo $link; ?></span>
                    <span class="icon"></span>
                </div>
            </a>
    <?php endif; ?>

</article>