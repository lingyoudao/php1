<?php
$username = $_POST['username'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$sex = $_POST['sex'];
$fav = $_POST['fav'];


echo "您输入的用户名是:". $username ."<br>";
echo "您输入的密码是: $pw <br>";
echo "您确认的密码是: {$cpw} <br>";
echo "您选择的性别是:";
echo $sex == 1 ? "男" : "女";
echo "<br>";
echo "您选择的爱好是:";
// print_r($fav); //仅在调试时使用
$fav = implode(",", $fav);
echo $fav;

?>