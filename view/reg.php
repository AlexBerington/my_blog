<?php
$title = 'Регистрация';
$all_content = '<form class="form-horizontal" action="controllers/reg.php" method="POST">
<div class="form-group">
<div class="col-xs-2 col-sm-6">
    <label for="login" class="col-sm-3 control-label"> Логин</label> <input type="text" name="login"></div></div>
    <div class="form-group">
    <div class="col-xs-2 col-sm-6">
    <label for="email" class="col-sm-3 control-label"> Электронная почта </label><input type="email" name="email" id="email"></div></div>
<div class="form-group">
<div class="col-xs-2 col-sm-6">
<label for="pass" class="col-sm-3 control-label">Пароль </label><input type="password" name="pwd" id="pass"></div></div>
<div class="form-group">
<div class="col-xs-2 col-sm-6">
<label for="c_pass" class="col-sm-3 control-label">Подтверждение</label> <input type="password" name="c_pwd" id="c_pass"></div></div>
<div class="form-group">
  <div class="col-xs-1 col-sm-offset-1">
<input class="btn btn-success" type="submit" value="Зарегистрироваться"></div></div></form>';
