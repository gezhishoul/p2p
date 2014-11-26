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
    <link href="css/management.css" rel="stylesheet" />
</head>
<body>
<?php include 'header.php' ?>
<div class="myAccount container colorWhiteBg p20 mt30 idCard">
    <h2>修改登录密码</h2>

    <div class="idCardContent">
        <form action="" class="idCardForm">
            <div class="inputItem">
                <label class="uiLabel" for="pwd">当前登录密码</label>
                <input type="password" class="form-control" id="pwd" />
            </div>
            <div class="inputItem mt20">
                <label class="uiLabel" for="newPwd">新登录密码</label>
                <input type="text" class="form-control" id="newPwd" />
                <p class="danger disn">身份证号码格式错误</p>
            </div>
            <div class="inputItem mt20">
                <label class="uiLabel" for="ConNewPwd">确认新登录密码</label>
                <input type="text" class="form-control" id="ConNewPwd" />
                <p class="danger disn">身份证号码格式错误</p>
            </div>
            <div class="inputItem clearFix mt30">
                <label class="uiLabel fl"></label>
                <button type="submit" class="themeBtn fl" id="changePwdSubmit">认证</button>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
<link href="css/datepicker.css" rel="stylesheet" />
</body>
</html>