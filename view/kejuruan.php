<?php
require("./db/db.php");
$errMessage;

if (isset($_POST["btn"])) {
   $nama = $_POST["nama"];
   $code = $_POST["kode_jurusan"];
   $singkatan = $_POST["singkatan"];

   $data = getQuery("SELECT * FROM kelas WHERE kelas='$nama' OR kode_kelas='$code' OR singkatan='$singkatan'");

   if (!empty($nama) || !empty($code) || !empty($singkatan)) {
      if (count($data) == 0) {
         postQuery("INSERT INTO kejuruan (id, singkatan, nama, code) 
         VALUES ('', ' $singkatan', '$nama', '$code')");

         if (count($data) != 0) {
            header("Location: ../");
         } else
            $errMessage = "Silah masukan ulang";
      } else {
         $errMessage = "Data sudah ada di database";
      }
   } else
      $errMessage = "Data tidak lengkap";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Kejuruan</title>
</head>

<body>
   <div class="container mt-3 mb-3">
      <h2 class="mb-4">Form Data Kejuruan</h2>
      <form action="./" method="POST">
         <!-- Nama -->
         <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required">
         </div>
         <!-- codde jurusan -->
         <div class="mb-3">
            <label for="kode_jurusan" class="form-label">Kode jurusan</label>
            <input type="kode_jurusan" class="form-control" id="kode_jurusan" name="kode jurusan"
               placeholder="Masukkan kode jurusan" required ">
         </div>
         <!-- singkatan -->
         <div class=" mb-3">
            <label for="singkatan" class="form-label">Singkatan kelas</label>
            <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="Singkatan" required ">
         </div>
         <?php if (!empty($errMessage)): ?> <div class=" bg-danger py-3 rounded-3 my-2">
               <strong class="text-white px-2 py-5">Error <?= $errMessage ?></strong>
            </div>
         <?php endif; ?>
         <button type="submit" class="btn btn-primary" name="btn">Submit</button>
      </form>
   </div>
</body>

</html>