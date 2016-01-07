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

					 <h3>custom.js (모바일)</h3>
						 <pre>
							 <code class="language-javascript">
$(document).ready(function () {

	//a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
	//focus 상태로 머무는 현상 없앤다.
	$('a').on('click', function(){
		this.blur();
	})


	//엘리먼트 토글한다.
	if ($('a[data-show]')) {
		$('a[data-show]').on('click', function (e) {
			attatchEvent.showEl(e)
		})
		$('a[data-hide]').on('click', function (e) {
			attatchEvent.hideEl(e);
		})
	}

	//필터 토글한다.
	if($('a[data-toggle]')){
		$('a[data-toggle]').on('click', function(e){
			attatchEvent.toggle(e);
		})
	}


	//메인메뉴 토글 시킨다.
	$('#header .all a, .bottomBarAll header a.all').on('click', function(e){
		attatchEvent.menuOpen(e);
	})
	$('.modalFull, .backButton').on('click', function(e){
		attatchEvent.menuClose(e)
	})
 });

var attatchEvent = {
	//메인메뉴 function 에 필요한 dom 엘레먼트
	option: {
		gnb: '#gnb',
		wrap: '.wrap',
		modalFull: '.modalFull',
		body: 'body',
	},

	//메인 메뉴 연다.
	menuOpen: function(e){
		e.preventDefault();

		var el = this.option,
			gnb = el.gnb,
			modalFull = el.modalFull,
			body = el.body;

		$(gnb).addClass('show');

		$(gnb).animate({left: '0px'}, 500)

		$(modalFull).show();
		$(modalFull).animate({left: '320px'}, 500)
		$(body).addClass('sidemenu');
	},

	//메인 메뉴 닫는다.
	menuClose: function(e){
		e.preventDefault();

		var el = this.option,
			gnb = el.gnb,
			modalFull = el.modalFull,
			body = el.body;

		$(gnb).animate({left: '-320px'}, 500, function(){
			$(gnb).removeClass('show');
			$(modalFull).hide();
			$(body).removeClass('sidemenu');
		});

		$(modalFull).animate({left: '0px'}, 500);
	},

	//버튼 클릭 시 엘리먼트 토글한다.
	toggle: function(e){
		e.preventDefault();

		//dom 엘리먼트의 data-toggle 속성 값을 가져온 후,
		//해당 값을 가젼 div를 토글한다.
		var el = $(e.currentTarget).data().toggle,
			obj = $('div.' + el),
			thigObj = $(e.currentTarget);

		obj.toggle();
		thigObj.toggleClass('active');
	},

	//버튼 클릭 시 엘리먼트 보여준다.
	showEl: function(e){
		e.preventDefault();

		//dom 엘리먼트의 data-show 속성 값을 가져온 후,
		//해당 값을 가젼 div를 보여준다.
		var obj = $(e.currentTarget).data().show,
			objEl = $('div.' + obj);

		objEl.show();
	},

	//버튼 클릭 시 엘리먼트 숨긴다.
	hideEl: function(e){
		e.preventDefault();

		//dom 엘리먼트의 data-hide 속성 값을 가져온 후,
		//해당 값을 가젼 div를 숨긴다.
		var obj = $(e.currentTarget).data().hide,
			objEl = $('div.' + obj);

		objEl.hide();
	}
}

							 </code>
						 </pre>

						 </div>


					 <div class="unit">


	                    <h3>자주 쓰는 함수들</h3>

						  <pre>
							 <code class="language-javascript">
  //엘레먼트 윈도우에 항상 따라다닌다.
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

							 </code>
						  </pre>

					 </div>


					 </div>


				 </div>
				 
			</div><!-- .setWidth -->
		</div><!-- .contentWrap -->


<?include('include/_footer.php');?>