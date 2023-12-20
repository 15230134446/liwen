<?php
header('Content-type:text/html;charset=utf-8');
$username1 = $_POST["username"];
$password1 = $_POST["password"];
//链接数据库
$servername = "localhost";  // 数据库服务器名称
$username = "root";     // 数据库用户名
$password = "root";     // 数据库密码
$dbname = "students";       // 数据库名称
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
//设置默认字符编码
mysqli_set_charset($conn,'utf8');
$selesql = "select * from students where username='$username1' and password='$password1'";
$res = mysqli_query($conn,$selesql);
//获取结果
$num = mysqli_num_rows($res);
if($num = 1){
    echo "<script>alert('登录成功');window.location.href='../Page/student1.php';</script>";
}else{
    echo "<script>alert('登陆失败');history.back();</script>";
}
?>
