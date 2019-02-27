<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости и акции Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPage();">

<?php include 'partial/menu.php' ?>

<div class="section container pt-5 pb-2 pl-4">
    <div class="row pt-4">
        <div class="col-md-7">
            <!--?php echo $news; ?-->
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="section-title">
                    <h2>Акции</h2>
                </div>
                <?php
                foreach ($discounts as $key => $discount) {
                    $carInfo = $car->getCarById($discount["idCar"]);
                    $newCost = $carInfo[0]["cost"] - $carInfo[0]["cost"] * $discount["discount"] / 100;

                    echo $key == 0 ? '<div class="col-md-12"><div class="post post-thumb">' : '<div class="post post-thumb"><div class="post">';
                    echo '<a class="post-img" href="/news/getDiscountPage?id=' . $discount["id"] . '">';
                    echo '<img src="./public/images/' . $discount["image"] . '" alt="">';
                    echo '</a>';
                    echo '<div class="post-body">';
                    echo '<div class="post-area">';
                    echo '<div class="post-meta">';
                    echo '<a class="post-category cat-5 old-cost" href="#">' . $carInfo[0]["cost"] . ' EUR.</a>';
                    echo '<span class="post-date">' . $newCost . ' EUR. (<i>' . $discount["discount"] . '%</i>)</span>';
                    echo '</div>';
                    echo '<h3 class="post-title">' . $carInfo[0]["mark"] . ' ' . $carInfo[0]["model"] . '</h3>';
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

<?php include 'partial/footer.php'; ?>

</body>
</html>