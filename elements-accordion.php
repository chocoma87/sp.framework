

<?php include('include/_header.php'); ?>

<style type="text/css">
	dl#open a:after{
		border: none;
	}

	dl#open a {
		position: relative;
	}
	dl#open a > i {
		position: absolute;
		right: 22px;
	}
</style>

<div id="contentWrap">

	<div class="setWidth clearFix row">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>

		<section class="col span_18">
			<h2>Accordion</h2>


			<div class="pluginGuide">
				<div class="unit">
					<h3>Method Name</h3>
					<p>spaccordion</p>
					<p>ex) <span class="red">element.spaccordion( )</span></p>
				</div>
				<div class="unit">
					<h3>Options</h3>
					<ul>
						<li><span class="red">activeClass</span> : class name</li>
						<li><span class="red">dataValue</span> : [data] attribute value on markup</li>
						<li><span class="red">closeOtherContents</span> : boolen</li>
						<li><span class="red">openedItem</span> : -1 or 0</li>
						<li><span class="red">elTitle</span> : html element ( for title )</li>
						<li><span class="red">elContent</span> : html element ( for contents )</li>
						<li><span class="red">hasIcon</span> : boolen</li>
						<li><span class="red">downIconClass</span> : class name</li>
						<li><span class="red">upIconClass</span> : class name</li>
					</ul>
				</div>

				<div class="unit">
					<h3>Structure</h3>
					<p>
						dl > ( dt > a ) + dd <span style="margin-left: 10px" class="red">and more</span>
					</p>

					<h3>HTML</h3>
					<pre>
						<code class="language-markup">
							<?php $strMarkup = file_get_contents('./markup/accordion.html');echo htmlspecialchars($strMarkup);?>
						</code>
					</pre>

					<h3>JS</h3>
					<pre>
						<code class="language-javascript">
(function ($) {
	$(document).ready(function () {
		$('#open').spaccordion({
				closeOtherContents: false,
				hasIcon           : true,
				openedItem        : 1
		});

		$('dl.accordion.close').spaccordion({
			closeOtherContents: true,
			openedItem        : 0
		});
	});
})(jQuery);
						</code>
					</pre>

				</div>
			</div>



			<dl class="accordion" id="open">
				<dt><a href="#" data-accordion="contents1">Quastion1</a></dt>
				<dd data-accordion="contents1">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Duis at orci odio. Praesent et rhoncus magna.
					Nam non elit non ipsum tincidunt dapibus.
					Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
					Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
					Duis arcu quam, faucibus id odio porta, auctor placerat est.
					Maecenas ultrices ante at egestas vulputate.
				</dd>

				<dt><a href="#" data-accordion="contents2">Quastion2</a></dt>
				<dd data-accordion="contents2">
					Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
					Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
					In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
					Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
				</dd>

				<dt><a href="#" data-accordion="contents3">Quastion3</a></dt>
				<dd data-accordion="contents3">
					Donec at arcu quis nulla molestie dapibus eu vel ex.
					Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
					Nam aliquet ullamcorper sodales.
				</dd>

				<dt><a href="#" data-accordion="contents4">Quastion4</a></dt>
				<dd data-accordion="contents4">
					Etiam ex risus, varius non ligula ac, fringilla semper dolor.
					Quisque eleifend vehicula diam, ac maximus diam tristique id.
					Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
				</dd>
			</dl>


			<dl class="accordion close closeOtherContents">
				<dt><a href="#" data-accordion="contents1">Quastion1</a></dt>
				<dd data-accordion="contents1">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Duis at orci odio. Praesent et rhoncus magna.
					Nam non elit non ipsum tincidunt dapibus.
					Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
					Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
					Duis arcu quam, faucibus id odio porta, auctor placerat est.
					Maecenas ultrices ante at egestas vulputate.
				</dd>

				<dt><a href="#" data-accordion="contents2">Quastion2</a></dt>
				<dd data-accordion="contents2">
					Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
					Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
					In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
					Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
				</dd>

				<dt><a href="#" data-accordion="contents3">Quastion3</a></dt>
				<dd data-accordion="contents3">
					Donec at arcu quis nulla molestie dapibus eu vel ex.
					Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
					Nam aliquet ullamcorper sodales.
				</dd>

				<dt><a href="#" data-accordion="contents4">Quastion4</a></dt>
				<dd data-accordion="contents4">
					Etiam ex risus, varius non ligula ac, fringilla semper dolor.
					Quisque eleifend vehicula diam, ac maximus diam tristique id.
					Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
				</dd>
			</dl>
			
		</section>

	</div><!-- .setWidth -->


</div><!-- .contentWrap -->

<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {
			$('#open').spaccordion({
				closeOtherContents: false,
				hasIcon: true,
				openedItem: 1
			});

			$('dl.accordion.close').spaccordion({
				closeOtherContents: true,
				openedItem: 0
			});
		});
	})(jQuery);
</script>


<?php include('include/_footer.php'); ?>

