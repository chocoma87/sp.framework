<!DOCTYPE html>

<html lang="ko">

<head>

	<meta charset="utf-8">
	<title>
		Framework - SPAAAADE
	</title>
	<meta name="description" 	content="description of website">
	<meta name="author" 		content="SPAAAADE">

	<!-- Viewport & IE Edge -->
	<meta name="viewport" 		content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	
	<script src="//use.typekit.net/veu4ezd.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!-- CSS -->
	<link rel="stylesheet" 		type="text/css" 	href="css/reset.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/fontface.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/grid.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/layout.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/ui.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/style.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/responsive.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/selectric.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/all.css">
	<link rel="stylesheet" 		type="text/css" 	href="css/prism.css">

	<!-- fontawesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/respond.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->

	
	<!-- JS -->
	<script type="text/javascript" 	src="js/jquery.js"></script>
	<script type="text/javascript" 	src="js/jquery.selectric.min.js"></script>
	<script type="text/javascript" 	src="js/icheck.min.js"></script>
	<script	type="text/javascript" 	src="js/ui.js"></script>
	<script	type="text/javascript" 	src="js/custom.js"></script>
	<script	type="text/javascript" 	src="js/prism.js"></script>


	<!-- Favicon & iOS icon -->
	<link rel="shortcut icon" 		href="images/favicon.ico">
	<link rel="apple-touch-icon" 	href="images/apple-touch-icon.png">
	
	<!-- GoogleCode -->
	
</head>



<body>

	<div class="topCover"></div>
	<div class="modalFull"></div>

	<div id="preloader">
		<div id="status">
		</div>
	</div>

	<!-- 모바일 메인메뉴 시작 -->
	<div id="headerMobile">

		<nav>
			<!-- 로그인 메뉴 시작 -->
			<ul class="loginMenu clearFix">
				<li><a href="#">login</a></li>
				<li><a href="#">signup</a></li>
				<li><a href="#">search</a></li>
				<li class="closeMobileGnb"><a href="#" title="닫기"><i class="fa fa-times"></i></a></li>
			</ul>
			<!-- 로그인 메뉴 끝 -->

			<ul class="mobileMainmenu">
				<li><a href="#">Main</a>
					<ul>
						<li><a href="main-type1.php">Type1</a></li>
					</ul>
				</li>
				<li><a href="#">Pages</a>
					<ul>
						<li><a href="pages-history.php">연혁</a></li>
						<li><a href="pages-greeting.php">인사말</a></li>
					</ul>
				</li>
				<li><a href="#">Board</a>
					<ul>
						<li><a href="board-list.php">List</a></li>
					</ul>
				</li>
				<li><a href="#">Shop</a>
					<ul>
						<li><a href="shop-type1.php">Type1</a></li>
					</ul>
				</li>
				<li><a href="#">Elements</a>
					<ul>
						<li><a href="elements-typo.php">Typography</a></li>
						<li><a href="elements-accordion.php">Accordion</a></li>
						<li><a href="elements-button.php">Button</a></li>
						<li><a href="elements-tab.php">Tab</a></li>
						<li><a href="elements-modal.php">Modal</a></li>
						<li><a href="elements-input.php">Input</a></li>
						<li><a href="elements-embed.php">Responsive Embed</a></li>
						<li><a href="elements-treemenu.php">Tree Menu</a></li>
					</ul>
				</li>
				<li class="last"><a href="#">Update Log</a>
					<ul>
						<li><a href="#">History</a></li>
					</ul>
				</li>
			</ul>
		</nav>

	</div>
	<!-- 모바일 메인메뉴 끝 -->



	<div id="container">

		<header id="header" class="row span_24">
			<div class="contentWidth clearFix">

				<!-- 로고 -->
				<h1 id="logo" class="col span_7">
					<a href="index.php">
						<img src="images/logo_white.svg" alt="spaaaade"/>
					</a>
				</h1>


				<!-- 로그인 메뉴 시작 -->
				<nav class="shortMenu col span_17">
					<ul>
						<li><a href="#">Login</a></li>
						<li><a href="#">Signup</a></li>
						<li><a href="#">Search</a></li>
					</ul>
				</nav>
				<!-- 로그인 메뉴 끝 -->


				<!-- 모바일 메인 메뉴 버튼 -->
				<p class="gnbMobileBtn"><a href="#" title="메인메뉴"><i class="fa fa-bars"></i></a></p>


				<!-- pc 메인 메뉴 시작 -->
				<nav class="gnb col span_17">
					<ul>
						<li><a href="#">Main</a>
							<ul>
								<li><a href="main-type1.php">Type1</a></li>
							</ul>
						</li>
						<li><a href="#">Pages</a>
							<ul>
								<li><a href="pages-history.php">연혁</a></li>
								<li><a href="pages-greeting.php">인사말</a></li>
							</ul>
						</li>
						<li><a href="#">Board</a>
							<ul>
								<li><a href="board-list.php">List</a></li>
								<li><a href="board-table.php">table</a></li>
								<li><a href="board-market.php">market</a></li>
							</ul>
						</li>
						<li><a href="#">Shop</a>
							<ul>
								<li><a href="shop-type1.php">Type1</a></li>
							</ul>
						</li>
						<li><a href="#">Elements</a>
							<ul>
								<li><a href="elements-typo.php">Typography</a></li>
								<li><a href="elements-accordion.php">Accordion</a></li>
								<li><a href="elements-button.php">Button</a></li>
								<li><a href="elements-tab.php">Tab</a></li>
								<li><a href="elements-modal.php">Modal</a></li>
								<li><a href="elements-input.php">Input</a></li>
								<li><a href="elements-embed.php">Responsive Embed</a></li>
								<li><a href="elements-treemenu.php">Tree Menu</a></li>
							</ul>
						</li>
						<li class="last"><a href="#">Update Log</a>
							<ul>
								<li><a href="#">History</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- pc 메인 메뉴 끝 -->

			</div><!-- .contentWidth -->
		</header>

