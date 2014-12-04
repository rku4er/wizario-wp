jQuery(document).ready(function ($) {

    $('.webuza-love').on('click', function () {
        var $loveLink = $(this);
        var $id = $(this).attr('id');

        if ($loveLink.hasClass('loved')) return false;
        var $dataToPass = {
            action: 'webuza-love',
            loves_id: $id
        }

        $.post(webuzaLove.ajaxurl, $dataToPass, function (data) {
            $loveLink.html(data).addClass('loved').attr('title', 'You already love this!');
            $loveLink.find('span').css('opacity', 1);
        });

        return false;
    });


});