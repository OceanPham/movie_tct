var myCarousel = document.getElementById('carouselExample');
var carousel = new bootstrap.Carousel(myCarousel);
setInterval(function () {
    carousel.next();
}, 4000);

document.addEventListener('DOMContentLoaded', (event) => {
    var btnCancel = document.getElementById('btn_cancel');
    btnCancel.addEventListener('click', function () {
        alert('Bạn đã nhấn vào nút Cancel!');
        var cancel_click = document.getElementsByClassName('notification');
        cancel_clic
    });
});
