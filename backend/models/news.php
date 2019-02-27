<?php

include_once './models/image.php';

class NewsModel extends db
{
    function addNews($info, $imageName)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $fields = "(info, idImage)";
        $values = '("' . $info . '", ' . $imageName . ')';

        if (!($query = $conn->prepare("INSERT INTO `News` " . $fields . " VALUES " . $values))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->close();
    }

    function getNews()
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $image = new Image();

        $news = [];

        if (!($query = $conn->prepare("SELECT `id`,`info`,`idImage` FROM `News`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($id, $info, $idImage);

        while ($query->fetch()) {
            array_push($news,
                array(
                    'id' => $id,
                    'info' => $info,
                    'image' => $image->getImageById($idImage)
                )
            );
        }

        $query->close();
        return $news;
    }

    function getNewsById($id)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $image = new Image();

        $news = [];

        if (!($query = $conn->prepare("SELECT `info`,`idImage` FROM `News` where id = " . $id))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($info, $idImage);

        while ($query->fetch()) {
            array_push($news,
                array(
                    'info' => $info,
                    'image' => $image->getImageById($idImage)
                )
            );
        }

        $query->close();
        return $news;
    }
}