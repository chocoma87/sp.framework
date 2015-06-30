
$(document).ready(function () {


    // :focus border 없애기
    $('a').on('click', function () {
        this.blur();
    })


    // gnb 서브메뉴 토글
    $('#headerMobile ul.mobileMainmenu').sptreemenu({
        hasIcon: true
    });

    // lnb 토글
    $('.lnb').spaccordion({
        elTitle           : 'div',
        elContent         : 'ul'
    });


})



//preload image
$(window).load(function () {
    //$("#status").fadeOut();
    $("#preloader").delay(500).fadeOut("1200");
});





