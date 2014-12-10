<?php
/*-----------------------------------------------------------------*
*   ShortCodes Dialog Template
*-----------------------------------------------------------------*/

include_once TEMPLATEPATH . '/shortcodes/tinymce/shortcodes.php';
?>
<div class="shortcodes-select">
    <label for="shorcodes-select"><?php _e( 'Webuza Short Codes:' ); ?></label>
    <select name="" id="shorcodes-select">
        <option value=""><?php _e('Select Short Code...' ) ?></option>
    <?php foreach($short_codes as $short_code): ?>
        <?php if($short_code['name'] == 'group-open'): ?>
            <optgroup label="<?php echo $short_code['title'] ?>">
        <?php continue; elseif( $short_code['name'] == 'group-close' ): ?>
            </optgroup>
        <?php continue; endif; ?>
        <option value="<?php echo $short_code['name'] ?>"><?php echo $short_code['title'] ?></option>
    <?php endforeach; ?>
    </select>
</div>
<div class="clear"></div>
<div class="shortcode-attrs">
    <?php foreach( $short_codes as $short_code ): ?>
        <?php if( !isset( $short_code['attr'] ) || $short_code['name'] == 'group-open' || $short_code['name'] == 'group-close' ) { continue; } ?>
        <ul class="<?php echo $short_code['name'] ?>" style="display:none;">
            <?php if( isset( $short_code['content'] ) ): ?>
                <li class="attrs_input">
                    <div class="attrs_content">
                        <label for="<?php echo $short_code['name'] . '_content' ?>"><?php _e( 'Content: ', WEBUZA_THEME_NAME ); ?></label>
                        <?php if( $short_code['content']['type'] == 'text' ): ?>
                            <input type="text" name="" id="<?php echo $short_code['name'] . '_content' ?>" class="text content" />
                        <?php else: ?>
                            <textarea name="" id="<?php echo $short_code['name'] . '_content' ?>" class="content" cols="70" rows="5"></textarea>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endif; ?>
            <?php
                foreach( $short_code['attr'] as $attr_code => $attr ){
                    echo '<li class="attrs_input">';
                    include 'shortcode-attrs.php';
                        if( isset( $attr['attr'] ) ){
                            echo '<ul class="sub_attrs" style="display: none;" >';
                            foreach( $attr['attr'] as $attr_code => $attr ){
                                echo '<li class="attrs_input">';
                                include 'shortcode-attrs.php';
                                echo '</li>';
                            }
                            echo '</ul>';
                        }
                    echo '</li>';
                }
            ?>
        </ul>
    <?php endforeach; ?>
</div>

<input type="hidden" class="generated-shortcode" value="" />

<script type="text/javascript">
//<![CDATA[
    jQuery(document).ready(function($){

        //Show/Hide attribute options for chosen attribute code
        $('#shorcodes-select').change(function(){
            $('.shortcode-attrs ul').not('li ul').hide();
            $('.shortcode-attrs ul.' + $(this).attr('value')).show();
        });

        //Add Button hover class for hover state
        $('.attrs_addbutton button.ui-button').hover(
            function(){
                $(this).addClass('ui-state-hover');
            },
            function(){
                $(this).removeClass('ui-state-hover');
            }
        );

        //Add one element (tab, toggle, etc.) in dialog
        $('.attrs_addbutton button.ui-button').click(function(){
            var $cloneElement = $(this).parent('.attrs_addbutton').siblings('ul.sub_attrs').not('.showed');
            var $lastIdxInput = $(this).parent('.attrs_addbutton').find('input[name=last_element_idx]');
            var lastIdx = $lastIdxInput.val();
            lastIdx++;
            $lastIdxInput.val(lastIdx);
            var elementPrefixId = $(this).parent('.attrs_addbutton').find('input[name=element_prefix_id]').attr('value');
            //Object of cloned Element
            var $cloned = $cloneElement.clone().addClass('showed').append('<input type="hidden" name="' + elementPrefixId + '_id" value="' + elementPrefixId + '_' + lastIdx + '" />');

            //Change ids in inputs
            $cloned.find('li.attrs_input input:not(input[type="button"])').each(function(idx, val){
                var $this = $(this);
                $this.attr('id', $this.attr('id') + '_' + lastIdx).val($this.attr('name') + '_' + lastIdx);
            });
            $cloned.find('li.attrs_input textarea').each(function(idx, val){
                var $this = $(this);
                $this.attr('id', $this.attr('id') + '_' + lastIdx).val($this.attr('name') + '_' + lastIdx);
            });

            //Add remove button for one element (tab, toggle, etc.) in dialog
            var buttonHtml = '<li class="attrs_input attrs_removebutton"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><span class="ui-button-text"><?php _e('Remove') ?></span></button></li>';
            $cloned.append(buttonHtml);

            var $last_tab = $(this).parents('.attrs_input').children('.sub_attrs.showed').last();
            if ($last_tab.length > 0){
                $last_tab.after($cloned.show());
            } else {
                $(this).parents('.attrs_input').prepend($cloned.show());
            }
            //Add remove event to button
            $cloned.find('button.ui-button').on('click', function(){
                $(this).parents('.sub_attrs.showed').remove();
            });

            //Add event to delete image if attribute is Image Uploader
            if ($cloned.find('.img-uploader')){
                //Add Image Event
                webuza_add_event_image_upload( $cloned.find('.img-uploader .button'));

                //Delete Image event
                $cloned.find('.img-uploader .image_delete').on('click', function(){
                    var $this = $(this);
                    $this.siblings('.img-uploader input').show();
                    $this.siblings('.img-uploader input[type="hidden"]').attr('value', '');
                    $this.siblings('.img-uploader .image_showed').hide();
                    $this.hide();
                });
            }
        });

        if ($('.shortcode-attrs').find('.img-uploader')){

            //Add Image Event
            webuza_add_event_image_upload( $('.shortcode-attrs').find('.img-uploader .button'));

            //Delete Image event
            $('.shortcode-attrs').find('.img-uploader .image_delete').on('click', function(){
                var $this = $(this);
                $this.siblings('.img-uploader input').show();
                $this.siblings('.img-uploader input[type="hidden"]').attr('value', '');
                $this.siblings('.img-uploader .image_showed').hide();
                $this.hide();
            });
        }
    });
//]]>
</script>