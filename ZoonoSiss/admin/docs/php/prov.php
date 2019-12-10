<?php
session_start();
    
    $correo=$_SESSION['correo'];
    $clave=$_POST["clave"];
    $clave2=$_POST["clave2"];
if ($clave==$clave2)
{
   $conexion=mysqli_connect("localhost","root","","inter");
    $consulta="SELECT * FROM persona,usuario WHERE email='$correo'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if ($filas>0)
    {
        $clav=md5($clave);
        $q="UPDATE usuario as u,persona as p SET clave='$clav' where email='$correo' and id_persona=persona_id_persona";
        $rs=mysqli_query($conexion,$q);
        header("location:../page-login.php");
    }
    else
    {
        echo "error al modificar los campos";
        header("location:../prov.html");
    }
}
else
{
header("location:../prov.html");
}
?>