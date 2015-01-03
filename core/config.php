<?php
/**
 * @author balon
 * @copyright 2013
 */

//Для локального серверу
/*    $db_host = "localhost";         //Ім"я серверу
    $db_user = "root";              //Користувач
    $db_passw = "";                 //Пароль
    $db_name = "plcb_db";           //Ім"я бази данних*/



//-------------------------------------------


    $db_host = "localhost";     //Ім"я серверу
    $db_user = "root";                       //Користувач
    $db_passw = "";                     //Пароль
    $db_name = "tour";                       //Ім"я бази данних

    $_SESSION['db_name'] = $db_name;
    $_SESSION['prefix'] = "t";   //prefix in name table

    $this->dev_mod = 1;


?>
