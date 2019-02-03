<?php

class Contents extends db
{
    function addContent($content, $page)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');
        $content = $conn->real_escape_string($content);

        $values = '("' . $content . '", "' . $page . '")';

        if (!($query = $conn->prepare('INSERT INTO `content`(content, page) VALUES ' . $values))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function getContent($page)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("SELECT (content) FROM `content` WHERE page in ('" . $page . "')"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->bind_result($dbcontent);
        $content = '';

        while ($query->fetch()) {
            $content = $dbcontent;
        }

        return $content;
    }

    function updateOrInsert($content, $page)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("SELECT (id) FROM `content` WHERE page in ('" . $page . "')"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();

        if (mysqli_num_rows($query->get_result()) == 0) {
            $this->addContent($content, $page);
        } else {
            $this->updateContent($content, $page);
        }
    }

    function updateContent($content, $page)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        $content = $conn->real_escape_string($content);
        if (!($query = $conn->prepare('UPDATE `content` SET content = "' . $content . '" WHERE page = "' . $page . '"'))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }
}