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
<body>
    <?php include 'header.php' ?>
    <div class="page">
        <div class="banner posr" id="banner">
            <ul class="slides clearFix">
                <li><a href=""><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/29b60f38-69df-437e-85ec-9c04649cac61.jpg?20140401a" alt=""/></a></li>
                <li><a href=""><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/a95a6f96-cfdb-4eac-8c77-79093b0f4436.jpg?20140401a" alt=""/></a></li>
                <li><a href=""><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/20472082-80d8-4712-b609-5ba94cf463b2.jpg?20140401a" alt=""/></a></li>
                <li><a href=""><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/a95a6f96-cfdb-4eac-8c77-79093b0f4436.jpg?20140401a" alt=""/></a></li>
                <li><a href=""><img src="http://www.renrendai.com/upload/cms/banner/indexBanner/a95a6f96-cfdb-4eac-8c77-79093b0f4436.jpg?20140401a" alt=""/></a></li>
            </ul>
            <div class="switcher">
                <a href="#" class="active"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
        </div>
        <div class="loanList container mt10">
            <div class="listTitle">
                投资列表
            </div>
            <table class="table table-larger table-hover">
                <thead>
                <tr>
                    <th>借款标题</th>
                    <th>信用等级</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th>期限</th>
                    <th>进度</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">资金周转</a></td>
                    <td><span class="creditLel highCor">A</span></td>
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
                    <td>已满标</td>
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
                    <td colspan="7">
                        <a href="#">查看更多投资理财项目</a>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="newsList container mt10">
            <div class="listTitle">
                最新动态
            </div>
            <table class="table table-larger table-hover">
                <tbody>
                <tr>
                    <td><a href="#">中国小额信贷机构联席会理事会首迎P2P 人人贷实至名归</a></td>
                    <td class="text-right">2014-09-22</td>
                </tr>
                <tr>
                    <td><a href="#">中国小额信贷机构联席会理事会首迎P2P 人人贷实至名归</a></td>
                    <td class="text-right">2014-09-22</td>
                </tr>
                <tr>
                    <td><a href="#">中国小额信贷机构联席会理事会首迎P2P 人人贷实至名归</a></td>
                    <td class="text-right">2014-09-22</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script type="text/javascript">
        seajs.use(['$','xslider'],function(){
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