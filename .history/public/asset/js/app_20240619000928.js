var myCarousel = document.getElementById('carouselExample');
var carousel = new bootstrap.Carousel(myCarousel);
setInterval(function () {
    carousel.next();
}, 4000);

// document.addEventListener('DOMContentLoaded', (event) => {
//     var btnCancel = document.getElementById('btn_cancel');
//     var iconCancel = document.getElementById('vectorIcon');
//     var overlay = document.getElementById('overlay');
//     var notification = document.getElementsByClassName('notification')[0];

//     function hideDialog() {
//         notification.classList.add('hidden');
//         overlay.classList.add('hidden-overlay');
//     }

//     btnCancel.addEventListener('click', function () {
//         hideDialog();
//     });

//     iconCancel.addEventListener('click', function () {
//         hideDialog();
//     });

//     function showDialog() {
//         notification.classList.remove('hidden');
//         overlay.classList.remove('hidden-overlay');
//     }

//     // Example: Show the dialog initially
//     showDialog();
// });

document.addEventListener('DOMContentLoaded', (event) => {
    var btnCancel = document.getElementById('btn_cancel');
    var iconCancel = document.getElementById('vectorIcon');
    var overlay = document.getElementById('overlay');
    var notification = document.getElementById('notification');

    function hideDialog() {
        notification.classList.add('hidden');
        overlay.classList.add('hidden-overlay');
    }

    function showDialog() {
        notification.classList.remove('hidden');
        overlay.classList.remove('hidden-overlay');
    }

    btnCancel.addEventListener('click', function () {
        hideDialog();
    });

    iconCancel.addEventListener('click', function () {
        hideDialog();
    });

    // Example: Show the dialog initially
    showDialog();
});
