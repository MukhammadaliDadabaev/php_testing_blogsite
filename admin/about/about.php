<?php require_once '../../function/connect.php';

if (isset($_POST["save"])) {
  $list = ['.php', '.zip', '.js', '.html'];
  foreach ($list as $item) {
    if (preg_match("/$item$/", $_FILES['im']['name'])) exit("Fayl kengaytmasi mos kelmaydi");
  }
  $type = getimagesize($_FILES['im']['tmp_name']);
  if ($type && ($type['nime'] != 'image/png' || $type['nime'] != 'image/jpg' || $type['nime'] != 'image/jpeg')) {
    if ($_FILES['im']['name'] < 1024 * 1000) {
      $upload = 'img/' . $_FILES['im']['name'];

      if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Fayl yuklandi";
      else echo "Faylni yuklashda xatolik ro'yberdi❌";
    } else exit("Fayl hajmi oshib ketdi");
  } else exit("Fayl turi mos kelmadi");
}
//---> UPDATE-CONTACT
$title = $_POST["title"];
$description = $_POST["description"];

$sql = "UPDATE about SET title=:title, description=:description,filename=:filename";
$query = $pdo->prepare($sql);
$query->execute(["title" => $title, "description" => $description, "filename" => $_FILES['im']['name']]);
echo '<meta HTTP-EQUTV="Refresh" Content="0; URL=/admin/about.php">';