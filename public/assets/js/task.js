$('.main-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    rtl:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
$('.owl-nav button').append(`<img src="assets/img/task/right-arrow.png" alt="">`)
$('.owl-nav button img').hover(()=>{
    $(this).attr('src' , 'assets/img/task/right.png')
}, function(){
    $(this).attr("src", "assets/img/task/right-arrow.png");
  })
