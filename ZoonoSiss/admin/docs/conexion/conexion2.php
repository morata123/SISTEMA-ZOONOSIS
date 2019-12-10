<?php
$mysqli= new mysqli("localhost","root","","inter");
if(mysqli_connect_errno()){
	echo 'conexion fallada:',mysqli_connect_errno();
	exit();}
?>