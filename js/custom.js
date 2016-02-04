
$(document).ready(function () {

    // :focus border 없애기
    $('a, button').on('click', function () {
        this.blur();
    })

    // gnb 토글
    $('header nav.gnb > ul').hovermenu();




    // 모바일 gnb 서브메뉴 토글
    $('#headerMobile ul.mobileMainmenu').sptreemenu({
        hasIcon: true
    });

    // 모바일 lnb 토글
    $('.lnb').spaccordion({
        elTitle           : 'div',
        elContent         : 'ul',
        hasIcon: true,
        downIconClass: 'fa fa-chevron-down',
        upIconClass: 'fa fa-chevron-up'
    });

    //모바일 gnb 토글
    $('.gnbMobileBtn a, .modalFull, .closeMobileGnb a').on('click', function(e){
        e.preventDefault();

        if ($('#container').css('left') == '0px') {
            $('#container').animate({left: '240px'}, 300, function () {
                $('#headerMobile').css('z-index', 10);
                $('.modalFull').show().css('left', '240px');
            });
            $('.topCover').hide();
        } else {
            $('#container').animate({left: '0px'}, 300);
            $('.modalFull').animate({left: '0px'}, 300, function () {
                $(this).hide();
                $('.topCover').show();
            });
            $('#headerMobile').css('z-index', -10);
        }

        $('body').toggleClass('sidemenu');

    })

    $('input').iCheck('check', function(){
        //alert('Well done, Sir');
    });

})


//preload image
$(window).load(function () {
    //$("#status").fadeOut();

    $("#preloader").delay(500).fadeOut("1200");
});






