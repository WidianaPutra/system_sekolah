<?php
include("./env.php");
$host = getenv("DB_HOST");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$db_name = getenv("DB_NAME");
$conn = new mysqli($host, $username, $password, $db_name);

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