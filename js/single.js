$('.big-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.thumb-slide'
});

$('.thumb-slide').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.big-slide',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 3
            }
        },
    ]
});


$('.product-related-slide').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 3
            }
        },
    ]
});
