<?php
session_start();
header("content-type:text/html;charset=utf-8");

//接收表单传递的用户名和密码
$name=$_POST['j_username'];
$password=$_POST['j_password'];

//通过php连接到mysql数据库
$conn=mysqli_connect("localhost","root","","lzy");

$sql= "SELECT * FROM login WHERE (name='$name') AND (password='$password')";

$check_query = mysqli_query($conn,$sql);

if($result = mysqli_fetch_array($check_query)) {
    //登录成功

    $_SESSION['name'] = $name;
    $_SESSION['password'] = $result['password'];

    echo '<script language="javascript">location.href="html/index.html";</script>';
    exit();
}else{
    echo "<script>alert('登录失败，请重试');</script>";

    echo '<script language="javascript">location.href="login.html";</script>';
    exit();
}

?>