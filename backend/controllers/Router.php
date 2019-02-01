<?php
require_once 'ErrorController.php';
require_once './models/connect.php';

class Router
{
    // Роутинг по средством выбора между ресурсами и контроллерами
    // Точка старта, в которую приходят все запросы
    static function requestHandler()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if ($routes[1] == "public") {
            self::sourceHandler($routes);
        } else {
            self::controllerHandler($routes);
        }
    }

    // Роутинг для получения стилей, JS-файлов, картинок (ресурсов)
    static function sourceHandler($routes)
    {
        $requestPath = '';
        $extFile = '';
        foreach ($routes as $value) {
            $requestPath .= '\\' . $value;
            switch ($value) {
                case 'css':
                    $extFile = 'css';
                    break;
                case 'js':
                    $extFile = 'js';
                    break;
                case 'images':
                    $extFile = 'image';
                    break;
            }
        }

        $sourcePath = dirname(__FILE__) . '\..' . '\views' . '\\' . $requestPath;
        if (file_exists($sourcePath)) {
            $file = file_get_contents($sourcePath);
            header('Content-Type: text/' . $extFile);
            echo $file;
        } else {
            echo '';
        }
    }

    static function getController($controller_path, $controller_name, $method_name)
    {
        // Объект класса Error
        $errorPageNotFound = getPageNotFound();
        $errorMethodNotFound = getMethodNotFound();

        // Если существует файл класса и метод для вызова, то вызываем метод отображения UI, иначе редирект с ошибкой на главную
        if (file_exists($controller_path)) {
            include $controller_path;
            $controller = new $controller_name;
            $method = $method_name;

            if (method_exists($controller, $method)) {
                $controller->$method();
            } else {
                Router::ErrorPage($errorMethodNotFound->getCodeError(), $errorMethodNotFound->getErrorDescription());
            }

        } else {
            Router::ErrorPage($errorPageNotFound->getCodeError(), $errorPageNotFound->getErrorDescription());
        }
    }

    static function getControllerName($routes, $index)
    {
        // Дефолтный контролер
        $controller_name = 'Main';
        // Если задан роутинг (/yourPage) в URL, то присваиваем, иначе остаётся дефолтный, объявленный выше
        if (!empty($routes[$index])) {
            $controller_name = $routes[$index];
        }
        return $controller_name;
    }

    static function getMethodName($routes, $index)
    {
        // Дефолтное активити
        $method_name = 'getPage';
        // Если задан активити в URL, то присваиваем, иначе остаётся дефолтный, объявленный выше
        if (!empty($routes[$index])) {
            $method_name = $routes[$index];
        }
        return $method_name;
    }

    static function controllerUserHandler($routes, $db)
    {
        $controller_name = self::getControllerName($routes, 1);
        $method_name = self::getMethodName($routes, 2);

        // Формируем переменную с наименованием файла класса и путь к классу
        $controller_file = $controller_name . '.php';
        $controller_path = dirname(__FILE__) . "\\" . $controller_file;

        // Если существует файл класса и метод для вызова, то вызываем метод отображения UI, иначе редирект с ошибкой на главную
        self::getController($controller_path, $controller_name, $method_name);
    }

    static function controllerAdminHandler($routes, $db)
    {
        $controller_name = self::getControllerName($routes, 2);
        $method_name = self::getMethodName($routes, 3);

        // Формируем переменную с наименованием файла класса и путь к классу
        $controller_file = $controller_name . '.php';
        $controller_path = dirname(__FILE__) . "\\" . 'admin\\' . $controller_file;

        // Если существует файл класса и метод для вызова, то вызываем метод отображения UI, иначе редирект с ошибкой на главную
        self::getController($controller_path, $controller_name, $method_name);
    }

    static function controllerHandler($routes)
    {
        $db = new db();
        $db->connect();

        if ($routes[1] == "admin") {
            self::controllerAdminHandler($routes, $db);
        } else {
            self::controllerUserHandler($routes, $db);
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