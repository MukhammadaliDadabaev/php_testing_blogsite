<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Вход в админку</title>
</head>
<body>
<h1 class="text-center m-5">Admin login</h1>

<form action="admin/admin.php" method="post" class="d-flex flex-column align-items-center">
    <div class="form-group">
        <input type="text" placeholder="Login tering" name="login">
    </div>
    <div class="form-group">
        <input type="text" placeholder="Parolni tering" name="password">
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary">KIRISH</button>
    </div>
</form>
</body>
</html>
