(function($) {

    jQuery(document).ready(function() {
        //Options tabs
        $('#tabs').tabs({
            create: function(event, ui){
                var tabId = ui.tab.attr('aria-controls');
                initOptionsLeftSideHeight(tabId);
            },
            activate: function(event, ui){
                var tabId = ui.newTab.attr('aria-controls');
                initOptionsLeftSideHeight(tabId);
            }
        }).addClass('ui-tabs-vertical ui-helper-clearfix');

        //Media Uploader
        var file_frame, wp_media_post_id = wp.media.model.settings.post.id;

        $('.img-uploader .button').live('click', function(event) {
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
            var id = button.attr('id').replace('_button', '');

            file_frame.on( 'select', function() {
                // We set multiple to false so only get one image from the uploader
                var attachment = file_frame.state().get('selection').first().toJSON();

                $("#"+id).val(attachment.url);

                // Restore the main post ID
                wp.media.model.settings.post.id = wp_media_post_id;
            });

            // Finally, open the modal
            file_frame.open();
            return false;
        });

        $('.add_media').on('click', function(){
            wp.media.model.settings.post.id = wp_media_post_id;
        });
        //Media Uploader ----> End

        //Use Custom Font Yes/No dropdown
        var $wbz_typography_use = $('select#wbz_typography_use');
        var $wbz_typography_selects = $wbz_typography_use.parents('.section_wrap').find('.options_input select').not('select#wbz_typography_use');

        if($wbz_typography_use.val() == 'yes'){
            $wbz_typography_selects.removeAttr('disabled');
        } else {
            $wbz_typography_selects.attr('disabled', 'disabled');
        }
        $wbz_typography_use.change(function(){
            if($(this).val() == 'yes'){
                $wbz_typography_selects.removeAttr('disabled');
            } else {
                $wbz_typography_selects.attr('disabled', 'disabled');
            }
        });
        //Use Custom Font Yes/No dropdown -------------> End
    });

    //Function to change change height of tabs columns
    function initOptionsLeftSideHeight(tabId){
        var heightTabsNav   = parseInt(jQuery('.ui-tabs-nav').height());
        var heightTabsPanel = parseInt(jQuery('#' + tabId + '.ui-tabs-panel').height());
        var cssStyles = {
            'min-height': '599px',
            'height': '599px'
        }
        jQuery('.ui-tabs .ui-tabs-nav').css(cssStyles)
    }

}(jQuery));

