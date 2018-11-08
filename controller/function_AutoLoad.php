<?php
spl_autoload_register(function($class_name){
    
    $nomFile="class_".$class_name.".php";
    $arxiuPersistence="./model/Persistence/".$nomFile;
    $arxiuBusiness="./model/business/".$nomFile;

    if(file_exists($arxiuPersistence)){
        require_once $arxiuPersistence;
    }
    elseif(file_exists(".".$arxiuPersistence)){
           require_once ".".$arxiuPersistence;
    }
    elseif(file_exists($arxiuBusiness)){
           require_once $arxiuBusiness;
    }
    elseif(file_exists(".".$arxiuBusiness)){
           require_once ".".$arxiuBusiness;
    }

});
?>
