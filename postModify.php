<?php
//1.使用$_POST或$_GET全局变量来获取数据
$username = trim($_POST['username']);
$pw = trim($_POST['pw']);
$cpw = trim($_POST['cpw']);
$email = $_POST['email'];
$sex = $_POST['sex'];
$fav = implode(",", $_POST['fav']);



//增加判断规则
if(!strlen($username)){
    echo '<script>alert("用户名不能为空");history.back()</script>';
    exit;
}else{
    if(!preg_match('/^[a-zA-Z0-9]{3,10}$/', $username)){
        echo '<script>alert("用户名必填，为字母和数字组合，长度3-10位");history.back()</script>';
        exit;
    }
}

if(!empty($pw)){
    if($pw<>$cpw){
        echo '<script>alert("两次输入的密码不同");history.back()</script>';
        exit;
    }else{
        if(!preg_match('/^[a-zA-Z0-9_*]{6,10}$/', $pw)){
            echo '<script>alert("密码格式必填，为字母和数字以及下划线_或*组合，长度6-10位");history.back()</script>';
            exit;
        }
    }
}



if(!empty($email)){
    if(!preg_match('/^[a-zA-Z0-9_\-]+@([a-zA-Z0-9]+\.)+(com|cn|net|org)$/', $email)){
        echo '<script>alert("信箱格式不正确!");history.back()</script>';
        exit;
    }
}

include_once "conn.php";
//判断是否用户名已经存在
if($pw){
    $sql = "update userinfo set pw='".md5($pw)."', email='$email', sex='$sex',  fav='$fav' where username='$username'";
    $url = "logout.php";
}else{
    $sql =  "update userinfo set  email='$email', sex='$sex', fav='$fav' where username='$username'";
    $url = "index.php";
}

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('修改用户数据成功'); location.href='$url';</script>";
}else{
    echo '<script>alert("修改用户数据失败");history.back();</script>';
}

?>