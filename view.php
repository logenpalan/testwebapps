<?php
  //connection string
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "tp042667", "pwd" => "Admin_042667", "Database" => "ddacdatabaseTP042667", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp042667.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  if (!$conn){
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection success";
?>
