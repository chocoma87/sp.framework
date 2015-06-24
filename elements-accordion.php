

<?php include('include/_header.php'); ?>


<div id="contentWrap">

	<div class="contentWidth clearFix row">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>

		<section class="col span_18">
			<h2>Accordion</h2>

			<dl class="accordion" id="open">
				<dt class="accordionTitle"><a href="#" data-accordion="contents1">Quastion1</a></dt>
				<dd class="accordionContents" data-accordion="contents1">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Duis at orci odio. Praesent et rhoncus magna.
					Nam non elit non ipsum tincidunt dapibus.
					Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
					Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
					Duis arcu quam, faucibus id odio porta, auctor placerat est.
					Maecenas ultrices ante at egestas vulputate.
				</dd>

				<dt class="accordionTitle"><a href="#" data-accordion="contents2">Quastion2</a></dt>
				<dd class="accordionContents" data-accordion="contents2">
					Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
					Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
					In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
					Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
				</dd>

				<dt class="accordionTitle"><a href="#" data-accordion="contents3">Quastion3</a></dt>
				<dd class="accordionContents" data-accordion="contents3">
					Donec at arcu quis nulla molestie dapibus eu vel ex.
					Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
					Nam aliquet ullamcorper sodales.
				</dd>

				<dt class="accordionTitle"><a href="#" data-accordion="contents4">Quastion4</a></dt>
				<dd class="accordionContents" data-accordion="contents4">
					Etiam ex risus, varius non ligula ac, fringilla semper dolor.
					Quisque eleifend vehicula diam, ac maximus diam tristique id.
					Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
				</dd>
			</dl>


			<dl class="accordion close closeOtherContents">
				<dt class="accordionTitle"><a href="#" data-accordion="contents1">Quastion1</a></dt>
				<dd class="accordionContents" data-accordion="contents1">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Duis at orci odio. Praesent et rhoncus magna.
					Nam non elit non ipsum tincidunt dapibus.
					Quisque lorem felis, fermentum vitae est eget, feugiat rhoncus risus.
					Morbi bibendum dui nulla, sit amet sagittis massa imperdiet nec.
					Duis arcu quam, faucibus id odio porta, auctor placerat est.
					Maecenas ultrices ante at egestas vulputate.
				</dd>

				<dt class="accordionTitle"><a href="#" data-accordion="contents2">Quastion2</a></dt>
				<dd class="accordionContents" data-accordion="contents2">
					Phasellus porta, neque quis gravida dapibus, turpis justo vehicula ex, eget tincidunt ligula tellus sed sapien.
					Nulla viverra cursus justo nec efficitur. Cras cursus id elit in commodo.
					In congue nunc quis risus auctor, vel accumsan elit finibus. Curabitur id commodo eros.
					Maecenas augue velit, fermentum at suscipit mattis, sollicitudin a risus.
				</dd>

				<dt class="accordionTitle"><a href="#" data-accordion="contents3">Quastion3</a></dt>
				<dd class="accordionContents" data-accordion="contents3">
					Donec at arcu quis nulla molestie dapibus eu vel ex.
					Suspendisse ullamcorper placerat tortor, vel consequat justo consectetur eget.
					Nam aliquet ullamcorper sodales.
				</dd>

				<dt class="accordionTitle"><a href="#" data-accordion="contents4">Quastion4</a></dt>
				<dd class="accordionContents" data-accordion="contents4">
					Etiam ex risus, varius non ligula ac, fringilla semper dolor.
					Quisque eleifend vehicula diam, ac maximus diam tristique id.
					Phasellus sit amet elementum leo. Maecenas ullamcorper venenatis scelerisque.
				</dd>
			</dl>
			
		</section>

	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<?php include('include/_footer.php'); ?>

