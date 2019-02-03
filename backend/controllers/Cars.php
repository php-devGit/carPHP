<?php
include_once './models/car.php';
include_once './models/image.php';
include_once './models/imageCar.php';

class Cars
{
    function getPage()
    {
        $car = new Car();
        $image = new Image();
        $imageCar = new ImageCar();

        $cars = $car->getCars();
        $images = $image->getImages();

        include(dirname(__FILE__) . '\..\views\cars.php');
    }
}