<?php

//Writing a class for load the template
class load {
    public static function template($template){
        include $_SERVER['DOCUMENT_ROOT'].'/sql-1/templates/'.$template.'.php';
    }
}
    
?>