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
<div class="myAccount container colorWhiteBg p20 mt30 idCard">
    <h2>实名认证</h2>
    <div class="idCardInfoTitle">
        请填写您本人真实有效的身份信息，一旦认证成功，信息将不可更改。
    </div>
    <div class="idCardContent">
        <form action="" class="idCardForm">
            <div class="inputItem">
                <label class="uiLabel" for="realName">真实姓名</label>
                <input type="text" class="form-control" id="realName" />
                <p class="danger disn">姓名格式为汉字</p>
            </div>
            <div class="inputItem mt20">
                <label class="uiLabel" for="idNumber">身份证号码</label>
                <input type="text" class="form-control" id="idNumber" />
                <p class="danger disn">身份证号码格式错误</p>
            </div>
            <div class="inputItem clearFix mt30">
                <label class="uiLabel fl"></label>
                <button type="submit" class="themeBtn fl" id="idCardSubmit">认证</button>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
</body>
</html>