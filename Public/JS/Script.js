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



    var text = 'Unfortnately, you are lost!';
    //alert(text.length);
    var temp = 6.25;
    for (var x = 0; x < text.length; x++) {
        var newSpan = $('<span style="display: none; overflow: hidden;"></span>');
        newSpan.text(text[x]);
        $('#not-found-message label').append(newSpan);
        console.log($('#not-found-message label span').length);
    }

    StopTyping = () => {
        clearInterval(TypeWriter);
    }

    var count = 0;

    var TypeWriter = setInterval(function() {
        $('#not-found-message label span').eq(count).animate({ display: 'toggle' }, 25, function() {
            $('#not-found-message label span').eq(count).css({ "display": "inline" });
            console.log($(this).text());
            count++;
        });
        if (count >= text.length) {
            StopTyping();
        }
    }, 100);




})