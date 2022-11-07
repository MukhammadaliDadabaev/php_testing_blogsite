<?php require_once './function/connect.php';

$sql_uslug = $pdo->prepare("SELECT * FROM uslugi");
$sql_uslug->execute();
$uslugi = $sql_uslug->fetchAll(PDO::FETCH_OBJ);

?>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h3 class="text-dark">Наши услуги</h3>
            </div>
        </div>
        <div class="row">

          <?php foreach ($uslugi as $usluga) : ?>
              <div class="col-lg-3 col-md-6 mb-lg-0">
                  <div class="person">
                      <figure>
                          <img class="img-fluid" src="admin/img/<?php echo $usluga->filename ?>" alt="Image"
                               style="height: 240px">
                      </figure>
                      <div class="person-contents">
                          <h3><?php echo $usluga->title ?></h3>
                          <span class="text-danger font-weight-bold"><?php echo $usluga->price ?></span>
                      </div>
                  </div>
              </div>
          <?php endforeach ?>

        </div>
    </div>
</div>

