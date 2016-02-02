

<?php include('include/_header.php'); ?>

<style>

	/* tab contents */
	.tabWrapper {
		margin-bottom: 100px;
	}
	.tabWrapper .tabContents {
		padding: 10px;
		border: 1px solid #f05f5f;
		margin-bottom: 10px;
	}
	.tabWrapper .tabContents.active {
		display: block;
	}

	.tabWrapper nav li {
		float: left;
	}
	.tabWrapper nav li a {
		display: block;
		height: 36px;
		line-height: 36px;
		padding: 0 10px;
		background: white;
		color: #002144;
		font-size: 1.1em;
	}
	.tabWrapper nav li a.active {
		background: #f05f5f;
		color: white;
	}
	.tabWrapper nav li a:hover {
		background: #f05f5f;
		color: white;
	}


</style>


<div id="contentWrap">

	<div class="setWidth clearFix row">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>


		<section class="col span_18">
			<h2>Tab</h2>

			<div class="pluginGuide">
				<div class="unit">
					<h3>Method Name</h3>
					<p>sptab</p>
					<p>ex) <span class="red">element.sptab( )</span></p>
				</div>
				<div class="unit">
					<h3>Options</h3>
					<ul>
						<li><span class="red">activeClass</span> : class name</li>
						<li><span class="red">dataValue</span> : [data] attribute value on markup</li>
						<li><span class="red">initActiveIndex</span> : [integer] initialize active index element ( default : 0 )</li>
					</ul>
				</div>

				<div class="unit">
					<h3>Structure</h3>
					<p>
						div>((nav>ul>li*)+(div>p)*) <span style="margin-left: 10px">and more</span>
					</p>
				</div>

				<div class="unit">
					<h3>html</h3>
					 <pre>
						<code class="language-markup">
&lt;div class="tabWrapper" id="defaultOptionTab"&gt;
	&lt;nav class="clearFix"&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href="#contents1" class="active"&gt;Menu1&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#contents2"&gt;Menu2&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#contents3"&gt;Menu3&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/nav&gt;

	&lt;div class="tabContents active" id="contents1"&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at orci odio.
			Praesent et rhoncus magna. Nam non elit non ipsum tincidunt dapibus.
			Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
			Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
			Duis arcu quam, faucibus id odio porta, auctor placerat est.
			Maecenas ultrices ante at egestas vulputate.
			Integer semper nisi semper, congue ligula ac, rutrum metus.
			Vivamus dapibus tortor libero, quis vestibulum lectus ornare eget.
			Quisque ut semper neque, eget pulvinar mauris.
			Donec dignissim leo quis enim molestie condimentum.
		&lt;/p&gt;
	&lt;/div&gt;

	&lt;div class="tabContents" id="contents2"&gt;
		&lt;p&gt;
			Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
			Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
			In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
			Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
			Cras enim sem, tincidunt vitae felis id, dapibus malesuada mi.
		&lt;/p&gt;
	&lt;/div&gt;

	&lt;div class="tabContents" id="contents3"&gt;
		&lt;p&gt;
			Donec et justo tincidunt, mattis lectus aliquet, feugiat nisl.
			Donec dapibus vel ex ac ultrices. Phasellus sagittis varius mauris.
			Praesent ac risus a nisl pulvinar pellentesque.
			Vestibulum ut maximus tellus. Sed et convallis dolor.
			Donec at arcu quis nulla molestie dapibus eu vel ex.
			Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
			Nam aliquet ullamcorper sodales.
			Morbi sit amet ipsum elementum, tempor risus nec, iaculis massa. Praesent a ante at nisl mattis consectetur.
			Etiam ex risus, varius non ligula ac, fringilla semper dolor.
			Quisque eleifend vehicula diam, ac maximus diam tristique id.
			Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
		&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;




			</code>
		 </pre>
	</div>
