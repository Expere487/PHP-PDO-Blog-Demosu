<?php
$username="root";
$pass="";
$host="localhost";
$db="blog";
try {
    $con = new PDO("mysql:host=$host;dbname=$db", $username, $pass);
    
} catch ( PDOException $e ){
    echo "Bir Hata Oluştu: ".$e->getMessage();
}

?>