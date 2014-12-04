<?php
$font_list = array(
    '-'                     => __( 'Font Family' ),
    'Arial'                 => __( 'Arial' ),
    'Arvo'                  => __( 'Arvo' ),
    'Cambria'               => __( 'Cambria' ),
    'Copse'                 => __( 'Copse' ),
    'Droid+Sans'            => __( 'Droid Sans' ),
    'Droid+Serif'           => __( 'Droid Serif' ),
    'EB+Garamond'           => __( 'Garamond' ),
    'Georgia'               => __( 'Georgia' ),
    'Helvetica'             => __( 'Helvetica' ),
    'Lobster'               => __( 'Lobster' ),
    'Nobile'                => __( 'Nobile' ),
    'Open+Sans'             => __( 'Open Sans' ),
    'Open+Sans+Condensed'   => __( 'Open Sans Condensed' ),
    'Oswald'                => __( 'Oswald' ),
    'PT+Sans'               => __( 'PT Sans' ),
    'Pacifico'              => __( 'Pacifico' ),
    'Quattrocento'          => __( 'Quattrocento' ),
    'Raleway'               => __( 'Raleway' ),
    'Rokkitt'               => __( 'Rokkit' ),
    'Tahoma'                => __( 'Tahoma' ),
    'Ubuntu'                => __( 'Ubuntu' ),
    'Yanone+Kaffeesatz'     => __( 'Yanone Kaffeesatz' )
);
$font_size_list = array(
    '-' => __( 'Font Size' )
);
for( $i = 9; $i <= 50; $i++){
    $font_size_list[$i . 'px'] = $i . 'px';
}
$font_deviation_list = array(
    '-' => __( 'Deviation to all' ),
    '-8px' => '-8px',
    '-7px' => '-7px',
    '-6px' => '-6px',
    '-5px' => '-5px',
    '-4px' => '-4px',
    '-3px' => '-3px',
    '-2px' => '-2px',
    '-1px' => '-1px',
     '0px' => '0px',
     '1px' => '1px',
     '2px' => '2px',
     '3px' => '3px',
     '4px' => '4px',
     '5px' => '5px',
     '6px' => '6px',
     '7px' => '7px',
     '8px' => '8px'
);

$font_style_list = array(
    '-'         => __( 'Font Style' ),
    'normal'    => __( 'Normal' ),
    'italic'    => __( 'Italic' ),
    'bold'      => __( 'Bold' ),
    'bolder'    => __( 'Bolder' ),
    'all'       => __( 'All' )
);

