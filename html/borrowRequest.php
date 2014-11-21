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
<div class="myAccount container mt30 clearFix">
    <div class="fr myAccountCenter colorWhiteBg borrowRequest">
        <h2>借款申请查询</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>借款标题</td>
                    <td>借款金额</td>
                    <td>年利率</td>
                    <td>借款期限</td>
                    <td>状态</td>
                </tr>
            </thead>
        </table>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use("account");
</script>
</body>
</html>