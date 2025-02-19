<?php
session_start();

if(!isset($_SESSION['global_admin']) || $_SESSION['global_admin'] != '21sd123Sjdsf934912') {
  header("Location: /treaty/thiscontrolpanel/login");
  die("1");
}

include_once '../config/database.php';

// Узнаем запрос
$action = isset($_POST["action"]) ? $_POST["action"] : '';

if($action == "GET_REQUEST_DATA") {
  $hash = $_POST['request'];

  $get_request = db_fetch("SELECT * FROM t_requests WHERE t_private_key = '$hash'");

  $massiv = [];
  $massiv['fam'] = $get_request['t_lastname'];
  $massiv['imya'] = $get_request['t_firstname'];
  $massiv['ot'] = $get_request['t_surname'];
  $massiv['tel'] = $get_request['t_phone_number'];
  $massiv['data'] = $get_request['t_date_of_birth'];
  $massiv['add'] = $get_request['t_address'];
  $massiv['idnum'] = $get_request['t_identiy_num'];
  $massiv['kom'] = $get_request['t_comission'];
  $massiv['podpis'] = $get_request['t_podpis_link'];
  $massiv['country'] = $get_request['t_add_country'];
  $massiv['device'] = $get_request['t_add_device'];
  $massiv['add_date'] = $get_request['t_add_date'];
  $massiv['ip_add'] = $get_request['t_add_user_ip'];

  echo json_encode($massiv);
}