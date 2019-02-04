<?php

include_once './models/contents.php';


class News
{
    function getPage()
    {
        $content = new Contents();
        $discount = $content->getContent('Discount');
        $news = $content->getContent('News');
        include(dirname(__FILE__) . '\..\views\news.php');
    }
}