<?php session_start();

require_once '../function/connect.php';

$sql = $pdo->prepare("SELECT * FROM about");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="text-center mt-3">
    <h1>Aloqa ma'lumotlar Haqida</h1>

  <?php if (!empty($_SESSION["login"])) : ?>

      <!--    --><?php //echo "Bu admin-page-> " . $_SESSION["login"]; ?>
      <br>
      <a href="/logout.php">CHIQISH</a>
      <br>
      <form action="/admin/about/about.php" method="post" enctype="multipart/form-data">
          <input class="m-3" type="text" name="title" value="<?php echo $res->title ?>">
          <input class="m-3" type="text" name="description" value="<?php echo $res->description ?>">
          <p>
              <input type="file" name="im">
          </p>
          <input type="submit" class="btn btn-primary" name="save" value="Saqlash">
      </form>
  <div class="card-body">
      <img src="/img/<?php echo $res->filename ?>" alt="logo">
  </div>

  <?php else:
    echo "<h1>Вы что хакер</h1>";
    echo "<a href='/'>На главную</a>";
    ?>

  <?php endif; ?>

</div>
</body>
</html>

