$(function () {
    
    'use strict';

    var swiper = new Swiper('.products-carousel', {
        slidesPerView: 6,
//        spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next',
          prevEl: '.button-prev',
        },
        breakpoints: {
            1400: {
                slidesPerView: 6
            },
            1300: {
              slidesPerView: 5
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
      var swiper2 = new Swiper('#demo2 .products-carousel', {
        slidesPerView: 6,
//          spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next-2',
          prevEl: '.button-prev-2',
        },
        breakpoints: {
            1400: {
                slidesPerView: 6
            },
            1300: {
              slidesPerView: 5
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
      var swiper3 = new Swiper('#demo3 .products-carousel', {
        slidesPerView: 6,
//           spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next-3',
          prevEl: '.button-prev-3',
        },
        breakpoints: {
            1400: {
                slidesPerView: 6
            },
            1300: {
              slidesPerView: 5
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
      var swiper4 = new Swiper('#demo4 .products-carousel', {
        slidesPerView: 6,
//           spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next-4',
          prevEl: '.button-prev-4',
        },
        breakpoints: {
            1400: {
                slidesPerView: 6
            },
            1300: {
              slidesPerView: 5
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
      var swiper5 = new Swiper('#demo5 .products-carousel', {
        slidesPerView: 6,
//          spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next-5',
          prevEl: '.button-prev-5',
        },
        breakpoints: {
            1400: {
                slidesPerView: 6
            },
            1300: {
              slidesPerView: 5
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
      var swiper6 = new Swiper('#demo6 .products-carousel', {
        slidesPerView: 6,
//          spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next-6',
          prevEl: '.button-prev-6',
        },
        breakpoints: {
            1400: {
                slidesPerView: 6
            },
            1300: {
              slidesPerView: 5
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
});
