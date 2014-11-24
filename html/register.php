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
        <h1 class="themeCor">用户注册</h1>
        <form action="" id="registerForm">
            <div class="loginArea registerArea">
                <div class="alert"></div>
                <div class="inputItem">
                    <label class="uiLabel" for="nickName">昵称</label>
                    <input type="text" class="inputIcon nickName form-control" name="nickName" id="nickName"/>
                </div>
                <div class="inputItem">
                    <label class="uiLabel"  for="pwd">登录密码</label>
                    <input type="password" class="inputIcon pwd form-control" name="pwd" id="pwd"/>
                </div>
                <div class="inputItem">
                    <label class="uiLabel"  for="confirmPwd">确认密码</label>
                    <input type="password" class="inputIcon pwd confirmPwd form-control" name="confirmPwd" id="confirmPwd"/>
                </div>
                <div class="inputItem">
                    <label class="uiLabel"  for="mobile">手机号码</label>
                    <input type="text" class="inputIcon mobile form-control" name="mobile" id="mobile"/>
                </div>
                <div class="inputItem">
                    <label class="uiLabel"  for="email">邮箱</label>
                    <input type="text" class="inputIcon email form-control" name="email" id="email"/>
                </div>
                <div class="registerBottom">
                    <input type="checkbox" checked disabled class="rememberName deal" name="deal" id="deal"/>
                    <label class="uiLabel"  for="deal">我已阅读并同意</label><a class="themeCor" href="#">《网站服务协议》</a>
                </div>
                <div class="inputItem registerBottom">
                    <button class="themeBtn loginBtn registerBtn" id="registerBtn" type="submit">立即注册</button>
                    <span>已经注册? </span><a class="themeCor" href="login.php">请登录</a>
                </div>
            </div>
        </form>
    </div>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-register">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">为了确保您的手机可用，请填写您收到的手机动态码。</h4>
            </div>
            <div class="modal-body">
                <div class="inputItem clearFix">
                    <label class="fl" for="idCode">手机动态码： </label><input class="fl" type="text" id="idCode"/> <span disabled class="fl btn warning mobileSend"><em id="countDown">59</em>秒后重发短信</span>
                </div>
                <div class="inputItem mt10">
                    <span class="btn themeBtn idCodeSubmit" id="idCodeSubmit">确 认</span>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use('account');
</script>
</body>
</html>