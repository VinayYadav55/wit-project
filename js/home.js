$(document).ready(function() {
  /*$(window).on('scroll', function(){
		var height = $(window).scrollTop();
		

	if(height>=100){
		$('.topheader').addClass('stickyHeader');
		
	}
	if(height<=100){
		$('.topheader').removeClass('stickyHeader');
	}
	})*/
	
	  setTimeout(function() {
    $('.popUpImage').fadeIn(1000);
    $('.overlay-popup').fadeIn(1000);
  }, 3000);
  $('.cutBtn').click(function() {
    $('.popUpImage').fadeOut(1000);
    $('.overlay-popup').fadeOut(1000);
  });
    $('.cutBtnMobiles').click(function() {
    $('.popUpImage').fadeOut(1000);
    $('.overlay-popup').fadeOut(1000);
  });

  $('.eventBannerImage').on('mouseover', function() {
    $(this).addClass('animated pulse');
  });
  $('.eventBannerImage').on('mouseout', function() {
    $(this).removeClass('animated pulse');
  });
});
