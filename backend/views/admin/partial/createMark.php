<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Создать марку автомобиля</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical" method="post" action="/admin/main/createMark">
            <div class="control-group">
                <label>Марка автомобиля</label>
                <div class="controls">
                    <input type="text" class="form-control" placeholder="Введите название"
                           name="name" id="name">
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