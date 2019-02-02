<?php

class db
{
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $database = "project";

    public function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($conn->connect_error) {
            return false;
        } else {
            return $conn;
        }
    }

}