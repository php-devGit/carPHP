<?php

include_once './models/contents.php';

class Main
{
    function getPage()
    {
        $content = new Contents();
        $textSlide = $content->getContent('Slide');
        include(dirname(__FILE__) . '\..\views\main.php');
    }
}