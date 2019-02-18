<?php

include_once './models/car.php';

class Order extends db
{
    function addOrder($POST)
    {
        if (!$POST["patr"]) {
            $POST["patr"] = "";
        }

        $POST["dateTestDrive"] = date($POST["dateTestDrive"]);

        $conn = $this->connect();
        $conn->set_charset('utf8');

        $fields = "(surname, name, patr, phone, dateTestDrive, carId, status)";
        $values = "('" . $POST['surname'] . "','" . $POST["name"] . "','" . $POST["patr"] . "','" . $POST["phone"] . "','" . $POST["dateTestDrive"] . "'," . $POST["carId"] . "," . " 1)";
        var_dump($values);

        if (!($query = $conn->prepare("INSERT INTO `orders` " . $fields . " VALUES " . $values))) {
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

    function updateOrderStatus($id, $status)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("UPDATE `orders` SET status = " . $status . " WHERE id = " . $id))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
    }

    function removeOrder($idCar)
    {
        $conn = $this->connect();
        if (!($query = $conn->prepare("DELETE FROM `orders` WHERE carId = " . $idCar))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->close();
    }
}