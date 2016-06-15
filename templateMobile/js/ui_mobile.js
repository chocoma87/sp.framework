


//메인 메뉴가 토글일 경우, menuCloseBtn 은 빈 배열로 하고, menuControllerOpen 함수 추가해서 사용한다.
//필요에 따라 controller 함수 추가해서 사용한다.

var uiMobile = {

    init: function(){
        var container = this,
            option = {
                gnb: '.gnb',
                wrap: '.wrap',
                modalFull: '.modalFull',
                body: 'body'
            },
            menuOpenBtn = document.querySelectorAll('a[data-menu="open"]'),
            menuCloseBtn = document.querySelectorAll('a[data-menu="close"]'),
            toggleShowBtn = document.querySelectorAll('a[data-show]'),
            toggleCloseBtn = document.querySelectorAll('a[data-hide]'),
            toggleBtn = document.querySelectorAll('a[data-toggle]');


        //메인메뉴 열기
        for(i = 0; i < menuOpenBtn.length; i++){
            //addeventlistner ie8 에서 지원하지 않는다
            menuOpenBtn[i].addEventListener('click', function(){
                container.menuOpen(event, option)
            })
        }

        //메인메뉴 닫기
        for(i = 0; i < menuCloseBtn.length; i++){
            menuCloseBtn[i].addEventListener('click', function(){
                container.menuClose(event, option)
            })
        }

        //엘레먼트 show
        for( i = 0; i < toggleShowBtn.length; i++){
            toggleShowBtn[i].addEventListener('click', function(){
                container.showEl(event);
            })
        }

        //엘레먼트 close
        for( i = 0; i < toggleCloseBtn.length; i++){
            toggleCloseBtn[i].addEventListener('click', function(){
                container.hideEl(event);
            })
        }

        //엘레먼트 toggle
        for( i = 0; i < toggleBtn.length; i++){
            toggleBtn[i].addEventListener('click', function(){
                container.toggle(event);
            })
        }
    },


    //메인 메뉴 연다.
    menuOpen: function (event, option) {
        event.preventDefault();

        var gnb = document.querySelectorAll(option.gnb)[0],
            body = document.querySelectorAll(option.body)[0],

        //this 가 attatchEvent 를 가르키는 경우를 대비해서 event.srcElement 을 사용한다.
        //ex)controller 에서 함수를 실행할 때.
            target = event.srcElement;


        //메인메뉴 함수 실행하는 조건문
        /* var gnbOpen = this.menuControllerOpen(target, event, option);
         if( gnbOpen === true){
            return
         }*/

        //gnb 에니메이션
        gnb.classList.remove('close');
        gnb.classList.add('open');

        //에니메이션 callback
        gnb.addEventListener('webkitTransitionEnd', function(event){
            body.classList.add('sidemenu');
            target.classList.add('active');
        },false);
    },

    //메인 메뉴 닫는다.
    menuClose: function (event, option) {

        event.preventDefault();

        var gnb = document.querySelectorAll(option.gnb)[0],
            body = document.querySelectorAll(option.body)[0],
            target = event.srcElement;;

        //gnb 에니메이션
        gnb.classList.remove('open');
        gnb.classList.add('close');

        //에니메이션 callback
        gnb.addEventListener('webkitTransitionEnd',function(event){
            target.classList.remove('active');
            body.classList.remove('sidemenu');
        },false);
    },


    menuControllerOpen: function(menuBtn, event, option){

        if(hasClass(menuBtn, 'active')){
            this.menuClose(event, option);

            return true;
        } else {
            return false;
        }
    },


    //버튼 클릭 시 엘리먼트 토글한다.
    //dom 엘리먼트에 data-toggle="target" 추가한다
    toggle: function (e) {
        e.preventDefault();

        var thisObj = e.srcElement,
            el = thisObj.dataset.toggle,
            obj = document.querySelectorAll('div.' + el);

        obj.toggle();
        thisObj.toggleClass('active');
    },

    //버튼 클릭 시 엘리먼트 보여준다.
    //data-show = "objClass"
    //modal 필요하면 obj 에 .full 클래스 추가한다
    showEl: function (e) {
        e.preventDefault();

        var obj = e.srcElement.dataset.show,
            objEl = document.querySelectorAll('div.' + obj)[0];

        objEl.style.display = 'block';

        if(hasClass(objEl, 'full')){
            document.querySelectorAll('.modal')[0].style.display = 'block';
        }
    },

    //버튼 클릭 시 엘리먼트 숨긴다.
    //data-hide = "objClass"
    //modal 필요하면 클래스에 .full 추가한다
    hideEl: function (e) {
        e.preventDefault();

        var obj = e.srcElement.dataset.hide,
            objEl = document.querySelectorAll('div.' + obj)[0];

        objEl.style.display = 'none';

        if(hasClass(objEl, 'full')){
            document.querySelectorAll('.modal')[0].style.display = 'none';
        }
    }
}


