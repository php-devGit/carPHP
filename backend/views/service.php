<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Сервис Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPageAnchor();">

<?php include 'partial/menu.php' ?>

<div class="container pt-5">
    <div id="#auto" class="pt-4 section">
        <div class="section-title" id="auto">
            <h2>Автосервис</h2>
            <p class="pt-2 content">
                Наш автосервис предоставляет широкие возможности по ремонту автомобилей.
                Гарантия и качество потверждено временем.
            </p>
        </div>
    </div>

    <div id="#tech" class="section">
        <div class="section-title">
            <h2>Техобслуживание</h2>
            <p class="pt-2 content">
                Наши специалисты осмотрят и продиагностируют ваш автомобиль и проведут техобсуживание.
            </p>
        </div>
    </div>

    <div id="#repair-parts" class="section">
        <div class="section-title">
            <h2>Запчасти</h2>
            <p class="pt-2 content">
                Наш сервис предоставляет запчасти на все продаваемые нами автомобили.
            </p>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>