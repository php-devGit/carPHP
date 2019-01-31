<?php

require_once 'ErrorController.php';

class Router
{

    // Роутинг по средством выбора между ресурсами и контроллерами
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

    static function controllerUserHandler($routes)
    {
        // Дефолтный контроолер, действие
        $controller_name = 'Main';
        $action_name = 'getPage';

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
        $controller_path = dirname(__FILE__) . "\\" . $controller_file;

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

    static function controllerAdminHandler($routes)
    {
        $controller_name = 'Main';
        $action_name = 'getPage';

        if (!empty($routes[2])) {
            $controller_name = $routes[2];
        }

        // Если задан активити в URL, то присваиваем, иначе остаётся дефолтный, объявленный выше
        if (!empty($routes[3])) {
            $action_name = $routes[3];
        }

        // Формируем переменную с наименованием файла класса и путь к классу
        $controller_file = $controller_name . '.php';
        $controller_path = dirname(__FILE__) . "\\" . 'admin\\' . $controller_file;

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

    static function controllerHandler($routes)
    {
        if ($routes[1] == "admin") {
            self::controllerAdminHandler($routes);
        } else {
            self::controllerUserHandler($routes);
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