<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тестдрайв Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<nav class="navbar navbar-expand-sm bg-light-с fixed-top" id="mainNav">
    <div class="container">
        <a class="logo-text" href="#">Starcars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav-menu nav navbar-nav ml-auto menu" id="menu">
            </ul>
        </div>
    </div>
</nav>

<div class="container pt-5">
    <div class="pt-4">
        <form>
            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input required type="surname" class="form-control" id="surname" placeholder="Введите вашу фамилию">
            </div>

            <div class="form-group">
                <label for="name">Имя</label>
                <input required type="name" class="form-control" id="name" placeholder="Введите ваше имя">
            </div>

            <div class="form-group">
                <label for="patr">Отчество</label>
                <input type="patr" class="form-control" id="patr" aria-describedby="patrHelp"
                       placeholder="Введите ваше отчество">
                <small id="patrHelp" class="form-text text-muted">Необязательное поле</small>
            </div>

            <div class="form-group">
                <label for="phone">Контактный телефон</label>
                <input type="phone" class="form-control" id="phone" placeholder="Введите ваш контактный телефон">
            </div>

            <div class="form-group">
                <label for="datetime">Дата и время тест драйва</label>
                <input size="14" type="text" id="datetime" value="<?php echo date("Y-m-d h:i") ?>" readonly
                       class="form_datetime form-control">
            </div>

            <button type="submit" class="btn btn-primary">Подать заявку</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii'
    });
</script>
<?php include 'partial/footer.php'; ?>

</body>
</html>