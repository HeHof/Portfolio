<?php
    $server = "db.f4.htw-berlin.de";
    $username = "s0539721";
    $password = "trullala";
    $link = mysql_connect($server, $username, $password);
    $database_name = "_s0539721__webtech_db";
    if (!$link) {
        die("Verbindung konnte nicht hergestellt werden: " . mysql_error());
    }
    mysql_select_db($database_name, $link);   
?>
