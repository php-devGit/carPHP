<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Автопарк</h4>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <?php
            foreach ($cars as $carItem) {
                echo '<div class="list-group-item row">';

                echo '<p class="col-md-11">';
                echo 'Марка: ' . $carItem["mark"];
                echo '</br> Модель: ' . $carItem["model"];
                echo '</br> Тип кузова: ' . $carItem["body"];
                echo '</br> Стоимость: ' . $carItem["cost"] . ' EUR';
                echo '</p>';

                echo '<p class="col-md-1">';
                echo '</br> <a href="/admin/main/removeCar?id=' . $carItem["id"] . '"><i class="fas fa-trash-alt"></i></a>';
                echo '</p>';

                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>