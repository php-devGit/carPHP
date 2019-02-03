<!DOCTYPE html>
<html lang="ru">
<head>
    <title>История компании Starcars</title>
    <?php include 'partial/header.php' ?>
</head>
<body id="page-top" onload="loadPageAnchor();">

<?php include 'partial/menu.php' ?>

<div class="container pt-5">
    <div id="about-me" class="section pt-4">
        <div class="section-title">
            <h2>Об автосалоне</h2>
            <?php echo $aboutContent; ?>
        </div>
    </div>

    <div id="about-car" class="section pt-2 pb-4">
        <div class="section-title">
            <h2>О марках авто</h2>
            <?php echo $aboutMarksContent; ?>
        </div>
    </div>
</div>

<?php include 'partial/footer.php'; ?>

</body>
</html>