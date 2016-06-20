




//반응형 웹
//https://www.jonathanfielding.com/managing-responsive-design-breakpointstates-in-javascript

// 반환하는 오브젝트
// stateManager.init
// stateManager.getState

// 함수 실행 -> stateManager.init();


"use strict";

var hasClass = function (elem, className) {
    return elem.className && RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

var multipleMenu = {
    init: function( obj, openBtn, closeBtn ){
        var self = this,
            option = {
                obj: obj,
                wrap: '.wrap',
                body: 'body',
                menuOpenBtn: openBtn,
                menuCloseBtn: closeBtn
            };


        var openEvent = function(event){
            self.menuOpen(event, option);
        };

        // 메인메뉴 열기
        if(option.menuOpenBtn){
            // addeventlistner ie8 에서 지원하지 않는다
            // 반응형 일때, pc 에서 이벤트 remove 해주기 위해서 이름 있는 함수를 사용한다 (인자가 두개 필요함)
            option.menuOpenBtn.addEventListener('click', openEvent);
        }

        var closeEvent = function(event){
            self.menuClose(event, option);
        };

        //메인메뉴 닫기
        if(option.menuCloseBtn){
            option.menuCloseBtn.addEventListener('click', closeEvent);
        }

        // 이벤트 헨들러에 추가한 함수 리턴해준다 (반응형에서 pc 일 경우, remove 해주기 위해서)
        return {open: openEvent, close: closeEvent};

    },

    //메인 메뉴 연다.
    menuOpen: function (event, option) {
        event.preventDefault();

        var obj = option.obj,
            body = document.querySelectorAll(option.body)[0],

        //this 가 attatchEvent 를 가르키는 경우를 대비해서 event.srcElement 을 사용한다.
        //ex)controller 에서 함수를 실행할 때.
            target = event.srcElement;

        //메인메뉴 함수 실행하는 조건문
        var gnbOpen = this.menuControllerOpen(target, event, option);
        if( gnbOpen === true){
            return;
        }

        //obj 에니메이션
        obj.classList.remove('close');
        obj.classList.add('open');

        target.classList.add('active');
        body.classList.add('sidemenu');

    },

    //메인 메뉴 닫는다.
    menuClose: function (event, option) {

        event.preventDefault();

        var obj = option.obj,
            body = document.getElementsByTagName(option.body)[0];

        //obj 에니메이션
        obj.classList.remove('open');
        obj.classList.add('close');

        option.menuOpenBtn.classList.remove('active');
        body.classList.remove('sidemenu');


        //obj.addEventListener('webkitTransitionEnd', opacity, false);

        // 이벤트 리스너가 계속 추가되지 않게 remove 해준다
        //obj.removeEventListener('webkitTransitionEnd', opacity, false);

    },

    // 메뉴 오픈하는 조건, 토글 일 경우에도 사용한다
    menuControllerOpen: function(menuBtn, event, option){

        if(hasClass(menuBtn, 'active')){
            this.menuClose(event, option);
            return true;
        } else {
            return false;
        }
    }
};




//https://www.jonathanfielding.com/managing-responsive-design-breakpointstates-in-javascript
var stateManager = (function ($) {
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

        // 닫는 버튼은 안 넣어줘도 된다
        var gnb = document.getElementById('gnb');
        var gnbBtn = document.getElementById('header-menuBtn');

        // gnb 함수 실행한다
        // 모바일 메인메뉴 버튼에 등록된 이벤트 핸들러 함수명을 글로벌 변수로 저장한다 (pc 일때 remove 해주기 위해서)
        window.addedEvent = multipleMenu.init(gnb, gnbBtn);


        // pc 에서 적용한 이벤트 off 해준다
        //
        //
        //


        // 모바일에서 필요한 함수
        //
        //
        //

    };

    var displayDesktop = function () {
        //When desktop state is shown this fires

        // 모바일에서 줬던 이벤트 off
        //
        //
        //


        // 모바일에서 적용시킨 이벤트 핸들러 없애주는데,
        // 모바일 실행 한 후에만 addedEvent.open 생성된다
        var gnbBtn = document.getElementById('header-menuBtn');
        if(window.addedEvent){
            gnbBtn.removeEventListener('click', addedEvent.open);
        }

        // 모바일에서 적용시켰던 스타일 원복시킨다
        //
        //
        //


        // pc 에서 필요한 함수들
        //
        //
        //

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

}(jQuery));



// 모바일, 피씨구분 함수 실행
// 현재 디바이스 device 변수에 저장한다
var device = stateManager.init();








