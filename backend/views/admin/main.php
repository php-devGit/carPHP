<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Панель администратора</title>
    <?php include 'partial/header.php' ?>
</head>

<body>
<?php include 'partial/top-menu.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <?php include 'partial/left-menu.php'; ?>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-6">
                    <?php include 'partial/getOrders.php'; ?>
                </div>
                <div class="col-md-6">
                    <?php include 'partial/createBody.php'; ?>
                    <?php include 'partial/createCar.php'; ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>

<?php include 'partial/header.php'; ?>

</body>
</html>