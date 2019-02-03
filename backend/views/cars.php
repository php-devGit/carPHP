<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Модельный ряд Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="section container pt-5 pb-2 pl-4">
    <div class="row pt-4">
        <div class="col-md-12 pb-2 pl-4">
            <div class="section-title">
                <h2>Модельный ряд</h2>
            </div>
        </div>
        <?php
        foreach ($cars as $car) {
            echo '<div class="col-md-4">';
            echo '<div class="post">';
            echo '<span class="post-img">';
            echo '<img src="./public/images/' . $image->getImageById($imageCar->getImageByCar($car["id"])) . '" alt="">';
            echo '</span>';
            echo '<div class="post-body">';
            echo '<div class="post-meta">';
            echo '<span class="post-category cat-4">' . $car["cost"] . ' EUR</span>';
            echo '</div>';
            echo '<h3 class="post-title">' . $car["mark"] . ' ' . $car["model"] . '</h3>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>