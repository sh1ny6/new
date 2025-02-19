<?php
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$utmSource = $_POST['utm_source'];
$utmMedium = $_POST['utm_medium'];
$utmCampaign = $_POST['utm_campaign'];
$utmContent = $_POST['utm_content'];
$utmTerm = $_POST['utm_term'];


/*собираем сообщение*/
$message .= "<b>Заявка на обратный звонок</b>";
$message .= '<br /><b>Имя:</b>  '.$name;
$message .= "<br /><b>Номер телефона:</b>  ".$phoneNumber;
$message .= "<br /><b>Метки UTM:</b>";
$message .= "<br />UTM_Source:  ".$utmSource;
$message .= "<br />UTM_Medium:  ".$utmMedium;
$message .= "<br />UTM_Campaign:  ".$utmCampaign;
$message .= "<br />UTM_Content:  ".$utmContent;
$message .= "<br />UTM_Term:  ".$utmTerm;

        // несколько получателей
        $to .= 'alltranscompanys@yandex.by';

        // тема письма
        $subject = 'Заявка на обратный звонок';
        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        // Отправляем
        mail($to, $subject, $message, $headers);
?>
