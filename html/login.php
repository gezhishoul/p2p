<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Examples</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/account.css" rel="stylesheet" />
</head>
<body>
<?php include 'header.php' ?>
    <div class="login w960 mt30 clearFix">
        <div class="fl loginImg">
            <img src="images/login.png" alt=""/>
        </div>
        <div class="fl loginArea">
            <form action="">
                <div class="alert"></div>
                <div class="inputItem inputPlace">
                    <input type="text" class="inputIcon loginName" name="loginName" id="loginName"/>
                    <p class="placeHolder">请输入手机号/邮箱</p>
                </div>
                <div class="inputItem inputPlace">
                    <input type="password" class="inputIcon pwd" name="pwd" id="pwd"/>
                    <p class="placeHolder">请输入密码</p>
                </div>
                <div class="inputItem clearFix">
                    <div class="rememberAccount fl">
                        <input class="rememberName" type="checkbox" name="rememberName" id="rememberName"/>
                        <label for="rememberName">记住用户名</label>
                    </div>
                    <a class="fr themeCor" href="#">忘记密码</a>
                </div>
                <div class="inputItem mt30">
                    <button type="submit" class="themeBtn" id="loginBtn">立即登录</button>
                </div>
                <div class="inputItem mt10 text-center">
                    没有账号？ <a class="themeCor" href="register.php">免费注册</a>
                </div>
            </form>
        </div>

    </div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use('account');
</script>
</body>
</html>