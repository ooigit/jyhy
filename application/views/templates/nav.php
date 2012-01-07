<nav class="span-21 last">

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
$i=0;
while (list($key, $val) = each($navs)) {
	$str = "<li class=\"";
	if (strpos($current, $key) === false) {
		$str .= "not-current-page";
	} else {
		$str .= "current-page";
	}
	if ($i == 0)
		$str .= " first";
	else if ($i == (count($navs)-1))
		$str .= " last";
	else
		$str .= " middle";
	$str .= "\"><a href=\"/index.php/$key\">$val</a></li>";
	echo $str;
	$i++;
}
?>
</ul>
</nav>
