<?php
session_start();

function __autoload($class_name){
    $core_path = 'core/'.$class_name.'.php';
    $controllers_path = 'controllers/'.$class_name.'.php';
    $models_path = 'models/'.$class_name.'.php';

    if(file_exists($core_path)){
        include ($core_path);
    }elseif(file_exists($controllers_path)){
        include ($controllers_path);
    }elseif(file_exists($models_path)){
        include ($models_path);}else{
        throw new Exception("Failed to load class");}
}
$routing = new router();



