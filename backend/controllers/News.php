<?php

include_once './models/car.php';
include_once './models/discount.php';

class News
{
    function getPage()
    {
        $car = new Car();
        $discount = new Discount();
        $discounts = $discount->getDiscounts();

        include(dirname(__FILE__) . '\..\views\news.php');
    }

    function getNewsPage()
    {

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