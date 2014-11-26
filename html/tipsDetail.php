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
    <div class="fr colorWhiteBg myAccountCenter tipsDetail">
        <h2>我的消息</h2>
        <p class="tipsDetailTitle clearFix"><span class="fr">2014-11-26 09:08:08</span><span>发自：系统消息</span></p>
        <table class="table">
            <thead>
                <th>修改手机号码成功</th>
            </thead>
            <tbody>
                <tr>
                    <td>尊敬的Michael Scofield，您于11月26日09时08分成功修改手机号码，如非本人操作，请致电客服热线4008666618。</td>
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
</body>
</html>