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
    <h1>
        会员管理系统
    </h1>
    <h2>
        <a href="index.php" >首页</a>
        <a href="signup.php" class="current">注册</a>
        <a href="login.php">登陆</a>
        <a href="modify.php">个人资料</a>
        <a href="admin.php">后台管理</a>
    </h2>
    <form action="postReg.php" method="POST">
        <table align="center" border="1" style="border-collapse: collapse;" cellpadding="10" cellspacing="0">
            <tr>
                <td align="right">用户名:</td>
                <td align="left"><input name="username"></td>
            </tr>
            <tr>
                <td align="right">密码:</td>
                <td align="left"><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td align="right">确认密码:</td>
                <td align="left"><input type="password" name="cpw"></td>
            </tr>
            <tr>
                <td align="right">邮箱:</td>
                <td align="left"><input name="email"></td>
            </tr>
            <tr>
                <td align="right">性别:</td>
                <td align="left">
                    <input type="radio" name="sex" value="1" checked>男
                    <input type="radio" name="sex" value="0">女
                </td>
            </tr>
            <tr>
                <td align="right">爱好:</td>
                <td align="left">
                    <input type="checkbox" name="fav[]" value="听音乐">听音乐
                    <input type="checkbox" name="fav[]" value="玩游戏">玩游戏
                    <input type="checkbox" name="fav[]" value="踢足球">踢足球
                </td>
            </tr>
            <tr>
                <td align="right">
                    <input type="submit"  value="提交">
                </td>
                <td>
                    <input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>