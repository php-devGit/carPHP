<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';
include_once './models/car.php';
include_once './models/mark.php';

class Main
{
    function getPage()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {

            $admin = new Admin();
            $car = new Car();
            $mark = new Mark();

            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));
            $bodies = $car->getBodies();
            $marks = $mark->getMarks();

            include(dirname(__FILE__) . '\..\..\views\admin\main.php');
        } else {
            header('Location: /admin/index');
        }
    }

    function createBody()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $car = new Car();
            $car->addBody($_POST["name"]);
            header('Location: /admin/main');
        } else {
            header('Location: /admin/index');
        }
    }

    function createMark()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $mark = new Mark();
            $mark->addBody($_POST["name"]);
            header('Location: /admin/main');
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