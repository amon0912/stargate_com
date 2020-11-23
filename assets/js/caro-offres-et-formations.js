$('.caro-offre-du-jour').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
});

$('.caro-formations').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
});

{/* <i class="far fa-angle-left"></i> */}
//   bouton suivant
$('.slick-next').addClass('btn border text-white rounded-circle h3');
$('.slick-next').html('<i class="fas fa-angle-left fa-fw"></i>');
$('.slick-next').css('position', 'absolute');
$('.slick-next').css('top', '40%');
$('.slick-next').css('right', '0%');

// bouton precedent  
$('.slick-prev').addClass('btn border text-white rounded-circle');
$('.slick-prev').html('<i class="fas fa-angle-left fa-fw"></i>');
$('.slick-prev').css('position', 'absolute');
$('.slick-prev').css('top', '40%');
$('.slick-prev').css('z-index', '1');
$('.slick-prev').css('left', '0%');