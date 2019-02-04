<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Панель управления</title>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Создание администратора</h4>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical" method="post" action="/admin/accounts/createAccount">
                        <div class="control-group">
                            <label for="surname">Введите фамилию:</label>
                            <input class="form-control" name="surname" id="surname"/>
                        </div>
                        <div class="control-group">
                            <label for="name">Введите имя:</label>
                            <input class="form-control" name="name" id="name"/>
                        </div>
                        <div class="control-group">
                            <label for="patr">Введите отчество:</label>
                            <input class="form-control" name="patr" id="patr"/>
                        </div>
                        <div class="control-group">
                            <label for="password">Введите пароль:</label>
                            <input class="form-control" name="password" id="password"/>
                        </div>
                        <div class="control-group">
                            <label for="email">Введите эл. адрес:</label>
                            <input class="form-control" name="email" id="email"/>
                        </div>
                        <div class="control-group">
                            <label for="dostup">Введите уровень доступа (от 1 - Модератор, до 4 -
                                Администратор):</label>
                            <input class="form-control" name="dostup" id="dostup"/>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>

<?php include 'partial/header.php'; ?>

</body>
</html>