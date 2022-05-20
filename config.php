<?php 

    error_reporting(E_ALL & ~E_NOTICE);

    if($_SERVER["HTTPS"] != "on" AND $_SERVER['CONTEXT_DOCUMENT_ROOT'] != "C:/wamp64/www/ThinkPlus")
    {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }

    date_default_timezone_set('Asia/Calcutta');
    
?>