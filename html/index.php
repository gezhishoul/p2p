<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Examples</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="css/style.css" rel="stylesheet" />
</head>
<body class="patrol">
    <?php include 'header.php' ?>
    <div class="page">
        <div class="banner posr" id="banner">
            <ul class="slides clearFix">
                <li><a href="#"><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/29b60f38-69df-437e-85ec-9c04649cac61.jpg?20140401a" alt=""/></a></li>
                <li><a href="#"><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/a95a6f96-cfdb-4eac-8c77-79093b0f4436.jpg?20140401a" alt=""/></a></li>
                <li><a href="#"><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/20472082-80d8-4712-b609-5ba94cf463b2.jpg?20140401a" alt=""/></a></li>
                <li><a href="#"><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/a95a6f96-cfdb-4eac-8c77-79093b0f4436.jpg?20140401a" alt=""/></a></li>
                <li><a href="#"><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/a95a6f96-cfdb-4eac-8c77-79093b0f4436.jpg?20140401a" alt=""/></a></li>
            </ul>
            <div class="switcher">
                <a href="#" class="active"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
        </div>
        <div class="container clearFix">
            <div class="indexSide fr mt10">
                <dl>
                    <dt>APP</dt>
                    <dd><a href=""><img src="https://www.qian360.com/themes/soonmes_qzw_v2/image/home_product_app.png" alt=""/></a></dd>
                </dl>
                <dl class="mt10">
                    <dt>官方公告</dt>
                    <dd>

                    </dd>
                </dl>
            </div>
            <div class="loanList mt10 tabs indexList">
                <ul class="tabsTitle clearFix">
                    <li class="active">进行中的流转标</li>
                    <li>进行中的普通标</li>
                </ul>
                <div class="tabContent">
                    <div class="tabPane">
                        <ul class="loanListMenu mb20">
                            <li>
                                <div class="loanListTitle clearFix">
                                    <div class="fr loanProgress">
                                        <div class="progress fl">
                                            <div class="progress-bar highCor" style="width: 80%;"></div>
                                        </div>
                                        <div class="progressValue highCor fl">
                                            80%
                                        </div>
                                    </div>
                                    <em>信</em><a href="">家庭装修个人消费</a>
                                </div>
                            </li>
                            <li class="loanListInfo mt10 clearFix">
                                <dl>
                                    <dt>年化收益率</dt>
                                    <dd><b class="danger">12</b>%</dd>
                                </dl>
                                <dl>
                                    <dt>期限</dt>
                                    <dd><b>6</b>个月</dd>
                                </dl>
                                <dl>
                                    <dt>金额</dt>
                                    <dd><b>30,000</b>元</dd>
                                </dl>
                                <dl>
                                    <dt>信用等级</dt>
                                    <dd><div class="creditLel highCor">A</div></dd>
                                </dl>
                                <dl class="purchase">
                                    <dd><a class="themeBtn" href="">投标</a></dd>
                                </dl>
                            </li>
                        </ul>
                        <ul class="loanListMenu mb20">
                            <li>
                                <div class="loanListTitle clearFix">
                                    <div class="fr loanProgress">
                                        <div class="progress fl">
                                            <div class="progress-bar highCor" style="width: 80%;"></div>
                                        </div>
                                        <div class="progressValue highCor fl">
                                            80%
                                        </div>
                                    </div>
                                    <em>信</em><a href="">家庭装修个人消费</a>
                                </div>
                            </li>
                            <li class="loanListInfo mt10 clearFix">
                                <dl>
                                    <dt>年化收益率</dt>
                                    <dd><b class="danger">12</b>%</dd>
                                </dl>
                                <dl>
                                    <dt>期限</dt>
                                    <dd><b>6</b>个月</dd>
                                </dl>
                                <dl>
                                    <dt>金额</dt>
                                    <dd><b>30,000</b>元</dd>
                                </dl>
                                <dl>
                                    <dt>信用等级</dt>
                                    <dd><div class="creditLel highCor">A</div></dd>
                                </dl>
                                <dl class="purchase">
                                    <dd><a class="themeBtn" href="">投标</a></dd>
                                </dl>
                            </li>
                        </ul>
                        <ul class="loanMore">
                            <li class="text-center"><a href="">查看更多投资理财项目</a></li>
                        </ul>
                    </div>
                    <div class="tabPane disn">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script type="text/javascript">
        seajs.use('xslider',function(){
            $("#banner").Xslider({
                space: 4000,
                conbox: '.slides',
                affect:'fade',
                ctag: 'li',
                current:'active'
            });
        })
    </script>
</body>
</html>