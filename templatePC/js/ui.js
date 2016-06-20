



// 모든 프로젝트에 사용되는 공통 ui
// body에 include 한다 (document.ready 생략)

    var ui = {

        linkBlur: (function(){

            //a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
            //focus 상태로 머무는 현상 없앤다.
            $('a').on('click', function(){
                this.blur();
            })

        })(),

        placeHolder: (function(){

            var plaecHolder = $('.placeHolder');

            //플레이스 홀더 ie8
            if(plaecHolder.val()){
                plaecHolder.css('backgroundPosition', '-100%');
            } else {
                plaecHolder.on('keydown', function(){
                    $(this).css('backgroundPosition', '-100%');
                })
            }
            //폼테그에 값이 없을 때, 백그라운드 이미지 다시 보여준다
            plaecHolder.on('focusout', function(){
                if(!$(this).val()) {
                    $(this).css('backgroundPosition', '10px center');
                }
            })

        })(),

        gnbHover : (function(){
            var gnb = $('.gnb-list')

            gnb.find('> li').hover(
                function(){
                    $(this).addClass('active');
                },
                function(){
                    $(this).removeClass('active');
                }
            )

            gnb.find('> li > a').on('focusin', function() {
                $(this).closest('li').addClass('active');
            })

            gnb.find('ul > li:last-child a').on('focusout', function() {
                $(this).closest('li').parents('li').removeClass('active');
            })
        })(),

        elShow : (function(){
            var toggleShowBtn = $('a[data-show]')

            //엘레먼트 show
            toggleShowBtn.on('click', function(event){
                event.preventDefault();

                var obj = $(this).data('show'),
                    objEl = $('li.' + obj);

                $('.sideBar-quickMenuPopup').hide();

                objEl.show();

                if(objEl.hasClass('full')){
                    $('.modal').show();
                }
            })

        })(),

        elHide : (function(){
            var toggleCloseBtn = $('a[data-hide]');

            //엘레먼트 close
            toggleCloseBtn.on('click', function(event){
                event.preventDefault();

                var obj = $(this).data('hide'),
                    objEl = $('li.' + obj);

                objEl.hide();

                if(objEl.hasClass('full')){
                    $('.modal').hide();
                }
            })
        })()
    }





//입사지원 팝업창
$('.loadDialog').click(function(e) {
    e.preventDefault();

    var dialogID = $(this).attr('href');

    $(dialogID).fadeIn(300);
    $('#background').fadeIn(300);
    $(dialogID).find('input').eq(0).focus();

    var dialogPosition = $(dialogID).height();
    $(dialogID).css('margin-top', ( - dialogPosition / 2 ));
});

$('#background, .dialog .closeBtn').click(function(e) {
    e.preventDefault();
    $('#background, .dialog').fadeOut(300);
});



// 백그라운드 이미지 preloader
// 백그라운드 이미지에서는 안되는것 같음......
// img 엘리먼트가 제대로 생성이 안 되는 것 같음. 테스트 필요
var preload = function() {

    var url = '/layouts/rebom/images/realstory';

    var images = [url + '/realstory_bg_case1.jpg', url + '/realstory_bg_case2.jpg', url + '/realstory_bg_case3.jpg', url + '/realstory_bg_case4.jpg', url + '/realstory_bg_case5.jpg', url + '/realstory_bg_person_01.png', url + '/realstory_bg_person_02.png', url + '/realstory_bg_person_03.png', url + '/realstory_bg_person_04.png', url + '/realstory_bg_person_05.png'];

    var imageEls = [];

    for (var i = 0; i < images.length; i++) {
        var image = new Image();

        image.src = images[i];

        imageEls.push(image);
    }

    return imageEls;

}



// 위로가기 버튼
gotoTop: (function(){
    var btn = $('#gotoTop');

    btn.on('click', function(e){
        e.preventDefault();
        $('html, body').stop().animate({'scrollTop': 0}, 300, 'swing');
    })

})()



