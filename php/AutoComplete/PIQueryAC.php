<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 19/05/18
 * Time: 3:23 PM
 */

$methodType = $_SERVER['REQUEST_METHOD'];
if(session_status() == PHP_SESSION_NONE){
	session_start();
}

$servername = 'localhost';
$dblogin = 'root';
$password = '';
$dbname = 'Genexus';

$data = array('mes' => 'Nothing');

if($methodType === 'GET'){
	if(isset($_GET['search']) && !empty($_GET['search'])){
		$search = $_GET['search'];

		try{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

			//set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			//prepare statement parameter
			$sql = "SELECT name FROM new_countries WHERE new_countries.name LIKE :s";

			$statement1 = $conn->prepare($sql);
			$statement1->execute(array(":s"=> '%' . $search . '%'));

			$data = array("status" => "success", "humanProtein" => $statement1->fetchAll(PDO::FETCH_ASSOC));
		} catch (PDOException $e){
			$data = array("error", $e->getMessage());
		}
	} else {
		$data = array("msg" => "Error: Missing search parameter");
	}
}
echo json_encode($data);