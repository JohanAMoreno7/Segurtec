<?php 
require 'Excel/Classes/PHPExcel.php';
header("Content-Type: text/html;charset=utf-8");

header('Content-Type: application/vdn.ms-excel; charset=utf-8');
header('Content-Disposition: attachment; filename=Permisos.xls');



$excel = new PHPExcel(); //INSTANCIA DE LA LIBRERIA EXCEL
$excel->getProperties()->setCreator('Johan')->setLastModifiedBy('Johan')->setTitle('Reporte');

$excel->setActiveSheetIndex(0); //ACTIVAR LA PAGINA EN EL INDICE (0)

$pagina = $excel->getActiveSheet(); //PAGINA QUE ESTA ACTUALMENTE ACTIVA

$pagina->setTitle('Gestión de permisos'); //NOMBRE DE LA PAGINA ACTIVA

$pagina->setCellValue('A1','ID PERMISO');
$pagina->setCellValue('B1','EMPLEADO');
$pagina->setCellValue('C1','TIPO DE PERMISO ');
$pagina->setCellValue('D1','FECHA DE LA SOLICITUD');
$pagina->setCellValue('E1','FECHA DEL PERMISO');
$pagina->setCellValue('F1','ESTADO');



$pagina->getStyle('A1:F1')->getFont()->setBold(true); //PONER EL ENCABEZADO EN NEGRILLA
$pagina->getStyle('A1:F1')->getFont()->setSize(12); //PONER EL TAMAÑO DE FUENTE 

$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
 
$excel->getActiveSheet()->getStyle('A1:F1')->applyFromArray($boldArray);





$cont = 2;
foreach ($tiquetera as $l) {
	$pagina->setCellValue('A'.$cont,($l->id));
	$pagina->setCellValue('B'.$cont,($l->user));
	$pagina->setCellValue('C'.$cont,($l->descripcion));
	$pagina->setCellValue('D'.$cont,($l->fecha));
	$pagina->setCellValue('E'.$cont,($l->fechapermi));
	$pagina->setCellValue('F'.$cont,($l->estado));
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