<?php
require_once('config.php');

$message = "";
$d_id = $_GET['id'];

$sql = "DELETE FROM table_employee WHERE id='$d_id'";

if ($conn->query($sql) === TRUE) {
  header('location: registration.php');
} else {
    $message= "failed";
  echo "<script type='text/javascript'>
  alert('$message');
  window.location.href='registration.php';
  </script>";

}

?>

