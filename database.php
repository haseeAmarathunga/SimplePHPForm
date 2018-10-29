<?php
$dbuser="root";
$dbpassword="";
$host="localhost";
$dbase="Registration";

$db = mysqli_connect($host,$dbuser,$dbpassword,$dbase) or die("Error connecting to database");

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $this->db=$db;  
}

?>