<div class="content">

            <h1><?=$h1?></h1>


            <p><?=$content?></p>

        <img src="/assets/images/clock.png"    height="24"> <?=$date?>
        <img src="/assets/images/eye.png"  height="24"><?=$counter?>
        <img src="/assets/images/microphone.png" height="22"><?=$com_count?>

    </div>




<div class="comments">
    <?=$comments?>
</div>
<div class="comments_add"><form role="form" class="form-horizontal" action="/add_comment" method="POST">
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-offset-3">
                <label form="text">Комментировать:</label></br><textarea name="text" rows="4" cols="40" id="text" ></textarea></div></div>
        <input type="hidden" name="page_id" value="<?=$id?>">
        <input type="hidden" name="user" value="<?=$user?>">
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-offset-3">
                <input class="btn btn-success" type="submit" value="Отправить"></div></div>
    </form>
</div>