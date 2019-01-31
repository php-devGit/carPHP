<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости и акции Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="section pt-5">
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-8">
                <?php include 'partial/news.php'; ?>
            </div>
            <div class="col-md-4">
                <?php include 'partial/sales.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>