<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会员管理系统</title>
</head>
<style>
    .main{width: 80%; margin: 0 auto; text-align: center;}
    h2{font-size: 20px;}
    h2 a{text-decoration: none;margin-right: 15px;}
    h2 a :last-child{margin-right: 0;}
    h2 a:hover{color:brown; text-decoration: underline;}
    .current{color:brown;}
</style>
<body>
<div class="main">
   <?php include_once "nav.php" ?>
</div>
</body>
</html>