// Slick Slider
$('.multi').slick({
    speed: 900,
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [{
        breakpoint: 1124,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true
        }
    }, {
        breakpoint: 968,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }]
});
$(document).ready(function(){
    let scroll_link = $('.scroll');
   
     //smooth scrolling -----------------------
     scroll_link.click(function(e){
         e.preventDefault();
         let url = $('body').find($(this).attr('href')).offset().top;
         $('html, body').animate({
           scrollTop : url
         },700);
         $(this).parent().addClass('active');
         $(this).parent().siblings().removeClass('active');
         return false;	
      });
   });
