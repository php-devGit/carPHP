<?php

include_once './models/car.php';
include_once './models/discount.php';
include_once './models/news.php';

class News
{
    function getPage()
    {
        $car = new Car();
        $discount = new Discount();
        $news = new NewsModel();

        $newsInfo = $news->getNews();
        $discountsInfo = $discount->getDiscounts();

        include(dirname(__FILE__) . '\..\views\news.php');
    }

    function getNewsPage()
    {
        if (isset($_GET["id"])) {
            $news = new NewsModel();
            $newsInfo = $news->getNewsById($_GET["id"]);

            include(dirname(__FILE__) . '\..\views\newsPage.php');
        } else {
            header("Location: /");
        }
    }

    function getDiscountPage()
    {
        if (isset($_GET["id"])) {
            $car = new Car();
            $discount = new Discount();

            $discountInfo = $discount->getDiscount($_GET["id"]);
            $carInfo = $car->getCarById($discountInfo[0]["idCar"]);

            include(dirname(__FILE__) . '\..\views\discountPage.php');
        } else {
            header("Location: /");
        }
    }
}