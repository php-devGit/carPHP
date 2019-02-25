<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Новые заявки на тест драйв</h4></div>
    <div class="panel-body">
        <div class="list-group">
            <?php
            foreach ($ordersData as $key => $orderData) {
                $car = $orderData["car"][0];

                echo '<p class="list-group-item c-elements">';
                echo '<span> id: ' . $orderData["id"] . '</span>';
                echo '<span> Фамилия: ' . $orderData["surname"] . '</span>';
                echo '<span> Имя: ' . $orderData["name"] . '</span>';
                echo '<span> Отчество: ' . $orderData["patr"] . '</span>';
                echo '<span> Телефон: ' . $orderData["phone"] . '</span>';
                echo '<span> Дата и время тест-драйва: ' . $orderData["dateTestDrive"] . '</span>';
                echo '<span> Марка: ' . $car["mark"] . '</span>';
                echo '<span> Модель: ' . $car["model"] . '</span>';
                echo '<span> Статус: ' . $this->getNameStatus($orderData["status"]) . '</span>';
                echo '<span style="margin-top: 10px">';

                switch ($orderData["status"]) {
                    case 1:
                        echo '<a class="btn btn-danger" href="/admin/orders/forbid?id=' . $orderData["id"] . '">Отказать</a>';
                        echo '<a class="btn btn-success" href="/admin/orders/accept?id=' . $orderData["id"] . '">Одобрить</a>';
                        break;
                    case 2:
                        echo '<a class="btn btn-danger" href="/admin/orders/forbid?id=' . $orderData["id"] . '">Отказать</a>';
                        break;
                    case 3:
                        echo '<a class="btn btn-success" href="/admin/orders/accept?id=' . $orderData["id"] . '">Одобрить</a>';
                        break;
                }

                echo '</span>';
                echo '</p>';
            }
            ?>
        </div>
    </div>
</div>