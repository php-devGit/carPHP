<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Авторизация</title>
    <?php include 'partial/header.php' ?>
    <link href="./../public/admin/css/bootstrap.css" rel="stylesheet" type="text/css">
    <?php include 'partial/footer.php'; ?>
</head>
<body onload="checkUrl();">
<div class="container">
    <form action="/admin/index/auth" method="post">
        <div class="panel panel-default mt-5 ml-auto mr-auto w-50">
            <div class="panel-heading">
                <h4>Авторизация</h4>
            </div>
            <div class="panel-body">
                <div class="control-group">
                    <label>Эл. адрес:</label>
                    <div class="controls">
                        <input type="text" class="form-control" placeholder="Введите эл. адрес" name="email" required>
                    </div>
                </div>
                <div class="control-group">
                    <label>Пароль:</label>
                    <div class="controls">
                        <input type="password" class="form-control" placeholder="Введите пароль" name="password">
                    </div>
                </div>
                <div class="control-group">
                    <label></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include 'partial/header.php'; ?>

</body>
</html>