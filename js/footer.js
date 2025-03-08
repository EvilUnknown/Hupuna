var btn_fixed = $('.back-to-top');

$(window).scroll(function () {
    if ($(window).scrollTop() > 800) {
        btn_fixed.addClass('show');
    } else {
        btn_fixed.removeClass('show');
    }
});

$('.back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '1000');
});