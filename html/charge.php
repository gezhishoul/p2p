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
    <div class="fr colorWhiteBg myAccountCenter charge">
        <h2>选择充值方式</h2>
        <form action="" target= "_blank">
            <dl class="clearFix payment">
                <dt class="mb20">充值方式</dt>
                <dd class="fl">
                    <label class="mr10" for="aliPay"><input class="mr10" type="radio" id="aliPay" name="payment" checked/><img src="images/alipay.png" width="123" height="38" alt=""/></label>
                </dd>
                <dd class="fl">
                    <label for="tenCentPay"><input class="mr10" type="radio" id="tenCentPay" name="payment" /><img src="images/tenpay.jpg" width="123" height="38" alt=""/></label>
                </dd>
            </dl>
            <h2 class="mt30">填写充值金额</h2>
            <div class="chargeArea">
                <div class="inputItem">
                    <label class="uiLabel">账户余额</label>
                    <span class="numberLarge"><em>0.00</em>元</span>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel" for="chargeMoney">充值金额</label>
                    <input type="text" id="chargeMoney"/>元
                    <p class="danger disn">充值金额格式不正确</p>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel">充值费用</label>
                    <span class="numberLarge"><em>0.00</em>元</span>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel">实际支付金额</label>
                    <span class="numberLarge"><em>0.00</em>元</span>
                </div>
                <div class="mt30">
                    <button type="submit" class="themeBtn" id="chargeBtn">充值</button>
                </div>
            </div>
        </form>
        <div class="chargeNotice mt30">
            <h4>温馨提示</h4>

            <p>为了您的账户安全，请在充值前进行身份认证、手机绑定以及提现密码设置。</p>

            <p>您的账户资金将通过第三方平台进行充值。</p>

            <p>请注意您的银行卡充值限制，以免造成不便。</p>

            <p>禁止洗钱、信用卡套现、虚假交易等行为，一经发现并确认，将终止该账户的使用。</p>

            <p>如果充值金额没有及时到账，请联系客服，400-090-6600。</p>
        </div>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<div class="modal fade" id="chargeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-register">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h2>请您在新打开的网上银行页面上完成付款</h2>
            </div>
            <div class="modal-body">
                <p>付款完成前请不要关闭此窗口。</p>
                <p>完成付款后请根据您的情况点击下面的按钮：</p>
            </div>
            <div class="modal-footer mt20">
                <a class="themeBtn" href="">已完成付款</a>
                <a class="themeBtn" href="" onclick="window.location.reload">付款遇到问题</a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use("account");
</script>
</body>
</html>