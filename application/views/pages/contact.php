
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
  map.centerAndZoom(new BMap.Point(121.437389,31.023711), 15); //初始化地图，设置中心点坐标和地图级别
  
  var point = new BMap.Point(121.437389,31.023711);
  map.centerAndZoom(point, 15);
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

<div id="container">
<div id="example">
	<div class="prepend-0 span-3 append-1">
		总厂<br>
		分厂1<br>
		分厂2<br>
		分厂3<br>
	</div>
	<div class="prepend-1 span-19 append-0 last">
		<img alt="" src="/assets/images/contact.jpg">
		<div class="prepend-0 span-6 append-1"><br>
			<p class="large">
				<span class="color_fuscous">公司：</span>江阴市华宇有限公司<br>
				<span class="color_fuscous">地址：</span>上海市闵行区东川路800号<br>
				<span class="color_fuscous">电话：</span>021-34200000<br>
				<span class="color_fuscous">传真：</span>021-34207255<br>
				<span class="color_fuscous">邮编：</span>200240<br>
			</p>
		</div>
		<div class="prepend-0 span-12 append-0 last">
			<!-- 地图画板 -->
				<div id="map" style="BORDER-RIGHT: 3px inset; BORDER-TOP: 3px inset; BACKGROUND: transprant; BORDER-LEFT: 3px inset; BORDER-BOTTOM: 3px inset; text-align:center; width:450px; height:250px"></div>
			<br />
		</div>
	</div>
</div>
</div>
