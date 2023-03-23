<?php 
require 'Excel/Classes/PHPExcel.php';
header("Content-Type: text/html;charset=utf-8");

header('Content-Type: application/vdn.ms-excel; charset=utf-8');
header('Content-Disposition: attachment; filename=Casos.xls');


$excel = new PHPExcel(); //INSTANCIA DE LA LIBRERIA EXCEL
$excel->getProperties()->setCreator('Johan')->setLastModifiedBy('Johan')->setTitle('Reporte');

$excel->setActiveSheetIndex(0); //ACTIVAR LA PAGINA EN EL INDICE (0)

$pagina = $excel->getActiveSheet(); //PAGINA QUE ESTA ACTUALMENTE ACTIVA

$pagina->setTitle('Casos de hoy'); //NOMBRE DE LA PAGINA ACTIVA

$pagina->setCellValue('A1','ID CASO ');
$pagina->setCellValue('B1','NÚMERO DE CUENTA ');
$pagina->setCellValue('C1','CLIENTE');
$pagina->setCellValue('D1','DIRECCIÓN');
$pagina->setCellValue('E1','CIUDAD ');
$pagina->setCellValue('F1','NOMBRE DE CONTACTO  ');
$pagina->setCellValue('G1','RESPONSABLE  ');
$pagina->setCellValue('H1','FECHA DE CREACIÓN  ');
$pagina->setCellValue('I1','FALLA  ');
$pagina->setCellValue('J1','DESCRIPCIÓN  ');



$pagina->getStyle('A1:J1')->getFont()->setBold(true); //PONER EL ENCABEZADO EN NEGRILLA
$pagina->getStyle('A1:J1')->getFont()->setSize(12); //PONER EL TAMAÑO DE FUENTE 

$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
 
$excel->getActiveSheet()->getStyle('A1:J1')->applyFromArray($boldArray);


$cont = 2;
foreach ($casoter as $c) {
	$pagina->setCellValue('A'.$cont,($c->id));
	$pagina->setCellValue('B'.$cont,($c->ncuenta));
	$pagina->setCellValue('C'.$cont,($c->nombre));
	$pagina->setCellValue('D'.$cont,($c->direccion));
	$pagina->setCellValue('E'.$cont,($c->ciudad));
	$pagina->setCellValue('F'.$cont,($c->nombredec));
	$pagina->setCellValue('G'.$cont,($c->responsable));
	$pagina->setCellValue('H'.$cont,($c->fecha));
	$pagina->setCellValue('I'.$cont,($c->falla));
	$pagina->setCellValue('J'.$cont,($c->descripcion));
	$cont++;
}


//AJUSTAR EL TAMAÑO DE LA CELDA A LA LONGITUD DEL TEXTO
foreach (range('A','J') as  $colum) {
	$pagina->getColumnDimension($colum)->setAutoSize(true);
}

//GENERAR UNA PAGINA NUEVA
/*$excel->createSheet();
$excel->setActiveSheetIndex(0);
$pagina = $excel->getActiveSheet()->setTitle('Clientes inactivos');
*/

//GENERAR EL ARCHIVO EXCEL
$objwrite = PHPExcel_IOFactory::createWriter($excel,'Excel5');
$objwrite->save('php://output');

?>