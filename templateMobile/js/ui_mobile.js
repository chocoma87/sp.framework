





$(document).ready(function () {
    uiMobile.init();
});



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
        /* var gnbOpen = option.menuControllerOpen(target, event, option);
         if( gnbOpen === true){
         return
         }*/

        //gnb 에니메이션
        gnb.classList.remove('close');
        gnb.classList.add('open');

        //에니메이션 callback
        gnb.addEventListener('transitionEvent',function(event){
            event.srcElement.classList.add('active');
            body.classList.add('sidemenu');
            target.classList.add('active');

            //에니메이션 끝난 상태로 유지
            gnb.style.webkitTransform = 'translateX(250px)';
            gnb.style.MozTransform = 'translateX(250px)';
            gnb.style.msTransform = 'translateX(250px)';
            gnb.style.webkitTransform = 'translateX(250px)';

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
        gnb.addEventListener('webkitAnimationEnd',function(event){
            target.classList.remove('active');
            body.classList.remove('sidemenu');

            //에니메이션 끝난 상태로 유지
            gnb.style.webkitTransform = 'translateX(0px)';
            gnb.style.MozTransform = 'translateX(0px)';
            gnb.style.msTransform = 'translateX(0px)';
            gnb.style.webkitTransform = 'translateX(0px)';

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



