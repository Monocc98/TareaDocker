<?php
  $servername = "db";
  $username = "root";
  $password = "mysql";

  //Create connection
  $conn = new mysqli($servername, $username, $password);

  //Check fann_get_total_connections
  if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
  }
  echo "Conected successfully";
 ?>
