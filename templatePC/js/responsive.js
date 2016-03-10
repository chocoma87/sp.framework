




//반응형 웹
//https://www.jonathanfielding.com/managing-responsive-design-breakpointstates-in-javascript

// 반환하는 오브젝트
// stateManager.init
// stateManager.getState

// 함수 실행 -> stateManager.init();


var stateManager = (function ($) {
    var state = null;

    var domEls = {
        stickyWrapper : $('#sideBar'),
        popup : $('.sideBar-quickMenuPopup'),
        popupClose : $('.sideBar-quickMenuPopupClose')
    }

    var setState = function () {
        if ($('body').width() < 1440) {
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
    };

    var displayMobile = function () {
        //When mobile state is shown this fires

        var stickyWrapper = domEls.stickyWrapper,
            popup = domEls.popup,
            popupClose = domEls.popupClose;

        stickyWrapper.css({width: 50, marginLeft: 50});

        stickyWrapper.on('mouseenter', function(){
            $(this).css({width: 100, marginLeft: 0});
        })
        stickyWrapper.on('mouseleave', function(){
            if(popup.is(':visible')) {
                $(this).css({width: 100, marginLeft: 0})
            } else {
                stickyWrapper.css({width: 50, marginLeft: 50});
            }
        })

        popupClose.on('click', function(){
            stickyWrapper.css({width: 50, marginLeft: 50});
        })
    };

    var displayDesktop = function () {
        //When desktop state is shown this fires

        var stickyWrapper = domEls.stickyWrapper,
            popup = domEls.popup,
            popupClose = domEls.popupClose;


        stickyWrapper.css({width: 100, marginLeft: 0});
        stickyWrapper.off()

        popupClose.on('click', function(){
            stickyWrapper.css({width: 100, marginLeft: 0})
        });
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

})(jQuery);



//모바일, 피씨구분 함수 실행
stateManager.init();






