<?php
/*-----------------------------------------------------------------*
*   Template for post-type Quote
*-----------------------------------------------------------------*/
?>

<?php $quote = get_post_meta( $post->ID, '_webuza_quote', true ); ?>

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
                 <a href="<?php the_permalink(); ?>">
                     <div class="quote-inner">
                        <h2 class="title"><?php echo $quote; ?></h2>
                        <span class="author">&mdash; <?php echo the_title(); ?></span>
                        <span class="quotes">&#147;</span>
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
        <div class="clear"></div>
    </div>

    <div class="content-inner" style="padding-top: 20px;">
        <div class="quote-inner">
            <h2 class="title"><?php echo $quote; ?></h2>
            <span class="author">&mdash; <?php echo the_title(); ?></span>
            <span class="quotes">&#147;</span>
        </div>
    </div>
    <?php endif; ?>

</article>
