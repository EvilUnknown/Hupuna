
// code jquery về slider 
$(document).ready(function(){
    $('.custom_slider').each(function(){
        var $this = $(this);
        var slidesToShow = $this.data('slides-to-show') || 4;
        var slidesToScroll = $this.data('slides-to-scroll') || 4;
        var slidesToShowMobile = $this.data('slides-to-show-mobile') || 1;
        var slidesToScrollMobile = $this.data('slides-to-scroll-mobile') || 1;
        var slidesToShowTablet = $this.data('slides-to-show-tablet') || 2;
        var slidesToScrollTablet = $this.data('slides-to-scroll-tablet') || 2;
        var slidesSpeed = $this.data('slides-to-speed') || 3000;

        $this.slick({
            slidesToShow: slidesToShow,
            slidesToScroll: slidesToScroll,
            arrows: true,
            dots: false,
            infinity: true,
            autoplay: true,
            autoplaySpeed: slidesSpeed,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: slidesToShowTablet,
                        slidesToScroll: slidesToScrollTablet,
                    }
                },

                {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: slidesToShowMobile,
                        slidesToScroll: slidesToScrollMobile,
                    }
                }
            ]

        })
    })
})

// code jquery reponsive iframe(video youtube)
$(document).ready(function() {
    function resizeIframe() {
        $("iframe").each(function() {
            var width = $(this).width();
            var height = width * 9 / 16; // Tỷ lệ 16:9
            $(this).css("height", height + "px");
        });
    }

    resizeIframe();
    $(window).resize(resizeIframe);
});

