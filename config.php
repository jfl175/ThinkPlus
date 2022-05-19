<?php 
    var_dump($_SERVER);
    exit();
    if($_SERVER["HTTPS"] != "on")
    {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }

    error_reporting(E_ALL & ~E_NOTICE);
    date_default_timezone_set('Asia/Calcutta');
    
?>