<link rel="stylesheet" type="text/css" href="/assets/jquery/ad-gallery/jquery.ad-gallery.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/assets/jquery/ad-gallery/jquery.ad-gallery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.ad-thumbs').load('products/gallery', function () {
		$(function() {
			$('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
			$('img.image1').data('ad-title', 'Title through $.data');
			$('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
			$('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
			var galleries = $('.ad-gallery').adGallery();
			$('#switch-effect').change(function() {
				galleries[0].settings.effect = $(this).val();
				return false;
			});
			$('#toggle-slideshow').click(function() {
				galleries[0].slideshow.toggle();
				return false;
			});
			//$('#toggle-description').click(function() {
			//	if(!galleries[0].settings.description_wrapper) {
					galleries[0].settings.description_wrapper = $('#descriptions');
			//	} else {
			//		galleries[0].settings.description_wrapper = false;
			//	}
			//	return false;
			//});

			// It `really' works!
			var imgs=document.getElementById('ad-thumb-list');
			$('ul#sidebar-list').html(imgs.innerHTML.replace(/<img.*title="([^"]*)".*>/ig,"$1"));
			$('ul#sidebar-list a').each(function(i) {
				var link=$(this);
				link.click(function() {
					$('ul#ad-thumb-list a.'+link.attr("class")).trigger("click");
					return false;
				});
			});
			//do NOT ask me why
		});
	});
});
</script>

<style type="text/css">
select, input, textarea {
	font-size: 1em;
}
ul {
	list-style-image:url(/assets/jquery/ad-gallery/list-style.gif);
}
pre {
	font-family: "Lucida Console", "Courier New", Verdana;
	border: 1px solid #CCC;
	background: #f2f2f2;
	padding: 10px;
}
code {
	font-family: "Lucida Console", "Courier New", Verdana;
	margin: 0;
	padding: 0;
}
.ad-image-wrapper {
	float: left;
}
#gallery {
	padding: 30px;
	background: #ffffff;
}
#descriptions {
	position: relative;
	float: left;
	width: 230px;
	height: 300px;
	background: #fff;
	margin-top: 0px;
	margin-left: 20px;
	padding: 10px;
	overflow: hidden;
}
#descriptions .ad-image-description {
	position: relative;
}
#descriptions .ad-image-description .ad-description-title {
	display: block;
}
</style>

<div id="sidebar" class="span-6">
	<ul id="sidebar-list">
	</ul>
</div>

<div id="gallery-container" class="span-18 last">
	<div id="container span-18 last">
		<div id="gallery" class="ad-gallery span-18 last">
			<div id="image-and-description">
				<div class="ad-image-wrapper"></div>
				<div id="descriptions"></div>
			</div>
			<div class="ad-nav span-18 last">
				<div class="ad-thumbs"></div>
			</div>
			<div class="ad-controls span-18 last"></div>
		</div>

		<div class="span-18 last">
			<p>Examples of how you can alter the behaviour on the fly;
				Effect: <select id="switch-effect">
				<option value="slide-hori">Slide horizontal</option>
				<option value="slide-vert">Slide vertical</option>
				<option value="resize">Shrink/grow</option>
				<option value="fade">Fade</option>
				<option value="">None</option>
				</select><br>
				<a href="#" id="toggle-slideshow">Toggle slideshow</a> |
			</p>
		</div>
	</div>
</div>
