<?php

header("content-type:text/html;charset=utf-8");

//开启session
session_start();

//接收表单传递的用户名和密码
$name=$_POST['userName'];
$email=$_POST['mail'];
$phoneNum=$_POST['userTelephone'];
$password=$_POST['userPassword'];
$password1=$_POST['pwd'];
$remark=$_POST['remark'];


//判断密码是否一致
if($password!=$password1){
    echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
    echo"<script>location='registerProfessional.html'</script>";
}else{
    //通过php连接到mysql数据库
    $conn=mysqli_connect("localhost","root","","lzy");


    //通过php进行insert操作
    $sqlinsert="insert into login(name,email,phone,password,remarks) values('{$name}','{$email}','{$phoneNum}','{$password}','{$remark}')";


    //添加用户信息到数据库
    mysqli_query($conn,$sqlinsert);


    //echo "<script>alert('注册成功，请登录');</script>";

    echo '<script language="javascript">location.href="../login.html";</script>';
    exit();

}


?>
