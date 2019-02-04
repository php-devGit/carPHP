<?php

include_once './controllers/admin/index.php';
include_once './models/admin.php';
include_once './models/contents.php';

class Content
{
    function getPage()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $admin = new Admin();
            $content = new Contents();

            $adminData = json_decode($admin->findAdminByCookie($_COOKIE["code"]));
            $aboutContent = $content->getContent('About');
            $aboutMarksContent = $content->getContent('AboutMark');
            $textSlide = $content->getContent('Slide');
            $discount = $content->getContent('Discount');
            $news = $content->getContent('News');

            include(dirname(__FILE__) . '\..\..\views\admin\content.php');
        } else {
            header('Location: /admin/index');
        }
    }

    function updateAbout()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $content = new Contents();
            $content->updateOrInsert($_POST['about'], 'About');
            header('Location: /admin/content#?success=true');
        } else {
            header('Location: /admin/index');
        }
    }

    function updateSlide()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $content = new Contents();
            $content->updateOrInsert($_POST['textSlide'], 'Slide');
            header('Location: /admin/content#?success=true');
        } else {
            header('Location: /admin/index');
        }
    }

    function updateAboutMark()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $content = new Contents();
            $content->updateOrInsert($_POST['aboutMark'], 'AboutMark');
            header('Location: /admin/content#?success=true');
        } else {
            header('Location: /admin/index');
        }
    }

    function updateDiscount()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $content = new Contents();
            $content->updateOrInsert($_POST['discount'], 'Discount');
            header('Location: /admin/content#?success=true');
        } else {
            header('Location: /admin/index');
        }
    }

    function updateNews()
    {
        $indexPage = new Index();
        if ($indexPage->isAuth() != false) {
            $content = new Contents();
            $content->updateOrInsert($_POST['news'], 'News');
            header('Location: /admin/content#?success=true');
        } else {
            header('Location: /admin/index');
        }
    }
}