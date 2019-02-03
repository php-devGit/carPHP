<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';
include_once './models/order.php';

class Orders
{
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
}