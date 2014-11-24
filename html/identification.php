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
<div class="myAccount container mt30 clearFix">
    <div class="fr myAccountCenter colorWhiteBg identification">
        <h2>个人基础信息</h2>
        <table class="table table-hover table-larger mt30">
            <tbody>
                <tr>
                    <td class="danger"><i class="glyphicon glyphicon-remove"></i>未认证</td>
                    <td><h5>实名认证</h5></td>
                    <td class="cor666" colspan="3">保障账户安全，确认投资身份</td>
                    <td><a class="themeCor" href="idCard.php">立即认证</a></td>
                </tr>
                <tr>
                    <td class="danger"><i class="glyphicon glyphicon-remove"></i>未设置</td>
                    <td><h5>交易密码</h5></td>
                    <td class="cor666" colspan="3">保障资金安全，充值、取现、投资等资金相关操作时使用</td>
                    <td><a class="themeCor" href="idCard.php">立即认证</a></td>
                </tr>
                <tr>
                    <td class="danger"><i class="glyphicon glyphicon-remove"></i>未设置</td>
                    <td><h5>安全保护问题</h5></td>
                    <td class="cor666" colspan="3">保障个人隐私，修改个人信息等操作时使用</td>
                    <td><a class="themeCor" href="idCard.php">立即设置</a></td>
                </tr>
                <tr>
                    <td class="prove"><i class="glyphicon glyphicon-ok"></i>已认证</td>
                    <td><h5>手机认证</h5></td>
                    <td class="cor666" colspan="3">188*****888</td>
                    <td><a class="themeCor" href="idCard.php">修改</a></td>
                </tr>
                <tr>
                    <td class="prove"><i class="glyphicon glyphicon-ok"></i>已设置</td>
                    <td><h5>登录密码</h5></td>
                    <td class="cor666" colspan="3"></td>
                    <td><a class="themeCor" href="idCard.php">修改</a></td>
                </tr>
                <tr>
                    <td class="danger"><i class="glyphicon glyphicon-remove"></i>未认证</td>
                    <td><h5>电子邮箱</h5></td>
                    <td class="cor666" colspan="3">lord@lord.lord</td>
                    <td><a class="themeCor" href="idCard.php">立即认证</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
<link href="css/datepicker.css" rel="stylesheet" />
</body>
</html>