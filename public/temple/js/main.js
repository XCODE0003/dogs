function searchModal() {
    var searchModal = $("#SearchModal");
    if (searchModal.css("display") == "none") {
        searchModal.fadeIn(200).css("display", "flex");
    } else {
        searchModal.fadeOut(200);
    }
}
// 
window.onload = function () {
    var mobMenuButton = $(".site-nav__thumb-menu");
    if ($(window).width() < 800) {
        mobMenuButton.removeClass("site-nav__thumb-menu--inactive");
    }

    var mobMenu = $(".slide-nav__overflow--thumb");
    mobMenuButton.click(function() {
        
        var mobMenuB = $(".site-nav__thumb-button");
        if(!mobMenu.hasClass("js-menu--is-open"))
        {
            mobMenu.addClass("js-menu--is-open");
            mobMenuB.addClass("is-active");
        } else 
        {
            mobMenu.removeClass("js-menu--is-open");
            mobMenuB.removeClass("is-active");
        }
    });

    $(".js-toggle-submenu.slide-nav__link").click(function() {
        $('.slide-nav__dropdown[data-parent="'+$(this).data("target")+'"]').addClass("is-active");
        mobMenu.addClass("sub-nav--is-open");
    }); 
    

    $(".slide-nav__return-btn").click(function() {
        $('.slide-nav__dropdown').removeClass("is-active");
        mobMenu.removeClass("sub-nav--is-open");
    }); 

    //

    var header = $("header");
    if ($(window).width() > 800) {
    $(window).scroll(function() {
        if($(this).scrollTop() > 10){
            header.addClass("site-header--sticky site-header--opening");
        } else {
            header.removeClass('site-header--sticky site-header--opening');
        }
    });
    }
        
};

