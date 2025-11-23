$(document).ready(function(){var $menu=$('#_desktop_top_menu'),stickyThreshold=110,menuHeight=$menu.outerHeight();$(window).scroll(function(){if($(window).scrollTop()>stickyThreshold){if(!$menu.hasClass('stuck')){$menu.addClass('stuck');$('body').css('padding-top',menuHeight+'px');}}else{if($menu.hasClass('stuck')){$menu.removeClass('stuck');$('body').css('padding-top','0');}}});});

