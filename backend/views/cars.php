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
            echo '<div class="modal fade" id="modal' . $car["id"] . '" tabindex="-1" role="dialog" aria-hidden="true">';
            echo '<div class="modal-dialog" role="document">';
            echo '<div class="modal-content">';
            echo '<div class="modal-header" >';
            echo '<h5>' . $car["mark"] . ' ' . $car["model"] . '</h5>';
            echo '<button type = "button" class="close" data-dismiss="modal" aria-label = "Close">';
            echo '<span aria-hidden = "true" >&times;</span>';
            echo '</button>';
            echo '</div>';
            echo '<div class="modal-body">';

            echo '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">';
            echo '<div class="carousel-inner">';

            $imagesCar = $imageCar->getImagesCar($car["id"]);

            foreach ($imagesCar as $key => $imageId) {
                if ($key == 0) echo '<div class="carousel-item active">';
                if ($key != 0) echo '<div class="carousel-item">';
                echo '<img class="d-block w-100" src="./public/images/' . $image->getImageById($imageId) . '">';
                echo '</div>';
            }

            echo '</div>';
            echo '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">';
            echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
            echo '<span class="sr-only">Назад</span>';
            echo '</a>';
            echo '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">';
            echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            echo '<span class="sr-only">Далее</span>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="col-md-4">';
            echo '<div class="post">';
            echo '<a data-toggle="modal" data-target="#modal' . $car["id"] . '" href="#">';
            echo '<span class="post-img">';
            echo '<img src="./public/images/' . $image->getImageById($imagesCar[0]) . '" alt="">';
            echo '</span>';
            echo '</a>';
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