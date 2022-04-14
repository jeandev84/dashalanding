function backToTop() {

    let button = $('.back__to__top');

    $(window).on('scroll', () => {
         if ($(this).scrollTop() >= 50) { // 50 px
              button.fadeIn();
         } else {
             button.fadeOut();
         }
    });

    button.on('click', (e) => {
        e.preventDefault();
        $('html').animate({scrollTop: 0}, 1000);
    });
}

backToTop();