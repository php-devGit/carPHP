<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Прикрепить картинку к автомобилю</h4>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <label for="body">Выберите автомобиль:</label>
            <?php
            foreach ($cars as $carItem) {
                echo '<a href="#" class="list-group-item">';
                echo 'Марка: ' . $carItem["mark"];
                echo '</br> Модель: ' . $carItem["model"];
                echo '</br> Тип кузова: ' . $carItem["body"];
                echo '</a>';
            }
            ?>
        </div>
    </div>
</div>