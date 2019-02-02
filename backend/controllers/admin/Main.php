<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';

class Main
{
    function getPage()
    {
        $indexPage = new Index();
        if ($adminData = $indexPage->isAuth() != false) {
            $adminData = json_decode($indexPage->isAuth());
            include(dirname(__FILE__) . '\..\..\views\admin\main.php');
        } else {
            header('Location: /admin/index');
        }
    }

    function logout()
    {
        setcookie("code", '', time() - 100, '/');
        header('Location: /admin/index');
    }
}