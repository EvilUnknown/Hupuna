// $('.menu_mobile ul img').click(function(){
//     $(this).toggleClass('active');
//     $(this).siblings('ul').slideToggle();
// });

// function open_menu_mobile(){
//     $('.menu-mobile').addClass('active');
//     $('.overlay-menu-mobile').addClass('active');
//     $('body').addClass('stop-scroll');
// }

// function close_menu_mobile(){
//     $('.menu-mobile').removeClass('active');
//     $('.overlay-menu-mobile').removeClass('active');
//     $('body').removeClass('stop-scroll');
// }

// function open_modal(){
//     $('.cus-modal').addClass('active');
//     $('.overlay-modal').addClass('active');
//     $('body').addClass('stop-scroll');
// }

// function close_modal(){
//     $('.cus-modal').removeClass('active');
//     $('.overlay-modal').removeClass('active');
//     $('body').removeClass('stop-scroll');
// }

// slick slider
$('.slickslide').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 370,
            settings: {
                slidesToShow: 2
            }
        },
    ]
});

$('.product-slide').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        },
    ]
});

$('.slideshow').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.thumbnail-slide'
});

$('.thumbnail-slide').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slideshow',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 3000,
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
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        },
    ]
});

$('.partner-1').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3
            }
        },
    ]
});

$('.partner-2').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3
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

// window scroll 
var header = $('.header');
$(window).scroll(function () {
    if ($(window).scrollTop() > 196) {
        header.addClass('affix');
    } else {
        header.removeClass('affix');
    }
});  