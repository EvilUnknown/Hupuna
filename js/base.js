
// code jquery về slider 
$(document).ready(function(){
    $('.custom_slider').each(function(){
        var $this = $(this);
        var slidesToShow = $this.data('slides-to-show') || 4;
        var slidesToScroll = $this.data('slides-to-scroll') || 4;
        var slidesToShowMobile = $this.data('slides-to-show-mobile') || 1;
        console.log(slidesToShowMobile)

        $this.slick({
            slidesToShow: slidesToShow,
            slidesToScroll: slidesToScroll,
            arrows: true,
            dots: false,
            infinity: true,
            autoplay: true,
            autoplaySpeed: 3000,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },

                {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: slidesToShowMobile,
                        slidesToScroll: slidesToShowMobile,
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

