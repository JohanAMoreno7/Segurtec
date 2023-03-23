<?php 
require 'Excel/Classes/PHPExcel.php';
header("Content-Type: text/html;charset=utf-8");

header('Content-Type: application/vdn.ms-excel; charset=utf-8');
header('Content-Disposition: attachment; filename=Equipos-hoy.xls');



$excel = new PHPExcel(); //INSTANCIA DE LA LIBRERIA EXCEL
$excel->getProperties()->setCreator('Johan')->setLastModifiedBy('Johan')->setTitle('Reporte');

$excel->setActiveSheetIndex(0); //ACTIVAR LA PAGINA EN EL INDICE (0)

$pagina = $excel->getActiveSheet(); //PAGINA QUE ESTA ACTUALMENTE ACTIVA

$pagina->setTitle('Equipos del laboratorio'); //NOMBRE DE LA PAGINA ACTIVA

$pagina->setCellValue('A1','ID EQUIPO');
$pagina->setCellValue('B1','DESCRIPCION');
$pagina->setCellValue('C1','FECHA INGRESO ');
$pagina->setCellValue('D1','FECHA ENTREGA');
$pagina->setCellValue('E1','CONSECUTIVO LAB');
$pagina->setCellValue('F1','CODIGO REFERENCIA ');
$pagina->setCellValue('G1','CODIGO SISTEMA  ');
$pagina->setCellValue('H1','CONTROL DEL LABORATORIO  ');
$pagina->setCellValue('I1','PROCEDENCIA  ');
$pagina->setCellValue('J1','ESTADO  ');


$pagina->getStyle('A1:J1')->getFont()->setBold(true); //PONER EL ENCABEZADO EN NEGRILLA
$pagina->getStyle('A1:J1')->getFont()->setSize(12); //PONER EL TAMAÑO DE FUENTE 

$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
 
$excel->getActiveSheet()->getStyle('A1:J1')->applyFromArray($boldArray);





$cont = 2;
foreach ($laboratorior as $l) {
	$pagina->setCellValue('A'.$cont,($l->idequipo));
	$pagina->setCellValue('B'.$cont,($l->descripcion));
	$pagina->setCellValue('C'.$cont,($l->fechaingreso));
	$pagina->setCellValue('D'.$cont,($l->fechaentrega));
	$pagina->setCellValue('E'.$cont,($l->consecutivolab));
	$pagina->setCellValue('F'.$cont,($l->codigoreferencia));
	$pagina->setCellValue('G'.$cont,($l->codigosistema));
	$pagina->setCellValue('H'.$cont,($l->consecutivos));
	$pagina->setCellValue('I'.$cont,($l->nombre));
	$pagina->setCellValue('J'.$cont,($l->estado));
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