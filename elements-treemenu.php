<?php
/**
 * Created by PhpStorm.
 * User: macuser
 * Date: 15. 6. 25.
 * Time: 오후 9:02
 */
include('include/_header.php');
?>

<style type="text/css">

	/*style for only tree menu element*/
	div.tree_menu {
		display: block;
		left: 0;
		top: 0;
		bottom: 0;
		width: 240px;
		z-index: -10;
		background: #f05f5f;
		overflow-y: scroll;
	}
	div.tree_menu nav li ul {
		display: none;
	}
	div.tree_menu nav li a {
		display: block;
		padding: 10px;
		text-align: center;
	}
	div.tree_menu nav > ul > li > a {
		color: white;
		position: relative;
	}
	div.tree_menu nav li li a {
		background: white;
		color: #002144;
	}
	div.tree_menu nav > ul > li > a i {
		position: absolute;
		right: 22px;
		top: 50%;
		margin-top: -9px;
	}
</style>



<div id="contentWrap">

	<div class="setWidth clearFix">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>


		<section class="col span_18">
			<h2>Tree Menu</h2>


			<div class="pluginGuide">
				<div class="unit">
					<h3>Method Name</h3>
					<p>sptreemenu</p>
					<p>ex) <span class="red">element.sptreemenu( )</span></p>
				</div>
				<div class="unit">
					<h3>Options</h3>
					<ul>
						<li><span class="red">downIconClass</span> : class name</li>
						<li><span class="red">upIconClass</span> : class name</li>
						<li><span class="red">slideDuration</span> : milliseconds</li>
						<li><span class="red">hasIcon</span> : boolen</li>
					</ul>
				</div>

				<div class="unit">
					<h3>Structure</h3>
					<p>
						ul > li > ( a + ul )
					</p>
				</div>

				<div class="unit">
					<h3>HTML</h3>
					<pre>
						<code class="lang-markup">
							&lt;div class="tree_menu"&gt;
					&lt;nav&gt;
					&lt;ul class="treemenu_example"&gt;
						&lt;li&gt;&lt;a href="index.php"&gt;Main&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#"&gt;Pages &lt;/a&gt;
							&lt;ul&gt;
								&lt;li&gt;&lt;a href="pages-history.php"&gt;연혁&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="pages-greeting.php"&gt;인사말&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;&lt;a href="#"&gt;Board &lt;/a&gt;
							&lt;ul&gt;
								&lt;li&gt;&lt;a href="board-list.php"&gt;List&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;&lt;a href="#"&gt;Shop &lt;/a&gt;
							&lt;ul&gt;
								&lt;li&gt;&lt;a href="shop-type1.php"&gt;Type1&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;&lt;a href="#"&gt;Elements &lt;/a&gt;
							&lt;ul&gt;
								&lt;li&gt;&lt;a href="elements-typo.php"&gt;Typography&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="elements-accordion.php"&gt;Accordion&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="elements-button.php"&gt;Button&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="elements-tab.php"&gt;Tab&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="elements-modal.php"&gt;Modal&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="elements-input.php"&gt;Input&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="elements-embed.php"&gt;Responsive Embed&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="last"&gt;&lt;a href="#"&gt;Update Log &lt;/a&gt;
							&lt;ul&gt;
								&lt;li&gt;&lt;a href="#"&gt;History&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/nav&gt;
			&lt;/div&gt;
							
						</code>
					</pre>
				</div>

				<div class="unit">
					<h3>Javascript</h3>
					<pre>
						<code class="lang-javascript">
(function ($) {
	$(document).ready(function () {
		$('ul.treemenu_example').sptreemenu({
			hasIcon: true
		});
	});
})(jQuery);
						</code>
					</pre>
			</div>

			<div class="tree_menu">
				<nav>
					<ul class="treemenu_example">
						<li><a href="index.php">Main</a></li>
						<li><a href="#">Pages </a>
							<ul>
								<li><a href="pages-history.php">연혁</a></li>
								<li><a href="pages-greeting.php">인사말</a></li>
							</ul>
						</li>
						<li><a href="#">Board </a>
							<ul>
								<li><a href="board-list.php">List</a></li>
							</ul>
						</li>
						<li><a href="#">Shop </a>
							<ul>
								<li><a href="shop-type1.php">Type1</a></li>
							</ul>
						</li>
						<li><a href="#">Elements </a>
							<ul>
								<li><a href="elements-typo.php">Typography</a></li>
								<li><a href="elements-accordion.php">Accordion</a></li>
								<li><a href="elements-button.php">Button</a></li>
								<li><a href="elements-tab.php">Tab</a></li>
								<li><a href="elements-modal.php">Modal</a></li>
								<li><a href="elements-input.php">Input</a></li>
								<li><a href="elements-embed.php">Responsive Embed</a></li>
							</ul>
						</li>
						<li class="last"><a href="#">Update Log </a>
							<ul>
								<li><a href="#">History</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>




	</div><!-- .setWidth -->


</div><!-- .contentWrap -->


<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {
			$('ul.treemenu_example').sptreemenu({
				hasIcon: true
			});
		});
	})(jQuery);
</script>
<?php include('include/_footer.php'); ?>
