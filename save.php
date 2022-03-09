<?php

$content = $_POST['content'];
$username = $_POST['username'];

date_default_timezone_set('PRC');
$time = date('Y-m-d H:i:s', time());



if( trim($content) == '' or trim($username) == ''){
	echo'用户名，留言内容不能为空';
	
	exit;

}
if( trim($username) == 'admin' or trim($username) == 'root' or trim($username) == '领导人'){
	echo '用户名不符合要求';
	exit;
}

include('db.php');



//编写sql
$sql = "insert into msg (username,content,time) values ('{$username}','{$content}','{$time}')";


write($pdo,$sql);


//回到首页
header('location:index.php');

?>