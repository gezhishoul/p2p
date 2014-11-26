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
    <div class="fr colorWhiteBg myAccountCenter">
        <h2>我是借款人</h2>
        <div class="p20 tabs">
            <ul class="tabsTitle clearFix">
                <li class="active">身份信息</li>
                <li>信用报告</li>
                <li>银行卡流水</li>
                <li>抵押资料</li>
                <li>担保资料</li>
            </ul>
            <div class="tabContent">
                <p class="mb20">提示：1.本地上传图片大小不能超过500k,请注意保护好隐私信息。</p>
                <div class="tabPane">
                    <form action="">
                        <div  class="inputItem">
                            <label class="uiLabel">身份信息</label>
                            <input type="file"/>
                        </div>
                        <div class="inputItem mt20">
                            <button class="themeBtn">保存</button>
                        </div>
                    </form>
                </div>
                <div class="tabPane disn">
                    <form action="">
                        <div  class="inputItem">
                            <label class="uiLabel">信用报告</label>
                            <input type="file"/>
                        </div>
                        <div class="inputItem mt20">
                            <button class="themeBtn">保存</button>
                        </div>
                    </form>
                </div>
                <div class="tabPane disn">
                    <form action="">
                        <div  class="inputItem">
                            <label class="uiLabel">银行卡流水</label>
                            <input type="file"/>
                        </div>
                        <div class="inputItem mt20">
                            <button class="themeBtn">保存</button>
                        </div>
                    </form>
                </div>
                <div class="tabPane disn">
                    <form action="">
                        <div  class="inputItem">
                            <label class="uiLabel">抵押资料</label>
                            <input type="file"/>
                        </div>
                        <div class="inputItem mt20">
                            <button class="themeBtn">保存</button>
                        </div>
                    </form>
                </div>
                <div class="tabPane disn">
                    <form action="">
                        <div  class="inputItem">
                            <label class="uiLabel">担保资料</label>
                            <input type="file"/>
                        </div>
                        <div class="inputItem mt20">
                            <button class="themeBtn">保存</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
</body>
</html>