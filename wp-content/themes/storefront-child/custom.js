jQuery(document).ready(function ($) {
    // image-slide-container
    $('.slick-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        draggable: false,
        speed: 1000,
        fade: true,
        cssEase: 'ease-in',
        autoplay: true,
        autoplaySpeed: 1500,
        centerMode: true,
    });
});
