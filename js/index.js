// var multipleCardCarousel = document.querySelector(
//   "#carouselExampleControls"
// );
// if (window.matchMedia("(min-width: 768px)").matches) {
//   var carousel = new bootstrap.Carousel(multipleCardCarousel, {
//     interval: false,
//    // wrap: false,
//   });
//   var carouselWidth = $(".carousel-inner")[0].scrollWidth;
//   var cardWidth = $(".carousel-item").width();
//   var scrollPosition = 0;
//   $("#carouselExampleControls .carousel-control-next").on("click", function () {
//     if (scrollPosition < carouselWidth - cardWidth * 2) {
//       scrollPosition += cardWidth * 2;
//       $("#carouselExampleControls .carousel-inner").animate(
//         { scrollLeft: scrollPosition },
//         600
//       );
//     }
//   });
//   $("#carouselExampleControls .carousel-control-prev").on("click", function () {
//     if (scrollPosition > 0) {
//       scrollPosition -= cardWidth * 2;
//       $("#carouselExampleControls .carousel-inner").animate(
//         { scrollLeft: scrollPosition },600
//       );
//     }
//   });
// } else {
//   $(multipleCardCarousel).addClass("slide");
// }

