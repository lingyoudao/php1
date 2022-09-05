<?php
//1.使用$_POST或$_GET全局变量来获取数据
$username = $_POST['username'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
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
//4. 
$sql = "insert into userinfo (username, pw, email, sex, fav, createTime) values('$username', '".md5($pw)."', '$email', '$sex', '$fav', '".time()."')";
$result = mysqli_query($conn, $sql);
if($result){
    echo '<script>alert("数据插入成功");</script>';
}else{
    echo '<script>alert("数据插入失败");</script>';
}
?>