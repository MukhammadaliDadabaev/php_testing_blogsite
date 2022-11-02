<?php require_once './connect.php';

$sql_footer = $pdo->prepare("SELECT * FROM footer");
$sql_footer->execute();
$res = $sql_footer->fetch(PDO::FETCH_ASSOC);

?>

<footer class="card-footer text-light bg-dark p-3">
    <div class="float-right d-none d-sm-block">
        <b>Blog site</b>
    </div>
    <strong>Copyright &copy; <?php echo $res["date"]; ?> <a class="font-weight-bold" href="<?php echo $res["link"]; ?>">&nbsp;&nbsp;<?php echo $res["footer_logo"]; ?></a>&nbsp;&nbsp;</strong><?php echo $res["footer_desc"]; ?>
</footer>
</div>

<script src="js/aos.js"></script>
<script src="js/main.js"></script>

</body>

</html>
