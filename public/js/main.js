$(document).ready(function () {
    $('.menu-toggle').click(function () {
        $('#main-menu-mobile').stop().slideToggle(500)
        return false;
    })
    function hide_responsive_menu() {
        $('#main-menu-mobile').scrollLeft()
        $('#main-menu-mobile li i').removeClass('open')

    }
    $(window).resize(function () {
        hide_responsive_menu()
    })
    $(window).scroll(function () {
        hide_responsive_menu()
    })
    $('#main-menu-mobile li i').click(function () {
        $(this).toggleClass('open')
        $(this).next().slideToggle()
    })

    $('.outlet-name').click(function(){
        $(this).next('.outlet-info').stop().slideToggle(500)
        $(this).find('i').toggleClass('bi-plus-lg')
        $(this).find('i').toggleClass('bi-dash-lg')
        return false;
    })
})
