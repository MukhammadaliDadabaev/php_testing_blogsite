<?php '../../function/connect.php';
//-----------> DB-MySql
//$user = "root";
//$password = "";
//$host = "localhost";
//$db = "testing_blog";
//$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
//$pdo = new PDO($dbh, $user, $password);

////---> UPDATE-CONTACT
$city = $_POST["city"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$row = "UPDATE contact SET city=:city, phone=:phone,email=:email";
$query = $pdo->prepare($row);
$query->execute(["city" => $city, "phone" => $phone, "email" => $email]);
echo '<meta HTTP-EQUTV="Refresh" Content="0; URL=/admin/contact.php">';