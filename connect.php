<?php
    $connect = new mysqli('localhost','root','','ck2022');
    if(!$connect) {
        die("Error: Could not connect to the database. An error " . $connect->error . " ocurred.");
    }
    //Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt.
    $connect->set_charset('utf8'); //csdl tiếng việt
?>