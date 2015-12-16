<?include('include/_header.php');?>

		<div id="contentWrap">
			<div class="contentWidth row clearFix">
				 <div class="lnbWrap col span_6">
				 	<?include('include/lnb_elements.php');?>
				 </div>
				 
				 <div class="content col span_18">
				    <h2>Typography</h2>


					 <div class="pluginGuide">




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
dd, del, details, dfn, dialog, div, dl, dt, em, embed, fieldset, figcaption, figure, form, footer, header, h1, h2, h3, h4, h5, h6, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, sub, summary, sup, tt, table, tbody, textarea, tfoot, thead, time, tr, th, td, u, ul, var, video {
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
    letter-spacing: -0.05em;
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
    font-size: 15px;
    line-height: 1.5;
    font-family: 'noto-sans', sans-serif;
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





					 <h3>layout.css</h3>
					 <pre>
						<code class="language-css">
body {
    max-width: 640px;
    margin: 0 auto;
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


.listFloat li {
    float: left;
}
.listFloat li a {
    display: block;
}
.listFloat:after {
    content: '';
    display: block;
    clear: both;
}

.listTable {
    display: table;
    width: 100%;
}
.listTable li {
    display: table-cell;
}
.listTable li a {
    display: block;
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
    line-height: 50px;
    height: 50px;
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
}
						</code>
					</pre>



					 <h3>custom.js</h3>
						 <pre>
							 <code class="language-javascript">
								 //a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
    //focus 상태로 머무는 현상 없앤다.
    $('a').on('click', function(){
        this.blur();
    })
							 </code>
						 </pre>



					 </div>


				 </div>
				 
			</div><!-- .contentWidth -->
		</div><!-- .contentWrap -->


<?include('include/_footer.php');?>