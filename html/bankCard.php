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
    <div class="fr colorWhiteBg myAccountCenter cash">
        <form action="">
            <h2>选择提现银行卡 <a class="themeCor fs14 ml10" href="#">管理银行卡</a></h2>
            <ul class="mt20 clearFix bankCard">
                <li>
                    <input class="disn" type="radio"/>
                    <img src="images/code_102.jpg" alt=""/>
                    <label class="cardNum">
                        6226 **** **** 5521
                    </label>
                </li>
                <li>
                    <img src="images/add.jpg" alt=""/>
                    <label class="cardNum">
                        <a class="themeCor" href="#" id="addNewCard">新增银行卡</a>
                    </label>
                </li>
            </ul>
        </form>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<div class="modal fade" id="cashModal" tabindex="-1">
    <div class="modal-dialog modal-register">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3>添加银行卡</h3>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="inputItem">
                        <label class="uiLabel">开户名</label>
                        <span class="numberLarge">Michael Scofield</span>
                    </div>
                    <div class="inputItem mt10">
                        <label class="uiLabel">选择银行</label>
                        <select name="" id="">
                            <option value="" selected>请选择</option>
                            <option value="">中国农业银行</option>
                        </select>
                    </div>
                    <div class="inputItem mt10">
                        <label class="uiLabel" for="bankLocation">开户行所在地</label>
                        <input type="text" id="bankLocation"/>
                    </div>
                    <div class="inputItem mt10">
                        <label class="uiLabel" for="chargeMoney">银行卡号</label>
                        <input type="text" id="chargeMoney"/>
                        <p class="danger disn">充值金额格式不正确</p>
                    </div>
                    <div class="inputItem mt10">
                        <label class="uiLabel" for="chargeMoney">手机验证码</label>
                        <input type="text" id="chargeMoney"/>
                        <span class="themeBtn curp" id="validCode" disabled>获取验证码</span>
                    </div>
                    <div class="clearFix mt20 bankBtnArea">
                        <button class="themeBtn fl" type="submit" id="bankAdd">新增</button>
                        <button class="themeBtn greyBack curp ml10 fl" data-dismiss="modal">取消</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer mt20 cor666">
                <h3>温馨提示</h3>
                <p>1、如果您填写的开户行支行不正确，可能将无法成功提现，由此产生的提现费用将不予返还。</p>

                <p>2、如果您不确定开户行支行名称，可打电话到所在地银行的营业网点询问或上网查询。</p>

                <p>3、不支持提现至信用卡账户。</p>
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