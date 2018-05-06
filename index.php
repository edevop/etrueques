<?php

require_once('Routes.php');

# loading classes from classes directory to our index
/**
 * 
 *  @__autoload function
 *  @check if the consulted class exist
 *  @check if the controller for the class exist
 * 
 */
function __autoload($class_name) {
    if ( file_exists('./classes/'.$class_name.'.php') ):
        require_once './classes/'.$class_name.'.php';
    elseif ( file_exists('./controllers/'.$class_name.'.php') ):
        require_once './controllers/'.$class_name.'.php';
    endif;
}

?>