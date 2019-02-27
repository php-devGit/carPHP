<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Создать тип кузова</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/createBody">
            <div class="control-group">
                <label>Тип кузова</label>
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
            <h4>Редактировать тип кузова</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/updateBody">
            <div class="controls">
                <label for="body">Выберите тип кузова</label>
                <select class="form-control" name="bodyId" id="body">
                    <?php
                    foreach ($bodies as $key => $body) {
                        echo '<option id="' . $key . '" name="' . $key . '" value="' . $key . '">' . $body . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="control-group">
                <label>Новое название типа кузова</label>
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