<?php
include("../db/db.php");

$data_kelas = getQuery("SELECT * FROM kelas");
$errMessage;

if (isset($_POST["submit"])) {
   $nis = $_POST['nis'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $jenisKelamin = $_POST['jenisKelamin'];
   $email = $_POST['email'];
   $noTlp = $_POST['noTlp'];
   $kelas = $_POST['kelas'];

   $data = getQuery("SELECT * FROM siswa WHERE nis='$nis' OR email='$email' OR telepon='$noTlp'");

   if (!empty($nis) || !empty($nama) || !empty($alamat) || !empty($jenisKelamin) || !empty($email) || !empty($noTlp) || !empty($kelas)) {
      if (count($data) == 0) {
         $postData = postQuery("INSERT INTO siswa (id, nis, nama, alamat, JK, email, telepon, kelas)
         VALUES ('', '$nis', '$nama', '$alamat', '$jenisKelamin', '$email', '$noTlp', '$kelas');");
      } else
         return $errMessage = "Data sudah ada di basis data";
   } else
      return $errMessage = "Data tidak lengkap";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Data Siswa</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
   <div class="container mt-3 mb-3">
      <h2 class="mb-4">Form Data Siswa</h2>
      <form action="./siswa.php" method="POST">
         <!-- NIS -->
         <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required">
         </div>
         <!-- Nama -->
         <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required">
         </div>
         <!-- Alamat -->
         <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat"
               required></textarea>
         </div>
         <!-- Jenis Kelamin -->
         <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="Laki-laki"
                     required>
                  <label class="form-check-label" for="lakiLaki">Laki-laki</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan"
                     required>
                  <label class="form-check-label" for="perempuan">Perempuan</label>
               </div>
            </div>
         </div>
         <!-- Email -->
         <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required ">
         </div>
         <!-- No Telp -->
         <div class=" mb-3">
            <label for="noTlp" class="form-label">No TLP</label>
            <input type="tel" class="form-control" id="noTlp" name="noTlp" placeholder="Masukkan No Telepon" required ">
         </div>
         <!-- Kelas -->
         <div class=" mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" id="kelas" name="kelas" required>
               <?php foreach ($data_kelas as $kelas): ?>
                  <option><?= $kelas['kelas'] ?></option>
               <?php endforeach; ?>
            </select>
         </div>
         <?php if (!empty($errMessage)): ?>
            <div class="bg-danger">
               <strong>error <?= $errMessage ?></strong>
            </div>
         <?php endif; ?>
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>