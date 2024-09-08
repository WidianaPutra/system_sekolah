<?php
$conn = new mysqli("localhost", "suriya", "surya15022005", "data_sekolah");

function getQuery($query)
{
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_array($result)) {
      $rows[] = $row;
   }
   ;
   return $rows;
}
;

function postQuery($query)
{
   global $conn;
   $result = mysqli_query($conn, $query);
}
?>