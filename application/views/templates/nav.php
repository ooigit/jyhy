<nav class="span-18 last">

<?php
$navs = array(
	"home" => "首页",
	"news" => "新闻中心",
	"product" => "产品展示",
	"jobs" => "招聘信息",
	"about" => "关于我们",
	"contact" => "联系我们");
?>

<ul>
<?php
reset($navs);
$current=$_SERVER['REQUEST_URI'];
while (list($key, $val) = each($navs)) {
	$pos=strpos($current, $key);
	if (strpos($current, $key) === false) {
		echo "<li class=\"not-current-page\"><a href=\"/index.php/$key\">$val</a></li>";
	} else {
		echo "<li class=\"current-page\"><a href=\"/index.php/$key\">$val</a></li>";
	}
}
?>
</ul>
</nav>
