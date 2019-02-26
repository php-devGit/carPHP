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
        <div class="col-sm-9 row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Добавление новостей</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form form-vertical" method="post" action="/admin/discountsNews/addNews">
                            <div class="control-group">
                                <label>Введите новость:</label>
                                <textarea class="form-control" name="info" id="info"></textarea>
                            </div>

                            <div class="control-group">
                                <label></label>
                                <div class="controls">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Добавление акций</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form form-vertical" method="post" action="/admin/discountsNews/addDiscounts">
                            <div class="control-group">
                                <label>Выберите автомобиль:</label>
                                <select class="form-control" name="car" id="car">
                                    <?php
                                    foreach ($cars as $carItem) {
                                        echo '<option id=' . $carItem["id"] . ' value=' . $carItem["id"] . ' name=' . $carItem["id"] . '>';
                                        echo $carItem["mark"] . ' ' . $carItem["model"];
                                        echo '</option>';
                                    }
                                    ?>
                                </select>
                                <label>Введите скидку:</label>
                                <input class="form-control" name="discount" id="discount"/>
                            </div>

                            <div class="control-group">
                                <label></label>
                                <div class="controls">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
</body>
</html>