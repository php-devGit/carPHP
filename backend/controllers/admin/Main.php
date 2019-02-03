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

    function generatorName()
    {
        $chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
        $max = 12;
        $size = StrLen($chars) - 1;
        $name = null;
        while ($max--) {
            $name .= $chars[rand(0, $size)];
        }
        return $name;
    }

    function uploadImage()
    {
        $image = new Image();

        foreach ($_FILES["image"]["name"] as $key => $name) {

            $newName = $this->generatorName() . ".jpg";
            $uploaddir = dirname(__FILE__) . '/../../views/public/images/';
            $uploadfile = $uploaddir . basename($newName);

            if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $uploadfile)) {
                $image->addImage(basename($newName));
                header('Location: /admin/main');
            }
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