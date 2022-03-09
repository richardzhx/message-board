<?php
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' and $password == 'admin') {
	header('location:admin.php');
}else{
	echo '输入错误';
	exit;
}
?>