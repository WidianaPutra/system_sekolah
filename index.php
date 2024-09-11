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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <title>Acumalaka</title>
</head>

<body>
   <div class="w-100 bg-primary d-flex justify-content-evenly align-items-center" style="height: 50px;">
      <a href="?page=murid" style="color: white; text-decoration: none;">Murid</a>
      <a href="?page=guru" style="color: white; text-decoration: none;">Guru</a>
      <a href="?page=kelas" style="color: white; text-decoration: none;">Kelas</a>
      <a href="?page=kejuruan" style="color: white; text-decoration: none;">Kejuruan</a>
   </div>

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