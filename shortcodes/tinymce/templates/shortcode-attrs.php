<?php
/*-----------------------------------------------------------------*
*   ShortCodes attributes renderer
*-----------------------------------------------------------------*/
?>

<?php switch( $attr['type'] ):
    case 'select': ?>
        <div class="attrs_select">
            <span class="labels"><label for="<?php echo $short_code['name'] . '_' . $attr_code ?>"><?php echo $attr['title']; ?>:</label></span>
            <select name="<?php echo $attr_code ?>" id="<?php echo $short_code['name'] . '_' .$attr_code ?>" class="select">
                <?php foreach ($attr['options'] as $attr_value => $attr_label): ?>
                    <option value="<?php echo $attr_value ?>" <?php if ( $attr_value == $attr['std'] ) { echo 'selected="selected"'; } ?> ><?php echo $attr_label ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php
        break;
    case 'text': ?>
        <div class="attrs_text">
            <span class="labels"><label for="<?php echo $short_code['name'] . '_' . $attr_code ?>"><?php echo $attr['title']; ?>:</label></span>
            <input type="text" name="<?php echo $attr_code ?>" id="<?php echo $short_code['name'] . '_' .$attr_code ?>" class="text <?php echo isset($attr['class']) ? $attr['class'] : '' ?>" value="<?php echo isset($attr['std']) ? $attr['std'] : '' ?>" />
            <?php if(isset($attr['class']) && $attr['class'] == 'color'): ?>
                <script type="text/javascript">
                    var colorPicker = new jscolor.color(document.getElementById('<?php echo $short_code['name'] . '_' .$attr_code ?>'));
                    colorPicker.fromString('<?php echo isset($attr['class']) ? $attr['class'] : '' ?>');
                </script>
            <?php endif; ?>
        </div>
        <?php
        break;
    case 'textarea': ?>
        <div class="attrs_textarea">
            <span class="labels"><label for="<?php echo $short_code['name'] . '_' . $attr_code ?>"><?php echo $attr['title']; ?>:</label></span>
            <textarea name="<?php echo $attr_code ?>" id="<?php echo $short_code['name'] . '_' .$attr_code ?>" class="textarea" cols="70" rows="5" ></textarea>
        </div>
        <?php
        break;
    case 'img-upload': ?>
        <div class="attrs_text">
            <span class="labels"><label for="<?php echo $short_code['name'] . '_' . $attr_code ?>"><?php echo $attr['title']; ?>:</label></span>

            <div class="img-uploader">

                <img class="image_showed"  src="" alt="" style="display:none;" />
                <br />
                <a class="image_delete" href="javascript:void(0)" style="display:none;" ><?php _e('Remove Image') ?></a>

                <input type="hidden" id="<?php echo $short_code['name'] . '_' . $attr_code ?>" name="<?php echo $attr_code ?>" value=""/>
                <input class="button" type="button" name="<?php echo $short_code['name'] . '_' . $attr_code ?>_button" class="<?php echo $short_code['name'] . '_' . $attr_code ?>_button" value="<?php _e('Upload') ?>" />
            </div>
        </div>
        <?php
        break;
    case 'add-button': ?>
        <div class="clear"></div>
        <div class="attrs_addbutton">
            <input type="hidden" name="last_element_idx" value="0" />
            <input type="hidden" name="element_prefix_id" value="<?php echo $attr_code ?>" />
            <button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
                <span class="ui-button-text"><?php echo $attr['title'] ?></span>
            </button>
        </div>
        <div class="clear"></div>
        <?php
        break;
    case 'social-icons': ?>
        <div class="attrs_icons">
            <?php $social_icons = webuza_get_icons_array('Social Icons'); ?>
            <label for=""><?php echo $attr['title'] ?></label>
            <ul>
            <?php foreach($social_icons as $icon_id => $icon_name): ?>
                <li onclick="webuza_add_click_icon_event(this);">
                    <i class="<?php echo $icon_id ?> fa fa-lg" id="<?php echo $icon_id ?>" />
                </li>
            <?php endforeach; ?>
            </ul>
            <div class="attrs_text">
                <input name="<?php echo $attr_code ?>" id="<?php echo $short_code['name'] . '_' .$attr_code ?>" type="hidden" value="" />
            </div>
        </div>
        <?php
        break;
    case 'icons': ?>
        <div class="attrs_icons">
            <?php $social_icons = webuza_get_icons_array(); ?>
            <?php foreach($social_icons as $icon_cat => $icon): ?>
                <div class="icon-cat"><?php echo $icon_cat ?></div>
                <ul>
                <?php foreach($icon as $icon_id => $icon_name): ?>
                    <li onclick="webuza_add_click_icon_event(this);">
                        <i class="<?php echo $icon_id ?> fa fa-lg" id="<?php echo $icon_id ?>" />
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="clearer"></div>
            <?php endforeach; ?>
            <div class="attrs_text">
                <input name="<?php echo $attr_code ?>" id="<?php echo $short_code['name'] . '_' .$attr_code ?>" type="hidden" value="" />
            </div>
        </div>
        <?php
        break;
        ?>
<?php endswitch; ?>
