$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 4
            }
        },
    ]
});

$('.design-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    responsive: [

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