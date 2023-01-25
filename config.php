<?php
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "todo-db";
// Connect to the database
// try{
// $pdo = new PDO('mysql:host=$host;dbname=$db', $username, $pass);

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected successfully";
// } catch(PDOException $e) {
// echo "Connection failed: " . $e->getMessage();
// }


$host = "localhost";
$username = "root";
$pass = "";

try {
  $conn = new PDO("mysql:host=$host;dbname=new-db", $username, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// ?>
