<?php
header('Content-type: application/json');
//获取回调函数名
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json数据
$name = $_REQUEST['fname'];
//输出jsonp格式的数据
echo $jsoncallback . "(" . $name . ")";
?>