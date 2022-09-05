<?php
//1.使用$_POST或$_GET全局变量来获取数据
$username = trim($_POST['username']);
$pw = trim($_POST['pw']);
$cpw = trim($_POST['cpw']);
$email = $_POST['email'];
$sex = $_POST['sex'];
$fav = implode(",", $_POST['fav']);
//2. 连接数据库
$conn = mysqli_connect("localhost", "root", "root", "info",33060);
if(!$conn){
    die("连接服务器数据库失败");
}
//3. 设置字符集
mysqli_query($conn, "set names utf8");
//增加判断规则
if(!strlen($username) || !strlen($pw)){
    echo '<script>alert("用户名和密码不能为空");history.back()</script>';
    exit;
}
if($pw<>$cpw){
    echo '<script>alert("两次输入的密码不同");history.back()</script>';
    exit;
}
//判断是否用户名已经存在
$sql = "select * from userinfo where username='$username'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num){
    echo '<script>alert("用户名已存在，请重新填写");history.back()</script>';
    exit;
}
//4. 
$sql = "insert into userinfo (username, pw, email, sex, fav, createTime) values('$username', '".md5($pw)."', '$email', '$sex', '$fav', '".time()."')";
$result = mysqli_query($conn, $sql);
if($result){
    echo '<script>alert("数据插入成功");</script>';
}else{
    echo '<script>alert("数据插入失败");</script>';
}
?>