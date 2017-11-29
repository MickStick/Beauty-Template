$(document).ready(() => {
    $('nav li a[href="' + window.location.pathname + '"]').addClass('link-active');
});