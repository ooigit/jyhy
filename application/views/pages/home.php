<link rel="stylesheet" href="/assets/stylesheets/slides.css">
<script src="/assets/javascripts/slides.min.jquery.js"></script>
<script>
	$(function(){
		$('#slides').slides({
			preload: true,
			preloadImage: '/assets/images/slide/loading.gif',
			play: 5000,
			pause: 2500,
			hoverPause: true,
			animationStart: function(current){
				$('.caption').animate({
					bottom:-35
				},100);
				if (window.console && console.log) {
					// example return of current slide number
					console.log('animationStart on slide: ', current);
				};
			},
			animationComplete: function(current){
				$('.caption').animate({
					bottom:0
				},200);
				if (window.console && console.log) {
					// example return of current slide number
					console.log('animationComplete on slide: ', current);
				};
			},
			slidesLoaded: function() {
				$('.caption').animate({
					bottom:0
				},200);
			}
		});
	});
</script>

<div id="container">
	<div id="example">
		<div id="slides">
			<div class="slides_container">
				<div class="slide">
					<img src="/assets/images/slide/slide-1.jpg" width="940" height="370" alt="Slide 1" />
					<div class="caption" style="bottom:0">
						<p>Happy Bokeh Thursday!</p>
					</div>
				</div>
				<div class="slide">
					<img src="/assets/images/slide/slide-2.jpg" width="940" height="370" alt="Slide 2" />
					<div class="caption">
						<p>Taxi</p>
					</div>
				</div>
				<div class="slide">
					<img src="/assets/images/slide/slide-3.jpg" width="940" height="370" alt="Slide 3" />
					<div class="caption">
						<p>Happy Bokeh raining Day</p>
					</div>
				</div>
			</div>
		</div>
		<img src="/assets/images/slide/example-frame.png" width="1100" height="460" alt="Example Frame" id="frame">
	</div>
</div>

<div class="prepend-1 span-5 append-0 last">
	<span><img src="/assets/images/home/marker.png" />&nbsp;总经理致辞</span>
	<p><a href="about"><img src="/assets/images/home/manager.png" /></a></p>
	<p><span>华宇公司始终坚持诚信经营、创新发展的理念。</span></p>
</div>
<div class="prepend-1 span-5 append-0 last">
	<span><img src="/assets/images/home/marker.png" />&nbsp;荣誉证书</span>
	<p><a href="about"><img src="/assets/images/home/honor.png" /></a></p>
	<p><span>华宇公司始终坚持诚信经营、创新发展的理念。</span></p>
</div>
<div class="prepend-1 span-5 append-1 colborder last">
	<span><img src="/assets/images/home/marker.png" />&nbsp;产品展示</span>
	<p><a href="product"><img src="/assets/images/home/file.png" /></a></p>
	<p><span>华宇公司始终坚持诚信经营、创新发展的理念。</span></p>
</div>
<div class="prepend-0 span-5 append-0 last">
	<a href="news"><img src="/assets/images/home/news.jpg" /></a>
	<a href="jobs"><img src="/assets/images/home/jobs.jpg" /></a>
	<a href="contact"><img src="/assets/images/home/contact.jpg" /></a>
	<p></p>
</div>

