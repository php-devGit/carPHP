<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Панель управления</title>
    <?php include 'partial/header.php' ?>
</head>

<body>
<?php include 'partial/top-menu.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <?php include 'partial/left-menu.php'; ?>
        </div>
        <div class="col-sm-9">
            <form class="form form-vertical" method="post" action="/admin/content/updateAbout">
                <div class="control-group">
                    <label for="about">Об автосалоне:</label>
                    <textarea class="form-control" rows="5" name="about" id="about">
                        <?php echo $aboutContent; ?>
                    </textarea>
                </div>
                <div class="control-group">
                    <label></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Создать / Обновить</button>
                    </div>
                </div>
            </form>

            </br>

            <form class="form form-vertical" method="post" action="/admin/content/updateAboutMark">
                <div class="control-group">
                    <label for="aboutMark">О марках авто:</label>
                    <textarea class="form-control" rows="5" name="aboutMark" id="aboutMark">
                        <?php echo $aboutMarksContent; ?>
                    </textarea>
                </div>
                <div class="control-group">
                    <label></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Создать / Обновить</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
    </div>
</div>
</div>

<?php include 'partial/header.php'; ?>

</body>
</html>