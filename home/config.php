<?php
    $autoload = function($class){
        include($class.'.php');
    };
    spl_autoload_register($autoload);
    define('INCLUDE_PATH','http://localhost/site_php/home/');

?>