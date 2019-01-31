<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости и акции Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="section container pt-5 pb-2 pl-4">
    <div class="row pt-4">
        <div class="col-md-7">
            <?php include 'partial/news.php'; ?>
        </div>
        <div class="col-md-5">
            <?php include 'partial/sales.php'; ?>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>