<?php
$con=mysqli_connect("localhost","root","","php message board");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}
$id = $_POST['id'];

mysqli_query($con,"DELETE FROM msg WHERE id=$id ");
mysqli_close($con);
header('location:admin.php');
?>