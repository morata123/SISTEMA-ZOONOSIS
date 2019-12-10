
<?php
include_once ("../../fpdf/fpdf.php");
include_once ("conexion/conexion2.php");

class reporte extends FPDF {
    function Header()
    {
        $this->Image('../../logo/apple-icon.png',10,10,-300);
        $this->SetFont('Arial','B',15);
       // $this->Cell(0,10,"TITULO",0,0,"L");

    }

// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

}
$pdf = new reporte();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Header();
$pdf->Cell(0,10,"Internship Sistema de Control y Seguimiento de Pasantias",0,1,"C");
$pdf->Ln(20);
$pdf->SetFont('Arial','I',2);
$pdf->SetFillColor(200,71,71);
$pdf->Cell(0,2,"hh",0,1,"C",true);
$pdf->SetFillColor(200,71,71);
$finalizada=$_POST['finalizada'];
//Muestra ESTADO
$sql1="SELECT nombreasignatura,nivel FROM asignatura WHERE id_asignatura='$finalizada'";
$res=$mysqli->query($sql1);
$dato=mysqli_fetch_assoc($res);
$asig=$dato['nombreasignatura']." ".$dato['nivel'];


$carr=$_POST['carr'];
$sql1="SELECT * FROM carrera, persona AS p, empleado AS e  
 WHERE id_empleado AND id_carrera=1
 AND p.id_persona=e.persona_id_persona 
 AND e.id_empleado='$carr' ";

$res=$mysqli->query($sql1);
$dato=mysqli_fetch_assoc($res);
$nomtutor=$dato['nombrecarrera'];
$nomtu=$dato['nombre']." ".$dato['papellido'];

$pdf->SetFont('Arial','I',11);
$pdf->Cell(0,10,"PASANTIAS POR CARRERA ",0,1,"C");

$pdf->Ln(8);
$pdf->Cell(0,10,"CARRERA:  ".strtoupper($nomtutor),0,1,"L");
$pdf->Cell(0,10,"TUTOR:  ".strtoupper($nomtu),0,1,"L");
$pdf->Cell(0,10,"ASIGNATURA:  ".strtoupper($asig),0,1,"L");

if($asig==1){
    $pdf->Cell(0,10,"Estado: pasantia 1",0,1,"L");
}
if($asig==2){
    $pdf->Cell(0,10,"Estado: pasantia 2",0,1,"L");
}
if($asig==3){
    $pdf->Cell(0,10,"Estado: pasantia 3",0,1,"L");
}

$pdf->SetFillColor(200,71,71);
$pdf->SetX(10);
$pdf->Cell(37,10,"Estudiante",0,0,"C",true);
$pdf->SetX(47);
$pdf->Cell(37,10,"Modalidad",0,0,"C" ,true);
$pdf->SetX(84);
$pdf->Cell(37,10,"Fec. Inicio",0,0,"C" ,true);
$pdf->SetX(121);
$pdf->Cell(37,10,"Empresa",0,0,"C" ,true);
$pdf->SetX(158);
$pdf->Cell(37,10,"Asignatura",0,1,"C" ,true);
$pdf->SetX(195);


$sql="SELECT * FROM estudiante AS e,empleado AS emp, pasantia AS p, persona AS per, estudia AS est, carrera AS car, empresa AS em, asignatura AS asi
WHERE p.estudiante_id_estudiante= e.id_estudiante 
AND emp.id_empleado=p.empleado_id_empleado 
  AND em.id_empresa= p.empresa_id_empresa
  AND asi.id_asignatura= p.asignatura_id_asignatura
  AND est.carrera_id_carrera= car.id_carrera=$carr";


$resultado=$mysqli->query($sql);
$i=1;
while ($row=mysqli_fetch_assoc($resultado)){

    if(($i%2)==0){
        $pdf->SetFillColor(253,221,221);
    }else{
        $pdf->SetFillColor(255,255,255);
    }
    $pdf->SetX(10);
    $nombre=$row['nombre']." ".$row['papellido'];
    $modalidad=$row['modalidad'];
    $fecha=$row['fechainicio'];
    $nombreEmpresa=$row['nombreempresa'];
    $asignatura=$row['nombreasignatura']." ".$row['nivel'];

$pdf->SetX(10);
    $pdf->Cell(37,10,$nombre,0,0,"C",true);
    $pdf->SetX(47);
    $pdf->Cell(37,10,$modalidad,0,0,"C" ,true);
    $pdf->SetX(84);
    $pdf->Cell(37,10,$fecha,0,0,"C" ,true);
    $pdf->SetX(121);
    $pdf->Cell(37,10,$nombreEmpresa,0,0,"C" ,true);
    $pdf->SetX(158);
    $pdf->Cell(37,10,$asignatura,0,0,"C" ,true);

$i++;
}



$pdf->Output();






