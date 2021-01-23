<?php
    $userdb = 'MRW5QqWySG';
    $passworddb = '1bHwPnObOa';
    $dbhost= 'remotemysql.com:3306';
    $dbname = 'MRW5QqWySG';
    $link= mysqli_connect($dbhost,$userdb,$passworddb,$dbname);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
?>