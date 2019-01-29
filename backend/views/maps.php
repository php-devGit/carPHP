<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Схема проезда Starcars</title>
    <link href=".\public\css\style.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\bootstrap.css" rel="stylesheet" type="text/css">
    <link href=".\public\css\lib\scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top" onload="menuConstructor();">

<?php include 'partial/menu.php' ?>

<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title">
                <span class="title">Схема проезда</span>
            </div>
        </div>
        <div class="col-md-4">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5666a80c013463e48bcd67c97d183ba3126a7c08286bb09adcb999853e199125&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>

    <?php include 'partial/footer.php'; ?>

</body>
</html>