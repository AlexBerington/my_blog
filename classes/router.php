<?php

 class router extends RouterController
 {
     private $funcs_prefix = 'action_';
     private $action = 'home';
     private $params;
     private $routs;
     private $url;

     function __construct()
     {
         $this->url = $_SERVER['REQUEST_URI'];
         $this->url = urldecode(trim($this->url, '/'));
         $path_parts = explode('/', $this->url);
         if($path_parts[0]){
         $this->action = $path_parts[0];}
         if($path_parts[1]){
         $this->params = $path_parts[1];}
         $this->get_routs();
     }


     function get_routs()
     {
         $action = $this->funcs_prefix . $this->action;
         if (method_exists($this, $action)) {
             $this->$action($this->params);
         } else {
             die('Возникла ошибка, ваш запрос не верен!');
         };



         }
}


