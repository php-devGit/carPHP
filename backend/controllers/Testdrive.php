<?php
include_once './models/order.php';
include_once './models/car.php';

include './controllers/Email.php';

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
            $email = new Email();
            $order = new Order();

            $message = "Заявка на тест драйв, от: <b>" . $_POST["surname"] . ' ' . $_POST["name"] . '</b>. На: ' . $_POST["dateTestDrive"];
            $subject = "Заявка на тест-драйв!";

            $email->sendMail($message, $subject);

            $order->addOrder($_POST);
            header('Location: /testdrive#?success=true');
        } else {
            header('Location: /testdrive#?success=false');
        }
    }
}