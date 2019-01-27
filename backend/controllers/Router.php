<?php
require_once 'ErrorController.php';

class Router
{

    static function start()
    {
        // Дефолтный контроолер, действие
        $controller_name = 'Main';
        $action_name = 'getPage';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // Если задан роутинг (/index) в URL, то присваиваем, иначе остаётся дефолтный, объявленный выше
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // Если задан активити в URL, то присваиваем, иначе остаётся дефолтный, объявленный выше
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // Формируем переменную с наименованием файла класса и путь к классу
        $controller_file = $controller_name . '.php';
        $controller_path = dirname(__FILE__)."\\".$controller_file;

        // Объект класса Error (вызванный из другого метода, в котором инициализуруются поля)
        $errorPageNotFound = getPageNotFound();
        $errorMethodNotFound = getMethodNotFound();

        // Если существует файл класса и метод для вызова, то вызываем метод отображения UI, иначе редирект с ошибкой на главную
        if (file_exists($controller_path)) {
            include $controller_path;
            $controller = new $controller_name;
            $action = $action_name;
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                Router::ErrorPage($errorMethodNotFound->getCodeError(), $errorMethodNotFound->getErrorDescription());
            }
        } else {
            Router::ErrorPage($errorPageNotFound->getCodeError(), $errorPageNotFound->getErrorDescription());
        }
    }

    static function ErrorPage($code, $description)
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 ' . $code . $description);
        header('Status: ' . $code . $description);
        header('Location:' . $host);
    }
}