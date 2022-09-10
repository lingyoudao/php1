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
    .red{color: red;}
</style>
<body>
<div class="main">
    <h1>
        会员管理系统
    </h1>
    <h2>
        <a href="index.php" >首页</a>
        <a href="signup.php" >注册</a>
        <a href="login.php" class="current">登陆</a>
        <a href="modify.php">个人资料</a>
        <a href="admin.php">后台管理</a>
    </h2>
    <form action="postLogin.php" method="POST" onsubmit="return check()">
        <table align="center" border="1" style="border-collapse: collapse;" cellpadding="10" cellspacing="0">
            <tr>
                <td align="right">用户名:</td>
                <td align="left"><input name="username"><span class="red">*</span></td>
            </tr>
            <tr>
                <td align="right">密码:</td>
                <td align="left"><input type="password" name="pw"><span class="red">*</span></td>
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
<script>
    function check(){
        let username = document.getElementsByName("username")[0].value.trim();
        let pw = document.getElementsByName("pw")[0].value.trim();
        let nameReg = /^[a-zA-Z0-9]{3,10}$/ //正则表达式中以/^$/标记开始和结束,长度3-10位
        if(!nameReg.test(username))
        {
            alert("用户名必填，为字母和数字组合，长度3-10位");
            return false;
        }

        let pwReg = /^[a-zA-Z0-9_*]{6,10}$/ //包括下划线_和*
        if(!pwReg.test(pw)){
            alert("密码格式必填，为字母和数字以及下划线_或*组合，长度6-10位");
            return false;
        }

        return true;
    }
</script>
</body>
</html>