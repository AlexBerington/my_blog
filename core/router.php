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
         if($path_parts[0]=='admin'&&session::get('user')=='Admin'){
             $this->admin_route($path_parts);
         }
         if($path_parts[0]){
             $this->action = $path_parts[0];}
         if($path_parts[1]){
             $this->params = $path_parts[1];}
         $this->get_routs();
     }
     function admin_route($path_parts){
         $this->funcs_prefix = 'admin_';

         if($path_parts[1]){
             $this->action = $path_parts[1];}
         if($path_parts[2]){
             $this->params = $path_parts[2];}

         $this->get_routs();
     }


     function get_routs()
     {
         $action = $this->funcs_prefix . $this->action;
         if (method_exists($this, $action)) {
             $this->$action($this->params);
         } else {
        die();
         };



         }
}


