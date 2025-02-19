<?php
session_start();
// ----------------------------------------
// Database data and Site Settings
// ---
// All rights of the code belong to ....
// ----------------------------------------

define('HOST', '127.0.0.1');
define('USER', 'momentkr_credit');
define('PASS', 'gNx$xD%,G@Jq');
define('DB', 'momentkr_credit');

define("TOKEN", "6142857345:AAEiXl47CLsVi2wGEO8xB_xZZnZjWHpwTKA");

// Admin Panel
define("BOSS_LOGIN", 'fiolet');
define("BOSS_PASSWORD", '2otV3$OhqM9b');
// End Admin Panel

// Чат айди на который бот будет отправлять заявки
define("TG_CHAT_ID", "-1001955997940");
// End 1098228849 - me 
// -1001955997940


// Подключение к базе
$conn = mysqli_connect(HOST, USER, PASS, DB);


if(!$conn)
	die("Error connection");
	
mysqli_set_charset($conn, 'utf8');


// Функции для запросов к базе

function db_query($sql) {
	global $conn;
	return mysqli_query($conn, $sql);
}

function db_fetch($sql) {
	global $conn;
	$result = db_query($sql);
	$res = mysqli_fetch_assoc($result);
	return $res;
}


function text_filter($text) {
	$text = htmlspecialchars($text);
	$text = str_replace("'","", $text);
	$text = str_replace('"', '', $text);
	$text = str_replace('`', '', $text);
	$text = str_replace('*', '', $text);
	$text = str_replace('<', '', $text);
	$text = str_replace('>', '', $text);
	$text = str_replace(';', ',', $text);

	return $text;
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), "", strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

function sendTg($msg) {

    $data = array(
            'chat_id'      => TG_CHAT_ID,
            'text'     => $msg,
            'parse_mode' => 'HTML',
        );

    $method = "sendMessage";

    $sendToTelegram = fopen("https://api.telegram.org/bot".TOKEN."/sendMessage?chat_id=".TG_CHAT_ID."&parse_mode=html&text={$msg}","r");
    // file_get_contents('https://api.telegram.org/bot'.TOKEN.'/' . $method, false, stream_context_create(array('http'=>array('timeout'=>5,'method'=>'POST','content'=>http_build_query($data)))));

}