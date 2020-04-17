$(document).ready(function () {

    $('.nav-link , .logo-link').click(function (e) {

        var linkHref = $(this).attr('href');
        var offserScroll = 50;


        if (linkHref === '#block-about-profession'){
           offserScroll = 0;
        }


        $('html, body').animate({
            scrollTop: $(linkHref).offset().top - offserScroll
        }, 1000);

        e.preventDefault();
    })

});
