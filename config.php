<?php
    define("DB_SERVER","localhost");
    define("U_NAME","root");
    define("PASSWD","");
    define("DB_NAME","phpweb");
    $db = mysqli_connect(DB_SERVER,U_NAME,PASSWD,DB_NAME);
    if (!$db) {
        die("fail to connect: ".mysqli_connect_error());
    }
    echo "Connected";
?>