<?php

include_once './controllers/admin/index.php';
include_once './models/discount.php';
include_once './models/news.php';
include_once './models/admin.php';

class DiscountsNews
{
    function getPage()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $car = new Car();
            $admin = new Admin();
            $image = new Image();

            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));

            $cars = $car->getCars();
            $marks = $car->getMarks();
            $bodies = $car->getBodies();
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

            header('Location: /admin/main#success=true');
        } else {
            header('Location: /admin/index');
        }
    }

    function addNews()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $news = new NewsModel();
            $news->addNews($_POST["title"], $_POST["info"], $_POST["image"]);

            header('Location: /admin/main#success=true');
        } else {
            header('Location: /admin/index');
        }
    }
}