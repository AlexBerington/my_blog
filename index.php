<?php
session_start();

function __autoload($class_name){
    $class_path = 'classes/'.$class_name.'.php';
    $controllers_path = 'controllers/'.$class_name.'.php';
    $models_path = 'models/'.$class_name.'.php';

    if(file_exists($class_path)){
        require_once ($class_path);
    }elseif(file_exists($controllers_path)){
        require_once ($controllers_path);
    }elseif(file_exists($models_path)){
        require_once ($models_path);}else{
        throw new Exception("Failed to load class");}
}

$routing = new router();
/*
*/


