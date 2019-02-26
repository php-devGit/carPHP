<?php

include_once './controllers/admin/index.php';
include_once './models/discount.php';
include_once './models/admin.php';

class DiscountsNews
{
    function getPage()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $admin = new Admin();
            $car = new Car();
            $image = new Image();

            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));
            $bodies = $car->getBodies();
            $marks = $car->getMarks();
            $cars = $car->getCars();
            $images = $image->getImages();

            include(dirname(__FILE__) . '\..\..\views\admin\discountsNews.php');
        } else {
            header('Location: /admin/index');
        }
    }

    function addDiscounts()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $discounts = new Discount();
            $discounts->addDiscount($_POST["discount"], $_POST["car"]);
            header('Location: /admin/main');
        } else {
            header('Location: /admin/index');
        }
    }
}