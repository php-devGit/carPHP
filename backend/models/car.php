<?php

class Car extends db
{
    function addBody($name)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("INSERT INTO `body` (name) VALUES ('" . $name . "')"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function getBodies()
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $bodies = [];

        if (!($query = $conn->prepare("SELECT * FROM `body`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->bind_result($id, $name);

        while ($query->fetch()) {
            $bodies[$id] = $name;
        }

        $query->close();
        return $bodies;
    }

    function getBody($id)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $body = [];

        if (!($query = $conn->prepare("SELECT (name) FROM `body` WHERE id = " . $id))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->bind_result($name);

        while ($query->fetch()) {
            $body = $name;
        }

        $query->close();
        return $body;
    }

    function addMark($name)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("INSERT INTO `mark` (name) VALUES ('" . $name . "')"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function getMarks()
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $marks = [];

        if (!($query = $conn->prepare("SELECT * FROM `mark`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->bind_result($id, $name);

        while ($query->fetch()) {
            $marks[$id] = $name;
        }

        $query->close();
        return $marks;
    }

    function getMark($id)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $mark = '';

        if (!($query = $conn->prepare("SELECT (name) FROM `mark` WHERE id = " . $id))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($name);

        while ($query->fetch()) {
            $mark = $name;
        }

        $query->close();
        return $mark;
    }

    function addCar($POST)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $q = "INSERT INTO `car` (markId, bodyId, model, cost) VALUES (" . $POST["markId"] . ',' . $POST["bodyId"] . ',"' . $POST["name"] . '",' . $POST["cost"] . ")";
        if (!($query = $conn->prepare($q))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->close();
    }

    function getCarById($idCar)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $cars = [];

        if (!($query = $conn->prepare("SELECT * FROM `car` WHERE id = " . $idCar))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->bind_result($id, $markId, $bodyId, $model, $cost);

        while ($query->fetch()) {
            array_push($cars,
                array(
                    'model' => $model,
                    'cost' => $cost,
                    'mark' => $this->getMark($markId),
                    'body' => $this->getBody($bodyId))
            );
        }

        $query->close();
        return $cars;
    }

    function getCars()
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $cars = [];

        if (!($query = $conn->prepare("SELECT * FROM `car`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($id, $markId, $bodyId, $model, $cost);

        while ($query->fetch()) {
            array_push($cars,
                array(
                    'id' => $id,
                    'model' => $model,
                    'cost' => $cost,
                    'mark' => $this->getMark($markId),
                    'body' => $this->getBody($bodyId))
            );
        }

        $query->close();
        return $cars;
    }
}