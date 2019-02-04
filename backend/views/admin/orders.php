<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Панель управления</title>
    <?php include 'partial/header.php' ?>
    <?php include 'partial/footer.php'; ?>
</head>
<body onload="checkUrl();">
<?php include 'partial/top-menu.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <?php include 'partial/left-menu.php'; ?>
        </div>
        <div class="col-sm-9">
            <?php include 'partial/getOrders.php'; ?>
        </div>
        <hr>
    </div>
</div>
</body>
</html>