<?php
require_once '../function/connect.php';
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM registir WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
  $_SESSION["error"] = "Bu manzilga ega foydalanuvchi allaqachon mavjud";
  header("Location:/create_login.php");
  exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO registir (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $hashed_password]);

echo "<h1>😎 Muvaffaqiyatli ro'yhatdan o'tdingiz...👇</h1>";
?>

<a class="btn btn-success" href="/">SAYTGA O'TISH</a>
