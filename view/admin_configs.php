<div class="col-lg-3 col-xs-12 col-sm-3 ">
    <hr>
    <b>База данных</b>
    <form role="form" action="/admin/saveconf1" method="POST">
        <div class="form-group">
            <label for="host">Хост:</label>
            <input type="text" id="host" class="form-control" name="host">
        </div>
        <div class="form-group">
            <label for="user">Пользователь:</label>
            <input type="text" id="user" class="form-control" name="user">
        </div>
        <div class="form-group">
            <label for="pwd">Пароль:</label>
            <input type="text" id="pwd" class="form-control" name="pwd">
        </div>
        <div class="form-group" >
            <label for="db">Название:</label>
            <input type="text" id="db" class="form-control" name="db">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-sm-offset-4" value="Сохранить">
        </div>
    </form>
    <hr>
</div>
<div class="col-lg-3 col-xs-12 col-sm-2">
    <hr>
    <form role="form" action="/admin/saveconf2" method="POST">
        <div class="form-group">
            <label for="posts">Записей странице</label>
            <select id="posts" class="form-control" name="posts">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить">
        </div>
    </form>
</div>
<div class="col-lg-3 col-xs-12 col-sm-3">
    <hr>
    <form role="form" action="/admin/saveconf3" method="POST">
        <div class="checkbox">
            <b>Включить комментарии?</b><br>
            <label><input type="checkbox" value="1" name="commentsOn" checked>Да</label>
            <label><input type="checkbox" value="0" name="commentsOff">Нет</label>
        </div>
        <input type="submit" value="Сохранить" class="btn btn-success">
    </form>
</div>
