<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости и акции Starcars</title>
    <link href=".\public\css\style.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\bootstrap.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top" onload="menuConstructor();">?

<?php include 'partial/menu.php' ?>

<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title">
                <span class="title">Новости и акции</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="blog-post.html"><img src="./public/images/car-header.jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-1" href="#">BMW</a>
                        <span class="post-date">Март 27, 2018</span>
                    </div>
                    <h3 class="post-title">Поступление новой серии BMW-2</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="#"><img src="./public/images/car-header.jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="#">MERCEDES</a>
                        <span class="post-date">Март 27, 2018</span>
                    </div>
                    <h3 class="post-title">Поступление новой серии Mercedes класса люкс</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="#"><img src="./public/images/car-header[2].jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-3" href="#">BMW</a>
                        <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">Пониженная ставка на кредит на BMW-3</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>