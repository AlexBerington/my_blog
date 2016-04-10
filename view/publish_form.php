<form class="col-lg-6 col-lg-offset-2" role="form" action="<?=$action?>" method="POST">
    <input type="text" value="<?=$id?>" name="id" hidden> <input type="text" value="<?=$id?>" name="id" hidden>
    <div class="form-group">
        <label for="title">Название страницы</label>
        <input class="form-control" type="text" name="title" id="title" value="<?=$title?>"></div>

    <div class="form-group">
        <label  for="meta_d">META описание</label>
        <input  class="form-control" type="text" name="meta_d" id="meta_d" value="<?=$meta_d?>"></div>


    <div class="form-group"><label for="h1">Название</label>
        <input id="h1" class="form-control" type="text" name="h1" value="<?=$h1?>"></div>

        <div class="form-group"><label >Полный текст</label>
            <textarea class="form-control" name="content" cols="90" rows="15">
                <?=$content?></textarea></div>

        <div class="form-group"><label >Ключевые слова</label>
            <input class="form-control" type="text" name="meta_k" value="<?=$meta_k?>"></div>

    <div class="form-group"><label >Опубликовать?</label>
        <select class="form-control" name="publish" size="1">
             <option value="Y" selected>Да</option>
            <option value="N">Нет</option>
            </select>
    </div>

    <div class="form-group"><label >Дата добавления</label>
        <input class="form-control" type="text" name="date" size="1" value="<?=$date?>"></div>

    <input class="btn btn-success col-lg-offset-5 col-xs-offset-4" type="submit" value="Сохранить">

</form>

