<?php

class News
{
    function getPage()
    {
        include(dirname(__FILE__) . '\..\views\news.php');
    }
}