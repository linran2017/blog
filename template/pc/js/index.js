jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
    //www.sucaijiayuan.com
    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0 ,
            }, scroll_top_duration
        );
    });
});
$(function(){
    //一级
    $('nav .container div ul.nav li').hover(function(){
        $(this).find('ul.dropdown-menu').stop().show(500);
    },function () {
        $(this).find('ul.dropdown-menu').stop().hide(500);
    })
    //二级
    $('nav .container div ul.nav li ul.dropdown-menu li').hover(function(){
        $(this).find('a').css({color:'#222'})
    },function () {
        $(this).find('a').css({color:'#fff'})
    })
})