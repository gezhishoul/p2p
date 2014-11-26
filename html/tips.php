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
        <h2>我的消息</h2>

        <form action="">
            <p class="mt10 clearFix"><input class="mr10" type="checkbox" id="allIn"/><label class="mr10" for="allIn">全选</label><button type="submit" class="themeBtn">标记为已读</button></p>
            <table class="table table-hover mt10">
                <thead>
                <tr>
                    <th></th>
                    <th>发自</th>
                    <th>标题</th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody>
                <tr class="read">
                    <td><input class="tipsFilter" type="checkbox"/></td>
                    <td>系统消息</td>
                    <td><a href="tipsDetail.php">I'm looking for someone, guy named Lincoln Burrows</a></td>
                    <td>2014-11-26 09:08:08</td>
                </tr>
                <tr>
                    <td><input class="tipsFilter" type="checkbox"/></td>
                    <td>系统消息</td>
                    <td><a href="tipsDetail.php">when you get close,i will win every time.</a></td>
                    <td>2014-11-26 09:08:08</td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php include 'accountSide.php' ?>
</div>
<?php include 'footer.php' ?>
<script type="text/javascript">
    seajs.use(["account","userInfo"]);
</script>
</body>
</html>