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
    <div class="fr myAccountCenter colorWhiteBg userInfo">
        <h2>个人基础信息</h2>
        <form action="" class="clearFix">
            <div class="userPortrait fl">
                <img src="images/default-portrait-96.png" width="96" height="96" alt="" />
                <input type="file" class="mt20"/>
            </div>
            <div class="infoDetail fl">
                <div class="inputItem">
                    <label class="uiLabel">昵称</label>
                    <span>Michael Scofield</span>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel">真实姓名</label>
                    <input type="text" class="form-control"/>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel">手机号码</label>
                    <span>18888888888</span>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel">邮箱地址</label>
                    <span>lord@lord.lord</span>
                </div>
                <div class="inputItem mt10 clearFix sexuality">
                    <label class="uiLabel fl">性别</label>
                    <div class="fl">
                        <label for="secret"><input type="radio" checked id="secret" name="sexuality" />保密</label>
                        <label for="male"><input type="radio" id="male" name="sexuality" />男</label>
                        <label for="female"><input type="radio" id="female" name="sexuality" />女</label>
                    </div>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel" for="birthday">出生日期</label>
                    <input type="text" class="form-control" id="birthday"/>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel" for="career">职业</label>
                    <select name="companyOffice" autocomplete="off" id="career" class="form-control">
                        <option value="103">平面设计</option>
                        <option value="209">助理/秘书</option>
                        <option value="135">技术人员</option>
                        <option value="177">创意与策划</option>
                        <option value="146">生产工艺/技术</option>
                        <option value="92">投融资项目/基金</option>
                    </select>
                </div>
                <div class="inputItem mt10">
                    <label class="uiLabel" for="career">月收入</label>
                    <select name="companyOffice" autocomplete="off" id="career" class="form-control">
                        <option value="" selected>请选择</option>
                        <option value="103">2000元以下</option>
                        <option value="209">2000-5000元</option>
                        <option value="135">10000-20000元</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use("account");
</script>
<link href="css/datetimepicker.min.css" rel="stylesheet" />
</body>
</html>