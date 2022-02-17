const swiper = new Swiper('.swiper-summer', {
    // Optional parameters
    loop: true,
  
    // If we need pagination
    pagination: false,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
	slidesPerView: 1.6,
    centeredSlides : true,
	spaceBetween: 60,
	initialSlide: 3,
  });

const swiper2 = new Swiper('.swiper-winter', {
    // Optional parameters
    loop: true,
  
    // If we need pagination
    pagination: false,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
	slidesPerView: 1.6,
    centeredSlides : true,
	spaceBetween: 60,
	initialSlide: 3,
  });