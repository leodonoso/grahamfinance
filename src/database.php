<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "graham";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo"Connected to the database. ✅";
    } catch (mysqli_sql_exception) {
        echo"Could not connect to the database. ❌";
    }
?>