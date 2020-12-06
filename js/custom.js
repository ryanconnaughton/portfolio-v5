// function centerHeaderImg() {
//     var imgHeight = $('section.full-height img').outerHeight();
//     $('.full-height .inner-wrap').css('margin-top', '-' + (imgHeight / 2 - 30) + 'px')
// }

$(function(){
    if($('body').hasClass('home-page')) {
        $(".rotate").textrotator({
            animation: "fade",
            separator: ",",
            speed: 750,
            interval: 2500
        });
    }
    if($('body').hasClass('be-training')
        || $('body').hasClass('beautyq')
        || $('body').hasClass('coca-cola')
        || $('body').hasClass('nightkey')
        || $('body').hasClass('playlistpalace')
        || $('body').hasClass('rubiconproject')
        || $('body').hasClass('weloveinsight')) {

        // centerHeaderImg();
        $(window).load(function () {
            $(document).ready(function () {
                collage();
            });
        });
        $(window).resize(function () {
            // centerHeaderImg();
        });

        // Here we apply the actual CollagePlus plugin
        function collage() {
            $('.collage').removeWhitespace().collagePlus(
                {
                    'fadeSpeed': 2000,
                    'targetHeight': 200
                }
            );
        };

        // This is just for the case that the browser window is resized
        var resizeTimer = null;
        $(window).bind('resize', function () {
            // hide all the images until we resize them
            $('.collage .wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
        });
    }
});