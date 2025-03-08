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
    slidesToShow: 5,
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
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 610,
            settings: {
                slidesToShow: 2
            }
        },
    ]
});

$('.custom-prev').click(function(){
    var slide = $(this).data('slide');
    $('.' + slide).slick('slickPrev');
});

$('.custom-next').click(function(){
    var slide = $(this).data('slide');
    $('.' + slide).slick('slickNext');
});


$('.tab_button').click(function(){
    $('.tab_button').removeClass('active');
    $(this).addClass('active');
    var target = $(this).data('tab-target');
    $('.tab-content .tab-pane').removeClass('show active');
    $(target).addClass('show active');
});