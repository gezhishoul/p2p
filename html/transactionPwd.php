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
    <h2>交易密码修改</h2>
    <ul class="verifyStep mt20 clearFix">
        <li>
            1.验证身份
        </li>
        <li class="current">
            2.设置新交易密码
            <b></b>
        </li>
        <li>
            3.完成
        </li>
    </ul>
    <div class="idCardContent">
        <form action="" class="idCardForm">
            <div class="inputItem mt20">
                <label class="uiLabel" for="transPwd">新交易密码</label>
                <input type="password" class="form-control" id="transPwd" />
                <p class="danger disn">交易密码不能为空</p>
            </div>
            <div class="inputItem mt20">
                <label class="uiLabel" for="checkTransPwd">确认新交易密码</label>
                <input type="password" class="form-control" id="checkTransPwd" />
                <p class="danger disn">交易密码不一致</p>
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