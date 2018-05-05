<?php

require_once('Routes.php');

# loading classes from classes directory to our index
function __autoload($class_name) {
    require_once '/classes/'.$class_name.'.php';
}

?>