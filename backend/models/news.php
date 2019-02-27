<?php

include_once './models/image.php';

class NewsModel extends db
{
    function addNews($title, $info, $imageName)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $fields = "(title, info, idImage)";
        $values = '("' . $title . '","' . $info . '", ' . $imageName . ')';

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

        if (!($query = $conn->prepare("SELECT `id`,`title`,`info`,`idImage` FROM `News`"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($id, $title, $info, $idImage);

        while ($query->fetch()) {
            array_push($news,
                array(
                    'id' => $id,
                    'info' => $info,
                    'title' => $title,
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

        if (!($query = $conn->prepare("SELECT `title`,`info`,`idImage` FROM `News` where id = " . $id))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($title, $info, $idImage);

        while ($query->fetch()) {
            array_push($news,
                array(
                    'title' => $title,
                    'info' => $info,
                    'image' => $image->getImageById($idImage)
                )
            );
        }

        $query->close();
        return $news;
    }
}