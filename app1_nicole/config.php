<?php
  define('DB_SERVER', "localhost");
  define('DB_USERNAME', "nicolay");
  define('DB_PASSWORD', "12345678");
  define('DB_NAME', "student");

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>
