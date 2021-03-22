
<?php
class Database{
$host = "localhost";
$username = "root";
$password = "";
$database = "login";



protected function connect(){
    $connect = new PDO("mysql:host=$host;dbname=$database", $username,  $password);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connect;
}

}
    ?>