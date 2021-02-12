<?php
    session_start();

    $helper = array_keys($_SESSION);
    foreach ($helper as $key){
        echo $_SESSION[$key];
    }
?>
