function open_menu_mobile(){
    $('.menu-m').addClass('active');
    $('.overlay-menu-m').addClass('active');
    $('body').addClass('stop-scroll');
}

function close_menu_mobile(){
    $('.menu-m').removeClass('active');
    $('.overlay-menu-m').removeClass('active');
    $('body').removeClass('stop-scroll');
}

$('.next-menu-level1').click(function(){
    $(this).siblings('.menu-level2').addClass('active');
})

$('.next-menu-level2').click(function(){
    $(this).siblings('.menu-level3').addClass('active');
})

$('.back-menu-level1').click(function(){
    $(this).parents('.menu-level2').removeClass('active');
})

$('.back-menu-level2').click(function(){
    $(this).parents('.menu-level3').removeClass('active');
})