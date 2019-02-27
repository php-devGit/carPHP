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
                        <h4>Ваши данные:</h4>
                    </div>
                    <div class="panel-body">
                        <p>Фамилия: <?php echo $adminData->surname; ?></p>
                        <p>Имя: <?php echo $adminData->name; ?></p>
                        <p>Отчество:
                            <?php
                            if ($adminData->patr != '') {
                                echo $adminData->patr;
                            } else {
                                echo 'Не указано';
                            }
                            ?>
                        </p>
                        <p>Статус: Активен</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Изменение пароля</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form form-vertical" method="post" action="/admin/settings/updatePassword">
                            <div class="control-group">
                                <input class="form-control" name="password" id="password"/>
                            </div>
                            <div class="control-group">
                                <label></label>
                                <div class="controls">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
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