<?php

class db
{
    function connect()
    {
        $servername = "127.0.0.1";
        $username = "root@localhost";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
}