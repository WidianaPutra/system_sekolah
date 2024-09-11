<?php
$conn = new mysqli("localhost", "suriya", "surya15022005", "data_sekolah");
// $conn = new mysqli("localhost", "root", "", "nama databse");

// if ($conn->connect_error) {
//    echo "error";
// } else {
//    echo "sukses";
// }

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