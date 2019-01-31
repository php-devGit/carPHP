<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тест драйв Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="section container pt-5 pb-2 pl-4">
    <div class="row pt-4">
        <form action="/testdrive/createOrder">
            <div class="section-title">
                <h2>Заявка на тест драйв</h2>
            </div>

            <div class="row custom">
                <div class="col-3">
                    <div class="form-group">
                        <label for="surname" class="field">Фамилия</label>
                        <input required type="text" class="form-control" id="surname"
                               placeholder="Введите вашу фамилию">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name" class="field">Имя</label>
                        <input required type="text" class="form-control" id="name" placeholder="Введите ваше имя">
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="patr" class="field">Отчество</label>
                        <input type="text" class="form-control" id="patr" placeholder="Введите ваше отчество">
                        <small id="patrHelp" class="form-text text-muted labelToField">Необязательное поле</small>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="phone" class="field">Контактный телефон</label>
                        <input required type="text" class="form-control" id="phone"
                               placeholder="Введите ваш контактный телефон">
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="datetime" class="field">Дата и время тест драйва</label>
                        <input size="14" type="text" id="datetime" readonly class="form_datetime form-control"
                               value="<?php echo date("Y-m-d G:i", time() + 60 * 60 * 2) ?>">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="car" class="field">Выбор автомобиля</label>
                        <select id="car" class="form-control">
                            <optgroup label="Универсал">Универсал</optgroup>
                            <option>BMW-1</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Подать заявку</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        fontAwesome: true
    });
</script>
<?php include 'partial/footer.php'; ?>

</body>
</html>