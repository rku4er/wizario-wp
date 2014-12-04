<?php
// Revslider
function shoestrap_show_revslider( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            //'text_color' => __( 'Text Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $assets = SHOESTRAP_ASSETS_URL;

    $content = <<<EODHTML

        <section class="revo-block">
            <div id="trigger-parallax_1"></div>
            <div class="tp-banner-container">
                <div class="rev_banner">
                 <ul class="tp-banner has-parallax" id="has-ctxParallax">

                        <!-- slide 1 -->
                        <li data-transition="boxfade" data-slotamount="5" data-masterspeed="700" data-thumb="$assets/img/staticks/image01.jpg" id="big-img">
                            <img src="$assets/img/staticks/image01.jpg" alt="" >
                            <div class="container fluid-slide-container">
                                <div class="tp-parallax-container">
                                    <div class="caption sft " data-x="0" data-y="0" data-speed="700" data-start="450" data-easing="easeOutBack">
                                        <div class="mark-sm-title">
                                            First step - Wizard Plugin
                                        </div>
                                    </div>

                                    <div class="caption sft" data-x="0" data-y="0" data-speed="700" data-start="550" data-easing="easeOutBack">
                                        <h1 class="lg-title-slide">
                                            Do you want <br> something new?
                                        </h1>
                                    </div>
                                    <div class="btn-group-slide">
                                        <div class="btn-link-block">
                                            <div class="caption sfl" data-x="0" data-y="0" data-speed="700" data-start="750">
                                                <a href="#" class="waves-effect js-has-link waves-button btn btn-primary">How it work?</a>
                                            </div>
                                        </div>
                                        <div class="btn-link-block">
                                            <div class="caption sfr" data-x="0" data-y="0" data-speed="700" data-start="750">
                                                <a href="#" class="waves-effect js-has-link waves-button btn btn-icon btn-default"><span class="icon-btn"><i class="fa fa-cloud-download"></i></span>Sales page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- slide 2 -->
                        <li data-transition="slotslide-vertical" data-slotamount="5"  data-masterspeed="700" data-thumb="$assets/img/staticks/image08.jpg" >
                            <img src="$assets/img/staticks/image08.jpg" alt="">
                            <div class="container fluid-slide-abs-container">
                                <div class="flex-type-slide">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tp-parallax-container">
                                                <div class="caption sft" data-x="0" data-y="0" data-speed="2200" data-start="200" data-easing="easeOutBack">
                                                    <div class="wh-mark-sm-title">
                                                        First step - Wizard Plugin
                                                    </div>
                                                </div>
                                                <div class="caption sft" data-x="0" data-y="0" data-speed="2200" data-start="400" data-easing="easeOutBack">
                                                    <h2 class="md-title-slide">Do you want something new?</h2>
                                                </div>
                                                <div class="caption sft" data-x="0" data-y="0" data-speed="2200" data-start="600" data-easing="easeOutBack">
                                                    <div class="exerpt-slide">
                                                        <p>Try Wizario with Wizard plugin. It is add-on for the popular Revolution Slider, which makes a variety for design and control of you Slides.</p>
                                                    </div>
                                                </div>
                                                <div class="btn-left-group-slide">
                                                    <div class="btn-link-block">
                                                        <div class="caption sfl" data-x="0" data-y="0" data-speed="1000" data-start="600">
                                                            <a href="#" class="waves-effect js-has-link waves-button btn btn-primary">How it work?</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-link-block">
                                                        <div class="caption sfr" data-x="0" data-y="0" data-speed="1000" data-start="600">
                                                            <a href="#" class="waves-effect js-has-link waves-button btn btn-default">Sales page</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 hidden-xs">
                                            <div class="img-caption-slide">
                                                <img src="$assets/img/ugly-fish.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                 </ul>
                 <!-- <div class="tp-bannertimer"></div> -->
                </div>
            </div>
            <div class="revo-pagination">
                <div class="container">
                    <ul id="revo-pag" class="revo-pag row">
                        <li class="revo-pag-control current-slide">
                            <a href="">
                                <i class="ico-has-thmb ico-plugins"></i>
                                <span class="slideCaption">Wizard plugin</span>
                            </a>
                        </li>
                        <li class="revo-pag-control">
                            <a href="">
                                <i class="ico-default-bullet"></i>
                                <span class="slideCaption">Overview</span>
                            </a>
                        </li>
                        <li class="revo-pag-control">
                            <a href="">
                                <i class="ico-default-bullet"></i>
                                <span class="slideCaption">Responsive</span>
                            </a>
                        </li>
                        <li class="revo-pag-control">
                            <a href="">
                                <i class="ico-default-bullet"></i>
                                <span class="slideCaption">Customization</span>
                            </a>
                        </li>
                        <li class="revo-pag-control">
                            <a href="">
                                <i class="ico-has-thmb ico-love-more"></i>
                                <span class="slideCaption">And more</span>
                            </a>
                        </li>
                        <li class="revo-pag-control">
                            <a href="">
                                <i class="ico-has-thmb ico-finish"></i>
                                <span class="slideCaption">Finish</span>
                            </a>
                        </li>
                        <li class="arr-magic" id="js-arr-magic"></li>
                    </ul>
                </div>
            </div>

            <div class="mobile-pag-container visible-xs visible-sm">
                <div class="container">
                    <ul id="js-mobile-pagination" class="mobile-pagination" style="display: none;"></ul>
                </div>
            </div>

            <!-- preloader -->
            <div class="live-prealoder">
                <div class="shadow-preloader">
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                    <div class="shadow-circle"></div>
                </div>
            </div>
        </section>

EODHTML;

    return $content;
}
add_shortcode( 'revslider_front', 'shoestrap_show_revslider' );

