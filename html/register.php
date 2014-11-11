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
    <div class="register w960">
        <form action="">
            <div class="loginArea registerArea">
                <div class="alert"></div>
                <div class="inputItem">
                    <label for="nickName">昵称</label>
                    <input type="text" class="inputIcon nickName" name="nickName" id="nickName"/>
                </div>
                <div class="inputItem">
                    <label for="pwd">登录密码</label>
                    <input type="password" class="inputIcon pwd" name="pwd" id="pwd"/>
                </div>
                <div class="inputItem">
                    <label for="confirmPwd">确认密码</label>
                    <input type="password" class="inputIcon pwd confirmPwd" name="confirmPwd" id="confirmPwd"/>
                </div>
                <div class="inputItem">
                    <label for="mobile">手机号码</label>
                    <input type="text" class="inputIcon mobile" name="mobile" id="mobile"/>
                </div>
                <div class="inputItem">
                    <label for="email">邮箱</label>
                    <input type="text" class="inputIcon email" name="email" id="email"/>
                </div>
                <div class="registerBottom">
                    <input type="checkbox" checked disabled class="rememberName deal" name="deal" id="deal"/>
                    <label for="deal">我已阅读并同意</label><a class="themeCor" href="#">《网站服务协议》</a>
                </div>
                <div class="inputItem registerBottom">
                    <button class="themeBtn loginBtn registerBtn" id="registerBtn" type="submit">立即注册</button>
                    <span>已经注册? </span><a class="themeCor" href="#">请登录</a>
                </div>
            </div>
        </form>
    </div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use('account');
</script>
</body>
</html>