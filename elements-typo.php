<?include('include/_header.php');?>

		<div id="contentWrap">
			<div class="setWidth row clearFix">
				 <div class="lnbWrap col span_6">
				 	<?include('include/lnb_elements.php');?>
				 </div>
				 
				 <div class="content col span_18">
				    <h2>Typography</h2>


					 <div class="pluginGuide">


<div class="unit">

					 <h3>reset.css</h3>

						 <pre>
							 <code class="language-css">
								 /*
	RESET - ADAPTED FROM MEYER RESET
	URL - http://meyerweb.com/eric/tools/css/reset/
	LICENSE - PUBLIC DOMAIN
*/
/* RESET
----------------------------------------------------------------------------------------------------*/
a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, caption, canvas, center, cite, code,
dd, del, details, dfn, dialog, div, dl, dt, em, embed, fieldset, figcaption, figure, form, footer, header, h1, h2, h3, h4, h5, h6, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, summary, tt, table, tbody, textarea, tfoot, thead, time, tr, th, td, u, ul, var, video {
    font-size: 100%;
    font-weight: inherit;
    font-style: inherit;
    vertical-align: baseline;
    white-space: normal;
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    background: transparent;
}

article, aside, details, figcaption, figure, footer, header, menu, nav, section {
    display: block;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}



/*----------------------------------------------------------------------------------------------------*/
/* SPAAAADE Style */
/*----------------------------------------------------------------------------------------------------*/

/* 웹접근성 세팅 */
a:focus,
select:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="date"]:focus,
input[type="tel"]:focus,
textarea:focus {
    outline: #ccc dashed 1px;
}

a:active,
select:active,
input[type="radio"]:active,
input[type="checkbox"]:active,
input[type="text"]:active,
input[type="date"]:active,
input[type="password"]:active,
textarea:active {
    outline: 0;
}



/* 기본 스타일 */
body {
    padding: 0;
    margin: 0;
}

input, select, button, textarea {
    font-family: 'noto-sans', sans-serif;
    font-size: 1em;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

b {
    font-weight: bold;
}

a {
    text-decoration: none;
    color: #333;
}

i {
    vertical-align: middle;
}

img {
    vertical-align: middle;
}

							 </code>

						 </pre>


</div>


						 <div class="unit">

			    <h3>elements.css</h3>
					 <pre>
						<code class="language-css">
body {
    max-width: 640px;
    margin: 0 auto;
    font-size: 15px;
    line-height: 1.5;
    font-family: 'noto-sans', sans-serif;
}
.wrap:after {
    content: '';
    display: block;
    clear: both;
}


/* 레이아웃 */
.left {
    float: left;
}
.right {
    float: right;
}

.clearFix:after {
    content: '';
    display: block;
    clear: both;
}


/* 버튼 스타일 */
.buttonWrapper {
    margin-top: 20px;
    text-align: center;
}
.buttonWrap:after {
    content: '';
    display: block;
    clear: both;
}

.button {
    display: inline-block;
    line-height: 40px;
    height: 40px;
    padding: 0 20px;
    overflow: hidden;
    border-radius: 2px;
    vertical-align: middle;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #000000;
}


/*인풋 스타일 */
.inputText {
    width: 100%;
    padding: 5px 0 5px 8px;
    -webkit-appearance: none;
    border: 1px solid #d5d9dd;
    background: white;
    border-radius: 0;
    height:34px;
    box-sizing: border-box;
    color: #8b8b8b;
    vertical-align: middle;
}
						</code>
					</pre>

						 </div>


                     <div class="unit">

                             <h3>custom.js (PC)</h3>
						 <pre>
							 <code class="language-javascript">


var toggleShowBtn = $('a[data-show]'),
    toggleCloseBtn = $('a[data-hide]');

//엘레먼트 show
toggleShowBtn.on('click', function(){
    showEl(event, $(this));
})

//엘레먼트 close
toggleCloseBtn.on('click', function(){
    hideEl(event, $(this));
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

                             </code>
                         </pre>
                     </div>

						 <div class="unit">

					 <h3>custom.js (모바일)</h3>
						 <pre>
							 <code class="language-javascript">

$(document).ready(function () {

	//a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
	//focus 상태로 머무는 현상 없앤다.
	$('a').on('click', function(){
		this.blur();
	})

	attatchEvent.init();
});



    //메인 메뉴가 토글일 경우, menuCloseBtn 은 빈 배열로 하고, menuControllerOpen 함수 추가해서 사용한다.
    //필요에 따라 controller 함수 추가해서 사용한다.
    var attatchEvent = {

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
            gnb.addEventListener('webkitAnimationEnd',function(event){
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

							 </code>
						 </pre>

						 </div>





					 <div class="unit">


	                    <h3>자주 쓰는 함수들</h3>

						  <pre>
							 <code class="language-javascript">
//엘레먼트 윈도우에 항상 따라다닌다. (sticky)
var elPosTop = $('.quickMenu').offset().top;
$(window).scroll(function(){
    var currentPos = $(this).scrollTop(),
        elPosBottom = $('.quickMenu').offset().top + $('.quickMenu').outerHeight(),
        footerPos = $('.footer').offset().top,

        //엘레먼트 top 위치에서 마진 주고 싶은 만큼 뺀다.
        stickStartPos = elPosTop - 30,
        //스크롤 bottom 위치 구한다.
        scrollPos = $(window).innerHeight() + $(this).scrollTop(),
        //footer 를 뺀 body 높이 구한다.
        contentHiehgt = $('body').height() - 146;

    if(currentPos < stickStartPos){
        $('.quickMenu').removeClass('fixed');
    }
    if((currentPos > stickStartPos) && (scrollPos < contentHiehgt)){
        $('.quickMenu').removeClass('fixedBottom').addClass('fixed');
    }
    //엘레먼트 footer 보다 내려가지 않도록 한다.
    //스크롤이 footer 보다 내려오지만, 엘레먼트가 footer 보다 높이 있는 경우는 예외.
    if((scrollPos > contentHiehgt) && (elPosBottom > footerPos)){
        $('.quickMenu').removeClass('fixed').addClass('fixedBottom');
    }
})


//장바구니 아이템 수량 변경
if($('.increase').length > 0){
    $('.increase').on('click',function(e){
        e.preventDefault();

        var $qty = $(this).closest('.itemCount').find('input.inputText'),
            currentVal = parseInt($qty.val());

        if($(this).hasClass('plus')){
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        }
        else {
            if (!isNaN(currentVal) && currentVal > 0) {
                $qty.val(currentVal - 1);
            }
        }
    });
}



//텝컨텐츠
var attatchEventTab = {
    init : function(){
        $('ul[data-tab]').find('li:first-child > a').addClass('active');
        $('ul[data-tab] > li > a').on('click', function(e){
            e.preventDefault();

            $(this).closest('ul').find(' > li > a').removeClass('active');
            $(this).addClass('active');

            var href = $(this).attr('href');

            $(this).closest('div').find('> .tabContent').removeClass('active');
            $(this).closest('div').find('> .tabContent' + href).addClass('active');
        })

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
							 </code>
						  </pre>

					 </div>



					 </div>


				 </div>
				 
			</div><!-- .setWidth -->
		</div><!-- .contentWrap -->


<?include('include/_footer.php');?>



