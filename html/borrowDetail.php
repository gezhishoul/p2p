<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Examples</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/borrow.css" rel="stylesheet" />
</head>
<body>
<?php include 'header.php' ?>
    <div class="borrowDetail w960 mt30">
        <h1 class="themeCor">借款申请信息填写</h1>
        <form class="borrowForm p20" action="">
            <div class="inputItem">
                <label class="uiLabel" for="borrowTitle">借款标题</label>
                <input type="text" class="inputLarge" id="borrowTitle"/>
                <p class="danger disn">借款标题不能为空</p>
            </div>
            <div class="inputItem">
                <label class="uiLabel" for="rate">年利率</label>
                <input type="text" class="inputLarge" id="rate"/>
                <span>% (利率范围：10%-24%)</span>
                <p class="danger disn">请输入正确的年利率</p>
            </div>
            <div class="inputItem">
                <label class="uiLabel" >借款用途</label>
                <select class="form-control" name="" id="">
                    <option selected value="">生意周转</option>
                    <option value="">银行转贷</option>
                    <option value="">存保证金</option>
                    <option value="">票据质押</option>
                </select>
            </div>
            <div class="inputItem">
                <label class="uiLabel" >借款期限</label>
                <select class="form-control" name="" id="">
                    <option selected value="">3个月</option>
                    <option value="">6个月</option>
                    <option value="">9个月</option>
                    <option value="">12个月</option>
                </select>
            </div>
            <div class="inputItem">
                <label class="uiLabel" >最低投标金额</label>
                <select class="form-control" name="" id="">
                    <option selected value="">50元</option>
                    <option value="">100元</option>
                    <option value="">500元</option>
                    <option value="">1000元</option>
                </select>
            </div>
            <div class="inputItem">
                <label class="uiLabel" >还款方式</label>
                <select class="form-control" name="" id="">
                    <option selected value="">等额本息</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="inputItem">
                <label class="uiLabel" >最多投标总额</label>
                <select class="form-control" name="" id="">
                    <option selected value="">没有限制</option>
                    <option value="">30000元</option>
                    <option value="">50000元</option>
                    <option value="">80000元</option>
                </select>
            </div>
            <div class="inputItem clearFix">
                <label class="uiLabel fl" for="borrowContent">借款描述</label>
                <textarea id="borrowContent" class="fl"></textarea>
                <p class="danger disn">请输入借款描述</p>
            </div>
            <div class="inputItem mt30 clearFix">
                <label class="uiLabel"></label>
                <button class="themeBtn" id="borrowSubmit" type="submit">提交</button>
            </div>
        </form>
    </div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use('borrow');
</script>
</body>
</html>