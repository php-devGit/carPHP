<?php
include_once './models/admin.php';
include_once './controllers/admin/Main.php';

class Index
{
    function getPage()
    {
        if (!$this->isAuth()) {
            include(dirname(__FILE__) . '\..\..\views\admin\index.php');
        } else {
            header('Location: /admin/main');
            die();
        }
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

    function isAuth()
    {
        if (!isset($_COOKIE["code"])) {
            return false;
        } else {
            $admin = new Admin();
            $adminData = $admin->findAdminByCookie($_COOKIE["code"]);

            if (!$adminData) {
                return false;
            }
            return true;
        }
    }
}