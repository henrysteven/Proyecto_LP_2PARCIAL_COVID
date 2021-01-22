<?php
    $userdb = 'bnBwNTVpot';
    $passworddb = 'kXAcMZzOvk';
    $dbhost= 'remotemysql.com:3306';
    $dbname = 'bnBwNTVpot';
    $link= mysqli_connect($dbhost,$userdb,$passworddb,$dbname);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    } 
?>