<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-wrench pull-right"></i>
            <h4>Создать автомобиль</h4>
        </div>
    </div>
    <div class="panel-body">
        <form class="form form-vertical">
            <div class="control-group">
                <div class="controls">
                    <label for="name">Введите название</label>
                    <input type="text" class="form-control" id="name">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label for="body">Выберите тип кузова</label>
                    <select class="form-control" id="body">
                        <option>Универсал</option>
                        <option>Хечбек</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label for="cost">Введите начальную стоимость</label>
                    <input type="text" class="form-control" id="cost">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label for="discount">Введите величину скики (Если нет - то 0)</label>
                    <input type="text" class="form-control" id="discount">
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