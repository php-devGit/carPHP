<?php
include_once './models/admin.php';
include_once './controllers/admin/Main.php';

class Index
{
    function getPage()
    {
        include(dirname(__FILE__) . '\..\..\views\admin\index.php');
    }

    function auth()
    {
        $db = new Admin();
        $isAdmin = $db->isAdmin($_POST['email'], $_POST['password']);
        if ($isAdmin == true) {
            $db->setCookieAdmin($_POST['email']);
            header('Location: /admin/main');
            die();
        } else {
            header('Location: /admin/index');
            die();
        }
    }
}