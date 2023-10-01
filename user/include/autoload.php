<?php
include 'config/security.php';
spl_autoload_register('myAutoload');
function myAutoload($classname){
    $path = "config/";
    $extension = ".config.php";
    $fullpath = $path.$classname.$extension;
    
    if(!file_exists($fullpath)){
        return false;
    }
    
    include_once $fullpath;
}?>