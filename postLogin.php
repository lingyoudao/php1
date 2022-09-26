<?php
session_start();

//1.使用$_POST或$_GET全局变量来获取数据
$username = trim($_POST['username']);
$pw = trim($_POST['pw']);

include_once "conn.php";
//增加判断规则
if(!strlen($username) || !strlen($pw)){
    echo '<script>alert("用户名和密码不能为空");history.back()</script>';
    exit;
}else{
    if(!preg_match('/^[a-zA-Z0-9]{3,10}$/', $username)){
        echo '<script>alert("用户名必填，为字母和数字组合，长度3-10位");history.back()</script>';
        exit;
    }
    if(!preg_match('/^[a-zA-Z0-9_*]{6,10}$/', $pw)){
        echo '<script>alert("密码格式必填，为字母和数字以及下划线_或*组合，长度6-10位");history.back()</script>';
        exit;
    }
}
//判断是否用户名已经存在
$sql = "select * from userinfo where username='$username' and pw ='" .md5($pw).  "'" ;
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num){
    $_SESSION['loggedusername'] = $username;
    $info = mysqli_fetch_array($result);
    if($info['admin']){
        $_SESSION['isAdmin']=1;
    }else{
        $_SESSION['isAdmin']=0;
    }
    echo '<script>alert("登陆成功");location.href="index.php";</script>';
}else{
    unset($_SESSION['isAdmin']);
    unset($_SESSION['loggedusername']);
    echo '<script>alert("登陆失败");history.back();</script>';
}
?>
