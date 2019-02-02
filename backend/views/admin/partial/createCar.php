<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Создать автомобиль</h4>
        </div>
    </div>

    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/createCar">
            <div class="control-group">
                <div class="controls">
                    <label for="name">Введите название</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <label for="mark">Выберите марку</label>
                    <select class="form-control" name="markId" id="mark">
                        <?php
                        foreach ($marks as $key => $mark) {
                            echo '<option id="' . $key . '" name="' . $key . '">' . $mark . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <label for="body">Выберите тип кузова</label>
                    <select class="form-control" name="bodyId" id="body">
                        <?php
                        foreach ($bodies as $key => $body) {
                            echo '<option id="' . $key . '" name="' . $key . '">' . $body . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <label for="cost">Введите стоимость</label>
                    <input type="text" class="form-control" name="cost" id="cost">
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