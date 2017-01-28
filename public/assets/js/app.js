$(function () {
    if (window.BlogSettings.activeMenu) {
        $('ul.navigation').find('.' + window.BlogSettings.activeMenu).addClass('active');
    }

    if ($.mask) {
        $("#register_phone").mask("+9 (999) 999-99-99");
    }
});