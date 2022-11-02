<?php
require "public/contact.php";

require_once './connect.php';

$sql_header = $pdo->prepare("SELECT * FROM header");
$sql_header->execute();
$res = $sql_header->fetch(PDO::FETCH_OBJ);

?>

<div class="intro-section" style="background-image: url('images/<?php echo $res->filename ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                <h1><?php echo $res->name ?></h1>
            </div>
        </div>
    </div>
</div>

<?php require "public/uslugi.php" ?>
<?php require "public/about.php" ?>
<?php require "public/footer.php" ?>

</body>
</html>

    
    
    
