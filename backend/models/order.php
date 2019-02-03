<?php

include_once './models/car.php';

class Order extends db
{
    function addOrder($POST)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $q = "INSERT INTO `orders` (surname, name, patr, phone, dateTestDrive, carId, status) VALUES ('" . $POST['surname'] . ',' . $POST["name"] . ',' . $POST["patr"] . ',' . $POST["dateTestDrive"] . ',' . $POST["carId"] . ',' . "1')";
        if (!($query = $conn->prepare($q))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function getOrders()
    {
        $car = new Car();
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $orders = [];

        if (!($query = $conn->prepare("SELECT * FROM `orders`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($id, $surname, $name, $patr, $phone, $dateTestDrive, $carId, $status);

        while ($query->fetch()) {
            array_push($orders,
                array(
                    'id' => $id,
                    'surname' => $surname,
                    'name' => $name,
                    'patr' => $patr,
                    'phone' => $phone,
                    'dateTestDrive' => $dateTestDrive,
                    'car' => $car->getCarById($carId),
                    'status' => $status)
            );
        }

        $query->close();
        return $orders;
    }
}