// Carousel
function shoestrap_show_carousel( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            //'text_color' => __( 'Text Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $assets = SHOESTRAP_ASSETS_URL;

    $content = <<<EODHTML

        <section class="carousel-slider-block">
            <div class="container">
                <div class="row">
                    <!-- Place somewhere in the <body> of your page -->
                    <div class="flexslider carousel-slider">
                        <h3 class="caption-gallery">Widjet Recent Projects (H5 +60% +allcaps) / <a href="#">view all</a></h3>
                        <ul class="slides">
                            <li>
                                <figure>
                                    <a href="#">
                                        <div class="gallery-thumb">
                                            <img src="$assets/img/staticks/image02.jpg" alt="">
                                            <b class="ico-zoom"></b>
                                        </div>
                                    </a>
                                    <figcaption class="gallery-caption">
                                        <h4 class="xmd-h">Some other project (H5 +35% allcaps)</h4>
                                        <time datetime="2014-12-12" class="pub-date">20 march 2014</time>
                                        <div class="lorem-caption">
                                            <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique senectus et netus</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <a href="#">
                                        <div class="gallery-thumb">
                                            <img src="$assets/img/staticks/image03.jpg" alt="">
                                            <b class="ico-zoom"></b>
                                        </div>
                                    </a>
                                    <figcaption class="gallery-caption">
                                        <h4 class="xmd-h">Some other project (H5 +35% allcaps)</h4>
                                        <time datetime="2014-12-12" class="pub-date">20 march 2014</time>
                                        <div class="lorem-caption">
                                            <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique senectus et netus</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <a href="#">
                                        <div class="gallery-thumb">
                                            <img src="$assets/img/staticks/image04.jpg" alt="">
                                            <b class="ico-zoom"></b>
                                        </div>
                                    </a>
                                    <figcaption class="gallery-caption">
                                        <h4 class="xmd-h">Some other project (H5 +35% allcaps)</h4>
                                        <time datetime="2014-12-12" class="pub-date">20 march 2014</time>
                                        <div class="lorem-caption">
                                            <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique senectus et netus</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <a href="#">
                                        <div class="gallery-thumb">
                                            <img src="$assets/img/staticks/image04.jpg" alt="">
                                            <b class="ico-zoom"></b>
                                        </div>
                                    </a>
                                    <figcaption class="gallery-caption">
                                        <div class="lorem-caption">
                                            <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique senectus et netus</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

EODHTML;

    return $content;
}
add_shortcode( 'carousel_front', 'shoestrap_show_carousel' );

// Best Proposal
function shoestrap_show_best_prop( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            //'text_color' => __( 'Text Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $assets = SHOESTRAP_ASSETS_URL;

    $content = <<<EODHTML

        <section class="best-prop-block">
            <div class="container">
                <h2 class="lg-h">Solid Color Background</h2>
                <h4 class="lg-h-subcaption">Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique</h4>

                <div class="row">
                    <div class="prop-block col-md-4">
                        <a href="#" class="waves-effect waves-light js-has-link">
                            <div class="prop-thumb">
                                <img src="$assets/img/staticks/image05.png" alt="" width="128" height="107" class="rtn_img">
                            </div>
                            <div class="prop-content-block">
                                <h5 class="sm-h">Responsive Design</h5>
                                <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique senectus et netus</p>
                            </div>
                        </a>
                    </div>
                    <div class="prop-block col-md-4">
                        <a href="#" class="waves-effect waves-light js-has-link">
                            <div class="prop-thumb">
                                <img src="$assets/img/staticks/image06.png" alt="" width="116" height="128" class="rtn_img">
                            </div>
                            <div class="prop-content-block">
                                <h5 class="sm-h">Multipurpose Layouts</h5>
                                <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi tristique senectus et netus habitant morbi tristique senectus et netus</p>
                            </div>
                        </a>
                    </div>
                    <div class="prop-block col-md-4">
                        <a href="#" class="waves-effect waves-light js-has-link">
                            <div class="prop-thumb">
                                <img src="$assets/img/staticks/image07.png" alt="" width="128" height="128" class="rtn_img">
                            </div>
                            <div class="prop-content-block">
                                <h5 class="sm-h">Customization (H3 and Example of using it in 2 rows)</h5>
                                <p>Integer at quam ac metus luctus tristique. Pellentesque habitant morbi </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

EODHTML;

    return $content;
}
add_shortcode( 'best_prop_front', 'shoestrap_show_best_prop' );

// Parallax
function shoestrap_show_parallax( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            //'text_color' => __( 'Text Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $assets = SHOESTRAP_ASSETS_URL;

    $content = <<<EODHTML

        <section class="parallax-back" id="js-parallax-back">
            <div id="trigger-parallax_2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 pb-left-block">
                        <h3 class="xlg-h">Parallax Background</h3>
                        <div class="pb-text">
                            <p>Vestibulum congue rhoncus odio. Sed eget tellus nisl, id molestie nulla. Duis ac lacinia risus. Vestibulum congue rhoncus odio. Sed eget tellus nisl, id molestie nulla. Duis ac lacinia risus Vestibulum congue rhoncus odio. Sed eget tellus nisl, id molestie nulla. Duis ac lacinia risus</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 pb-right-block">
                        <a href="#" class="waves-effect waves-button btn btn-warning btn-lg">Purchase it Now!</a>
                        <em class="exclusive clearfix">Exclusive on Themeforest <br> only for 1 000 049$ </em>
                    </div>
                </div>
            </div>
        </section>

EODHTML;

    return $content;
}
add_shortcode( 'parallax_front', 'shoestrap_show_parallax' );


