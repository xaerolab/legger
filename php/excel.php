<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//php curl consumimos el servicio JSON
$url = 'http://localhost:8888/lead/all';
$curl = curl_init();

curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'GET'
	));
	
$resultData = curl_exec($curl);

curl_close($curl);

$leads = json_decode($resultData, true);

$fila = 2;

$objPHPExcel = new Spreadsheet();
$objPHPExcel->getProperties()->setCreator('Sergio Gamboa')->setDescription('Leads registrados');

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('Leads registrados');

//definimos los titulos de las columnas
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'nombre');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'nit');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'punto');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'equipo');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'ciudad');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'promotor');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'rtc');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'capitan');
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'dir_ip');
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'terminos');
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'fecha_registro');


//recorremos el arreglo

for ($i=0; $i < count($leads) ; $i++) {
	
	$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $leads[$i]['id_registro']);
	$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $leads[$i]['nombre']);
	$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $leads[$i]['nit']);
	$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $leads[$i]['punto']);
	$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $leads[$i]['equipo']);
	$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $leads[$i]['ciudad']);
	$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $leads[$i]['promotor']);
	$objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $leads[$i]['rtc']);
	$objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $leads[$i]['capitan']);
	$objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $leads[$i]['dir_ip']);
	$objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $leads[$i]['terminos']);
	$objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $leads[$i]['fecha_registro']);

	$fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');	
header('Content-Disposition: attachment; filename="Leads.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = new Xlsx($objPHPExcel);
$objWriter->save('php://output');