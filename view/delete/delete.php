<?php
include("../db/db.php");
$id = $_GET["id"];
if (!isset($_GET['id']) || !empty($_GET['id'])) {
   $delete = postQuery("DELETE FROM siswa WHERE id='$id'");
   header("Location: ../");
   exit();
}
?>