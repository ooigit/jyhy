var total = 0;
var position = 0;

function flush(){
  total=$("div.gallery ul li.gallery-image").length;
  $("p#total").html("total: " + total);
  $("p#position").html("position: " + position);
  $("div.gallery ul li.gallery-image").show();
  $("div.gallery ul li.gallery-image:lt(" + position + ")").hide();
  $("div.gallery ul li.gallery-image:gt(" + (position + 4) + ")").hide();
};


$(function(){
  flush();
});

function changePosition(offset){
  position += offset;
  if (position>total-5) position = total - 5;
  if (position<0) position = 0;
}

$(document).ready(function(){
  $("div.gallery ul li#gallery-left-button").click(function(){
    changePosition(-1);
    flush();
  });
});

$(document).ready(function(){
  $("div.gallery ul li#gallery-right-button").click(function(){
    changePosition(+1);
    flush();
  });
});
