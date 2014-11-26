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
<div class="myAccount container colorWhiteBg p20 mt30 verify">
    <h2>修改手机号码</h2>
    <ul class="verifyStep mt20 clearFix">
        <li class="current">
            1.验证身份
            <b></b>
        </li>
        <li>
            2.设置新手机号码
        </li>
        <li>
            3.完成
        </li>
    </ul>
    <div class="idCardContent mt30">
        <form action="" class="idCardForm">
            <div class="inputItem">
                <label class="uiLabel" for="phoneCode">手机动态码</label>
                <input type="text" class="form-control" id="phoneCode" />
                <span class="themeBtn curp" id="phoneCode">发送验证码</span>
                <p class="danger disn"></p>
            </div>
            <div class="inputItem clearFix mt30">
                <label class="uiLabel fl"></label>
                <button type="submit" class="themeBtn fl" id="transPwdSubmit">确定</button>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
</body>
</html>