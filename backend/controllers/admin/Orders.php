<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';
include_once './models/order.php';

class Orders
{
    function getNameStatus($status)
    {
        switch ($status) {
            case 1:
                return 'Ожидает рассмотрения';
            case 2:
                return 'Принята';
            case 3:
                return 'Отказано';
            default:
                return 'Неизвестный статус';
        }
    }

    function getPage()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $admin = new Admin();
            $order = new Order();

            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));
            $ordersData = $order->getOrders();

            include(dirname(__FILE__) . '\..\..\views\admin\orders.php');
        } else {
            header('Location: /admin/index');
        }
    }

    function accept()
    {
        $indexPage = new Index();

        if ($indexPage->isAuth() != false) {
            $order = new Order();
            $order->updateOrderStatus($_GET["id"], 2);
            header('Location: /admin/orders');
        } else {
            header('Location: /admin/index');
        }
    }

    function forbid()
    {
        $indexPage = new Index();

        if ($indexPage->isAuth() != false) {
            $order = new Order();
            $order->updateOrderStatus($_GET["id"], 3);
            header('Location: /admin/orders');
        } else {
            header('Location: /admin/index');
        }
    }
}