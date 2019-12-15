<?php 

function skip($url){
$html=<<<A
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="3;URL={$url}" />
        <title>正在跳转中</title>
	    <style>
	       span { color:white;font-family: "Roboto", sans-serif;}
           a { text-decoration: none;color:white;font-family: "Roboto", sans-serif;}
           a:hover { text-decoration: none;color: red;font-family: "Roboto", sans-serif;} 
	    </style>
    </head>
    <body class="haha" style="background-color:#32C6Cb">
        <div class="notice" style="text-align:center;padding-top:150px;">
	        <span class="pic">登录成功！</span>
			<a href="{$url}">5秒后自动跳转中！</a>
        </div>
    </body>
</html>
A;
echo $html;
exit();
}

$con = mysqli_connect("127.0.0.1","root","qwe3341363","cust");

$y="select * from admin where username='{$_POST['username']}' and password='{$_POST['password']}'";

if (mysqli_query($con,$y)) skip('http://localhost/phpmyadmin/index.php');
else echo "执行SQL:$sql<br>错误:".mysql_error();

?>