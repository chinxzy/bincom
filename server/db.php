<?php
  $dbhost  = 'localhost';  
  $dbname  = 'bincom';   
  $dbuser  = 'root';   
  $dbpass  = '';   

  $Connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  $Connection->set_charset("utf8mb4");

  if ($Connection->connect_error) die("Fatal Error");
?>