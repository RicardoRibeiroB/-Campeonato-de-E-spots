$(function(){

  $(".slide-principal").slick({
    infinite: true,
    slidesToShow: 3,
    slideToScroll: 1,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 2000
  });

  
  $(".slide-principal").on('afterChange', function(){
    $("#watch-name").text( $(".slick-center").data("name"));
  })

})









/*$('.slide-principal').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});*/




/*$('.slide-principal').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: false,
    autoplaySpeed: 2000
});*/