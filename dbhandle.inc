<?php
  $servername = "localhost";
  $username = "root";
  $password = "fluxy";
  $dbname = "hnginterns";

  try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //Set PDO error mode to ErrorException
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connection success";
      }
  catch (PDOException $e) {
        echo "Connection failed:" . $e->getMessage();
      }

?>
