<?php

$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "kinexus";
$tablename = "protein_info";

// Create Database connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Fetch data from database
$pdo = new PDO("mysql:dbname=$dbname", "$username", "$password");
$st = $pdo->query("SELECT * FROM $tablename");
$row = $st->fetch();

$initial = substr($row['name'], 0, 1);
$name = $row['name'];
$filename=$row['filename'];
$extension = ".png";

//URL for 2D image.
$url = "https://cdn.rcsb.org/images/ligands/".$initial."/".$name."/".$filename.$extension;
echo "<img src=\"$url\" alt='Can not load an image' style='width:'>";



