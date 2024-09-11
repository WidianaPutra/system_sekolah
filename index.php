<?php
$page = "murid";
if (isset($_GET["page"])) {
   $page = $_GET["page"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./libs/bootsrap.css">
   <script src="./libs/bootsrap.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <title>Acumalaka</title>
</head>

<body>
   <div class="w-100 bg-primary d-flex justify-content-evenly align-items-center" style="height: 55px;">
      <a href="?page=murid" style="color: white; text-decoration: none; font-size: 18px;">Murid</a>
      <a href="?page=guru" style="color: white; text-decoration: none; font-size: 18px;">Guru</a>
      <a href="?page=kelas" style="color: white; text-decoration: none; font-size: 18px;">Kelas</a>
      <a href="?page=kejuruan" style="color: white; text-decoration: none; font-size: 18px;">Kejuruan</a>
      <a href="f" style="color: white; text-decoration: none; font-size: 18px;">Kelola</a>
   </div>

   <?php
   echo getenv('DB_HOST');
   ?>

   <?php
   if ($page == 'murid') {
      include("./view/siswa.php");
   } elseif ($page == "guru") {
      include("./view/guru.php");
   } elseif ($page == "kelas") {
      include("./view/kelas.php");
   } elseif ($page == "kejuruan") {
      include("./view/kejuruan.php");
   }
   ?>

   <script src="./libs/tilt.js"></script>
</body>

</html>