<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','NVQ5');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($con){
  //  echo "<h2>Connected successfully</h2>";
}
if (mysqli_connect_errno()){
    exit("Failed to connect to MySQL: ".mysqli_connect_error());
  }
?>
