



<?include('include/header.php');?>

<div id="main">

	<div class="mainSliderWrap">

		<div class="mainSlider">
			<ul class="slides-container">
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slideContent">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
			</ul>

		</div>

	</div>

</div><!-- .shopMain -->

<script type="text/javascript" 	src="js/slider.js"></script>

<script>
	$(document).ready(function() {
		$('.mainSlider').superslides({
			play: 7000,
			animation: 'slide',
			slide_speed: 1500,
			pagination: true,
			hashchange: false,
			inherit_height_from: '.mainSliderWrap'
		});
	});
</script>



<?include('include/footer.php');?>
