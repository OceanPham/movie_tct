var myCarousel = document.getElementById('carouselExample');
var carousel = new bootstrap.Carousel(myCarousel);
setInterval(function () {
    carousel.next();
}, 4000);

var btn