$iconArr= array( '&#9874;', '&#9993;', '&#128319;', '&#9874;', '&#128188;', '&#59160;', '&#11015;', '&#9881;', '&#58542;', '&#9993;' );
$_tmp = 0;
?>
<div class="wrap webuza-options">

        <form method="post">
            <h2 class="settings-title"><?php _e( 'Webuza Theme Options' ) ?></h2>
            <div class="button-controls">
                <span class="submit reset">
                    <input class="button" name="reset" type="submit" value="<?php _e( 'Reset All Options' ); ?>"/>
                    <input type="hidden" name="action" value="reset"/>
                </span>
                <input type="hidden" name="action" value="save"/>
                <span class="submit save">
                    <input name="save" class="button" type="submit" value="<?php _e( 'Save All Changes' ); ?>"/>
                </span>
            </div>
            <div class="clear"></div>
            <?php echo $message ?>
            <div class="clear"></div>
        <div class="options_wrap">
            <div id="tabs">
                <ul>
                    <?php $tab_number = 0; foreach( $options as $value ): ?>
                        <?php if( $value['type']== 'section' ): $tab_number++; ?>
                            <li class="<?php if( $tab_number == 1 ) { echo ' first'; } ?>" >
                                <a class="section_title" href="#tabs-<?php echo $tab_number ?>">
                                    <span class="entypos entypo<?php echo $_tmp++; ?>"></span>
                                    <span><?php echo $value['name']; ?></span>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>

            <?php $tab_number = 0; foreach( $options as $value ):
                switch( $value['type'] ):
                    case 'section':
                        $tab_number++; ?>
                        <div class="section_wrap" id="tabs-<?php echo $tab_number; ?>">
                            <?php if( $value['desc'] ): ?>
                                <div class="section_body">
                                    <div class="section_desc"><?php _e( $value['desc'] ) ?></div>
                                </div>
                            <?php endif; ?>
                        <?php
                        break;
                    case 'divider':
                        ?>
                        <div class="options_divider"></div>
                        <?php
                        break;
                    case 'custom':
                            call_user_func( $value['callback'], $value['desc'] );
                        break;
                    case 'img-upload':
                        ?>

                        <div class="options_input options_text">
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>

                            <div class="img-uploader">

                                    <?php $_imgSrc = get_option( $value['id'] ); ?>

                                    <input id="<?php echo $value['id']; ?>" type="hidden" value="<?php echo $_imgSrc; ?>" name="<?php echo $value['id']; ?>">
                                    <?php if($_imgSrc != '' ): ?>
                                        <img id="redux-opts-screenshot-<?php echo $value['id']; ?>" class="redux-opts-screenshot" src="<?php echo $_imgSrc; ?>" style="max-width: 300px;" /><br />
                                    <?php endif; ?>
                                    <a class="redux-opts-upload <?php echo $value['id']; ?> button-secondary" rel-id="<?php echo $value['id']; ?>" href="javascript:void(0);" style="width: 60px;" data-choose="Choose a File" data-update="Select File">Upload</a>

                                    <a class="redux-opts-upload-remove <?php echo $value['id']; ?>" rel-id="<?php echo $value['id']; ?>" style="display:none;" href="javascript:void(0);">Remove Upload</a>

                                    <script type="text/javascript">
                                        jQuery(document).ready(function($){
                                            var _src = $('img#redux-opts-screenshot-<?php echo $value['id']; ?>').attr("src");
                                            $("input#<?php echo $value['id']; ?>").val(_src);
                                            if( _src != '') {
                                                $('a.redux-opts-upload-remove.<?php echo $value['id']; ?>').css({'display':'block'});
                                                $('a.redux-opts-upload.<?php echo $value['id']; ?>').css({'display':'none'});
                                            } else {
                                                $('a.redux-opts-upload-remove.<?php echo $value['id']; ?>').css({'display':'none'});
                                                $('a.redux-opts-upload.<?php echo $value['id']; ?>').css({'display':'block'});
                                            }
                                        });
                                    </script>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'font':
                        ?>
                        <div class="options_input options_font">
                            <span class="labels"><label for=""><?php echo $value['name']; ?></label></span>

                            <?php
                                $font_id = $value['id'] . '_font'; $size_id = $value['id'] . '_size'; $style_id = $value['id'] . '_style';
                                $font_name = $value['id'] . '[font]'; $size_name = $value['id'] . '[size]'; $style_name = $value['id'] . '[style]';
                                $font_saved_option_value = get_option($value['id']);
                            ?>

                            <select name="<?php echo $font_name ?>" id="<?php echo $font_id ?>">
                                <?php foreach($font_list as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( $font_saved_option_value && $font_saved_option_value['font'] == $option_value ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="<?php echo $size_name ?>" id="<?php echo $size_id ?>">
                                <?php foreach($font_size_list as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( $font_saved_option_value && $font_saved_option_value['size'] == $option_value ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="<?php echo $style_name ?>" id="<?php echo $style_id ?>">
                                <?php foreach($font_style_list as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( $font_saved_option_value && $font_saved_option_value['style'] == $option_value ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php
                        break;

                    case 'font-dev':
                        ?>
                        <div class="options_input options_font">
                            <span class="labels"><label for=""><?php echo $value['name']; ?></label></span>

                            <?php
                            $font_id = $value['id'] . '_font'; $size_id = $value['id'] . '_size'; $style_id = $value['id'] . '_style';
                            $font_name = $value['id'] . '[font]'; $size_name = $value['id'] . '[size]'; $style_name = $value['id'] . '[style]';
                            $font_saved_option_value = get_option($value['id']);
                            ?>

                            <select name="<?php echo $font_name ?>" id="<?php echo $font_id ?>">
                                <?php foreach($font_list as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( $font_saved_option_value && $font_saved_option_value['font'] == $option_value ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="<?php echo $size_name ?>" id="<?php echo $size_id ?>">
                                <?php foreach($font_deviation_list as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( $font_saved_option_value && $font_saved_option_value['size'] == $option_value ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="<?php echo $style_name ?>" id="<?php echo $style_id ?>">
                                <?php foreach($font_style_list as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( $font_saved_option_value && $font_saved_option_value['style'] == $option_value ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php
                        break;
                    case 'text':
                        ?>
                        <div class="options_input options_text">
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
                            <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="<?php echo $value['class']; ?> text" type="<?php echo $value['type']; ?>" value="<?php if (get_option($value['id']) != "") {
                                       echo stripslashes(get_option($value['id']));
                                   } else {
                                       echo $value['std'];
                                   } ?>"/>
                        </div>
                        <?php
                        break;
                    case 'textarea':
                        ?>
                        <div class="options_input options_textarea">
                            <span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <div class="options_textarea_wrap">
                                <?php
                                    if (get_option($value['id']) != "") {
                                        $textareaContent = stripslashes(get_option($value['id']));
                                    } else {
                                        $textareaContent = $value['std'];
                                    }
                                    if ($value['wp_editor']){
                                        wp_editor($textareaContent, $value['id']);
                                    } else {
                                ?>
                                        <textarea name="<?php echo $value['id'] ?>" id="<?php echo $value['id'] ?>" cols="80" rows="10"><?php echo $textareaContent ?></textarea>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'select':
                        ?>
                        <div class="options_input options_select">
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
                            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="select">
                                <?php foreach ($value['options'] as $option_value => $option_label): ?>
                                    <option value="<?php echo $option_value ?>" <?php if ( (get_option($value['id']) == $option_value) || (!get_option($value['id']) &&  $option_value == $value['std']) ) { echo 'selected="selected"'; } ?> ><?php echo $option_label ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php
                        break;
                    case "radio":
                        ?>
                        <div class="options_input options_select">
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <span class="labels"><label
                                    for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
                            <?php foreach ($value['options'] as $key => $option) {
                                $radio_setting = get_option($value['id']);
                                if ($radio_setting != '') {
                                    if ($key == get_option($value['id'])) {
                                        $checked = "checked=\"checked\"";
                                    } else {
                                        $checked = "";
                                    }
                                } else {
                                    if ($key == $value['std']) {
                                        $checked = "checked=\"checked\"";
                                    } else {
                                        $checked = "";
                                    }
                                }?>
                                <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br/>
                            <?php } ?>
                        </div>

                        <?php
                        break;
                    case "checkbox":
                        ?>
                        <div class="options_input options_checkbox">
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <?php
                                if( get_option($value['id']) || $value['std'] > 0 ) {
                                    $checked = "checked=\"checked\"";
                                } else {
                                    $checked = "";
                                }
                            ?>
                            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> class="checkbox" />
                            <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        </div>

                        <?php
                        break;
                    case 'select-pages':
                        ?>
                        <div class="options_input options_select">
                            <div class="options_desc"><?php echo $value['desc']; ?></div>
                            <span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
                            <?php
                                wp_dropdown_pages(array(
                                    'id' => $value['id'],
                                    'name' => $value['id'],
                                    'echo' => 1,
                                    'show_option_none' => __( '&mdash; Select Page &mdash;' ),
                                    'option_none_value' => '0',
                                    'selected' => get_option( $value['id'] )
                                ));
                            ?>
                        </div>
                        <?php
                        break;
                    case "close":
                        ?>
                        </div><!--#section_wrap-->
                        <?php break ?>
                    <?php endswitch ?>
            <?php endforeach ?>
        </div>
        <!--#options-wrap-->

    </form>

</div> <!--#wrap-->