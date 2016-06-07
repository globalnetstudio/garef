<div class="carousel clearfix">
	<div class="carousel__left"></div>
	<div class="carousel__center">
		<ul class="bxslider">
		  <li><img src="/images/slider/01-slide.jpg" /></li>
		  <li><img src="/images/slider/02-slide.jpg" /></li>
		  <li><img src="/images/slider/03-slide.jpg" /></li>
		  <li><img src="/images/slider/04-slide.jpg" /></li>
		  <li><img src="/images/slider/05-slide.jpg" /></li>
		</ul>
	</div>
	<div class="carousel__right"></div>
</div>

<!-- Custom Scripts -->
<script>
	$(function(){
	  $('.bxslider').bxSlider({	  	
	  	auto: true,
	  	speed: 500,
	  	pause: 5000,
	  	infiniteLoop: true,
	  	autoHover: true,
	  	useCSS: false,
	  	easing: 'easeInSine',
	  	captions: false,
	  	responsive: true,
	  	touchEnabled: true,
	  	controls: true,
	  	pager: false,
	  	autoControls: false
	  });
	});
</script>