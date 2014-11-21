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
    <div class="fr myAccountCenter borrowList">
        <div class="p20 clearFix orangeBack">
            <div class="fr summaryRight">
                <div class="clearFix">
                    <div class="fl">
                        <h4>逾期金额</h4>
                        <p>0.00元</p>
                    </div>
                    <div class="fl">
                        <h4>待还金额</h4>
                        <p>0个</p>
                    </div>
                </div>
                <div class="clearFix mt10">


                </div>
            </div>
            <div class="fl summaryLeft">
                <h2>借款总金额</h2>
                <p class="warningColor num">
                    <em>0.00</em>元
                </p>

            </div>
        </div>
        <div class="investmentList tabs mt30">
            <ul class="tabsTitle clearFix">
                <li class="active"><a href="#">还款中借款</a></li>
                <li><a href="#">申请中借款</a></li>
                <li><a href="#">已还清借款</a></li>
            </ul>
            <div class="tabContent">
                <div class="tabPane">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>借款标题</td>
                            <td>金额</td>
                            <td>年利率</td>
                            <td>期限</td>
                            <td>还款总额</td>
                            <td>还清日期</td>
                            <td>合同</td>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tabPane disn">
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
                <div class="tabPane disn">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>借款标题</td>
                            <td>金额</td>
                            <td>年利率</td>
                            <td>期限</td>
                            <td>还款总额</td>
                            <td>还清日期</td>
                            <td>合同</td>
                        </tr>
                        </thead>
                    </table>
                </div>
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