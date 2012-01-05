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
					<a href="http://www.flickr.com/photos/jliba/4665625073/" title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-1.jpg" width="770" height="370" alt="Slide 1"></a>
					<div class="caption" style="bottom:0">
						<p>Happy Bokeh Thursday!</p>
					</div>
				</div>
				<div class="slide">
					<a href="http://www.flickr.com/photos/stephangeyer/3020487807/" title="Taxi | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-2.jpg" width="770" height="370" alt="Slide 2"></a>
					<div class="caption">
						<p>Taxi</p>
					</div>
				</div>
				<div class="slide">
					<a href="http://www.flickr.com/photos/childofwar/2984345060/" title="Happy Bokeh raining Day | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-3.jpg" width="770" height="370" alt="Slide 3"></a>
					<div class="caption">
						<p>Happy Bokeh raining Day</p>
					</div>
				</div>
				<div class="slide">
					<a href="http://www.flickr.com/photos/b-tal/117037943/" title="We Eat Light | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-4.jpg" width="770" height="370" alt="Slide 4"></a>
					<div class="caption">
						<p>We Eat Light</p>
					</div>
				</div>
				<div class="slide">
					<a href="http://www.flickr.com/photos/bu7amd/3447416780/" title="&ldquo;I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.&rdquo; | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-5.jpg" width="770" height="370" alt="Slide 5"></a>
					<div class="caption">
						<p>&ldquo;I must go down to the sea again, to the lonely sea and the sky...&rdquo;</p>
					</div>
				</div>
				<div class="slide">
					<a href="http://www.flickr.com/photos/streetpreacher/2078765853/" title="twelve.inch | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-6.jpg" width="770" height="370" alt="Slide 6"></a>
					<div class="caption">
						<p>twelve.inch</p>
					</div>
				</div>
				<div class="slide">
					<a href="http://www.flickr.com/photos/aftab/3152515428/" title="Save my love for loneliness | Flickr - Photo Sharing!" target="_blank"><img src="/assets/images/slide/slide-7.jpg" width="770" height="370" alt="Slide 7"></a>
					<div class="caption">
						<p>Save my love for loneliness</p>
					</div>
				</div>
			</div>
		</div>
		<img src="/assets/images/slide/example-frame.png" width="970" height="460" alt="Example Frame" id="frame">
	</div>
</div>

<hr />

<div class="prepend-4 span-10"><h2>links</h2></div>
