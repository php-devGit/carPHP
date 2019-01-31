<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Схема проезда Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="container pt-5">
    <div class="pt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span class="title">Расположение</span>
                    <p class="text pt-2 content">
                        <span>Дилерский центр «Starcars» располагается на стыке двух самых густонаселенных районов Севастополя.</span>
                        <span>Для того, чтобы добраться на общественном транспорте Вам подойдут маршруты: 14,102, 400, 30, 12, 77, 109, 95,110, 112,16, 10, 107,102, 79, 4 до остановки Строитель или Студенческий городок.</span>
                    </p>
                    <span class="title">Схема проезда</span>
                    <div class="pt-3">
                        <script type="text/javascript" charset="utf-8" async
                                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5666a80c013463e48bcd67c97d183ba3126a7c08286bb09adcb999853e199125&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>