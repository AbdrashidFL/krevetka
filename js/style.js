new WOW().init();
// wow
Modernizr.on('webp', function(result) {
  if (result) {
    $('.basic').addClass('basic-webp')
    $('.product').addClass('product-webp')
    $('.thanks').addClass('thanks-webp')
  } else {
    $('.basic').addClass('basic-nowebp')
    $('.product').addClass('product-nowebp')
    $('.thanks').addClass('thanks-nowebp')
  }
});
// webp
$('.phone').mask("+7 (999) 999 - 99 - 99");
// mask
let recipe = $('.recipe-slider');
recipe.owlCarousel({
    loop: true,
    dots: true,
    dotsEach: true,
    items: 3,
    margin: 29,
    responsive: {
        0: {
            items: 1,
            margin: 0,
        },
        576: {
            items: 3,
            rewind: true
        }
    }
});
$('.recipe-arrows__prev').click(function() {
    recipe.trigger('prev.owl.carousel');
});
$('.recipe-arrows__next').click(function() {
    recipe.trigger('next.owl.carousel');
});
// slider
const anchors = document.querySelectorAll('a[href*="#"]')
    for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()
        const blockID = anchor.getAttribute('href').substr(1)
        document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
        })
    })
}
// slow scroll
$('.header-burger').click(function() {
    $('.menu-popup').addClass('menu-popup__active');
});
$('.menu-popup__close').click(function() {
     $('.menu-popup').removeClass('menu-popup__active');
});
// menu
$('.popup-before,.popup-out').on("click", function() {
    $('.popup').css('display', 'none');
    document.body.style.overflow = 'visible';
});
$('.btn-popup').on("click", function() {
    $('.popup').css('display', 'flex');
    document.body.style.overflow = 'hidden';
});