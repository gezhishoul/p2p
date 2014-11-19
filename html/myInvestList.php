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
                <div class="clearFix">
                    <div class="fl">
                        <h4>可用资金</h4>
                        <p>0.00元</p>
                    </div>
                    <div class="fl">
                        <h4>已充值总额</h4>
                        <p>0.00元</p>
                    </div>
                    <div class="fl mt10">
                        <a class="themeBtn highCor" href="#">充值</a>
                    </div>
                </div>
                <hr class="mt10"/>
                <div class="clearFix mt10">
                    <div class="fl">
                        <h4>冻结资金</h4>
                        <p>0.00元</p>
                    </div>
                    <div class="fl">
                        <h4>已提现总额</h4>
                        <p>0.00元</p>
                    </div>
                    <div class="fl mt10">
                        <a class="themeBtn" href="#">提现</a>
                    </div>
                </div>
            </div>
            <div class="fl summaryLeft">
                <h2>账户余额</h2>
                <p class="warningColor num">
                    <em>0.00</em>元
                </p>
            </div>
        </div>
        <div class="financingFilter mt30 colorWhiteBg p20">
            <div class="clearFix">
                <span class="mr10">查询类型</span>
                <select class="mr10" name="" id="">
                    <option value="" selected>所有</option>
                    <option value="">投标成功</option>
                </select>
                <span class="mr10">查询时间</span>
                <select class="mr10" name="" id="">
                    <option value="" selected>所有</option>
                    <option value="">一周以内</option>
                </select>
            </div>
            <table class="table table-hover mt10">
                <thead>
                    <tr>
                        <td>时间</td>
                        <td>类型明细</td>
                        <td>收入</td>
                        <td>支出</td>
                        <td>结余</td>
                        <td>备注</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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