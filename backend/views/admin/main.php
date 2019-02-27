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
            <div class="row">
                <div class="col-md-6">
                    <?php include 'partial/createMark.php'; ?>
                    <hr/>
                    <?php include 'partial/createCar.php'; ?>
                    <?php include 'partial/viewCars.php'; ?>
                </div>
                <div class="col-md-6">
                    <?php include 'partial/createBody.php'; ?>
                    <hr/>
                    <?php include 'partial/uploadImage.php'; ?>
                    <hr/>
                    <?php include 'partial/attachPictureCar.php' ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>

</body>
</html>