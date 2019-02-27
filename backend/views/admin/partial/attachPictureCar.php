<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Прикрепить картинку к автомобилю</h4>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/attachImageCar">
            <div class="list-group">
                <label for="car">Выберите автомобиль:</label>
                <select class="form-control" name="car" id="car">
                    <?php
                    foreach ($cars as $carItem) {
                        echo '<option value="' . $carItem["id"] . '">';
                        echo 'Марка: ' . $carItem["mark"];
                        echo '. Модель: ' . $carItem["model"];
                        echo '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label for="image">Выберите изображение:</label>
                    <select class="form-control" name="image[]" multiple="multiple" id="image">
                        <?php
                        foreach ($images as $image) {
                            echo '<option value="' . $image["id"] . '">' . $image["name"] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label></label>
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Прикрепить</button>
                </div>
            </div>
        </form>
    </div>
</div>