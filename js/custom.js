
$(document).ready(function () {


    // :focus border 없애기
    $('a').on('click', function () {
        this.blur();
    })


    // gnb 서브메뉴 토글
    $('#headerMobile ul.mobileMainmenu').sptreemenu({
        hasIcon: true
    });




})
