<?php

if(session::has('user')){
    $userpanel = '';
    if(session::get('user')=="Admin"){
        $userpanel .= '';
        $userpanel .= '</ul></div>';
    }
}else{

    $userpanel =  '
   ';
    }
?>

