<?php
header('Content-type:text/html;charset=utf-8');
//链接数据库
$servername = "localhost";  // 数据库服务器名称
$username = "root";     // 数据库用户名
$password = "root";     // 数据库密码
$dbname = "students";       // 数据库名称
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
//设置默认字符编码
mysqli_set_charset($conn,'utf8');
$sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '18637220439' LIMIT 5");
$sql1 = mysqli_fetch_array($sql);
var_dump($sql1);
$manage = $_POST["manage"];
//执行插入语句
if ($sq=$manage){
    $result=mysqli_query($conn,"insert into usery(username,password,tel) values('".$_POST["username"]."','".$_POST["password"]."','".$_POST["tel"]."')");
}else{
    $result=mysqli_query($conn,"insert into users(username,password,manage,tel) values('".$username."','".$password."','".$manage."','".$tel."')");
}
if($result==true){
    echo "<script>alert('用户注册成功');window.location.href='../Page/logons.php';</script>";
}else{
    echo "<script>alert('用户注册失败');history.back();</script>";
}
?>