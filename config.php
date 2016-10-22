<?php
//header("content-type:text/html;charset=utf-8");
//链接数据库
$link = mysql_connect("localhost","root","6187606");
//echo $link;//Resource id #2
mysql_query("set names utf8"); //设置字符集
mysql_select_db("1409v",$link);//通过$link 找到1409v  $link 可以省略

?>