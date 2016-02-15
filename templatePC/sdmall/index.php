



<?include('include/header.php');?>

<div id="main">



		<div class="mainSlider">
			<ul class="slides-container">
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
				<li>
					<img src="images/main_banner.png" />
					<div class="slide-text">
						<img src="images/main_banner_text.png" alt="" />
					</div>
				</li>
			</ul>


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
			inherit_height_from: '.mainSlider'
		});
	});
</script>



<?include('include/footer.php');?>
