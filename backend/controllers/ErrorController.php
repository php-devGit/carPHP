<?php

// Методы get, чтобы разрешить инкапсуляцию
class ErrorController
{
    private $errorCode;
    private $errorDescription;

    function __construct($code, $description)
    {
        $this->errorCode = $code;
        $this->errorDescription = $description;
    }


    function getCodeError()
    {
        return $this->errorCode;
    }

    function getErrorDescription()
    {
        return $this->errorDescription;
    }
}

// Пробел, чтобы табулировать строку
function getPageNotFound()
{
    return new ErrorController(404, " " . "Страница не найдена!");

}

function getMethodNotFound()
{
    return new ErrorController(404, " " . "Вызов несуществующего действия!");
}