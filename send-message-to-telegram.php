<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$surname = $_POST['surname'];
$name = $_POST['name'];
$secondName = $_POST['secondName'];
$address = $_POST['address'];
$passportNumber = $_POST['passportNumber'];
$birthday = $_POST['birthday'];
$phoneNumber = $_POST['phoneNumber'];
$nawaOlata = $_POST['nawa_oplata'];
$userInfo = $_POST['userInfo'];
$userInfo2 = $_POST['userInfo2'];



/*функция для создания запроса на сервер Telegram */
function parser($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if($result == false){
      echo "Ошибка отправки запроса: " . curl_error($curl);
      return false;
    }
    else{
      return true;
    }
}

/*собираем сообщение TEST*/
$message2 = "<b>Новая подпись договора</b>";
$message2 .= '%0D%0A<b>Фамилия:</b>  '.$surname;
$message2 .= "%0D%0A<b>Имя:</b>  ".$name;
$message2 .= "%0D%0A<b>Отчество:</b>  ".$secondName;
$message2 .= "%0D%0A<b>Адрес регистрации:</b>  ".$address;
$message2 .= "%0D%0A<b>Идентификационный номер:</b>  ".$passportNumber;
$message2 .= "%0D%0A<b>Дата рождения:</b>  ".$birthday;
$message2 .= "%0D%0A<b>Номер телефона:</b>  ".$phoneNumber;
$message2 .= "%0D%0A<b>Сумма оплаты за наши услуги:</b>  ".$nawaOlata;
        $message2 .= "%0D%0A<b>С условиями договора согласен(а) и ознакомлен(а):</b>  ✅";
        $message2 .= "%0D%0A<b>С прейскурантом согласен(а) и ознакомлен(а):</b>  ✅";
		$message2 .= "%0D%0A<b>Ознакомлен(а) о методах и формах мошенничества со стороны третьих лиц</b>  ✅";
        $message2 .= "%0D%0A<b>Информация о клиенте:</b>%0D%0A ".$userInfo;


$message = "<b>Новая подпись договора</b>";
$message .= "\n<b>Фамилия:</b>  ".$surname;
$message .= "\n<b>Имя:</b>  ".$name;
$message .= "\n<b>Отчество:</b>  ".$secondName;
$message .= "\n<b>Адрес регистрации:</b>  ".$address;
$message .= "\n<b>Идентификационный номер:</b>  ".$passportNumber;
$message .= "\n<b>Дата рождения:</b>  ".$birthday;
$message .= "\n<b>Номер телефона:</b>  ".$phoneNumber;
$message .= "\n<b>Сумма оплаты за наши услуги:</b>  ".$nawaOlata;
        $message .= "\n<b>С условиями договора согласен(а) и ознакомлен(а):</b>  ✅";
        $message .= "\n<b>С прейскурантом согласен(а) и ознакомлен(а):</b>  ✅";
		$message .= "\n<b>Ознакомлен(а) о методах и формах мошенничества со стороны третьих лиц:</b>  ✅";
        $message .= "\n<b>Информация о клиенте:</b>\n ".$userInfo2;

/*токен который выдаётся при регистрации бота */
$token = "5854568582:AAHDWXrjAR61LNa4DkOy8TSdvbm2or45t7s";
/*идентификатор группы*/
$chat_id = "-1001818608914";

/*идентификатор группы*/
$chat_id2 = "-772338626";

/*делаем запрос и отправляем сообщение*/
        #Отправляем сообщение
        // $fp=fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}","r");
		$response = file_get_contents("https://api.telegram.org/bot" .$token ."/sendMessage?chat_id=" .$chat_id2 ."&parse_mode=html&text=". $message2);
		// if ($response) {
		// 	echo $response;
		// 	return true;
		//   } else {
		// 	echo "Error " . $message . " error: " . $response;
		// 	return false;
		//   }

		$textMessage = urlencode($message);
parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$textMessage}");
?>
