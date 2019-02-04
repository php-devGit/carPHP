<form class="form form-vertical" method="post" action="/admin/content/updateAbout">
    <div class="control-group">
        <label for="about">Об автосалоне:</label>
        <textarea class="form-control" rows="7" name="about" id="about">
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

<br/>
<form class="form form-vertical" method="post" action="/admin/content/updateAboutMark">
    <div class="control-group">
        <label for="aboutMark">О марках авто:</label>
        <textarea class="form-control" rows="7" name="aboutMark"
                  id="aboutMark"><?php echo $aboutMarksContent; ?>
		</textarea>
    </div>
    <div class="control-group">
        <label></label>
        <div class="controls">
            <button type="submit" class="btn btn-primary">Создать / Обновить</button>
        </div>
    </div>
</form>

<br/>
<form class="form form-vertical" method="post" action="/admin/content/updateSlide">
    <div class="control-group">
        <label for="aboutMark">Главная страница:</label>
        <textarea class="form-control" rows="5" name="textSlide" id="textSlide">
			<?php echo $textSlide; ?>
		</textarea>
    </div>
    <div class="control-group">
        <label></label>
        <div class="controls">
            <button type="submit" class="btn btn-primary">Создать / Обновить</button>
        </div>
    </div>
</form>

<br/>
<form class="form form-vertical" method="post" action="/admin/content/updateDiscount">
    <div class="control-group">
        <label for="aboutMark">Акции:</label>
        <textarea class="form-control" rows="5" name="discount" id="discount">
			<?php echo $discount; ?>
		</textarea>
    </div>
    <div class="control-group">
        <label></label>
        <div class="controls">
            <button type="submit" class="btn btn-primary">Создать / Обновить</button>
        </div>
    </div>
</form>

<br/>
<form class="form form-vertical" method="post" action="/admin/content/updateNews">
    <div class="control-group">
        <label for="aboutMark">Новости:</label>
        <textarea class="form-control" rows="5" name="news" id="news">
			<?php echo $news; ?>
		</textarea>
    </div>
    <div class="control-group">
        <label></label>
        <div class="controls">
            <button type="submit" class="btn btn-primary">Создать / Обновить</button>
        </div>
    </div>
</form>