var hasClass = function (elem, className) {
    return elem.className && RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

uiMobile.init();










/***************************************/
/* 메뉴 여러개 일때 */
/* 버튼/엘레먼트 dom 을 인자로 받는다 */
/***************************************/

var multipleMenu = {
    init: function( obj, openBtn, closeBtn ){
        var self = this,
            option = {
                obj: obj,
                wrap: '.wrap',
                modalFull: '.modalFull',
                modal: '.modal',
                body: 'body',
                menuOpenBtn: openBtn,
                menuCloseBtn: closeBtn
            };


        // 메인메뉴 열기
        if(option.menuOpenBtn){
            //addeventlistner ie8 에서 지원하지 않는다
            option.menuOpenBtn.addEventListener('click', function(event){
                self.menuOpen(event, option);
            });
        }

        //메인메뉴 닫기
        if(option.menuCloseBtn){
            option.menuCloseBtn.addEventListener('click', function(event){
                self.menuClose(event, option);
            });
        }

    },

    //메인 메뉴 연다.
    menuOpen: function (event, option) {
        event.preventDefault();

        var obj = option.obj,
            body = document.querySelectorAll(option.body)[0],
            modal = document.querySelectorAll(option.modal)[0],

        //this 가 attatchEvent 를 가르키는 경우를 대비해서 event.srcElement 을 사용한다.
        //ex)controller 에서 함수를 실행할 때.
            target = event.srcElement;

        obj.style.opacity = 1;

        //메인메뉴 함수 실행하는 조건문
        var gnbOpen = this.menuControllerOpen(target, event, option);
        if( gnbOpen === true){
            return;
        }

        //obj 에니메이션
        obj.classList.remove('close');
        obj.classList.add('open');

        modal.classList.add('open');

        target.classList.add('active');
        body.classList.add('sidemenu');

    },

    //메인 메뉴 닫는다.
    menuClose: function (event, option) {

        event.preventDefault();

        var obj = option.obj,
            body = document.querySelectorAll(option.body)[0],
            modal = document.querySelectorAll(option.modal)[0];

        //obj 에니메이션
        obj.classList.remove('open');
        obj.classList.add('close');

        modal.classList.remove('open');

        option.menuOpenBtn.classList.remove('active');
        body.classList.remove('sidemenu');

        // 안드로이드 예전버전 맞추기 위해서, 확대할 경우, 보이지 말아야 할 메뉴가 보인다
        var opacity = function(event){
            obj.style.opacity = 0;
        };

        obj.addEventListener('webkitTransitionEnd', opacity, false);

        // 이벤트 리스너가 계속 추가되지 않게 remove 해준다
        obj.removeEventListener('webkitTransitionEnd', opacity, false);

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
}


var gnb = document.getElementById('gnb');
var gnbBtn = document.querySelectorAll('.gnbBtn')[0];


var quiMenu = document.querySelectorAll('.quickMenu')[0];
var quiMenuBtn = document.querySelectorAll('.quickBtn')[0];
var quiMenuCloseBtn = document.querySelectorAll('.quickMenu .close')[0];

// 닫는 버튼은 안 넣어줘도 된다
//multipleMenu.init( gnb, gnbBtn);
//multipleMenu.init( quiMenu, quiMenuBtn, quiMenuCloseBtn);


$('.modal').on('click', function(){

    $(gnb).removeClass('open');
    $(quiMenu).removeClass('open');

    $(this).removeClass('open');

    $('body').removeClass('sidemenu');

    $('.quickBtn, .gnbBtn').removeClass('active');
});


// 두개가 같이 보이면 안됨
$('.gnbBtn').on('click', function(){

    var isGnbClose = $('.gnbBtn').hasClass('active');
    var isQuickOpen = $('.quickBtn').hasClass('active');

    if(isQuickOpen){
        quiMenu.classList.remove('open');
        quiMenuBtn.classList.remove('active');
    }

});

$('.quickBtn').on('click', function(){

    var isGnbClose = $('.gnbBtn').hasClass('active');
    var isQuickOpen = $('.quickBtn').hasClass('active');

    if(isGnbClose){
        gnb.classList.remove('open');
        gnbBtn.classList.remove('active');
    }

});

