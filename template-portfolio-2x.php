<?php

/* Template Name: Portfolio 2 Columns */

get_header();

$options = webuza_get_options();

$span_num = 3;
$_iconPlusSrc = get_template_directory_uri() .'/images/icons/ico-plus-90.png';
$_iconLinkSrc = get_template_directory_uri() .'/images/icons/ico-link-90.png';
$register = 0;
?>

    <script>
        jQuery(document).ready(function($){

            var $container = $('#portfolio');
            $(window).load(function(){
                $container.isotope({
                    itemSelector: '.element',
                    resizable: false
                });

                //fade in
                if($('#portfolio').attr('data-fade') == 1) {
                    $('#portfolio-loading').stop(true,true).fadeOut(300);
                    $('#portfolio.portfolio-items .col.span_2').css('opacity',0);
                    $('#portfolio.portfolio-items .col.span_2').each(function(i){
                        $(this).delay(i*150).animate({'opacity':1},350);
                    });
                }

            });

            // filter items when filter link is clicked
            $('#portfolio-filters ul li a').click(function(){
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                //active classes
                $('#portfolio-filters ul li a').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $('#portfolio-filters > a').click(function(){
                return false;
            });

            $(window).smartresize(function(){
                $container.isotope({

                });
            });

            //clean up footer padding
            if( $('.call-to-actions').length > 0 ){ $('.call-to-actions').css('margin-top','9px'); }
            else { $('#footer-outer').css('margin-top','9px'); }

        });
    </script>


<?php
$wp_query = new WP_Query( $portfolio );
$categories = get_categories(array(
    'type' => 'portfolio',
    'taxonomy' => 'project-type'
));
?>


<?php if($options['wbz_portfolio_sortable'] == 'yes'): ?>
    <div id="portfolio-filter-cont">
        <div id="portfolio-filters">
            <ul>
                <li><a class="active" href="#" data-filter="*" rel=""><?php echo __( 'All', WEBUZA_THEME_NAME ); ?><span class="portfolio-selectrd">&nbsp;</span></a></li>

                <?php foreach( $categories as $category ): ?>
                    <li class="<?php echo strtolower($category->name); ?>" style="display: none;">
                        <a href="#<?php echo strtolower($category->name); ?>" data-filter="<?php echo '.' .strtolower($category->name); ?>" rel="<?php echo strtolower($category->name); ?>">
                            <?php echo $category->name; ?>
                            <span class="portfolio-selectrd">&nbsp;</span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>



    <div class="container main-content port-content2">
        <div class="separator-class-x2">&nbsp;</div>
        <div class="row-portfolio row-x2">

            <div id="portfolio" class="portfolio-items" data-fade="1">

                <?php $posts_per_page = '-1'; ?>

                <?php if( !empty( $options['wbz_portfolio_pagination']) && $options['wbz_portfolio_pagination'] == 'yes' ){
                    $posts_per_page = ( !empty( $options['wbz_portfolio_posts_number'] ) ) ? $options['wbz_portfolio_posts_number'] : '-1';
                }

                $portfolio = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'portfolio',
                    'paged'=> $paged
                );

                $wp_query = new WP_Query( $portfolio );

                if( have_posts() ) : while( have_posts() ) : the_post();

                    $terms = get_the_terms( $post->id,"project-type" );
                    $project_cats = NULL;

                    if( !empty( $terms ) ){
                        foreach ( $terms as $term ) {
                            $project_cats .= strtolower( $term->slug ). ' '; ?>
                            <script type="text/javascript">jQuery("#portfolio-filters ul li.<?php echo strtolower( $term->name ); ?>").css('display','inline-block');</script>
                        <?php    }
                    } ?>

                    <div class="element col span_2 <?php echo $project_cats; ?>" data-project-cat="<?php echo $project_cats; ?>" style="opacity: 0;">
                        <div class="work-item">

                            <div class="portfolio-image-x2">
                                <?php if( !empty( $custom_thumbnail) ){
                                    echo '<img class="custom-thumbnail" src="' .$custom_thumbnail. '" alt="' .get_the_title(). '" />';
                                } else {
                                    if ( has_post_thumbnail() ) {
                                        echo get_the_post_thumbnail($post->ID, 'portfolio-2x', array('title' => ''));
                                    } else {
                                        echo '<img src="'.get_template_directory_uri().'/images/no-portfolio-item-2.jpg" alt="no image added yet." />';
                                    }
                                } ?>

                                <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>


                                <div class="image-hovered">
                                    <a href="<?php echo $large_image_url[0]; ?>" data-lightbox="<?php echo $post->ID .'-large'; ?>" ><img class="ico-plus" src="<?php echo $_iconPlusSrc; ?>" alt="" /></a>
                                    <a href="<?php echo $post->guid; ?>"><img class="ico-link" src="<?php echo $_iconLinkSrc; ?>" alt="" /></a>
                                </div>
                                <div class="triangle"></div>
                            </div>
                        </div><!-- /work-item -->

                        <div class="work-meta">
                            <h4 class="title"><?php the_title(); ?></h4>
                            <?php if( !empty( $options['wbz_portfolio_dates'] ) && $options['wbz_portfolio_dates'] == 'yes' ): ?>
                                <span class="port_the_time"><?php the_time('d F Y'); ?></span>
                            <?php endif; ?>
                            <p style="opacity: 0;">
                                <?php $_content = strip_shortcodes( $post->post_content ); ?>
                                <?php $_maxchar =  250;?>
                                <?php kama_excerpt( "maxchar=$_maxchar&text=$_content"); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; endif; ?><div class="clear">&nbsp;</div>
            </div><!--/portfolio-->
        </div>

        <div class="clear"></div>
        <div class="separator-class2">&nbsp;</div>

        <!-- ~~ Portfolio Pagination ~~ -->
        <?php if( !empty($options['wbz_portfolio_pagination']) && $options['wbz_portfolio_pagination'] == 'yes' ){

            global $wp_query, $wp_rewrite;

            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
            $total_pages = $wp_query->max_num_pages;

            $permalink_structure = get_option( 'permalink_structure' );
            $format = empty( $permalink_structure ) ? '&paged=%#%' : 'page/%#%/';
            if( $total_pages > 1 ){
                echo '<div id="pagination">';
                echo paginate_links(array(
                    'base' => get_pagenum_link( 1 ) .'%_%',
                    'format' => $format,
                    'current' => $current,
                    'total' => $total_pages,
                ));
                echo  '</div>';
            }
        } else {
            if( get_next_posts_link() || get_previous_posts_link() ) {
                echo '<div id="pagination">';
                if( get_previous_posts_link() ) echo '<div class="prev">'.get_previous_posts_link('&laquo; Previous Entries').'</div>';
                if( get_next_posts_link() ) echo '<div class="next">'.get_next_posts_link('Next Entries &raquo;','').'</div>';
                echo '</div>';
            }
        }  ?>
        <!-- ~~ Portfolio Pagination ~~ -->
    </div><!--/container-->

<?php get_footer(); ?>