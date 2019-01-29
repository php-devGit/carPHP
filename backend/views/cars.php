<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Модельный ряд Starcars</title>
    <link href=".\public\css\style.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\bootstrap.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top" onload="menuConstructor();">?

<?php include 'partial/menu.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title">
                <h2>Новости</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="#"><img src="./public/images/car-header.jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-5 old-cost" href="#">190000 руб.</a>
                        <span class="post-date">150000 руб.</span>
                    </div>
                    <h3 class="post-title">BMW-2x</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="#"><img src="./public/images/car-header.jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-5 old-cost" href="#">170000 руб.</a>
                        <span class="post-date">135000 руб.</span>
                    </div>
                    <h3 class="post-title">BMW-1x</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="#"><img src="./public/images/car-header[2].jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-5 old-cost" href="#">180000 руб.</a>
                        <span class="post-date">140000 руб.</span>
                    </div>
                    <h3 class="post-title">MERCEDES ALFAx</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>