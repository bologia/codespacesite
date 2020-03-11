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