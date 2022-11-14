<?php session_start();

require_once '../function/connect.php';
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
    <h1>Card To'lovlar Haqida</h1>

  <?php if (!empty($_SESSION["login"])) : ?>

      <a class="mr-3 float-right btn btn-primary" href="/logout.php">CHIQISH</a>
      <br>

    <?php
    $sql = $pdo->prepare("SELECT * FROM uslugi");
    $sql->execute();
    while ($res = $sql->fetch(PDO::FETCH_OBJ)):?>

        <form action="/admin/uslugi/uslugi.php/<?php echo $res->id ?>" method="post" enctype="multipart/form-data">
            <h3 class="float-left ml-3"> <?php echo $res->id ?>. Card<br></h3>
            <input class="m-3" type="text" name="title" value="<?php echo $res->title ?>">
            <input class="m-3" type="text" name="price" value="<?php echo $res->price ?>">

            <input type="file" name="img">
            <input type="submit" class="btn btn-primary" name="save" value="Saqlash">

        </form>
        <div class="card-body">
            <img class="img-fluid w-50" src="./img/<?php echo $res->filename ?>" alt="logo">
            <hr class="border">
        </div>

    <?php endwhile; ?>

  <?php else:
    echo "<h1>Вы что хакер</h1>";
    echo "<a href='/'>На главную</a>";
    ?>

  <?php endif; ?>

</div>
</body>
</html>

