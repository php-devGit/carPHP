<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Новые заявки на тест драйв</h4></div>
    <div class="panel-body">
        <div class="list-group">
            <?php
            foreach ($ordersData as $key => $orderData) {
                echo '<p class="list-group-item c-elements">';
                echo '<span> id: ' . $orderData["id"] . '</span>';
                echo '<span> Фамилия: ' . $orderData["surname"] . '</span>';
                echo '<span> Имя: ' . $orderData["name"] . '</span>';
                echo '<span> Отчество: ' . $orderData["patr"] . '</span>';
                echo '<span> Телефон: ' . $orderData["phone"] . '</span>';
                echo '<span> Дата и время тест-драйва: ' . $orderData["dateTestDrive"] . '</span>';
                echo '<span> Статус: ' . $this->getNameStatus($orderData["status"]) . '</span>';
                echo '<span style="margin-top: 10px">';

                if ($orderData["status"] == 2) {
                    echo '<a class="btn btn-danger" href="/admin/orders/forbid?id=' . $orderData["id"] . '">Отказать</a>';
                } else if ($orderData["status"] == 3) {
                    echo '<a class="btn btn-success" href="/admin/orders/accept?id=' . $orderData["id"] . '">Одобрить</a>';
                } else {
                    echo '<a class="btn btn-danger" href="/admin/orders/forbid?id=' . $orderData["id"] . '">Отказать</a>';
                    echo '<a class="btn btn-success" href="/admin/orders/accept?id=' . $orderData["id"] . '">Одобрить</a>';
                }
                echo '</span>';
                echo '</p>';
            }
            ?>
        </div>
    </div>
</div>