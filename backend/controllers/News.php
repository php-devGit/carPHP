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

    }
}