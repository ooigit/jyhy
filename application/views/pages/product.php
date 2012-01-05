<div class="span-6">
side bar
</div>
<div class="span-18 last">
  <link rel="stylesheet" type="text/css" href="/assets/jquery/ad-gallery/jquery.ad-gallery.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/jquery/ad-gallery/jquery.ad-gallery.js"></script>
  <script type="text/javascript">
  $(function() {
	$('div#descriptions').hide();
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
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

  #gallery {
    padding: 30px;
    background: #e1eef5;
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 640px;
    padding: 10px;
    overflow: hidden;
  }
    #descriptions .ad-image-description {
      position: absolute;
    }
      #descriptions .ad-image-description .ad-description-title {
        display: block;
      }
  </style>
  <div id="container">

    <div id="gallery" class="ad-gallery">
      <div class="ad-image-wrapper">
      </div>
      <div class="ad-controls">
      </div>
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
            <li>
              <a href="/assets/images/gallery/1.jpg">
                <img src="/assets/images/gallery/thumbs/t1.jpg" class="image0">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/10.jpg">
                <img src="/assets/images/gallery/thumbs/t10.jpg" title="A title for 10.jpg" alt="This is a nice, and incredibly descriptive, description of the image 10.jpg" class="image1">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/11.jpg">
                <img src="/assets/images/gallery/thumbs/t11.jpg" title="A title for 11.jpg" longdesc="http://coffeescripter.com" alt="This is a nice, and incredibly descriptive, description of the image 11.jpg" class="image2">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/12.jpg">
                <img src="/assets/images/gallery/thumbs/t12.jpg" title="A title for 12.jpg" alt="This is a nice, and incredibly descriptive, description of the image 12.jpg" class="image3">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/13.jpg">
                <img src="/assets/images/gallery/thumbs/t13.jpg" title="A title for 13.jpg" alt="This is a nice, and incredibly descriptive, description of the image 13.jpg" class="image4">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/14.jpg">
                <img src="/assets/images/gallery/thumbs/t14.jpg" title="A title for 14.jpg" alt="This is a nice, and incredibly descriptive, description of the image 14.jpg" class="image5">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/2.jpg">
                <img src="/assets/images/gallery/thumbs/t2.jpg" title="A title for 2.jpg" alt="This is a nice, and incredibly descriptive, description of the image 2.jpg" class="image6">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/3.jpg">
                <img src="/assets/images/gallery/thumbs/t3.jpg" title="A title for 3.jpg" alt="This is a nice, and incredibly descriptive, description of the image 3.jpg" class="image7">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/4.jpg">
                <img src="/assets/images/gallery/thumbs/t4.jpg" title="A title for 4.jpg" alt="This is a nice, and incredibly descriptive, description of the image 4.jpg" class="image8">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/5.jpg">
                <img src="/assets/images/gallery/thumbs/t5.jpg" title="A title for 5.jpg" alt="This is a nice, and incredibly descriptive, description of the image 5.jpg" class="image9">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/6.jpg">
                <img src="/assets/images/gallery/thumbs/t6.jpg" title="A title for 6.jpg" alt="This is a nice, and incredibly descriptive, description of the image 6.jpg" class="image10">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/7.jpg">
                <img src="/assets/images/gallery/thumbs/t7.jpg" title="A title for 7.jpg" alt="This is a nice, and incredibly descriptive, description of the image 7.jpg" class="image11">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/8.jpg">
                <img src="/assets/images/gallery/thumbs/t8.jpg" title="A title for 8.jpg" alt="This is a nice, and incredibly descriptive, description of the image 8.jpg" class="image12">
              </a>
            </li>
            <li>
              <a href="/assets/images/gallery/9.jpg">
                <img src="/assets/images/gallery/thumbs/t9.jpg" title="A title for 9.jpg" alt="This is a nice, and incredibly descriptive, description of the image 9.jpg" class="image13">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="descriptions">

    </div>

    <p>Examples of how you can alter the behaviour on the fly;
    Effect: <select id="switch-effect">
      <option value="slide-hori">Slide horizontal</option>
      <option value="slide-vert">Slide vertical</option>
      <option value="resize">Shrink/grow</option>
      <option value="fade">Fade</option>
      <option value="">None</option>
    </select><br>
    <a href="#" id="toggle-slideshow">Toggle slideshow</a> |
    <a href="#" id="toggle-description">Toggle having description outside of image</a>
    </p>
  </div>
</div>
