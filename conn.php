<?php
//2. 连接数据库
$conn = mysqli_connect("localhost", "root", "root", "info",33060);
if(!$conn){
    die("连接服务器数据库失败");
}
//3. 设置字符集
mysqli_query($conn, "set names utf8");
?>