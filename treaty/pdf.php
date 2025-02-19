<?php

if(!isset($_GET['hash']) || $_GET['hash'] == '') {
	die("error");
}

include_once 'config/database.php';

$hash = text_filter($_GET['hash']);

$check_count = db_fetch("SELECT count(*) as total FROM t_requests WHERE t_private_key = '$hash'");

if((int)$check_count['total'] > 0) {
	$data = db_fetch("SELECT * FROM t_requests WHERE t_private_key = '$hash'");
	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf([
		'default_font_size' => 2
	]);

	$mpdf->WriteHTML(file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/treaty/doc_converter?id='.$data['t_id']));

	$mpdf->Output();
} else {
	die("error_404");
}

