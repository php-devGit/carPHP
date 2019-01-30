<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости и акции Starcars</title>
    <link href=".\public\css\style.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\bootstrap.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top" onload="menuConstructor();">

<?php include 'partial/menu.php' ?>

<div class="section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="section-title">
                        <span class="title">Новости</span>
                    </div>
                    <div class="col-md-12">
                        <div class="post post-thumb">
                            <a class="post-img" href="#"><img src="./public/images/car-header.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">BMW</a>
                                    <span class="post-date">Март 27, 2018</span>
                                </div>
                                <h3 class="post-title">Поступление новых моделей BMW-6 серии</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="#"><img src="./public/images/car-header.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">RIO</a>
                                    <span class="post-date">Март 26, 2018</span>
                                </div>
                                <h3 class="post-title">Последние дни скидок на серию RIO - Fly</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="#"><img src="./public/images/car-header.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">MERCEDES</a>
                                    <span class="post-date">Март 25, 2018</span>
                                </div>
                                <h3 class="post-title">Поступление новых моделей MERCEDES AMG</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-md visible-lg"></div>
                    <!-- ad -->
                    <div class="col-md-12">
                        <div class="section-row">
                            <a href="#">
                                <img class="img-responsive center-block" src="./public/images/ad-block.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- ad -->

                    <div class="col-md-12">
                        <div class="section-row  text-center">
                            <button class="btn btn-light">Посмотреть все..</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="section-title">
                        <span class="title">Акции</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>