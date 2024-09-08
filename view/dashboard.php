<?php
include("./db/db.php");
$data_siswa = getQuery('SELECT * FROM siswa');
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
   <title>Document</title>
</head>

<body>
   <h1 class="text-center">Dashboard</h1>

   <table class="table table-bordered">
      <thead class="table-light">
         <tr>
            <th class="text-danger">Nis</th>
            <th class="text-danger">Nama</th>
            <th class="text-danger">Alamat</th>
            <th class="text-danger">Jk</th>
            <th class="text-danger">Email</th>
            <th class="text-danger">No. Telepon</th>
            <th class="text-danger">Kelas</th>
            <th class="text-danger">/</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data_siswa as $i => $result): ?>
            <tr>
               <td><?= $result['nis']; ?></td>
               <td><?= $result['nama']; ?></td>
               <td><?= $result['alamat']; ?></td>
               <td><?= $result['JK']; ?></td>
               <td><?= $result['email']; ?></td>
               <td><?= $result['telepon']; ?></td>
               <td><?= $result['kelas']; ?></td>
               <td>
                  <a href="./view/delete.php?id=<?= $result['id'] ?>" class="">Delete</a>
                  <a href="">/</a>
                  <a href="./view/edit_data_siswa.php?id=<?= $result['id'] ?>" class="">Update</a>
               </td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

</body>

</html>