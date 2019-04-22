<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/common.css" type=text/css>
    <link rel="stylesheet" href="css/photo.css" type=text/css>
</head>
<body>
    <?php include "header.html"?>
    <div class="big-bd">
        <div class="banner">
            <img src="images/banner_02.jpg" alt="">
        </div>
        <div class="content">
            <div class="container">
                <div class="left">
                    <ul>
                        <li><span></span><a href="about.php">公司介绍</a></li>
                        <li class="active"><span></span><a href="photo.php">公司相册</a></li>
                        <li><span></span><a href="organize.php">组织架构</a></li>
                    </ul>
                    <div class="consult"><img src="images/consult_05.jpg" alt=""><button>点击咨询</button></div>
                </div>
                <div class="right">
                    <ul class="top">
                        <li><img src="images/company_03.jpg" alt=""><p>公司全景</p></li>
                        <li><img src="images/company_05.jpg" alt=""><p>办公室</p></li>
                        <li><img src="images/company_03.jpg" alt=""><p>公司全景</p></li>
                        <li><img src="images/company_05.jpg" alt=""><p>办公室</p></li>
                        <li><img src="images/company_03.jpg" alt=""><p>公司全景</p></li>
                        <li><img src="images/company_05.jpg" alt=""><p>办公室</p></li>
                    </ul>
                    <ul class="paging">
                        <li>上一页</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>下一页</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.html"?>
</body>
</html>