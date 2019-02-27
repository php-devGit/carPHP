<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Создать марку автомобиля</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/createMark">
            <div class="control-group">
                <label>Марка автомобиля</label>
                <div class="controls">
                    <input type="text" class="form-control" placeholder="Введите название"
                           name="name" id="name">
                </div>
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

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Редактировать марку автомобиля</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/updateMark">

            <div class="controls">
                <label for="body">Выберите марку автомобиля</label>
                <select class="form-control" name="markId" id="mark">
                    <?php
                    foreach ($marks as $key => $mark) {
                        echo '<option id="' . $key . '" name="' . $key . '" value="' . $key . '">' . $mark . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="control-group">
                <label>Новое название марки автомобиля</label>
                <div class="controls">
                    <input type="text" class="form-control" placeholder="Введите название" name="name" id="name">
                </div>
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