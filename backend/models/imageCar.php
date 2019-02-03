<?php

class ImageCar extends db
{
    function addImageCar($idCar, $idImage)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $q = "INSERT INTO `car_picture` (`carId`, `pictureId`) VALUES (" . $idCar . " , " . $idImage . ")";

        if (!($query = $conn->prepare($q))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();

        header('Location: /admin/main');
    }

    function getImageByCar($idCar)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $picture = [];

        if (!($query = $conn->prepare("SELECT (pictureId) FROM `car_picture` WHERE carId = " . $idCar))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->bind_result($pictureId);

        while ($query->fetch()) {
            $picture = $pictureId;
        }

        $query->close();
        return $picture;
    }
}