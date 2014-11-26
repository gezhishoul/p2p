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
<div class="myAccount container colorWhiteBg p20 mt30 verify">
    <h2>安全保护问题</h2>
    <div class="idCardInfoTitle">
        安全保护问题是您账户重要的身份校验方式，请务必仔细填写并牢记答案。
    </div>
    <ul class="verifyStep mt20 clearFix">
        <li>
            1.验证身份
        </li>
        <li class="current">
            2.安全保护问题
            <b></b>
        </li>
        <li>
            3.完成
        </li>
    </ul>

    <div class="idCardContent">
        <form action="" class="idCardForm">
            <div class="inputItem mt20">
                <label class="uiLabel">问题1</label>
                <select class="form-control choseQuestions" name="">
                    <option value="" selected>请选择</option>
                    <option value="">您就读的第一所学校全称叫什么？</option>
                    <option value="">您去的第一个海滩是在哪里？</option>
                    <option value="">您就职的第一家公司叫什么名称？</option>
                    <option value="">您配偶的出生地是哪里？</option>
                    <option value="">您小时候最喜欢的玩具是什么？</option>
                    <option value="">您的第一只宠物叫什么名字？</option>
                    <option value="">您关系最好的室友叫什么名字？</option>
                    <option value="">您初中班主任叫什么名字？</option>
                    <option value="">您的长子或者长女的昵称叫什么？</option>
                    <option value="">您父亲的职业是？</option>
                </select>
            </div>
            <div class="inputItem mt10">
                <label class="uiLabel" for="ans1">答案</label>
                <input type="text" class="form-control userAns" id="ans1"/>
                <p class="danger disn">答案不能为空</p>
            </div>
            <div class="inputItem mt30">
                <label class="uiLabel">问题2</label>
                <select class="form-control choseQuestions" name="">
                    <option value="" selected>请选择</option>
                    <option value="">您就读的第一所学校全称叫什么？</option>
                    <option value="">您去的第一个海滩是在哪里？</option>
                    <option value="">您就职的第一家公司叫什么名称？</option>
                    <option value="">您配偶的出生地是哪里？</option>
                    <option value="">您小时候最喜欢的玩具是什么？</option>
                    <option value="">您的第一只宠物叫什么名字？</option>
                    <option value="">您关系最好的室友叫什么名字？</option>
                    <option value="">您初中班主任叫什么名字？</option>
                    <option value="">您的长子或者长女的昵称叫什么？</option>
                    <option value="">您父亲的职业是？</option>
                </select>
            </div>
            <div class="inputItem mt10">
                <label class="uiLabel" for="ans1">答案</label>
                <input type="text" class="form-control userAns" id="ans1"/>
                <p class="danger disn">答案不能为空</p>
            </div>
            <div class="inputItem clearFix mt30">
                <label class="uiLabel fl"></label>
                <button type="submit" class="themeBtn fl" id="userAnswerSubmit">确定</button>
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