<?php 
require 'Excel/Classes/PHPExcel.php';

header('Content-Type: application/vdn.ms-excel');
header('Content-Disposition: attachment; filename=Casos.xls');


$excel = new PHPExcel(); //INSTANCIA DE LA LIBRERIA EXCEL
$excel->getProperties()->setCreator('Johan')->setLastModifiedBy('Johan')->setTitle('Reporte');

$excel->setActiveSheetIndex(0); //ACTIVAR LA PAGINA EN EL INDICE (0)

$pagina = $excel->getActiveSheet(); //PAGINA QUE ESTA ACTUALMENTE ACTIVA

$pagina->setTitle('Casos en proceso'); //NOMBRE DE LA PAGINA ACTIVA

$pagina->setCellValue('A1','ID CASO ');
$pagina->setCellValue('B1','NÚMERO DE CUENTA ');
$pagina->setCellValue('C1','CLIENTE');
$pagina->setCellValue('D1','DIRECCIÓN');
$pagina->setCellValue('E1','CIUDAD ');
$pagina->setCellValue('F1','NOMBRE DE CONTACTO');
$pagina->setCellValue('G1','FALLA ');
$pagina->setCellValue('H1','DESCRIPCIÓN');


$pagina->getStyle('A1:H1')->getFont()->setBold(true); //PONER EL ENCABEZADO EN NEGRILLA
$pagina->getStyle('A1:H1')->getFont()->setSize(12); //PONER EL TAMAÑO DE FUENTE 

$cont = 2;
foreach ($casoh as $c) {
	$pagina->setCellValue('A'.$cont,utf8_decode($c->id));
	$pagina->setCellValue('B'.$cont,utf8_decode($c->ncuenta));
	$pagina->setCellValue('C'.$cont,utf8_decode($c->nombre));
	$pagina->setCellValue('D'.$cont,utf8_decode($c->direccion));
	$pagina->setCellValue('E'.$cont,utf8_decode($c->ciudad));
	$pagina->setCellValue('F'.$cont,utf8_decode($c->nombredec));
	$pagina->setCellValue('G'.$cont,utf8_decode($c->falla));
	$pagina->setCellValue('H'.$cont,utf8_decode($c->descripcion));
	$cont++;
}


//AJUSTAR EL TAMAÑO DE LA CELDA A LA LONGITUD DEL TEXTO
foreach (range('A','F') as  $colum) {
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