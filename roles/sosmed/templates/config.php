<?php

$db_host = "{{ pesbuk_db_hostname }}";
$db_user = "{{ pesbuk_db_user }}";
$db_pass = "{{ pesbuk_db_password }}";
$db_name = "{{ pesbuk_db_name }}";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
