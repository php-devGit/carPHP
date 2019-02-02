<?php

class Admin extends db
{
    function isAdmin($email, $password)
    {
        $conn = $this->connect();
        $query = $conn->prepare("SELECT * FROM `ADMIN` WHERE email = '" . $email . "' AND password = '" . $password . "' AND dostup > 0");
        $query->execute();
        $query->store_result();
        $rows = $query->num_rows;
        $query->close();

        return $rows === 1 ? true : false;
    }

    function findAdminById($adminId)
    {
        $conn = $this->connect();
        $conn->set_charset('utf8');

        if (!($query = $conn->prepare("SELECT `surname`,`name`,`patr`,`email`,`dostup` FROM `ADMIN` WHERE id = " . $adminId))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->store_result();
        $query->bind_result($surname, $name, $patr, $email, $dostup);

        while ($query->fetch()) {
        }

        $object = array('surname' => $surname, 'name' => $name, 'patr' => $patr, 'email' => $email, 'dostup' => $dostup);
        return json_encode($object);
    }

    function findAdminByCookie($cookie)
    {
        $adminId = null;
        $adminData = null;

        $conn = $this->connect();
        if (!($query = $conn->prepare("SELECT (adminId) FROM `auth` WHERE cookie = '" . $cookie . "'"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->store_result();
        $query->bind_result($adminId);

        while ($query->fetch()) {
            $adminData = $this->findAdminById($adminId);
        }

        $query->close();
        return $adminData;
    }

    function isAdminCookie($adminId)
    {
        $conn = $this->connect();
        if (!($query = $conn->prepare("SELECT * FROM `auth` WHERE adminId = '" . $adminId . "'"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }

        $query->execute();
        $query->store_result();
        $query->close();
        return $query->num_rows;
    }

    function deleteAdminCookie($adminId)
    {
        $conn = $this->connect();
        if (!($query = $conn->prepare("DELETE FROM `auth` WHERE adminId = " . $adminId))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function addAdminCookie($adminId, $hash)
    {
        $conn = $this->connect();
        if (!($query = $conn->prepare("INSERT INTO `auth` (adminId,cookie) VALUES (" . $adminId . ",'" . $hash . "')"))) {
            echo "Не удалось подготовить запрос: (" . $conn->errno . ") " . $conn->error;
        }
        $query->execute();
        $query->close();
    }

    function manageCookieAdmin($hash, $adminId)
    {
        // Если была задана кука в БД для данного админа - удаляем
        if ($this->isAdminCookie($adminId) == 0) {
            $this->addAdminCookie($adminId, $hash);
        } else {
            $this->deleteAdminCookie($adminId);
            $this->addAdminCookie($adminId, $hash);
        }
    }

    function setCookieAdmin($email)
    {
        $conn = $this->connect();
        $query = $conn->prepare("SELECT id FROM `ADMIN` WHERE email = '" . $email . "'");
        $query->execute();
        $adminId = null;

        $query->bind_result($adminId);
        $hash = md5(date('Y-m-d H:i:s'));

        while ($query->fetch()) {
            setcookie("code", $hash, time() + 36000, '/');
        }
        $this->manageCookieAdmin($hash, $adminId);
        $query->close();
    }
}