window.onload = function(){
    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $('#site-header').fadeOut();           
        } else {
            $('#site-header').fadeIn();           
        }
    });
}