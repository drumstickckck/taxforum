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


	//判断密码是否一致
	if($password!=$password1){
		echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
		echo"<script>location='registerPerson.html'</script>";
	}else{
        //通过php连接到mysql数据库
        $conn=mysqli_connect("localhost","root","","lzy");


        //通过php进行insert操作
        $sqlinsert="insert into login(name,email,phone,password) values('{$name}','{$email}','{$phoneNum}','{$password}')";

        //添加用户信息到数据库
        mysqli_query($conn,$sqlinsert);


       //echo "<script>alert('注册成功，请登录');</script>";

		echo '<script language="javascript">location.href="../login.html";</script>';
        exit();

        //返回用户信息字符集
     /*   $result=mysqli_query($conn,$sqlselect);

        echo "<h1>USER INFORMATION</h1>";
        echo "<hr>";
        echo "<table width='700px' border='1px'>";
        //从结果中拿出一行
        echo "<tr>";
        echo "<th>NAME</th><th>EMAIL</th><th>PHONENUMBER</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            //打印出$row这一行

            echo "<td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td>";

            echo "</tr>";
        }
        echo "</table>";*/


    }


?>


