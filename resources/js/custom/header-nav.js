// dropdown submenu
let subMenuInit = function () {
    let subMenu = $('.submenu'),
        navPrimaryItem = $('.nav--primary .nav-item'),
        showSubMenu, currentSubmenu, currentItem, hasSubmenu;

    let positionSubMenu = function () {
        subMenu.css('width', $(window).width() + 'px');
        for (let i = 0; i < navPrimaryItem.length; i++) {
            $(navPrimaryItem[i]).find('.submenu').css('left', '-' + $(navPrimaryItem[i]).offset().left + 'px');
            if ($(navPrimaryItem[i]).find('.nav-link').attr('href').match(/business/)) {
                $($(navPrimaryItem[i]).find('.submenu').find('.col--lg')[2]).find('.menu-block-title').find('a').css('border-bottom', 'none');
            }
        }
    };
    positionSubMenu();

    $(window).on('resize', function () {
        positionSubMenu();
    });

    navPrimaryItem.on('mouseenter', function () {
        currentItem = $(this);
        hasSubmenu = currentItem.find('.submenu').length ? true : false;
        currentSubmenu = currentItem.find('.submenu');
        currentLink = currentItem.find('.nav-link');
        if (!currentItem.hasClass('is-hovered') && hasSubmenu) {
            showSubMenu = setTimeout(function () {
                positionSubMenu();
                currentLink.css('color', '#0098df');
                currentItem.addClass('is-hovered');
                currentSubmenu.fadeIn(200);
            }, 300);
        }
    }).on('mouseleave', function () {
        clearTimeout(showSubMenu);
        currentLink.css('color', 'inherit');
        currentItem.removeClass('is-hovered');
        currentSubmenu.fadeOut(100);
    });
}();

// hamburger menu
$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    $("#header-nav").toggleClass("show_list");
    $("#header-nav").css({
        "opacity":"0",
        "display":"block",
    }).show().animate({opacity:1})
});
