// $('.menu_mobile ul img').click(function(){
//     $(this).toggleClass('active');
//     $(this).siblings('ul').slideToggle();
// });

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
    $('.menu-level2').addClass('active');
})

$('.next-menu-level2').click(function(){
    $('.menu-level3').addClass('active');
})

$('.back-menu-level1').click(function(){
    $('.menu-level2').removeClass('active');
})

$('.back-menu-level2').click(function(){
    $('.menu-level3').removeClass('active');
})

function close_form_order(){
    $('.cus-modal').removeClass('active');
    $('.overlay-modal').removeClass('active');
    $('body').removeClass('stop-scroll');
}

function open_form_order(){
    $('.cus-modal').addClass('active');
    $('.overlay-modal').addClass('active');
    $('body').addClass('stop-scroll');
}

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

function cl(){
    document.cookie = 'googtrans=';
    window.location.reload();
}
  
// dịch
let curr_lang = GTranslateGetCurrentLang();

if (curr_lang == 'en') {
    $('.language > .country').addClass('hidden');
    $('.language > .country.en').removeClass('hidden');
}

if (curr_lang == 'vi') {
    $('.language .country').addClass('hidden');
    $('.language .country.vi').removeClass('hidden');
}

if (curr_lang == 'fr') {
    $('.language .country').addClass('hidden');
    $('.language .country.fr').removeClass('hidden');
}

if (curr_lang == 'ja') {
    $('.language .country').addClass('hidden');
    $('.language .country.ja').removeClass('hidden');
}

function changeGTLanguage(pair, a) {
    doGTranslate(pair);
    jQuery('.language-selected').removeClass('language-selected');
    jQuery(a).addClass('language-selected');
    $('.language > .country').addClass('hidden');
    $(`.country.${$(a).attr('data-key')}`).removeClass('hidden')
}

function googleTranslateElementInit2() {
    new google.translate.TranslateElement({
        pageLanguage: '',
        // pageLanguage: 'vi',
        autoDisplay: false
    }, 'google_translate_element2');
    }
    if (!window.gt_translate_script) {
    window.gt_translate_script = document.createElement('script');
    gt_translate_script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2';
    document.body.appendChild(gt_translate_script);
    }


    function GTranslateGetCurrentLang() {
    var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
    return keyValue ? keyValue[2].split('/')[2] : null;
}

function GTranslateFireEvent(element, event) {
    try {
        if (document.createEventObject) {
        var evt = document.createEventObject();
        element.fireEvent('on' + event, evt)
        } else {
        var evt = document.createEvent('HTMLEvents');
        evt.initEvent(event, true, true);
        element.dispatchEvent(evt)
        }
    } catch (e) { }
}

function doGTranslate(lang_pair) {
    // console.log('1');
    if (lang_pair.value) lang_pair = lang_pair.value;
    if (lang_pair == '') return;
    var lang = lang_pair.split('|')[1];
    if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
    if (typeof ga == 'function') {
        ga('send', 'event', 'GTranslate', lang, location.hostname + location.pathname + location.search);
    }
    var teCombo;
    var sel = document.getElementsByTagName('select');
    for (var i = 0; i < sel.length; i++)
        if (sel[i].className.indexOf('goog-te-combo') != -1) {
        teCombo = sel[i];
        break;
        } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
        setTimeout(function () {
            doGTranslate(lang_pair)
        }, 500)
        } else {
        teCombo.value = lang;
        GTranslateFireEvent(teCombo, 'change');
        GTranslateFireEvent(teCombo, 'change')
    }
}

if (GTranslateGetCurrentLang() != null) jQuery(document).ready(function () {
    jQuery('.language-selected').removeClass('language-selected');
    var lang_html = jQuery(".gt_languages a[onclick*='|" + GTranslateGetCurrentLang() + "']").html();
    if (typeof lang_html != "undefined") {
        jQuery(".gt_languages a[onclick*='|" + GTranslateGetCurrentLang() + "']").addClass("language-selected");
        jQuery('a.switcher-popup').html(lang_html.replace("data-gt-lazy-", "") + '<span style="color:#666;font-size:8px;font-weight:bold;">â–¼</span>');
    }
});

var wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animate__animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    }
);
wow.init();