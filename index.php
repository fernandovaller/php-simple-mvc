<?php

include 'Routes.php';

//Autoload das class
function __autoload($class_name) {
    //Class
    if ( file_exists('class/' . $class_name . '.php') ) {
        require_once 'class/' . $class_name . '.php';

    //Class Controllers
    } elseif ( file_exists('Controllers/' . $class_name . '.php') ){
        require_once 'Controllers/' . $class_name . '.php';
    }
}
