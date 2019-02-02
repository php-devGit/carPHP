<?php

include_once './models/admin.php';

class Main
{
    function getPage()
    {
        if (!$_COOKIE["code"]) {
            header('Location: /admin/index');
            die();
        } else {
            $db = new Admin();
            $adminData = $db->findAdminByCookie($_COOKIE["code"]);
            if ($adminData) {
                $adminData = json_decode($adminData);
                include(dirname(__FILE__) . '\..\..\views\admin\main.php');
            } else {
                header('Location: /admin/index');
            }
        }
    }

    function logout()
    {
        setcookie("code", '', time() - 100, '/');
        header('Location: /admin/index');
    }
}