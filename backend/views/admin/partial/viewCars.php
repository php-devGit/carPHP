<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Автопарк</h4>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <div class="row">
                <?php
                foreach ($cars as $carItem) {
                    echo '<a href="#" class="list-group-item">';
                    echo 'Марка: ' . $carItem["mark"];
                    echo '</br> Модель: ' . $carItem["model"];
                    echo '</br> Тип кузова: ' . $carItem["body"];
                    echo '</br> Стоимость: ' . $carItem["cost"];
                    echo ' EUR</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>