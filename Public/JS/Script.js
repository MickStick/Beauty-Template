$(document).ready(() => {
    $('.home-heading').animate({ opacity: "0.5" }, 200, () => {
        $('.home-heading').animate({ opacity: "1" }, 300);
        $('.home-intro').animate({ left: "0%" }, 300);
    });

    $(".button-collapse").sideNav();
    $('nav li a[href="' + window.location.pathname + '"]').addClass('link-active');
    $('.modal').modal();


    $(window).on('beforeunload', () => {
        $('.progress').css({ "display": "block" });
    });
})