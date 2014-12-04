<?php
/*-----------------------------------------------------------------*
*   Portfolio Sidebar section
*-----------------------------------------------------------------*/
?>

<div class="sociable">
    <ul>
        <li class="post-like"><?php if( function_exists( 'webuza_love' ) ) webuza_love(); ?></li>

        <?php if( $options['wbz_portfolio_facebook_share'] == 'yes' ): ?>
            <li class="facebook-share"><a href="#" title="Share this"><i id="icon-facebook" class="icon-facebook icon-large"></i><span class="count">0</span></a></li>
        <?php endif; ?>

        <?php if( $options['wbz_portfolio_tweeter_share'] == 'yes' ): ?>
            <li class="twitter-share"><a href="#" title="Tweet this"><i id="icon-twitter" class="icon-twitter icon-large"></i><span class="count">0</span></a></li>
        <?php endif; ?>

        <?php if( $options['wbz_portfolio_google_share'] == 'yes' ): ?>
            <li class="google-share"><a href="#" title="Google this"><i id="icon-google-plus" class="icon-google-plus icon-large"></i><span class="count"><?php echo get_plusones( get_permalink() ); ?></span></a></li>
        <?php endif; ?>

    </ul>
</div>

<?php $_client_titles = get_post_meta( $post->ID, '_webuza_portfolio_client_title', true ); ?>
<?php $_client_links = get_post_meta( $post->ID, '_webuza_portfolio_client_link', true ); ?>

<?php
    $_ttmpp = '';
    $terms = get_the_terms( $post->id, "project-type" );
    $_projectCategories = NULL;
    if( !empty( $terms ) ){
        foreach ( $terms as $term ) {
            $_projectCategories .= $_ttmpp;
            $_projectCategories .= ucwords( $term->name );
            $_ttmpp = ', ';
        }
    }
?>

<?php if( isset( $_client_titles ) && $_client_titles != '' ){ $_titlesArray = explode ( ';', $_client_titles ); } else { $_titlesArray = 0; } ?>
<?php if( is_array( $_titlesArray ) ) { $_clientTitlesCount = count( $_titlesArray ); } else { $_clientTitlesCount = 0; } ?>
<?php if( isset( $_client_links ) && $_client_links != '' ){ $_linksArray = explode ( ';', $_client_links ); } ?>
<?php if( $options['wbz_portfolio_dates'] == 'yes' ): ?>
    <div class="date">
        <h6><?php echo __( 'Date:', WEBUZA_THEME_NAME ); ?></h6><?php the_time('d F, Y'); ?>
    </div>
<?php endif; ?>


<?php if( isset( $_projectCategories ) && $_projectCategories != '' ): ?>
<div class="categories">
    <h6><?php echo __( 'Categories:', WEBUZA_THEME_NAME ); ?></h6>
    <?php echo $_projectCategories; ?>
</div>
<?php endif; ?>


<?php if( isset( $_titlesArray ) && $_clientTitlesCount != 0 ): ?>
<div class="client">
    <h6><?php echo __( 'Client:', WEBUZA_THEME_NAME ); ?></h6>
    <?php for( $cp = 0; $cp <= $_clientTitlesCount; $cp++ ): ?>

        <?php if( isset( $_titlesArray[$cp] ) && ( isset( $_linksArray[$cp] ) ) && $_linksArray[$cp] != '' ): ?>
            <a href="<?php echo $_linksArray[$cp]; ?>" title="<?php echo $_titlesArray[$cp]; ?>">
                <?php echo $_titlesArray[$cp]; ?>
            </a>
            <?php if( isset( $_titlesArray[$cp + 1] ) ) { echo ', '; } ?>

        <?php elseif( isset( $_titlesArray[$cp] ) && ( isset( $_linksArray[$cp] ) ) && $_linksArray[$cp] == ''): ?>
            <?php echo $_titlesArray[$cp]; ?>
            <?php if( isset( $_titlesArray[$cp + 1] ) ) { echo ', '; } ?>
        <?php endif; ?>

    <?php endfor; ?>
</div>
<?php endif; ?>