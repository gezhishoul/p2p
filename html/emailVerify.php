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
    <h2>邮箱认证</h2>
    <div class="idCardInfoTitle">
        完成邮箱认证后，您可以通过该邮箱接收电子合同、最新优惠活动信息等。
    </div>
    <div class="idCardContent">
        <form action="" class="idCardForm">
            <div class="inputItem">
                <label class="uiLabel" for="phoneCode">常用邮箱</label>
                <input type="text" class="form-control" id="emailSend" />
                <p class="danger disn"></p>
            </div>

            <div class="inputItem clearFix mt30">
                <label class="uiLabel fl"></label>
                <button type="submit" class="themeBtn fl" id="emailsPwdSubmit">发送邮件</button>
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