$(document).ready(function(){

  
  $('a.down').fastClick(function(e) {
    e.preventDefault();
    var target = $(this).attr('href');
    var scroll = $(target).offset().top;
    scrollToItem(target,scroll);
  })
  
  

  function scrollToItem(target,scroll){
    if(target == '#up'){
      scroll = 0;
    }
    $('html,body').animate({
        scrollTop: '' + scroll + 'px'
    }, 400);
  }
  
  // var s1 = $('#us');
  // var s2 = $('#ceremony');
  // var s3 = $('#party');
  // var s4 = $('#pozole');
  // var s5 = $('#register');
  // var s6 = $('footer');


  // var s1Top = s1.offset().top - 150 ;
  // var s2Top = s2.offset().top - 150;
  // var s3Top = s3.offset().top - 150;
  // var s4Top = s4.offset().top - 150;
  // var s5Top = s5.offset().top - 150;
  // var s6Top = s6.offset().top - 300;


  // $(window).scroll(function(){
  //   var scroll = window.pageYOffset;
  //   if(Modernizr.touch){
  //       if(scroll > s1Top - 200){
  //         s1.addClass('show');
  //       }
  //       if(scroll > s2Top - 200){
  //         s2.addClass('show');
  //       }
  //       if(scroll > s3Top - 200){
  //         s3.addClass('show');
  //       }
  //       if(scroll > s4Top - 200){
  //         s4.addClass('show');
  //       }
  //       if(scroll > s5Top - 200){
  //         s5.addClass('show');
  //       }
  //       if(scroll > s6Top){
  //         s6.addClass('show');
  //       }
  //   }else{
  //       if(scroll > s1Top){
  //         s1.addClass('show');
  //       }
  //       if(scroll > s2Top){
  //         s2.addClass('show');
  //       }
  //       if(scroll > s3Top){
  //         s3.addClass('show');
  //       }
  //       if(scroll > s4Top){
  //         s4.addClass('show');
  //       }
  //       if(scroll > s5Top){
  //         s5.addClass('show');
  //       }
  //       if(scroll > s6Top){
  //         s6.addClass('show');
  //       }
  //   }
  // });










  
});