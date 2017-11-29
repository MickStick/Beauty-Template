$(document).ready(() => {
    $(".button-collapse").sideNav();
    $('nav li a[href="' + window.location.pathname + '"]').addClass('link-active');
    $('.modal').modal();


    $(window).on('beforeunload', () => {
        $('.progress').css({ "display": "block" });
    });
})