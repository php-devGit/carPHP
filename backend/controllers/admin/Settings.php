<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';

class Settings
{
    function getPage()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $admin = new Admin();
            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));

            include(dirname(__FILE__) . '\..\..\views\admin\settings.php');
        } else {
            header('Location: /admin/index');
        }
    }

    function updatePassword()
    {
        $admin = new Admin();
        $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));

        var_dump($adminData);

        $admin->changePassword($adminData->id, $_POST["password"]);
        header('Location: /admin/settings#?success=true');
    }
}