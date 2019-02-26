<?php

include_once './models/image.php';
include_once './models/imageCar.php';

class Discount extends db
{
    function addDiscount($discount, $carId)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $fields = "(discount, idCar, active)";
        $values = '(' . $discount . ', ' . $carId . ', ' . ' 1)';

        if (!($query = $conn->prepare("INSERT INTO `Discounts` " . $fields . " VALUES " . $values))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        var_dump($query);

        $query->execute();
        $query->close();
    }

    function getDiscounts()
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $image = new Image();
        $imageCar = new ImageCar();

        $discounts = [];

        if (!($query = $conn->prepare("SELECT `id`,`idCar`,`discount` FROM `Discounts` where Active=1"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($id, $idCar, $discount);

        while ($query->fetch()) {
            $arrIdPictures = $imageCar->getImagesCar($idCar)[0];
            array_push($discounts,
                array(
                    'id' => $id,
                    'discount' => $discount,
                    'idCar' => $idCar,
                    'image' => $image->getImageById($arrIdPictures)
                )
            );
        }

        $query->close();
        return $discounts;
    }
}