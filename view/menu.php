<?php

if(session::has('user')){
    $userpanel = '<div><ul><li>Hello,'. session::get('user').'!</li>
      <li><a class="btn btn-success" href="controllers/logout.php" > Logout </a></li>';
    if(session::get('user')=="Admin"){
        $userpanel .= '<li><a class="btn bg-warning" href="?temp=adminpanel">Admin Panel</a></li>';
        $userpanel .= '</ul></div>';
    }
}else{

    $userpanel =  '
    <form role="form" action="controllers/login.php" method="POST">
    <div class="form-group">
       <label class="col-sm-offset-1 control-label" for="login">Логин</label><input type="text" name="username" size="8" id="login" placeholder="Логин">
    <label class="control-label" for="pass">Логин</label><input type="password" name="pass" size="8" id="pass" placeholder="Пароль">
    <input type="submit" value="Войти" class="btn btn-success">
    <a class="btn btn-primary" href="/?temp=reg"> Регистрация</a>
    </div>
    </form>
</div>';
    }
?>

