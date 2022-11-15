<?php session_start();
require_once '../function/connect.php';

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM registir WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

//---> BU EMAILNI-TEKSHIRADI
if (empty($user)) {
  $_SESSION['error'] = "Login yoki parol noto'gri";
  header("Location:/login.php");
  exit;
}

//---> BU PAROLNI-TEKSHIRADI
if (!password_verify($password, $user['password'])) {
  $_SESSION['error'] = "Login yoki parol noto'gri";
  header("Location:/login.php");
  exit;
}

//---> BU foydalanuvchilarni ro'yxatdan o'tkazish
$_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];

//---> BU saytga-qaytish
header("Location:/");
exit;

//$login = $_POST["login"];
//$password = $_POST["password"];
//
//$sql = $pdo->prepare("SELECT id, login FROM registir WHERE login=:login AND password=:password");
//$sql->execute(array('login' => $login, 'password' => $password));
//$array = $sql->fetch(PDO::FETCH_ASSOC);
//
//if ($array["id"] > 0) {
//    $_SESSION["login"] = $array["login"];
//    header("Location:/admin.php");
//} else {
//    header("location:/login.php");
//}


//require_once '../function/connect.php';
//session_start();
//
//$login = $_POST["login"];
//$password = $_POST["password"];
//
//$sql = $pdo->prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
//$sql->execute(array('login' => $login, 'password' => $password));
//$array = $sql->fetch(PDO::FETCH_ASSOC);
//
//if ($array["id"] > 0) {
//  $_SESSION["login"] = $array["login"];
//  header("Location:/admin.php");
//} else {
//  header("location:/login.php");
//}