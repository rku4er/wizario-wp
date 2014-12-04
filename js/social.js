jQuery(document).ready(function($) {
    var completed = 0;

    $.getJSON("http://graph.facebook.com/?id=" + window.location + '&callback=?', function (data) {
        if ((data.shares != 0) && (data.shares != undefined) && (data.shares != null)) {
            $('.facebook-share a span.count').html(data.shares);
            $('.facebook-share a span.count').addClass("con");

        }
        else {
            $('.facebook-share a span.count').html(0);
        }
        completed++;
//socialFade();
    });

    function facebookShare() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + window.location, "facebookWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0")
        return false;
    }

    $('.facebook-share').click(facebookShare);

//twitter

//load tweet count on load
    $.getJSON('http://urls.api.twitter.com/1/urls/count.json?url=' + window.location + '&callback=?', function (data) {
        if ((data.count != 0) && (data.count != undefined) && (data.count != null)) {
            $('.twitter-share a span.count').html(data.count);
            $('.twitter-share a span.count').addClass("con");
        } else {
            $('.twitter-share a span.count').html(0);
        }
        completed++;
//        socialFade();
    });

    function twitterShare() {
        window.open('http://twitter.com/intent/tweet?text=' + $(".post-header h1, .post-header h2").text() + ' ' + window.location, "twitterWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0")
        return false;
    }

    $('.twitter-share').click(twitterShare);



//G+ Share
    function googleShare() {
        window.open('http://plus.google.com/share?url=' + window.location, "googleWindow",  "height=600,width=500" )
        return false;
    }

    $('.google-share').click(googleShare);
//pinterest

//load pin count on load
    $.getJSON('http://api.pinterest.com/v1/urls/count.json?url=' + window.location + '&callback=?', function (data) {
        if ((data.count != 0) && (data.count != undefined) && (data.count != null)) {
            $('.pinterest-share a span.count').html(data.count);
        }
        else {
            $('.pinterest-share a span.count').html(0);
        }
        completed++;
//        socialFade();
    });

    function pinterestShare() {
        window.open('http://pinterest.com/pin/create/button/?url=' + window.location + '&media=' + $('#post-area img').first().attr('src') + '&description=' + $('.section-title h1').text(), "pinterestWindow", "height=640,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0")
        return false;
    }

    $('.pinterest-share').click(pinterestShare);

//fadeIn
    $('.sharing li a > span.count, .sharing .webuza-love-count, #single-meta ul li a span').hide().css('width', 'auto');
    function socialFade() {

        if (completed == $('#project-meta .sharing li').length - 1 || completed == $('#single-meta ul li').length - 1) {

            //love fadein
            $('#project-meta ul li .webuza-love-wrap.fadein .webuza-love-count ').show(220, 'easeOutSine', function () {
                $(this).animate({'opacity': 1}, 800);
            });

            //sharing loadin
            $('.sharing li, #single-meta ul li').each(function (i) {
                var $that = $(this);

                $(this).find('a').animate({'left': 0}, 220, 'easeOutSine');
                $(this).find('a > span').show(220, 'easeOutSine', function () {
                    $that.find('a > span').animate({'opacity': 1}, 800);
                });

            });
        }
    }

});