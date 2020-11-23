$(document).ready(function () {

    if(window.screen.width <= 500 ){
        $('.menu-caro').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $('._dropleft').addClass('dropleft')

    } else{
        $('.menu-caro').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    }


    // $('.kBoutton-menu').css('height', '184px')
    // $('.kBoutton-menu').css('width', '267px')


    // preview

    $('.slick-prev').addClass('rounded border-0 bg-transparent')
    $('.slick-prev').html('<i class="fas fa-arrow-circle-left    "></i>')

    // next
    $('.slick-next').addClass('rounded border-0 bg-transparent')
    $('.slick-next').html('<i class="fas fa-arrow-circle-right    "></i>')

    // console.log(window.screen.width);
 
});