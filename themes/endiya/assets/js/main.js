
//  dropdown in mobile start
$(document).ready(function () {
  
    if ($(window).width() < 765) {
      (function monitoringcardsTextCarousel() { 
        $('.monitoring__all-cards').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        swipe: true,
        infinite: true,
        slide:".monitoring-card-details",
        nextArrow: '<div class ="nextarrow"><svg><use xlink:href="#arrows"></use></svg></div>',
        prevArrow: '<div class="prevarrow"><svg><use xlink:href="#arrows"></use></svg></div>',
      })
    })();
      
      (function itprosTextCarousel() {
        $('.it-pros__block').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          dots: true,
          arrows: true,
          swipe: false,
          infinite: true,
          nextArrow: '<div class ="nextarrow bg-color"><svg><use xlink:href="#arrows"></use></svg></div>',
          prevArrow: '<div class="prevarrow bg-color"><svg><use xlink:href="#arrows"></use></svg></div>',
        })
      })();
     
      (function homeHeaderTextCarousel() {
        $('.hd__hosting-block').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 1000,
          dots: true,
          arrows: true,
          swipe: false,
          infinite: false,
          nextArrow: '<div class ="nextarrow bg-color"><svg><use xlink:href="#arrows"></use></svg></div>',
          prevArrow: '<div class="prevarrow bg-color"><svg><use xlink:href="#arrows"></use></svg></div>',
        })
      })();

      // scroll to top block start
      // Check to see if the window is top if not then display button
      // scroll to top block end
    }
});
//  dropdown in mobile end



$(document).ready(function () {
	// Check to see if the window is top if not then display button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('.page-scroll-top').fadeIn()
		} else {
			$('.page-scroll-top').fadeOut()
		}
	})

	// Click event to scroll to top
	$('.page-scroll-top').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 800)
		return false
	})
})




$(document).ready(function () {
  if ($(window).width() < 765) {
      (function homeHeaderTextCarousel() {
        $('.monitoring__two-cards').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 1000,
          dots: true,
          arrows: true,
          swipe: false,
          infinite: true,
          slide:".monitoring__card",
          nextArrow: '<div class ="nextarrow bg-color"><svg><use xlink:href="#arrows"></use></svg></div>',
          prevArrow: '<div class="prevarrow bg-color"><svg><use xlink:href="#arrows"></use></svg></div>',
        })
      })();
    }
})
