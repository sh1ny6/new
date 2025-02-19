<?php
// session_start();

// Если не авторизован, прекращаем работу
// if(isset($_SESSION['first_request']) && (int)$_SESSION['first_request'] > 3) {
// 	die("stop flood!");
// }

// Подключаем базу
include_once "../config/database.php";

// Узнаем запрос
$action = isset($_POST["action"]) ? $_POST["action"] : '';


if($action == 'SAVE_MY_REQUEST') {

	$data = $_POST['photo'];
    $data = str_replace('data:image/png;base64,', '', $data);
    $data = base64_decode($data);
    
    $user_ip = $_SERVER['REMOTE_ADDR'];

    $lastname = text_filter($_POST['lastname']);
    $firstname = text_filter($_POST['firstname']);
    $surname = text_filter($_POST['surname']);
    $number = text_filter($_POST['number']);
    $date = text_filter($_POST['date']);
    $address = text_filter($_POST['address']);
    $identify = text_filter($_POST['identify']);
    $comission = text_filter($_POST['comission']);

    if($lastname == '' || $firstname == '' || $surname == '' || $number == '' || $date == '' || $address == '' || $identify == '' || $comission == '') {
    	die("empty");
    } else {
    	$filename = date("Y-m-d_H_i_s") . '-' . $identify . '.png';
    	$country = ip_info($user_ip, "Country");

    	$u_agent = $_SERVER['HTTP_USER_AGENT'];

    	if (preg_match('/linux/i', $u_agent)) {
	        $platform = 'Linux';
	    }
	    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
	        $platform = 'MacOS';
	    }
	    elseif (preg_match('/windows|win32/i', $u_agent)) {
	        $platform = 'Windows';
	    }
	    elseif (preg_match('/android/i', $u_agent)) {
	        $platform = 'Android';
	    } else {
	    	$platform = 'Other';
	    }

	    if($country == "") {
	    	$country = 'Undefined';
	    }

	    $private = md5($filename);

    	$insert = db_query("INSERT INTO `t_requests`(`t_firstname`, `t_lastname`, `t_surname`, `t_phone_number`, `t_date_of_birth`, `t_address`, `t_identiy_num`, `t_comission`, `t_podpis_link`, `t_add_date`, `t_add_country`, `t_add_device`, `t_add_user_ip`, `t_private_key`) VALUES ('$firstname', '$lastname', '$surname', '$number', '$date', '$address', '$identify', '$comission', '$filename', NOW(), '$country', '$platform', '$user_ip', '$private')");

    	if($insert) {
    		$upload = file_put_contents('../podpis/'.$filename, $data);

    		if($upload) {
    			
    			// if(isset($_SESSION['first_request'])) {
    			// 	$_SESSION['first_request'] = (int)$_SESSION['first_request'] + 1;
    			// } else {
    			// 	$_SESSION['first_request'] = 1;
    			// }

    			sendTg("<b>Request information:</b> %0AФамилия: " . $lastname . " %0AИмя: " . $firstname . " %0AОтчетство: " . $surname . " %0AТелефон: " . $number . " %0AДата рождения: " . $date . " %0AАдрес регистрации: " . $address . " %0AИдентификационный номер: " . $identify . " %0AКомиссия: " . $comission . " %0A%0A<b>Additional information</b>: %0ARequest key: " . $private . "%0APDF Document: https://" . $_SERVER['SERVER_NAME'] . "/treaty/pdf.php?hash=" . $private . "%0A-----");

    			die("1");
    		} else {
    			die("2");
    		}
    	} else {

    		die('3');
    	}
    }


}