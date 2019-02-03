<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';
include_once './models/car.php';
include_once './models/image.php';
include_once './models/imageCar.php';

class Main
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
            $car = new Car();
            $car->addMark($_POST["name"]);
            header('Location: /admin/main');
        } else {
            header('Location: /admin/index');
        }
    }

    function createCar()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $car = new Car();
            $car->addCar($_POST);
            header('Location: /admin/main');
        } else {
            header('Location: /admin/index');
        }
    }

    function uploadImage()
    {
        $image = new Image();
        $image->addImage(basename($_FILES['image']['name']));

        $uploaddir = dirname(__FILE__) . '/../../views/public/images/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            header('Location: /admin/main');
        } else {
            var_dump($_FILES);
        }

    }

    function attachImageCar()
    {
        $imageCar = new ImageCar();
        $imageCar->addImageCar($_POST["car"], $_POST["image"]);
    }

    function logout()
    {
        setcookie("code", '', time() - 100, '/');
        header('Location: /admin/index');
    }
}