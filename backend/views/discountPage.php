<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Акция от Starcars</title>
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
                    <h2>Акция №<?php echo $_GET["id"] ?> </h2>
                </div>

                <?php
                $newCost = $carInfo[0]["cost"] - $carInfo[0]["cost"] * $discountInfo[0]["discount"] / 100;

                echo '<div class="col-md-12"><div class="post post-thumb">';
                echo '<a class="post-img" href="#">';
                echo '<img src="./../public/images/' . $discountInfo[0]["image"] . '" alt="">';
                echo '</a>';
                echo '<div class="post-body">';
                echo '<div class="post-area">';
                echo '<div class="post-meta">';
                echo '<a class="post-category cat-5 old-cost" href="#">' . $carInfo[0]["cost"] . ' EUR.</a>';
                echo '<span class="post-date">' . $newCost . ' EUR. (<i>' . $discountInfo[0]["discount"] . '%</i>)</span>';
                echo '</div>';
                echo '<h3 class="post-title">' . $carInfo[0]["mark"] . ' ' . $carInfo[0]["model"] . '</h3>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                ?>

                <div class="clearfix visible-md visible-lg"></div>
            </div>
        </div>
    </div>
</div>

<script src="./../public/js/script.js"></script>

</body>
</html>