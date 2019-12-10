<?php
   // require("../enviar.php");
    //include_once("../enviar.php");
session_start();
    //echo "valor: ".$_SESSION['variable'];
    $vari=$_POST["codigo2"];
	$codigo=$_SESSION['variable'];
	if($codigo==$vari)
	{
		header("location:../prov.html");
        
	}
	else
	{
        header("location:../gracias.html");
	}
	?>