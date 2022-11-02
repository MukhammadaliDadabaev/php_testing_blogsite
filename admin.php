<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="text-center">

    <?php if (!empty($_SESSION["login"])) : ?>

        <?php echo "Bu admin-page-> " . $_SESSION["login"]; ?>
        <br>
        <a href="/logout.php">CHIQISH</a>
    <?php else:
        echo "<h1>Вы что хакер</h1>";
        echo "<a href='/'>На главную</a>";
        ?>

    <?php endif; ?>

</div>
</body>
</html>
