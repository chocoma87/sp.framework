
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

})



//preload image
$(window).load(function () {
    //$("#status").fadeOut();

    $("#preloader").delay(500).fadeOut("1200");
});





