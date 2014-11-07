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
    <div class="investFilters container mt10 p20bs">
        <div class="filterHeader clearFix">
            <h3 class="fl">筛选投资项目</h3><span class="fl">多选</span>
        </div>
        <div class="filterDetail">
            <dl class="mt10 clearFix">
                <dt>标的类型</dt>
                <dd>
                    <a class="active" href="">不限</a>
                    <a href="">信用认证标</a>
                    <a href="">实地认证标</a>
                    <a href="">机构担保标</a>
                </dd>
            </dl>
            <dl class="mt10 clearFix">
                <dt>借款期限</dt>
                <dd>
                    <a class="active" href="">不限</a>
                    <a href="">6个月及以下</a>
                    <a href="">7-12个月</a>
                    <a href="">13-24个月</a>
                    <a href="">25个月及以上</a>
                </dd>
            </dl>
            <dl class="mt10 clearFix">
                <dt>认证等级</dt>
                <dd>
                    <a class="active" href="">不限</a>
                    <a href="">AA</a>
                    <a href="">A</a>
                    <a href="">B</a>
                    <a href="">C</a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="loanList investList container mt10 p20bs">
        <div class="investHeader clearFix">
            <h3 class="fl">投资列表</h3>
            <table class="table table-larger table-hover">
                <thead>
                <tr>
                    <td>借款标题</td>
                    <td>信用等级</td>
                    <td>年利率</td>
                    <td>金额</td>
                    <td>期限</td>
                    <td>进度</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">资金周转</a></td>
                    <td class="text-center"><span class="creditLel highCor">A</span></td>
                    <td>10.00%</td>
                    <td>30,000元</td>
                    <td>3个月</td>
                    <td>100%</td>
                    <td><a class="themeBtn" href="#">投标</a></td>
                </tr>
                <tr>
                    <td><a href="#">资金周转</a></td>
                    <td><span class="creditLel lowCor">E</span></td>
                    <td>10.00%</td>
                    <td>30,000元</td>
                    <td>3个月</td>
                    <td>100%</td>
                    <td>还款中</td>
                </tr>
                <tr>
                    <td><a href="#">资金周转</a></td>
                    <td><span class="creditLel midCor">C</span></td>
                    <td>10.00%</td>
                    <td>30,000元</td>
                    <td>3个月</td>
                    <td>100%</td>
                    <td>还款中</td>
                </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7" class="text-right">
                            <a class="btn btn-default" href=""><</a>
                            <a class="btn btn-default" href="">1</a>
                            <a class="btn btn-default" href="">2</a>
                            <a class="btn btn-default" href="">3</a>
                            <span class="btn btn-default" href="">...</span>
                            <a class="btn btn-default" href="">88</a>
                            <a class="btn btn-default" href="">></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
<?php include 'footer.php' ?>

</body>
</html>