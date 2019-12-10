
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
$empresaa=$_POST['empresaa'];
$sql1="SELECT * FROM empresa WHERE id_empresa='$empresaa' ";
$res=$mysqli->query($sql1);
$dato=mysqli_fetch_assoc($res);
$nomtutor=$dato['nombreempresa'];
$direccion=$dato['direccionempresa'];
$encargado=$dato['nombrerep']." ".$dato['apellidorep'];
$telefono=$dato['telefono'];

$pdf->SetFont('Arial','I',9);
$pdf->Cell(0,10,"PASANTIAS POR EMPRESA ",0,1,"C");

$pdf->Ln(8);
$pdf->Cell(0,10,"EMPRESA:  ".strtoupper($nomtutor),0,1,"L");
$pdf->Cell(0,10,"DIRECCION:  ".strtoupper($direccion),0,1,"L");
$pdf->Cell(0,10,"ENCARGADO:  ".strtoupper($encargado),0,1,"L");
$pdf->Cell(0,10,"TELEFONO:  ".strtoupper($telefono),0,1,"L");
$pdf->Ln(5);
$pdf->SetFillColor(200,71,71);
$pdf->SetX(12);
$pdf->Cell(30,10,"Estudiante",0,0,"C",true);
$pdf->SetX(38);
$pdf->Cell(30,10,"fechainicio",0,0,"C" ,true);
$pdf->SetX(63);
$pdf->Cell(30,10,"area",0,0,"C" ,true);
$pdf->SetX(88);
$pdf->Cell(30,10,"latitud",0,0,"C" ,true);
$pdf->SetX(113);
$pdf->Cell(30,10,"longitud",0,1,"C" ,true);
$pdf->SetX(138);


$sql="SELECT * FROM empresa AS em, pasantia AS pa, persona AS pe, estudiante AS es 
WHERE em.id_empresa= pa.empresa_id_empresa
  AND pe.id_persona = es.persona_id_persona
  AND es.id_estudiante = pa.estudiante_id_estudiante
  AND em.id_empresa=$empresaa";
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
    $fechainicio=$row['fechainicio'];
    $area=$row['area'];
    $latitud_empresa=$row['latitud'];
    $longitud_empresa=$row['longitud'];

     $pdf->Cell(30,10,$nombre,0,0,"C",true);
     $pdf->SetX(38);
     $pdf->Cell(30,10,$fechainicio,0,0,"C" ,true);
     $pdf->SetX(63);
     $pdf->Cell(30,10,$area,0,0,"C" ,true);
     $pdf->SetX(88);
     $pdf->Cell(30,10,$latitud_empresa,0,0,"C" ,true);
     $pdf->SetX(113);
     $pdf->Cell(30,10,$longitud_empresa,0,1,"C" ,true);
     $pdf->SetX(138);

$i++;
}



$pdf->Output();






