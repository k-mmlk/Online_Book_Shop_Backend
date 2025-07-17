<?php
$host = "127.0.0.1";
$user = 'root';
$pass = "";
$db = "onlinebookshop";
//connect pdo

try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    die("Connection failed:". $e->getMessage());
}

?>