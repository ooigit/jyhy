<script src="http://api.map.baidu.com/api?v=1.2" type="text/javascript"></script>
<script type="text/javascript">
function initialize() {
	var map = new BMap.Map('map');
	var opts = {type: BMAP_NAVIGATION_CONTROL_LARGE}
	map.addControl(new BMap.MapTypeControl(opts)); //设置地图类型
	map.addControl(new BMap.NavigationControl(opts)); //增加全功能控件
	map.addControl(new BMap.ScaleControl(opts)); //增加比例尺控件
	map.enableScrollWheelZoom(); //设置地图支持滚轮
	map.enableDoubleClickZoom(); //开启双击baidu map会自动放大
	map.centerAndZoom(new BMap.Point(120.310679,31.837425), 11); //初始化地图，设置中心点坐标和地图级别

	var point = new BMap.Point(120.310679,31.837425);
	map.centerAndZoom(point, 11);
	var marker = new BMap.Marker(point); //创建标注
	map.addOverlay(marker); //将标注添加到地图中
}

function loadScript() {
	var script = document.createElement("script");
	script.src = "http://api.map.baidu.com/api?v=1.2&callback=initialize";
	document.body.appendChild(script);
}

window.onload = loadScript;
</script>


<div class="span-18 last">
<?php require('top-image.php'); ?>
<div class="span-6">
<p class="large">
公司：江阴市华宇有限公司<br />
地址：江苏省江阴市<br />
电话：0510-68938091<br />
传真：0510-86503079<br />
邮编：214100<br />
</p>
</div>
<div class="span-12 last">
<div id="map" style="BORDER-RIGHT: 3px inset; BORDER-TOP: 3px inset; BACKGROUND: transprant; BORDER-LEFT: 3px inset; BORDER-BOTTOM: 3px inset; text-align:center; width:450px; height:280px">
</div>
</div>
