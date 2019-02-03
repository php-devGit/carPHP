<?php

include_once './models/contents.php';

class History
{
    function getPage()
    {
        $content = new Contents();
        $aboutContent = $content->getContent('About');
        $aboutMarksContent = $content->getContent('AboutMark');

        include(dirname(__FILE__) . '\..\views\history.php');
    }
}