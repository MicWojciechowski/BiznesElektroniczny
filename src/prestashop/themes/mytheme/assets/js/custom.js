//$(document).ready(function(){var $menu=$('#_desktop_top_menu'),stickyThreshold=110,menuHeight=$menu.outerHeight();$(window).scroll(function(){if($(window).scrollTop()>stickyThreshold){if(!$menu.hasClass('stuck')){$menu.addClass('stuck');$('body').css('padding-top',menuHeight+'px')}}else{if($menu.hasClass('stuck')){$menu.removeClass('stuck');$('body').css('padding-top','0')}}})});var relatedSwiper=new Swiper('.category-products-carousel',{slidesPerView:4,spaceBetween:20,loop:true,navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'},pagination:{el:'.swiper-pagination',clickable:true},breakpoints:{991:{slidesPerView:3},768:{slidesPerView:2},480:{slidesPerView:1}}});document.addEventListener("DOMContentLoaded",function(){const inputs=document.querySelectorAll('.js-address-form .form-control');function checkContent(input){const row=input.closest('.form-group');if(!row){return}if(input.value.trim()!==""){row.classList.add('has-content')}else{row.classList.remove('has-content')}}inputs.forEach(input=>checkContent(input));inputs.forEach(input=>{input.addEventListener('input',()=>checkContent(input));input.addEventListener('blur',()=>checkContent(input))})});


$(document)
    .ready(function () {
        var $menu = $('#_desktop_top_menu'),
            stickyThreshold = 110,
            menuHeight = $menu.outerHeight();
        $(window).scroll(function () {
            if ($(window).scrollTop() > stickyThreshold) {
                if (!$menu.hasClass('stuck')) {
                    $menu.addClass('stuck');
                    $('body').css('padding-top', menuHeight + 'px');
                }
            } else {
                if ($menu.hasClass('stuck')) {
                    $menu.removeClass('stuck');
                    $('body').css('padding-top', '0');
                }
            }
        });
    });

var relatedSwiper = new Swiper('.category-products-carousel', {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    breakpoints: {
        991: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 2
        },
        480: {
            slidesPerView: 1
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll('.js-address-form .form-control');

    function checkContent(input) {
        const row = input.closest('.form-group');
        if (!row) 
            return;
        
        if (input.value.trim() !== "") {
            row
                .classList
                .add('has-content');
        } else {
            row
                .classList
                .remove('has-content');
        }
    }

    inputs.forEach(input => checkContent(input));

    inputs.forEach(input => {
        input.addEventListener('input', () => checkContent(input));
        input.addEventListener('blur', () => checkContent(input));
    });
});
