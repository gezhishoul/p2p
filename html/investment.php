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
    <div class="fr myAccountCenter investment">
        <div class="p20 clearFix orangeBack">
            <div class="fr summaryRight">
                <div class="clearFix">
                    <div class="fl">
                        <h4>债权账户资产</h4>
                        <p>0.00元</p>
                    </div>
                    <div class="fl">
                        <h4>回收中的债权数量</h4>
                        <p>0个</p>
                    </div>

                </div>
                <hr class="mt10"/>
                <div class="clearFix mt10">


                </div>
            </div>
            <div class="fl summaryLeft">
                <h2>债权已赚金额</h2>
                <p class="warningColor num">
                    <em>0.00</em>元
                </p>

                <p><label class="mr10">利息收益</label><span>0.00元</span></p>

                <p><label class="mr10">债权转让盈亏</label><span>0.00元</span</p>
            </div>
        </div>
        <div class="investmentList tabs mt30">
            <ul class="tabsTitle clearFix">
                <li class="active"><a href="#">回收中的债权</a></li>
                <li><a href="#">已结清的债权</a></li>
                <li><a href="#">投标中的债权</a></li>
                <li><a href="#">已转出的债权</a></li>
            </ul>
            <div class="tabContent">
                <div class="tabPane">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>债权ID</td>
                                <td>原始投资金额</td>
                                <td>年利率</td>
                                <td>待收本息</td>
                                <td>月收本息</td>
                                <td>期数</td>
                                <td>下个还款日</td>
                                <td>状态</td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tabPane disn">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>债权ID</td>
                            <td>投资金额</td>
                            <td>年利率</td>
                            <td>回收金额</td>
                            <td>已赚金额</td>
                            <td>结清日期</td>
                            <td>结清方式</td>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tabPane disn">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>债权ID</td>
                            <td>原始投资金额</td>
                            <td>年利率</td>
                            <td>期限</td>
                            <td>信用等级</td>
                            <td>剩余时间</td>
                            <td>投标进度</td>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tabPane disn">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>债权ID</td>
                            <td>成交份数</td>
                            <td>转出时债权总价值</td>
                            <td>转出时总成交金额</td>
                            <td>实际收入</td>
                            <td>交易费用</td>
                            <td>转让盈亏</td>
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