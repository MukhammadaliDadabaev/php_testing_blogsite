<?php
require_once './connect.php';

$sql_about = $pdo->prepare("SELECT * FROM about");
$sql_about->execute();
$res = $sql_about->fetch(PDO::FETCH_OBJ);

?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/<?php echo $res->filename ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="text-dark"><?php echo $res->title ?></h3>
                <p><?php echo $res->description ?></p>
            </div>
        </div>
    </div>
</div>