<?php

        /**
        * @author balon
        * @copyright 2014
        */


        session_start();
        //error_reporting(0);
        require ('core/lib/php/autoloader.php');
        require ('config.php');
        define("DEV_MOD",true);
// Dima
        $rout = new \Balon\Routing();
        $rout->loadPage();

?>
