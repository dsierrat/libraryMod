<?php
require('../assets/libreria/fpdf.php');

class PDF extends FPDF{
  // Cabecera de página
  function Header(){
    // Logo
    $this->Image('../assets/images/logo1.png',40,15,10);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    $this->Cell(80);
    // Título
    $this->Cell(30,20,'Library MOD  -  Factura de Venta',0,0,'C');
    // Salto de línea
    $this->Ln(30);
  }
  function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}
// Better table
function ImprovedTable($header, $data,$total){
    // Column widths
    $w = array(35, 100, 17, 30);
    // Header
    for($i=0;$i<count($header);$i++){
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
      }
    $this->Ln();
    // Data
    foreach($data as $row){
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'C');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line



    $this->Cell($w[0],6,"",'LR');
    $this->Cell($w[1],6,"",'LR');
    $this->Cell($w[2],6,"TOTAL",'LR',0,'R');
    $this->Cell($w[3],6,number_format($total),'LR',0,'R');
    $this->Ln();
    $this->Cell(array_sum($w),0,'','T');
}
  // Pie de página
  function Footer(){
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
  }
}
$pdf = new PDF();
$pdf->AliasNbPages();
// Column headings
$header = array('ISBN', 'Nombre', 'Unidades', 'Precio');
// Data loading
$data = $pdf->LoadData('../assets/libreria/countries.txt');
$pdf->SetFont('Times','',12);
$pdf->AddPage();
$pdf->MultiCell(180,7,"Library MOD Ltda.                 NIT: 858.589.187-25                 Factura Nro.",0,'C');
$pdf->Ln(3);
$pdf->MultiCell(180,7,"Fecha ".date("Y-m-d H:i:s"). "             Bogota D.C              Regimen Comun",0,'C');
$pdf->Ln(10);
$pdf->MultiCell(40,7,"Datos del cliente",0,'L');
$pdf->MultiCell(180,7,"Cliente: Fulanito de tal",1,'L');
$pdf->MultiCell(180,7,"Direccion: Calle falsa 123                                       Telefono:4960022",1,'L');
$pdf->Ln(10);

$total=$_GET['id'];

$pdf->ImprovedTable($header,$data,$total);
$pdf->Ln(10);
   $pdf->Output('I');
   $pdf->Output('D','facturaLibraryMod.pdf');
 $pdf->Output('F','../assets/facturas/venta_'.$_GET['idv'].'.pdf');




?>
