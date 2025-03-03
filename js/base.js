
// code jquery về slider 
$(document).ready(function(){
    $('.custom_slider').each(function(){
        var $this = $(this);
        var slidesToShow = $this.data('slides-to-show') || 4;
        var slidesToScroll = $this.data('slides-to-scroll') || 4;

        $this.slick({
            slidesToShow: slidesToShow,
            slidesToScroll: slidesToScroll,
            arrows: true,
            dots: true,
            infinity: true,
            autoplay: true,
            autoplaySpeed: 3000,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },

                {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }
            ]

        })
    })
})
