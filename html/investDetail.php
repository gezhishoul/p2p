<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Examples</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/invest.css" rel="stylesheet" />
</head>
<body>
<?php include 'header.php' ?>
    <div class="loan container">
        <div class="loanDetail mt10">
            <div class="loanDetailTitle">
                <a class="agreement themeCor fr" href="#">借款协议（范本）</a>
                <h2>投资创业 <a class="themeCor ml10" href="#">user</a></h2>
            </div>
            <div class="loanDetailContent p20 clearFix">
                <div class="fl loanDetailLeft">
                    <div class="clearFix mb20">
                        <dl class="loanInfo">
                            <dt>标的总额 （元）</dt>
                            <dd>￥15,000</dd>
                        </dl>
                        <dl class="loanInfo">
                            <dt>年利率</dt>
                            <dd>13.00%</dd>
                        </dl>
                        <dl class="loanInfo">
                            <dt>还款期限 （月）</dt>
                            <dd>24</dd>
                        </dl>
                    </div>
                    <div class="clearFix">
                        <dl class="loanRules fl">
                            <dt>保障方式</dt>
                            <dd>本金</dd>
                        </dl>
                        <dl class="loanRules fl">
                            <dt>提前还款费率</dt>
                            <dd>1.00%</dd>
                        </dl>
                        <dl class="loanRules fl">
                            <dt>还款方式</dt>
                            <dd>按月还款/等额本息 </dd>
                        </dl>
                        <dl class="loanRules fl">
                            <dt>月还本息（元）</dt>
                            <dd>1,008.00</dd>
                        </dl>
                    </div>
                    <dl class="loanDate mt30 clearFix">
                        <dt class="fl">投标进度</dt>
                        <dd class="fl">
                            <div class="progress fl">
                                <div class="progress-bar highCor" style="width:80%"></div>
                            </div>
                            <div class="progressValue highCor fl">
                                80%
                            </div>
                            <div class="fl timeLeft">
                                剩余时间<span class="fs18">6</span>天<span class="fs18">23</span>时<span class="fs18">59</span>分
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="fl toLoan">
                    <dl class="moneyLeft">
                        <dt>剩余金额（元）</dt>
                        <dd>￥7,200</dd>
                    </dl>
                    <p class="mt10 text-right"><span class="fl">账户余额&nbsp;&nbsp;&nbsp;&nbsp;0.00元 </span><a class="themeCor" href="">充值</a></p>
                    <form class="posr" action="">
                        <div class="hasHint mt10">
                            <p class="inputHint">
                                输入金额需为50元的整数倍
                            </p>
                            <input class="loan hintInput" type="text" />
                            <p class="error" style="visibility: hidden;">
                                输入金额需为50元的整数倍
                            </p>
                        </div>
                        <button class="loanSubmit btn btn-primary mt10">投标</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="loanOwner mt30 tabs">
            <ul class="tabsTitle clearFix">
                <li class="active">标的详情</li>
                <li>投标记录</li>
            </ul>
            <div class="tabContent">
                <div class="tabPane">
                    <div class="customerInfo">
                        <h2>用户信息</h2>
                        <ul class="clearFix">
                            <li>
                                <span class="mr30">昵称</span>
                                <span class="customerInfoValue">xxx</span>
                            </li>
                            <li>
                                <span class="mr30">收入范围</span>
                                <span class="customerInfoValue">5000-10000元</span>
                            </li>
                            <li>
                                <span class="mr30">工作时间</span>
                                <span class="customerInfoValue">1-3年</span>
                            </li>
                            <li>
                                <span class="mr30">工作城市</span>
                                <span class="customerInfoValue">上海 崇明</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tabPane disn">
                    <table class="table table-larger table-hover">
                        <thead>
                            <tr>
                                <th>序号</th>
                                <th>投标人</th>
                                <th>投标金额</th>
                                <th>投标时间</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>michaelwusm</td>
                            <td>4000元</td>
                            <td>2014-11-05 15:04</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>michaelwusm</td>
                            <td>4000元</td>
                            <td>2014-11-05 15:04</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>
</body>
</html>