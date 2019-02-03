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

            // Отправка письма реализована, но в связи с отсутствием SMTP на локальном компьютере нет возможности его использовать
            // на любом сервере такая возможность должна быть и код будет исполняться
            // Ошибки нет, просто есть предупреждение, что письмо не отправлено
            $email = "forsocials@mail.ru";
            $message = "Заявка на тест драйв, от: " . $_POST["surname"] . ' ' . $_POST["name"] . '. На: ' . $_POST["dateTestDrive"];
            $subject = "Заявка на тест-драйв!";
            mail($email, $subject, $message);
            $order->addOrder($_POST);
            header('Location: /main');
        } else {
            header('Location: /testdrive');
        }
    }
}