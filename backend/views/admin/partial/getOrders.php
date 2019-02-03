<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Новые заявки на тест драйв</h4></div>
    <div class="panel-body">
        <div class="list-group">
            <?php
            foreach ($ordersData as $key => $orderData) {
                echo '<a href="#" class="list-group-item c-elements">';
                echo '<span> id: ' . $orderData["id"] . '</span>';
                echo '<span> Фамилия: ' . $orderData["surname"] . '</span>';
                echo '<span> Имя: ' . $orderData["name"] . '</span>';
                echo '<span> Отчество: ' . $orderData["patr"] . '</span>';
                echo '<span> Телефон: ' . $orderData["phone"] . '</span>';
                echo '<span> Дата и время тест-драйва: ' . $orderData["dateTestDrive"] . '</span>';
                echo '<span> Статус: ' . $this->getNameStatus($orderData["status"]) . '</span>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</div>