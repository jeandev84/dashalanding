/*  https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js */

$(document).ready(function () {
    $("a.nav-link").click(function () {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
             duration: 1000,
             easing: "swing"
        });

        return false;
    });
});

/*
duration : время действия анимации здесь 1000 (1 секунда)
easing   : тип анимации
*/