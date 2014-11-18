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
    <div class="fr myAccountCenter myInvestList">
        <div class="p20 clearFix orangeBack">
            <div class="fr summaryRight">
                .charge
            </div>
            <div class="fl summaryLeft">
                <h2>账户余额</h2>
                <p class="warningColor num">
                    <em>0.00</em>元
                </p>
            </div>
        </div>
    </div>
<?php include 'accountSide.php' ?>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use("account");
</script>
</body>
</html>