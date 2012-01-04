<nav class="span-18 last">

<?php
$navs = array(
	"home" => "首页",
	"news" => "新闻中心",
	"products" => "产品展示",
	"jobs" => "招聘信息",
	"about" => "关于我们",
	"contact" => "联系我们");
?>

<ul>
<?php
reset($navs);
while (list($key, $val) = each($navs)) {
	echo "<li><a href=\"/index.php/$key\">$val</a></li>";
}
?>
</ul>
</nav>
