


$(document).on('ready', function(){

    //a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
    //focus 상태로 머무는 현상 없앤다.
    $('a').on('click', function(){
        this.blur();
    })




    var toggleShowBtn = $('a[data-show]'),
        toggleCloseBtn = $('a[data-hide]');

    //엘레먼트 show
    toggleShowBtn.on('click', function(){
        showEl(event, $(this));
    })

    //버튼 클릭 시 엘리먼트 보여준다.
    var showEl = function (e, current) {

        var obj = current.data('show'),
            objEl = $('div.' + obj);

        objEl.show();

        if(objEl.hasClass('full')){
            $('.modal').show();
        }

    };


    //엘레먼트 close
    toggleCloseBtn.on('click', function(){
        hideEl(event, $(this));
    })

    //버튼 클릭 시 엘리먼트 숨긴다.
    var hideEl = function (e, current) {
        e.preventDefault();

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
	/*	var scrollAni = {

			init : function(obj, testfunc) {

				//동작에 필요한 dom 요소 생성한다
				var objs = this.makeObjects(obj);

				this.scroll(objs);

				this.customfunc = testfunc;
			},

			//이벤트 적용시킬 엘리먼트 받아온다
			makeObjects : function(obj){

				var els = {
					objTop : obj.offset().top,
					windowHeight : $(window).innerHeight(),
					wrapper: this,
					target : obj
				}

				return els;
			},

			customfunc : {},

			scroll : function(objs){

				var arrive = 'no';

				$(window).on('scroll', function(){
					var currentScroll =  $(window).scrollTop(),
						scrollTop = objs.windowHeight + currentScroll,
						wrapper = objs.wrapper;


					if (scrollTop > objs.objTop && arrive !== 'yes'){

						arrive = 'yes';

						//실행시킬 에니메이션.
						wrapper.customfunc(objs.target);

					} else if (scrollTop < objs.objTop && arrive !== 'no') {

						arrive = 'no';

					}
				})
			}
		}



		var test = function(el){
			console.log('customFunc');
			console.log(this);
			console.log(el);

		};


		scrollAni.init($('.mainGlobalNetworks h3'), test);*/


})
