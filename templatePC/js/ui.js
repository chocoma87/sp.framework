


$(document).on('ready', function(){

    //a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
    //focus 상태로 머무는 현상 없앤다.
    $('a').on('click', function(){
        this.blur();
    })




    var toggleShowBtn = $('a[data-show]'),
        toggleCloseBtn = $('a[data-hide]');

    //엘레먼트 show
    toggleShowBtn.on('click', function(event){
        showEl(event, $(this));
    })

    //엘레먼트 close
    toggleCloseBtn.on('click', function(event){
        hideEl(event, $(this));
    })



    //버튼 클릭 시 엘리먼트 보여준다.
    var showEl = function (event, current) {
        event.preventDefault();

        var obj = current.data('show'),
            objEl = $('div.' + obj);

        objEl.show();

        if(objEl.hasClass('full')){
            $('.modal').show();
        }

    };

    //버튼 클릭 시 엘리먼트 숨긴다.
    var hideEl = function (event, current) {
        event.preventDefault();

        var obj = current.data('hide'),
            objEl = $('div.' + obj);

        objEl.hide();

        if(objEl.hasClass('full')){
            $('.modal').hide();
        }
    }






    //플레이스 홀더 ie8
    $('.placeHolder').on('keydown', function(){
        $(this).css('backgroundPosition', '-100%');
    })
    //폼테그에 값이 없을 때, 백그라운드 이미지 다시 보여준다
    $('.placeHolder').on('focusout', function(){
        if(!$(this).val()) {
            $(this).css('backgroundPosition', '10px center');
        }
    })



/*

    /!* Hover Menu *!/
    var gnb = $('#gnb .gnb-list')
    gnb.find('> li').hover(
        function(){
            $(this).addClass('active');
            console.log('in');
        },
        function(){
            $(this).removeClass('active');
            console.log('out');
        }
    )

    gnb.find('> li > a').on('focusin', function() {
        $(this).closest('li').addClass('active');
    })

    gnb.find('ul > li:last-child a').on('focusout', function() {
        $(this).closest('li').parents('li').removeClass('active');
    })

*/





    /* 스크롤 에니메이션 */
    var scrollAni = function(selectedEl, newFunc){

        var self = {
            init : function() {

                //동작에 필요한 dom 요소 생성한다
                var objs = this.makeObjects(selectedEl);

                this.customfunc = newFunc;

                this.scroll(objs);
            },

            //동작에 필요한 dom 요소 생성한다
            makeObjects : function(){

                var els = {
                    objTop : selectedEl.offset().top,
                    windowHeight : $(window).innerHeight(),
                    wrapper: this,
                    target : selectedEl
                }

                return els;
            },

            customfunc : {},

            scroll : function(objs){

                var arrive = 'no';
                var wrapper = objs.wrapper;

                //스크롤 내리지 않아도 되는 경우
                if (objs.windowHeight > objs.objTop){

                    wrapper.customfunc.apply(objs.target);

                    return
                }

                $(window).on('scroll', function(){
                    var currentScroll =  $(window).scrollTop(),
                        scrollTop = objs.windowHeight + currentScroll,
                        wrapper = objs.wrapper;

                    if (scrollTop > objs.objTop && arrive !== 'yes'){

                        arrive = 'yes';

                        //실행시킬 에니메이션
                        wrapper.customfunc.apply(objs.target);

                    } else if (scrollTop < objs.objTop && arrive !== 'no') {
                        arrive = 'no';
                    }
                })
            }
        }

        return self;

    }



    /* 새로운 스크롤 오브젝트 생성한 다음, init 실행시킨다
    /* 한 페이지에 여러 에니메이션 생성 가능
        var ani1 = new scrollAni($('.innovationRow:eq(0) .product'), innovationAni)
        var ani2 = new scrollAni($('.innovationRow:eq(1) .product'), innovationAni2);

        ani1.init();
        ani2.init();
    */


});


















//반응형 웹

    //https://www.jonathanfielding.com/managing-responsive-design-breakpointstates-in-javascript
    var stateManager = (function () {
        var state = null;

        var setState = function () {
            if ($('body').width() < 980) {
                if (state !== "mobile") {
                    state = "mobile";
                    displayMobile();
                }
            }
            else {
                if (state !== "desktop") {
                    state = "desktop";

                    displayDesktop();
                }
            }
        };

        var resizePage = function () {
            setState();

            if (state === "mobile") {
                resizeMobile();
            }
            else {
                resizeDesktop();
            }
        };

        var displayMobile = function () {
            //When mobile state is shown this fires

            $('#header').addClass('mobile').removeAttr('style');
            //모바일 사이즈에서 show 해줬던 엘레먼트 hide 한다
            $('.mobileMenuWrap').hide();
            $('.depth2').hide();
            $('.mobileBtn').removeClass('on');

            //윈도우 리사이즈 할때마다, a테그에 여러번 이벤트 핸들러 추가되는 것 방지
            $('#gnb>ul>li>a').off();
            $('#gnb').off();
            $('.mobileBtn').off('click');
            $('#lnb li.current a').off('click');

            //gnb 토글
            $('.mobileBtn').click(function(e){
                e.preventDefault();

                $(this).toggleClass('on');
                $('.mobileMenuWrap').slideToggle(150);
            });

            //gnb 서브메뉴 토글
            $('#gnb>ul>li>a').on('click', function(e){
                e.preventDefault();

                $(this).closest('li').siblings('li').find('> a').removeClass('on');

                $(this).closest('li').siblings('li').find('.depth2').slideUp(150);
                $(this).next('.depth2').slideToggle(150);
            })

            //lnb 토글
            $('#lnb li.current a').click(function(e){
                e.preventDefault();

                $('#lnb').toggleClass('open');
            });
        };

        var displayDesktop = function () {
            //When desktop state is shown this fires

            //윈도우 리사이즈 할때마다, dom 엘리먼트에 여러번 이벤트 핸들러 추가되는 것 방지
            $('#gnb').find('>ul>li>a').off('mouseover focus');
            $('#gnb').off('mouseleave')

            $('#header').removeClass('mobile');
            //모바일 사이즈에서 hide 해줬던 엘레먼트 show 한다
            $('.mobileMenuWrap').show();
            $('.depth2').show();

            var $headerHeight = $("#header").outerHeight();
            var $headerDepth2Height = $("#gnb > ul li:first-child .depth2").outerHeight();


            $('#gnb').find('>ul>li>a')
                .mouseover(function(){
                    $('#header').addClass('hover').animate({height: $headerHeight + $headerDepth2Height}, 150);
                })
                .focus(function(){
                    $(this).mouseover();
                })
                .end()//선택자가 #gnb로 되돌아 간다
                .mouseleave(function(){
                    $('#header').removeClass('hover').animate({height: $headerHeight}, 150);
                })
                .find('ul > li:last-child li:last-child a')
                .focusout(function(){
                    $('#header').removeClass('hover').animate({height: $headerHeight}, 150);
                });
        };

        var resizeMobile = function () {
            //When mobile state is resized this fires
        };

        var resizeDesktop = function () {
            //When desktop state is resized this fires
        };

        return {
            init: function () {
                setState();
                $(window).on('resize', resizePage);
            },
            getState: function () {
                return state;
            }
        };

    } ());

    (function ($) {
        $(document).ready(function () {
            //모바일, 피씨구분 함수 실행
            stateManager.init();
        });
    })(jQuery);
