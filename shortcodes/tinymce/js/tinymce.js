(function($) {

    /* -----------------------------------------------------------------
     * Open Short Codes dialog
     * ----------------------------------------------------------------- */
    webuza_shortcodes_view = function(){

        if ($('.shortcodes-dialog').length > 0){
            $('.shortcodes-dialog').dialog('open');
            return;
        }

        $('<div class="shortcodes-dialog"><span style="font: normal 25px/30px Arial; padding: 20px 0; text-align: center; display:block; ">Please Waite...</span></div>').dialog({
            modal: true,
            resizable: true,
            title: 'Short Codes Chooser',
            minWidth: 600,
            minHeight: 200,
            buttons: {
                'Cancel': function(){
                    $(this).dialog('close');
                },
                'Insert Short Code': function(){
                   if (webuza_insert_shortcode()){
                       $(this).dialog('close');
                   } else {
                       $('#shorcodes-select').css('border', '1px solid red');
                   }
                }
            },
            open: function(){
                $.post(ajaxurl, { action: 'shortcodes_dialog_open' }, function(response) {
                    $('.shortcodes-dialog').html(response);
                });
            }
        });

    };

    webuza_insert_shortcode = function(){
        var ed = tinyMCE.activeEditor;
        var short_code = '';
        var $selected_shortcode_option = $('#shorcodes-select option:selected');

        if ( !$selected_shortcode_option.attr('value') ){
            return false;
        }

        var $attrs = $('.shortcode-attrs ul.' + $selected_shortcode_option.attr('value') + ' > .attrs_input');

        short_code += '[' + $selected_shortcode_option.attr('value');

        short_code = webuza_add_attrs_for_shortcode(short_code, $selected_shortcode_option.attr('value'), $attrs);

        var content = webuza_get_content_for_shortcode($selected_shortcode_option.attr('value'), $attrs);
        if (content === true || content !== ''){
            if(typeof content == "string"){
                short_code += content;
            }
            short_code += '[/' + $selected_shortcode_option.attr('value') + ']';
        }

        ed.selection.setContent(ed.selection.getContent() + short_code);
        return true;
    };

    webuza_add_attrs_for_shortcode = function(short_code, short_code_name, $attrs){

        switch(short_code_name){
            case 'tabs':
                short_code = webuza_add_dynamic_shortcode_items(short_code, 'tab', $attrs);
                break
            case 'toggles':
                short_code = webuza_add_dynamic_shortcode_items(short_code, 'toggle', $attrs);
                break
            case 'bar_graphs':
                short_code = webuza_add_dynamic_shortcode_items(short_code, 'bar_graph', $attrs);
                break
            case 'team_members':
                short_code = webuza_add_dynamic_shortcode_items(short_code, 'team_member', $attrs);
                break
            case 'testimonial_slider':
                short_code = webuza_add_dynamic_shortcode_items(short_code, 'testimonial', $attrs);
                break
            case 'main_services':
                short_code += ']';
                break
            default:
                $attrs.each(function(index, value){
                    if ($(this).children().hasClass('attrs_content')) {
                        return;
                    }
                    var $attr_element = $(this).find('select, input:not(input[type="button"])');
                    if ($attr_element.length > 0 && $attr_element.attr('value') !== ''){
                        short_code += ' ' + $attr_element.attr('name') + '="' + $attr_element.attr('value') + '"';
                    }
                });
                short_code += ']';
        }

        return short_code;

    };

    webuza_add_dynamic_shortcode_items = function(short_code, element_name, $attrs){

        $attrs.each(function(index, value){

            var $short_code_items = $(this).children('.sub_attrs.showed');
            if ($short_code_items.length > 0){
                short_code += ']';
                //Dynamic attributes
                $short_code_items.each(function(index, value){
                    short_code += '[' + element_name;
                    $(this).find('select, input:not(input[type="button"])').each(function(){
                        if ($(this).attr('value') !== ''){
                            short_code += ' ' + $(this).attr('name') + '="' + $(this).attr('value') + '"';
                        }
                    });

                    short_code += ']';
                    var $attr_textarea = $(this).find('textarea');

                    if ($attr_textarea.length > 0 && $attr_textarea.attr('value') !== ''){
                        short_code += $attr_textarea.attr('value');
                        short_code += '[/' + element_name +']';
                    } else if(element_name == 'team_member') {
                        short_code += '[divider] Your member content here! [/' + element_name +']';
                    }
                    short_code += '<br />'
                });
            } else {
                //Static attributes
                var $attr_element = $(this).find('select, input:not(input[type="button"])');
                if ($attr_element.length > 0 && $attr_element.attr('value') !== ''){
                    short_code += ' ' + $attr_element.attr('name') + '="' + $attr_element.attr('value') + '"';
                }
            }
        });

        return short_code;
    };

    webuza_get_content_for_shortcode = function(short_code_name, $attrs){

        var $content_element = $attrs.find('.content');
        var content;
        if ($content_element.length > 0){
            content = $content_element.attr('value');
        }

        switch(short_code_name){
            case '':
            case 'bullets_list':
                content = '<ul>' ;
                content += '<li><span>Your text item here!</span></li>' ;
                content += '<li><span>Your text item here!</span></li>' ;
                content += '<li><span>Your text item here!</span></li>' ;
                content += '</ul>' ;
                break
            case 'numbers_list':
                content = '<ol>' ;
                content += '<li><span>Your text item here!</span></li>' ;
                content += '<li><span>Your text item here!</span></li>' ;
                content += '<li><span>Your text item here!</span></li>' ;
                content += '</ol>' ;
                break
            case 'carousel':
                var number_items =  $attrs.find('input[name=items]').attr('value');
                content =  '<br />' ;
                for(var i=1; i <= number_items; i++){
                    content += '[carousel_item] Your item here! [/carousel_item]<br />' ;
                }
                break
            case 'prising_plan':
                var number_columns =  $attrs.find('select option:selected').attr('value');
                content =  '<br />' ;
                for(var i=1; i <= number_columns; i++){
                    content += '[prising_plan_column title="Column ' + i + '" price="$' + i + '00.95"';
                    if ( (number_columns < 3 && i == 1 ) || (number_columns >= 3 && i == 2) ){
                        content += ' highlight="true"';
                    }
                    content += ']';
                    content += '<ul>';
                    content += '<li>Your text here</li>';
                    content += '<li>Your text here</li>';
                    content += '<li>Your text here</li>';
                    content += '</ul>';
                    content += '<span class="buttons-set">[button_custom size="medium" title="Button" link="#"]</span>';
                    content += '[/prising_plan_column]<br />';
                }
                break
            case 'table':
                var number_columns =  $attrs.find('input#table_columns').attr('value');
                var number_rows    =  $attrs.find('input#table_rows').attr('value');
                var show_thead     =  $attrs.find('select#table_add_thead option:selected').attr('value');
                var show_tfoot     =  $attrs.find('select#table_add_tfoot option:selected').attr('value');
                content =  '<br />' ;
                content += '<table>';
                if (show_thead == 1){
                    content +=  '<thead>';
                    content +=  '<tr>';
                    for(var i=1; i <= number_columns; i++){
                        content += '<td> Your table head content here! </td>';
                    }
                    content += '</tr>';
                    content +=  '</thead>';
                }
                if (show_tfoot == 1){
                    content += '<tfoot>';
                    content += '<tr>';
                    for(var i=1; i <= number_columns; i++){
                        content += '<td> Your table footer content here! </td>';
                    }
                    content += '</tr>';
                    content += '</tfoot>';
                }

                content += '</tbody>';

                for(var i=1; i <= number_rows; i++){
                    content += '<tr>';
                    for(var j=1; j <= number_columns; j++){
                        content += '<td> Your table content here! </td>';
                    }
                    content += '</tr>';
                }
                content += '</tbody>';
                content += '</table>';

                break
            case 'blockquote':
                content = '<span class="content-inner">' + content + '</span><br />';
                break
            case 'main_services':

                var _content = '[custom_icon';
                var icon_title = '';
                $attrs.each(function(index, value){
                    if ($(this).children().hasClass('attrs_content')) {
                        return;
                    }
                    var $attr_element = $(this).find('select, input:not(input[type="button"])');

                    if ($attr_element.length > 0 && $attr_element.attr('value') !== '' && $attr_element.attr('name') != 'title'){
                        _content += ' ' + $attr_element.attr('name') + '="' + $attr_element.attr('value') + '"';
                    } else if ($attr_element.attr('name') == 'title'){
                        icon_title = $attr_element.attr('value');
                    }
                });
                _content += '/]';
                if (icon_title){
                    _content += '<span class="custom-icon-title">[heading type="h3"]' + icon_title + '[/heading]</span>';
                }
                _content += '<span class="content">' + content + '</span>';
                _content += '<span class="buttons-set">[button_small style="black" title="Button" link="#"]</span>';

                content = _content;
                break
            case 'promo_teasers':
                var number_columns =  $attrs.find('select option:selected').attr('value');
                content =  '<br />' ;
                for(var i=1; i <= number_columns; i++){
                    if ( number_columns == 3 ){
                        content += '[promo_teaser title="Your title!" heading="Your heading!" image="Your image src!" button_text="button" button_link="#" /]';
                    }else if( number_columns == 2 ){
                        content += '[promo_teaser title="Your title!" heading="Your heading!" image="Your image src!" paragraph_text="Your paragraph text!" button_text="button" button_link="#" /]';
                    }
                    content += '<br />';
                }
                break
            case 'button_custom':
            case 'button_small':
            case 'social_icon':
            case 'icon':
            case 'custom_icon':
            case 'separator':
            case 'custom_archives':
            case 'divider':
            case 'recent_projects':
            case 'recent_posts':
                content = '';
                break
            case 'tabs':
            case 'toggles':
            case 'bar_graphs':
            case 'testimonial_slider':
            case 'team_members':
                content = true;
                break
            default:
                content = content ? content : 'Your content here!';
        }

        return content;

    };

    /* -----------------------------------------------------------------
     *  Icons event handler
     * ----------------------------------------------------------------- */
    webuza_add_click_icon_event = function(icon_wrapper){
        var $icon_wrapper = $(icon_wrapper);
        $icon_wrapper.parents('.attrs_icons').find('.attrs_text input').attr('value', $icon_wrapper.children('i').attr('id'));
        $icon_wrapper.siblings('li.active').removeClass('active');
        $icon_wrapper.addClass('active');
    };

    /* -----------------------------------------------------------------
     *  Media Uploader
     * ----------------------------------------------------------------- */
    webuza_add_event_image_upload = function($button){
        var file_frame, wp_media_post_id = wp.media.model.settings.post.id;

        $button.on('click', function(event) {
            event.preventDefault();

            if ( file_frame ) {
                file_frame.open();
                return;
            }

            file_frame = wp.media.frames.file_frame = wp.media({
                title: $( this ).data( 'uploader_title' ),
                button: {
                    text: $( this ).data( 'uploader_button_text' )
                },
                multiple: false  // Set to true to allow multiple files to be selected
            });

            var button = $(this);

            file_frame.on( 'select', function() {
                // We set multiple to false so only get one image from the uploader
                var attachment = file_frame.state().get('selection').first().toJSON();

                button.siblings('input[type="hidden"]').attr('value',  attachment.url);
                button.siblings('.image_showed').show().attr('src', attachment.url);
                button.siblings('.image_delete').show();
                button.hide();
                // Restore the main post ID
                wp.media.model.settings.post.id = wp_media_post_id;
            });

            // Finally, open the modal
            file_frame.open();
            return false;
        });
    };

   //Media Uploader ----> End

    /* -----------------------------------------------------------------
     *  Add Webuza ShortCodes Button
     * ----------------------------------------------------------------- */
    tinymce.create('tinymce.plugins.webuzashortcodes', {
        init : function(ed, url) {
            ed.addCommand('webuzaShortCodes', function() {
                webuza_shortcodes_view();
            });
            //Add button
            ed.addButton('webuza_shortcodes_button', {	title : 'Webuza Shortcodes', cmd : 'webuzaShortCodes', image : url + '/icons/shortcode-icon.png' });
        },
        createControl : function() {
            return null;
        },
        getInfo : function() {
            return {
                longname : 'Webuza TinyMCE',
                author : 'Webuza',
                authorurl : 'Webuza',
                infourl : 'Webuza',
                version : tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });
    tinymce.PluginManager.add('webuza_buttons', tinymce.plugins.webuzashortcodes);


})(jQuery);