</div>


			<div class="tabWrapper" id="defaultOptionTab">
				<nav class="clearFix">
					<ul>
						<li><a href="#contents1" class="active">Menu1</a></li>
						<li><a href="#contents2">Menu2</a></li>
						<li><a href="#contents3">Menu3</a></li>
					</ul>
				</nav>

				<div class="tabContents active" id="contents1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at orci odio.
						Praesent et rhoncus magna. Nam non elit non ipsum tincidunt dapibus.
						Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
						Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
						Duis arcu quam, faucibus id odio porta, auctor placerat est.
						Maecenas ultrices ante at egestas vulputate.
						Integer semper nisi semper, congue ligula ac, rutrum metus.
						Vivamus dapibus tortor libero, quis vestibulum lectus ornare eget.
						Quisque ut semper neque, eget pulvinar mauris.
						Donec dignissim leo quis enim molestie condimentum.
					</p>
				</div>

				<div class="tabContents" id="contents2">
					<p>
						Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
						Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
						In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
						Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
						Cras enim sem, tincidunt vitae felis id, dapibus malesuada mi.
					</p>
				</div>

				<div class="tabContents" id="contents3">
					<p>
						Donec et justo tincidunt, mattis lectus aliquet, feugiat nisl.
						Donec dapibus vel ex ac ultrices. Phasellus sagittis varius mauris.
						Praesent ac risus a nisl pulvinar pellentesque.
						Vestibulum ut maximus tellus. Sed et convallis dolor.
						Donec at arcu quis nulla molestie dapibus eu vel ex.
						Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
						Nam aliquet ullamcorper sodales.
						Morbi sit amet ipsum elementum, tempor risus nec, iaculis massa. Praesent a ante at nisl mattis consectetur.
						Etiam ex risus, varius non ligula ac, fringilla semper dolor.
						Quisque eleifend vehicula diam, ac maximus diam tristique id.
						Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
					</p>
				</div>
			</div>


			<div class="tabWrapper" id="setActiveOption">
				<nav class="clearFix">
					<ul>
						<li><a href="#contents4" class="active">Menu1</a></li>
						<li><a href="#contents5">Menu2</a></li>
						<li><a href="#contents6">Menu3</a></li>
					</ul>
				</nav>

				<div class="tabContents active" id="contents4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at orci odio.
						Praesent et rhoncus magna. Nam non elit non ipsum tincidunt dapibus.
						Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
						Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
						Duis arcu quam, faucibus id odio porta, auctor placerat est.
						Maecenas ultrices ante at egestas vulputate.
						Integer semper nisi semper, congue ligula ac, rutrum metus.
						Vivamus dapibus tortor libero, quis vestibulum lectus ornare eget.
						Quisque ut semper neque, eget pulvinar mauris.
						Donec dignissim leo quis enim molestie condimentum.
					</p>
				</div>

				<div class="tabContents" id="contents5">
					<p>
						Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
						Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
						In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
						Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
						Cras enim sem, tincidunt vitae felis id, dapibus malesuada mi.
					</p>
				</div>

				<div class="tabContents" id="contents6">
					<p>
						Donec et justo tincidunt, mattis lectus aliquet, feugiat nisl.
						Donec dapibus vel ex ac ultrices. Phasellus sagittis varius mauris.
						Praesent ac risus a nisl pulvinar pellentesque.
						Vestibulum ut maximus tellus. Sed et convallis dolor.
						Donec at arcu quis nulla molestie dapibus eu vel ex.
						Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
						Nam aliquet ullamcorper sodales.
						Morbi sit amet ipsum elementum, tempor risus nec, iaculis massa. Praesent a ante at nisl mattis consectetur.
						Etiam ex risus, varius non ligula ac, fringilla semper dolor.
						Quisque eleifend vehicula diam, ac maximus diam tristique id.
						Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
					</p>
				</div>
			</div>



			<div class="tabWrapper">
				<nav class="clearFix">
					<ul>
						<li><a href="#contents7" class="active">Menu1</a></li>
						<li><a href="#contents8">Menu2</a></li>
						<li><a href="#contents9">Menu3</a></li>
					</ul>
				</nav>

				<div class="tabContents active" id="contents7">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at orci odio.
						Praesent et rhoncus magna. Nam non elit non ipsum tincidunt dapibus.
						Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
						Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
						Duis arcu quam, faucibus id odio porta, auctor placerat est.
						Maecenas ultrices ante at egestas vulputate.
						Integer semper nisi semper, congue ligula ac, rutrum metus.
						Vivamus dapibus tortor libero, quis vestibulum lectus ornare eget.
						Quisque ut semper neque, eget pulvinar mauris.
						Donec dignissim leo quis enim molestie condimentum.
					</p>
				</div>

				<div class="tabContents" id="contents8">
					<p>
						Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
						Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
						In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
						Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
						Cras enim sem, tincidunt vitae felis id, dapibus malesuada mi.
					</p>
				</div>

				<div class="tabContents" id="contents9">
					<p>
						Donec et justo tincidunt, mattis lectus aliquet, feugiat nisl.
						Donec dapibus vel ex ac ultrices. Phasellus sagittis varius mauris.
						Praesent ac risus a nisl pulvinar pellentesque.
						Vestibulum ut maximus tellus. Sed et convallis dolor.
						Donec at arcu quis nulla molestie dapibus eu vel ex.
						Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
						Nam aliquet ullamcorper sodales.
						Morbi sit amet ipsum elementum, tempor risus nec, iaculis massa. Praesent a ante at nisl mattis consectetur.
						Etiam ex risus, varius non ligula ac, fringilla semper dolor.
						Quisque eleifend vehicula diam, ac maximus diam tristique id.
						Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
					</p>
				</div>
			</div>

		</section>

	</div><!-- .setWidth -->


</div><!-- .contentWrap -->
<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {
			$('#defaultOptionTab').sptab();

			$('#setActiveOption').sptab({
				initActiveIndex: 2
			})
		});
	})(jQuery);
</script>


<?php include('include/_footer.php'); ?>

