<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Загрузить изображение</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/uploadImage" enctype="multipart/form-data">
            <div class="control-group">
                <label>Выберите изображение</label>
                <div class="controls">
                    <input type="file" class="form-control" name="image" id="image" multiple>
                </div>
            </div>
            <div class="control-group">
                <label></label>
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </div>
        </form>
    </div>
</div>