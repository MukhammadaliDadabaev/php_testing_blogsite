<?php session_start();

require_once '../function/connect.php';

$sql = $pdo->prepare("SELECT * FROM contact");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_OBJ);

////---> UPDATE-CONTACT
$city = $_POST["city"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$row = "UPDATE contact SET city=:city, phone=:phone,email=:email";
$query = $pdo->prepare($row);
$query->execute(["city" => $city, "phone" => $phone, "email" => $email]);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Contact.php</title>
</head>
<body>
<div class="text-center mt-3">
    <h1>Aloqa ma'lumotlarini tahrirlash</h1>

  <?php if (!empty($_SESSION["login"])) : ?>

      <br>
      <a href="/logout.php">CHIQISH</a>
      <br>
      <form action="/admin/contact.php" method="post">
          <input class="m-3" type="text" name="city" value="<?php echo $res->city ?>">
          <input class="m-3" type="text" name="phone" value="<?php echo $res->phone ?>">
          <input class="m-3" type="text" name="email" value="<?php echo $res->email ?>">
          <input type="submit" class="btn btn-primary" value="Saqlash">
      </form>

  <?php else:
    echo "<h1>Вы что хакер</h1>";
    echo "<a href='/'>На главную</a>";
    ?>

  <?php endif; ?>

</div>
</body>
</html>

