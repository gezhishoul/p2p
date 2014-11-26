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
        <li>
            2.设置新交易密码
        </li>
        <li class="current">
            3.完成
            <b></b>
        </li>
    </ul>
    <div class="idCardContent mt30 text-center alert alert-success verifyComplete">
        <h2 class="mb20"><span class="glyphicon glyphicon-ok mr10"></span>手机号码修改成功</h2>
        <p class="text-center">
            您现在可以 <a class="themeCor" href="account.php">查看我的资料</a>
        </p>
    </div>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
<link href="css/datepicker.css" rel="stylesheet" />
</body>
</html>