<?php
include_once './models/order.php';
include_once './models/car.php';

class TestDrive
{
    function getPage()
    {
        $car = new Car();
        $cars = $car->getCars();
        include(dirname(__FILE__) . '\..\views\testdrive.php');
    }

    function createOrder()
    {
        if ($_POST["surname"] && $_POST["name"] && $_POST["dateTestDrive"] && $_POST["carId"]) {
            $order = new Order();
            $order->addOrder($_POST);
            header('Location: /main');
        } else {
            header('Location: /testdrive');
        }
    }
}