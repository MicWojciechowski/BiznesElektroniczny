$(document).ready(function(){var $menu=$('#_desktop_top_menu'),stickyThreshold=110,menuHeight=$menu.outerHeight();$(window).scroll(function(){if($(window).scrollTop()>stickyThreshold){if(!$menu.hasClass('stuck')){$menu.addClass('stuck');$('body').css('padding-top',menuHeight+'px');}}else{if($menu.hasClass('stuck')){$menu.removeClass('stuck');$('body').css('padding-top','0');}}});});

var relatedSwiper = new Swiper('.category-products-carousel', {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        991: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        480: { slidesPerView: 1 },
    }
});
