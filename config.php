<?php
/* Local Database*/

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "sample_db";


// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);
// Check connection

if (mysqli_connect_error()) {
    echo 'error';

}
  


?> 