<?php
/*-----------------------------------------------------------------*
* Template Name: Portfolio
*-----------------------------------------------------------------*/

$options = webuza_get_options();

$cols = $options['wbz_portfolio_main_layout'];

switch( $cols ) {
    case 2:
        $_iconPlusSrc = get_template_directory_uri() .'/images/icons/ico-plus-90.png';
        $_iconLinkSrc = get_template_directory_uri() .'/images/icons/ico-link-90.png';
        $cols_word = 'two';
        break;
    case 3:
        $_iconPlusSrc = get_template_directory_uri() .'/images/icons/ico-plus-64.png';
        $_iconLinkSrc = get_template_directory_uri() .'/images/icons/ico-link-64.png';
        $cols_word = 'three';
        break;
    case 4:
        $_iconPlusSrc = get_template_directory_uri() .'/images/icons/ico-plus.png';
        $_iconLinkSrc = get_template_directory_uri() .'/images/icons/ico-link.png';
        $cols_word = 'four';
        break;
    default:
        $_iconPlusSrc = '';
        $_iconLinkSrc = '';
        $cols_word = 'three';
}

$register = 0;
?>

<?php
$post_type = 'portfolio';
$taxonomy = 'project-type';

$wp_query = new WP_Query( $portfolio );
$categories = get_categories(array(
    'type' => $post_type,
    'taxonomy' => $taxonomy
));
?>

<?php if($options['wbz_portfolio_sortable'] == 'yes'): ?>
    <div class="portfolio-filter-control">
        <div class="container">
            <ul id="portfolio-filters" class="pfc-item">
                <li>
                    <a class="active" href="#" data-filter="*" rel="">
                        <?php echo __( 'All', WEBUZA_THEME_NAME ); ?>
                        <i class="ico-default-bullet"></i>
                    </a>
                </li>

                <?php foreach( $categories as $category ): ?>
                    <li class="<?php echo strtolower( $category->name ); ?>">
                        <a href="#<?php echo strtolower( $category->name ); ?>" data-filter="<?php echo '.' .strtolower($category->name); ?>" rel="<?php echo strtolower($category->name); ?>">
                            <?php echo $category->name; ?>
                            <i class="ico-default-bullet"></i>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>


<div class="container">
    <div id="portfolio" class="portfolio-items p-list <?php echo $cols_word; ?>-col" data-fade="1">

        <?php $posts_per_page = '-1'; ?>

        <?php
        if( !empty( $options['wbz_portfolio_pagination']) && $options['wbz_portfolio_pagination'] == 'yes' ){
            $posts_per_page = ( !empty( $options['wbz_portfolio_posts_number'] ) ) ? $options['wbz_portfolio_posts_number'] : '-1';
        }

        $portfolio = array(
        'posts_per_page' => $posts_per_page,
        'post_type' => 'portfolio',
        'paged'=> $paged
        );

        $wp_query = new WP_Query( $portfolio );

        if( have_posts() ) : while( have_posts() ) : the_post();
        ?>

        <?php
            // Collect term classes
            $terms = wp_get_post_terms( $post->ID, $taxonomy );
            $term_classes = '';
            foreach($terms as $term){
                $term_classes .= $term->slug . ' ';
            }
        ?>


            <div class="item col-md-<?php echo 12/$cols; ?> col-sm-6 col-xs-12 <?php echo $term_classes; ?>">

                <figure class="widget-item">
                    <a href="#">
                        <div class="gallery-thumb">
                            <?php if( !empty( $custom_thumbnail) ){
                                echo '<img class="custom-thumbnail" src="' .$custom_thumbnail. '" alt="' .get_the_title(). '" />';
                            } else {
                                if ( has_post_thumbnail() ) {
                                    echo get_the_post_thumbnail($post->ID, 'portfolio-'. $cols .'x', array('title' => ''));
                                } else {
                                    echo '<img src="'.get_template_directory_uri().'/images/no-portfolio-item-'. $cols .'.jpg" alt="no image added yet." />';
                                }
                            } ?>
                            <b class="ico-zoom"></b>
                        </div>
                    </a>
                    <?php if( $cols != 4 ): ?>
                        <figcaption class="gallery-caption">
                            <h4 class="xmd-h"><?php the_title(); ?></h4>
                            <?php if( !empty( $options['wbz_portfolio_dates'] ) && $options['wbz_portfolio_dates'] == 'yes' ): ?>
                                    <time datetime="2014-12-12" class="pub-date"><?php the_time('d F Y'); ?></time>
                            <?php endif; ?>
                            <div class="lorem-caption">
                                <?php $_content = strip_shortcodes( $post->post_content ); ?>
                                <?php $_maxchar = ( $cols == 2 ) ? 250 : 150; ?>
                                <p><?php kama_excerpt( "maxchar=$_maxchar&text=$_content"); ?></p>
                            </div>
                        </figcaption>
                    <?php endif; ?>
                </figure>

            </div><!-- /.item -->

        <?php endwhile; endif; ?>

    </div><!-- /.portfolio-items -->
</div><!-- /.container -->