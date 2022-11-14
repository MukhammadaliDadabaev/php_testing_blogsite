<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>LOGIN USER</title>
</head>
<body>
<div class="container bg-dark text-light my-5 pb-5">
    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center m-5">Admin Sahifaga kirish</h1>
          <?php if (isset($_SESSION['error'])): ?>
              <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
            <?php unset($_SESSION['error']); ?>
          <?php endif; ?>
            <form action="/admin/admin.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email kiriting"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Parolni kiriting"  id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">KIRISH</button>
                <a class="btn btn-primary ml-3" href="./edit_login.php">FOYDALANUVCHINI O'ZGARTIRISH</a>
                <a class="float-right btn btn-primary" href="./create_login.php">RO'YHATDAN O'TISH</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>


<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" href="./css/bootstrap.min.css">-->
<!--    <title>Вход в админку</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1 class="text-center m-5">Admin Sahifaga kirish</h1>-->
<!---->
<!--<form action="admin/admin.php" method="post" class="d-flex flex-column align-items-center">-->
<!--    <div class="form-group">-->
<!--        <input type="text" placeholder="Login tering" name="login">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <input type="text" placeholder="Parolni tering" name="password">-->
<!--    </div>-->
<!--    <div class="from-group">-->
<!--        <button type="submit" class="btn btn-primary">KIRISH</button>-->
<!--    </div>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
