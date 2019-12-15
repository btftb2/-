<?php 

$con = mysqli_connect("127.0.0.1","root","qwe3341363","cust");
$y="insert into contribution (contributor,title,email) values ('{$_POST['contributor']}','{$_POST['title']}','{$_POST['email']}')";
move_uploaded_file($_FILES["up"]["tmp_name"],"files/" . $_FILES["file"]["name"]);

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
	        <span class="pic">稿件上传成功！</span>
			<a href="{$url}">5秒后自动跳转中！</a>
        </div>
    </body>
</html>
A;
echo $html;
exit();
}

skip('user.html');
?>
