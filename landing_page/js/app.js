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

// flexslide
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
    ]
});

$('.partner-1').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 1520,
            settings: {
                slidesToShow: 6
            }
        },
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
            breakpoint: 767,
            settings: {
                slidesToShow: 7
            }
        },
    ]
});

$('.partner-2').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
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
            breakpoint: 767,
            settings: {
                slidesToShow: 6
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


  