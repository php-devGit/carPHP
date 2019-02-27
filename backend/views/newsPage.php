<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости от Starcars</title>
    <link href="./../public/css/style.css" rel="stylesheet" type="text/css">
    <link href="./../public/css/lib/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./../public/css/lib/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
    <link href="./../public/css/lib/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="./../public/js/lib/jquery-3.3.1.slim.min.js"></script>
    <script src="./../public/js/lib/popper.min.js"></script>
    <script src="./../public/js/lib/bootstrap.js"></script>
    <script src="./../public/js/lib/bootstrap-datetimepicker.js"></script>

</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="section container pt-5 pb-2 pl-4">
    <div class="row pt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="section-title">
                    <h2>Новость №<?php echo $_GET["id"] ?> </h2>
                </div>

                <?php
                foreach ($newsInfo as $key => $info) {
                    echo '<div class="col-md-12"><div class="post post-thumb">';
                    echo '<a class="post-img" href="#">';
                    echo '<img src="./../public/images/' . $info["image"] . '" alt="">';
                    echo '</a>';
                    echo '<div class="post-body">';
                    echo '<div class="post-area">';
                    echo '<h3 class="post-title">' . $info["title"] . '</h3>';
                    echo '<p class="post-text">' . $info["info"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                <div class="clearfix visible-md visible-lg"></div>
            </div>
        </div>
    </div>
</div>

<script src="./../public/js/script.js"></script>

</body>
</html>