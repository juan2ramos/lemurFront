<?php

date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


try{
    $urlVista = ROOT . 'views' . DS;
    $fileName =isset($_GET['url'])?$urlVista . $_GET['url'] . '.php':$urlVista . 'categorias.php';
    
    if(is_readable($fileName)){
        $title = $_GET['url'];
        require_once ROOT . 'layout' .DS . 'default.php';               
    }else {
        throw new Exception("Error 404 pagina no existe: ". $_GET['url'] , 1);         
    }    
}
catch(Exception $e){
    echo $e->getMessage();  
}