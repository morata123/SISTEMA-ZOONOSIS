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
$pdf->Cell(0,10,"Internship Sistema de Control y seguimiento de Pasantia",0,1,"C");
$pdf->Ln(20);
$pdf->SetFont('Arial','I',2);
$pdf->SetFillColor(200,71,71);
$pdf->Cell(0,2,"hh",0,1,"C",true);
$pdf->SetFillColor(200,71,71);
$tutor=$_POST['tutor'];
$sql1="SELECT * FROM persona WHERE id_persona='$tutor' ";
$res=$mysqli->query($sql1);
$dato=mysqli_fetch_assoc($res);
$nomtutor=$dato['nombre']." ".$dato['papellido']." ".$dato['sapellido'];

$pdf->SetFont('Arial','I',9);
$pdf->Cell(0,10,"PASANTIAS CON VISITAS ",0,1,"C");

$pdf->Ln(8);
$pdf->Cell(0,10,"NOMBRE ESTUDIANTE:  ".strtoupper($nomtutor),0,1,"L");
$pdf->Ln(5);
$pdf->SetFillColor(200,71,71);
$pdf->SetX(10);
$pdf->Cell(27,10,"fechainicio",0,0,"C", true);
$pdf->SetX(35);
$pdf->Cell(27,10,"estado",0,0,"C" ,true);
$pdf->SetX(60);
$pdf->Cell(27,10,"fecha_visita",0,0,"C" ,true);
$pdf->SetX(85);
$pdf->Cell(27,10,"observacion",0,0,"C" ,true);
$pdf->SetX(110);
$pdf->Cell(27,10,"area",0,0,"C" ,true);
$pdf->SetX(135);
$pdf->Cell(27,10,"funciones",0,1,"C" ,true);
$pdf->SetX(160);

$sql="SELECT * FROM pasantia AS p, persona AS per, estudiante AS e
 WHERE  per.id_persona = e.persona_id_persona AND
        e.id_estudiante = p.estudiante_id_estudiante AND
    per.id_persona =$tutor";
$resultado=$mysqli->query($sql);
$i=1;
while ($row=mysqli_fetch_assoc($resultado)){

    if(($i%2)==0){
        $pdf->SetFillColor(253,221,221);
    }else{
        $pdf->SetFillColor(255,255,255);
    }
    $pdf->SetX(10);
    $fechainicio=$row['fechainicio'];
    $estadopasantia=$row['estadopasantia'];
    $fechavisita=$row['fechavisita'];
    $observacionvisita=$row['observacionvisita'];
    $area=$row['area'];
    $funciones=$row['funciones'];


    
    $pdf->Cell(27,10,$fechainicio,0,0,"C", true);
    $pdf->SetX(35);
    if($estadopasantia == 1){
        $pdf->Cell(27,10,"Iniciando",0,0,"C" ,true);
    }
    if($estadopasantia == 2){
        $pdf->Cell(27,10,"Cursando",0,0,"C" ,true);
    }
    if($estadopasantia == 3){
        $pdf->Cell(27,10,"Finalizada",0,0,"C" ,true);
    }
    
    $pdf->SetX(60);
    $pdf->Cell(27,10,$fechavisita,0,0,"C" ,true);
    $pdf->SetX(85);
    $pdf->Cell(27,10,$observacionvisita,0,0,"C" ,true);
    $pdf->SetX(110);
    $pdf->Cell(27,10,$area,0,0,"C" ,true);
    $pdf->SetX(135);
    $pdf->Cell(27,10,$funciones,0,1,"C" ,true);
    $pdf->SetX(160);


$i++;
}

$pdf->Output();