<?php

class Image extends db
{
    function addImage($name)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("INSERT INTO `picture` (path) VALUES ('" . $name . "')"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function getImages()
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $cars = [];

        if (!($query = $conn->prepare("SELECT * FROM `picture`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($id, $name);

        while ($query->fetch()) {
            array_push($cars,
                array(
                    'id' => $id,
                    'name' => $name
                )
            );
        }

        $query->close();
        return $cars;
    }

    function getImageById($idPicture)
    {
        if ($idPicture) {
            $conn = $this->connect();
            $conn->set_charset('utf8');
            $picture = [];

            if (!($query = $conn->prepare("SELECT (path) FROM `picture` WHERE id = " . $idPicture))) {
                echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
            }
            $query->execute();
            $query->bind_result($name);

            while ($query->fetch()) {
                $picture = $name;
            }

            $query->close();
            return $picture;
        } else {
            return 'car-header.jpg';
        }
    }
}