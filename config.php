<?php 

$con = new mysqli("Localhost","root","","csv_form");

if ($con->connect_error) {
	die("Connection Error".$con->connect_error);
}

 ?>