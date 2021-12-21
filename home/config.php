<?php
    $autoload = function($class){
        if($class == 'Email'){
            echo 'confusing screamming';
            include('Email'.'.php');
        }
        //include('vendor/phpmailer/phpmailer/src/'.$class.'.php');

        
    };
    spl_autoload_register($autoload);
    define('INCLUDE_PATH','http://localhost/site_php/home/');

?>