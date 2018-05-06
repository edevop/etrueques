<?php

require_once('Routes.php');

# loading classes from classes directory to our index
function __autoload($class_name) {
    if ( file_exists('./classes/'.$class_name.'.php') ):
        require_once './classes/'.$class_name.'.php';
    elseif ( file_exists('./controllers/'.$class_name.'.php') ):
        require_once './controllers/'.$class_name.'.php';
    endif;
}

?>