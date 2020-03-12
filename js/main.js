/*
    --------------- NAV LEFT ANIMATION ----------------
*/

$('.nav-btn').on('click', function() {
    var main = $('.main-nav');
    if(main.css('margin-left') == "0px"){
        main.css('margin-left','-300px');
        $('.nav-btn').css('margin-left','275px');
        $('.nav-btn').css('transform','rotate(180deg)');
        $('main').css('width','100%');
        $('main').css('margin-left','0');

    } else {
        main.css('margin-left','0px');
        $('.nav-btn').css('margin-left','0px');
        $('.nav-btn').css('transform','rotate(0deg)');
        $('main').css('width','calc(100% - 300px)');
        $('main').css('margin-left','300px');
    }
});

/*
    --------------- BACK TO TOP ----------------
*/

$(function() {
    $('#back-to-top').click(function() {
      $('html').animate({scrollTop:0}, 1000);
      return false;
    });
});

/*
    --------------- LETTER TO CONTACT ----------------
*/

$(function() {
    $('.btn-home').click(function() {
      $('html,body').animate({scrollTop:$(".contact").offset().top}, 1000);
      return false;
    });  
})

/*
    --------------- ARROW TO ABOUT ----------------
*/

$(function() {
    $('.fa-chevron-circle-down').click(function() {
      $('html,body').animate({scrollTop:$(".about").offset().top}, 1000);
      return false;
    });  
})

/*
    --------------- RESPONSIVE NAV ----------------
*/

$('.mq-nav').on('click',function(){
    if($('.mq-nav-content').is(':hidden')){
        $('.mq-nav').html('<i class="fas fa-times"></i>');
    } else {
        $('.mq-nav').html('<i class="fas fa-bars"></i>')
    }
    $('.mq-nav-content').fadeToggle(300);
});