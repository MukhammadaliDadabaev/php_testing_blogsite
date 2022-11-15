<?php
//require_once '../function/connect.php';

//$user = "root";
//$password = "";
//$host = "localhost";
//$db = "testing_blog";
//$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
//$pdo = new PDO($dbh, $user, $password);


function update_password($password, $id)
{
  $user = "root";
  $password = "";
  $host = "localhost";
  $db = "testing_blog";
  $dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
  $pdo = new PDO($dbh, $user, $password);
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $sql = "UPDATE registir SET password=:password WHERE id=:id";
  $statement = $pdo->prepare($sql);
  $statement->execute([
    'password' => $hashed_password,
    'id' => $id
  ]);
}

function update_email($email, $id)
{
  $user = "root";
  $password = "";
  $host = "localhost";
  $db = "testing_blog";
  $dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
  $pdo = new PDO($dbh, $user, $password);
  $sql = "UPDATE registir SET email=:email WHERE id=:id";
  $statement = $pdo->prepare($sql);
  $statement->execute([
    'email' => $email,
    'id' => $id
  ]);
}

$email = $_POST["email"];
$password = $_POST["password"];
$id = $_GET["id"];

update_email($email, $id);

if (!empty($password)) {
  update_password($password, $id);
}

//$user = $statement->fetch(PDO::FETCH_ASSOC);
//$2y$10$d2nD.qSDBgxesVkeN5C7OOAzP.KzPwC/zK4cTVJxewE.
//$2y$10$d2nD.qSDBgxesVkeN5C7OOAzP.KzPwC/zK4cTVJxewE
