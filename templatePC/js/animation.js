




// 스크롤 에니메이션
// 새로운 스크롤 오브젝트 생성한 다음, init 실행시킨다

// 반환하는 오브젝트 -> scrollAni.init()

(function ($) {

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
                    objBottom: selectedEl.offset().top + selectedEl.outerHeight(),
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

                    //오브젝트가 화면 중간에 왔을 때 실행한다
                    if (scrollTop > objs.objTop + 200 && arrive !== 'yes'){

                        arrive = 'yes';

                        //실행시킬 에니메이션
                        wrapper.customfunc.apply(objs.target);

                    } else if (scrollTop < objs.objBottom - 200 && arrive !== 'no') {
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


})(jQuery);
