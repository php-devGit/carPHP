<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';

class Accounts
{
    function getPage()
    {
        $indexPage = new Index();

        if ($indexPage->isAuth() != false) {
            $admin = new Admin();
            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));
            if ($adminData->dostup == 4) {
                include(dirname(__FILE__) . '\..\..\views\admin\accounts.php');
            } else {
                header('Location: /admin/main');
            }
        } else {
            header('Location: /admin/index');
        }
    }
}