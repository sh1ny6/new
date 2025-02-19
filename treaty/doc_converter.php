<?php

if(!isset($_GET['id']) || $_GET['id'] == "" || !is_numeric($_GET['id'])) {
	die("error");
}

include_once 'config/database.php';

$id = text_filter($_GET['id']);

$request = db_fetch("SELECT * FROM t_requests WHERE t_id = $id");

?>

<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Helvetica Neue";}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-size:12.0pt;
	font-family:"Calibri",sans-serif;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=EN-US style='word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNormal align=right style='margin-bottom:10.0pt;text-align:right'><b><span
style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>Утвержден
</span></b><b><span lang=RU style='font-size:9.0pt;font-family:"Arial, sans-serif";
color:black'>Директором </span></b><b><span lang=RU style='font-size:11px;
font-family:"Arial, sans-serif"'>Стригун Антонина Ильинична  </span></b></p>

<p class=MsoNormal align=right style='margin-bottom:10.0pt;text-align:right'><b><span
lang=RU style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>23</span></b><b><span
style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>.</span></b><b><span
lang=RU style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>01</span></b><b><span
style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>.202</span></b><b><span
lang=RU style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>4</span></b><b><span
style='font-size:9.0pt;font-family:"Arial, sans-serif";color:black'>г.
вступает в силу с момента публикации.</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:10.0pt;text-align:center'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>Публичный
договор</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:10.0pt;text-align:center'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>возмездного
оказания консультационных услуг</span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse'>
 <tr style='height:12.5pt'>
  <td valign=top style='padding:0in 5.75pt 0in 5.75pt;height:12.5pt'></td>
 </tr>
</table>

<p class=MsoNormal style='text-align:justify;background:white'><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Настоящая публичная оферта представляет собой официальное предложение Общества с ограниченной ответственностью «Момент Кредит» (УНП 193652121), в лице директора Стригун Антонины Ильиничны, действующего на основании Устава, именуемого в дальнейшем Исполнитель, оказать физическим лицам, в дальнейшем Заказчик консультационные услуги в области кредитования, по имеющимся кредитным продуктам в банковских (небанковских) кредитно – финансовых организациях, расположенных на территории Республики Беларусь, а именно: получить необходимые сведения от Заказчика, осуществить проверку кредитного рейтинга физического лица; осуществить анализ платежеспособности физического лица; исходя из анализа платежеспособности, а также предпочтения физического лица осуществить индивидуальный подбор финансового продукта (кредита, займа), отвечающего потребностям физического лица, а также осуществить полное и качественное сопровождение всей сделки и др.), за исключением предоставления консультирования по вопросам страхования и дополнительного пенсионного обеспечения, и выражает намерение Исполнителя заключить договор на условиях настоящей оферты с физическим лицом, которое осуществляет акцепт оферты.
<br>
Заказчик обязан перед выражением согласия на акцепт оферты ознакомится с договором и приложениями к договору в полном объеме.
<br>
Выражение акцепта оферты Заказчиком в адрес Исполнителя является полным и безоговорочным подтверждением ознакомления физического лица с договором и выражением согласия физическим лицом на заключение договора и оказание услуги, а соответственно принятием прав и обязательств по договору.
</span></p>

<p class=MsoNormal style='text-align:justify;background:white'><b><span
style='font-size:13.5pt;font-family:"Arial, sans-serif";color:black'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:15.0pt;
margin-left:.5in;text-align:justify;text-indent:.5in;background:white'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:#333333'>
ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ
</span></b></p>

<p class=MsoNormal style='text-align:justify;background:white'><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Термины, которые используются в оферте:<br>
Оферта – настоящий документ, опубликованный на официальном сайте Общества с ограниченной ответственностью «Момент Кредит» (далее – ООО «Момент Кредит») в сети Интернет по адресу: momentkredit.by.<br>
Акцепт оферты – полное и безоговорочное принятие физическим лицом оферты, предлагаемой Исполнителем.<br>
Заказчик – любое физическое лицо, которое осуществляет акцепт оферты.<br>
Вознаграждение – оплата услуг Заказчиком Исполнителю за оказанные услуги, в размере, установленном Приложением № 1 к Договору, которое является неотъемлемой частью Договора.<br>
Акт – документ, составленный Исполнителем единолично по итогам оказанной услуги Заказчику, подтверждающий факт оказанной услуги.<br>
Сайт Исполнителя – информационный ресурс, принадлежащий Исполнителю и размещенный в сети: Интернет по адресу: momentkredit.by.
</span></p>


<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>1.
ПРЕДМЕТ ДОГОВОРА.</span></b><b><span style='font-size:12px;font-family:"Arial, sans-serif";
color:#333333'> </span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.1.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель обязуется оказать Заказчику возмездные консультационные услуги в области кредитования, а именно: предоставить сведения о кредитных продуктах предлагаемых физическим лицам, банковскими (небанковскими) кредитно – финансовыми организациями, расположенными на территории Республики Беларусь, а именно: после заключения договора истребовать у Заказчика сведения в порядке и объеме, необходимом для оказания услуги, осуществить проверку кредитного рейтинга физического лица; осуществить анализ платежеспособности физического лица; исходя из анализа платежеспособности, а также предпочтения физического лица осуществить индивидуальный подбор финансового продукта (кредита, займа), отвечающего потребностям физического лица, а также осуществить полное и качественное сопровождение всей сделки от момента сбора информации от Заказчика до фактического получения Заказчиком результата рассмотрения кредитной заявки от банковской (небанковской) кредитно – финансовой организации, а Заказчик обязуется принять результат оказанной услуги и оплатить вознаграждение Исполнителю, в порядке и сроки, установленные настоящим Договором.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.2.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Заказчик, до заключения договора, обязан ознакомиться с публичной офертой и договором, размещенном на официальном сайте ООО «Момент Кредит» momentkredit.by. 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.3.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель, получив заявку от Заказчика обязуется оказать Заказчику консультационную услугу в порядке и сроки, установленные договором, после заключения такого договора.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.4.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Заказчик предоставляет в адрес Исполнителя необходимые сведения (персональные данные и иные необходимые сведения) в объеме, необходимом Исполнителю;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.5.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель по заявке Заказчика предоставляет исчерпывающую информацию о доступных способах кредитования (предоставления займов), наличия кредитных продуктов для физических лиц предлагаемых банковскими (небанковскими) кредитно – финансовыми организациями, расположенными на территории Республики Беларусь, удовлетворяющих интересам и требованиям Заказчика по оформленной заявке.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.6.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель предоставляет Заказчику сведения о доступном размере денежных средств возможных к получению Заказчиком от банковских (небанковских) кредитно – финансовых организаций, в том числе займов, исходя из платежеспособности Заказчика, в том числе сообщает доступную информацию о периоде заключения договора (кредит, заем), порядке получения денежных средств (зачисления на счет Заказчика, получение наличных денежных средств) и способе (порядке) исполнения принятого Заказчиком обязательства по договору, включая риски и последствия ненадлежащего исполнения обязательств.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.7.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель оказывает Заказчику содействие в сборе необходимых для оформления кредитной заявки документов, их обработке, а также оказание содействия в направлении сформированного пакета документов и (или) кредитной заявки в банковские (небанковские) кредитно – финансовые организации для одобрения кредитной заявки Заказчика, с целью получения Заказчиком денежных средств (займов), путем одобрения банковскими (небанковскими) кредитно – финансовыми организациями и (или) иными микрофинансовыми организациями сформированной кредитной заявки. 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.8.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Заказчик обязан сообщить в адрес Исполнителя информацию об одобрении и (или) отклонении направленной кредитной заявки, а также о размере денежных средств разрешенной к получению, на основании одобренной кредитной заявки.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.9.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Одобрение кредитной заявки банковской (небанковской) кредитно – финансовой организацией является фактом надлежащего оказания Исполнителем Заказчику услуги по договору и исполнением обязательства Исполнителя перед Заказчиком в полном объеме.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.10.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Начало выполнения услуги: дата заключения договора;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
1.11.
</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Окончание выполнения услуги: результат рассмотрения кредитной заявки банковской (небанковской) кредитно – финансовой организацией.
</span></p>



<p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-bottom:10.0pt;text-align:center;
text-indent:35.45pt'><b><span style='font-size:12px;font-family:"Arial, sans-serif";
color:black'>2. ПОРЯДОК ЗАКЛЮЧЕНИЯ ДОГОВОРА</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
2.1.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Договор считается заключенным, если между Сторонами достигнуто соглашение по всем существенным условиям договора. 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
2.2.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Договор, считается заключенным в простой письменной форме, при соблюдении Заказчиком и Исполнителем следующих условий в совокупности: Заказчик обязан изучить договор, размещенный на официальном сайте ООО «Момент Кредит»: momentkredit.by. Осуществить акцепт оферты, т.е. принять условия Исполнителя, установленные договором (акцептом Заказчика считается: телефонный звонок, оформление заявки через сайт и (или) иные приложения Исполнителя, направления запроса на электронную почту Исполнителя и иное). Перейти по активной ссылке momentkredit.by/treaty и заполнить размещенную на странице анкету. Внести запрашиваемые системой сведения. В графе «Электронная подпись» с использованием средств связи и специальной компьютерной программы собственноручно проставить подпись, которая является аналогом собственноручной подписи Заказчика и обеспечивает идентификацию стороны (Заказчика) подписавшего договор. Принять дополнительные условия, относящиеся к договору (предварительно ознакомившись с ними). Нажать кнопку «Подписать договор», тем самым заключив с ООО «Момент Кредит» договор на оказание консультационных услуг.  
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
2.3.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Договор может быть также заключен между Сторонами в простой письменной форме при личном обращении Заказчика в адрес Исполнителя по месту фактического оказания услуг Исполнителем (офис). 
</span></p>



<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
ПРАВА И ОБЯЗАННОСТИ СТОРОН:
</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Исполнитель обязан:
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.1.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
оказать Заказчику услуги, связанные с консультированием, т.е. предоставлением сведений в адрес Заказчика о доступных кредитных продуктах, а также оказании помощи в сборе необходимой документации, ее обработке и формировании кредитной заявки, ее направления в адрес банковской (небанковской) кредитно – финансовой организации, находящейся на территории Республики Беларусь, а также совершать иные действия, связанные с оказанием услуги, в том числе: 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Исполнитель вправе: 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
истребовать сведения у Заказчика в объеме, необходимом для оказания услуги (паспортные данные Заказчика, актуальные данные о номерах телефонов, адресах электронных почтовых ящиков, актуальном месте регистрации и (или) проживания Заказчика и др.);
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.2. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
осуществить проверку кредитного рейтинга физического лица (по усмотрению Исполнителя); 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.3. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
осуществить анализ платежеспособности физического лица (по усмотрению Исполнителя); 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.4. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
исходя из произведенного анализа платежеспособности, а также предпочтения физического лица осуществить индивидуальный подбор финансового продукта (кредита, займа), отвечающего потребностям физического лица;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.5. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
на основании произведенного анализа с учетом выбранного Заказчиком кредитного продукта, Исполнитель оказывает при необходимости помощь в формировании и направлении для рассмотрения в выбранную Заказчиком банковскую (небанковскую) кредитно – финансовую организацию кредитной заявки;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.6. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
осуществляет полное и качественное сопровождение всей сделки от момента поступления заявки до фактического получения Заказчиком кредита (займа);
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.7. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
стороны самостоятельно определяют способ истребования и (или) предоставления необходимых Исполнителю от Заказчика сведений.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.2.8. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
соказывать услуги как лично, так и привлекая лиц, состоящих в трудовых и (или) гражданско-правовых отношениях с ним. Исполнитель гарантирует, что лица, привлекаемые им для оказания услуг Заказчику, прошли необходимую подготовку и имеют документы, подтверждающие их квалификацию.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Исполнитель принимает на себя обязательство по защите предоставленных Заказчиком персональных данных. Заказчик при заключении договора дает согласие на обработку и использование Исполнителем предоставленных персональных данных.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
в части защиты персональных данных Стороны руководствуются Законом Республики Беларусь от 07.05.2021 № 99-З «О защите персональных данных» (далее – Закон о защите персональных данных), нормативными актами, регулирующими вопросы защиты персональных данных и рекомендациями Национального центра по защите персональных данных.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.2. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
по Договору Исполнитель является уполномоченным лицом в соответствии со ст. 7 Закона о защите персональных данных, и осуществляет от имени и в интересах Заказчика обработку персональных данных физических лиц, передаваемых Заказчиком.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.3. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
при получении от Заказчика, либо от третьих лиц, уполномоченных Заказчиком, персональных данных физических лиц в целях оказания услуг, согласия таких физических лиц на сбор, систематизацию, хранение, изменение, использование, обезличивание, блокирование, распространение, предоставление, удаление (далее – обработка персональных данных) Исполнителем не требуется согласно абзацу 15 статьи 6 Закона о защите персональных данных.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.4. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
подписанием Договора Заказчик гарантирует и подтверждает следующее:
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.5. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
персональные данные получены законными способами, цели сбора   персональных данных соответствуют целям, указанным в договоре;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.6. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
субъекты персональных данных дали согласие на обработку своих персональных данных, в случае необходимости, а также передачу персональных данных, в том числе трансграничную, в порядке, предусмотренном законодательством Республики Беларусь;                          
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.7. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
в случае изменения персональных данных субъекта, отзыва субъектом персональных данных согласия на обработку его персональных данных данная информация будет своевременно доводиться до Исполнителя.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.8. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
исполнитель гарантирует, что условия обработки персональных данных, конфиденциальности и безопасности персональных данных будут обеспечиваться в соответствии с Законом о защите персональных данных.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.9. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
заказчик несет ответственность перед субъектом персональных данных за действия Исполнителя. Исполнитель несет ответственность перед Заказчиком.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.10. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
стороны устанавливают, что все сведения и информация, ставшие известными Исполнителю во время оказания услуг по настоящему Договору, в том числе обозначенные Заказчиком в письменном виде «Конфиденциальная информация» и/или «Коммерческая тайна», являются конфиденциальными (далее – конфиденциальная информация) и не подлежат разглашению без предварительного письменного разрешения Заказчика.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.11. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
под разглашением конфиденциальной информации понимаются действия или бездействие Исполнителя, в результате которых конфиденциальная информация в любой возможной форме (устной, письменной, иной форме) становится известной третьим лицам, не занятым непосредственно в выполнении работ для Заказчика, совместных проектах и другой совместной деятельности Сторон;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.12. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
исполнитель по настоящему Договору является оператором в контексте обработки персональных данных в соответствии с действующим законодательством Республики Беларусь о защите персональных данных. Оператор обязуется обрабатывать персональные данные исключительно в целях исполнения настоящего договора.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.13. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
соблюдать конфиденциальность и обеспечивать безопасность персональных данных при их обработке, а также соблюдать требования к защите обрабатываемых персональных данных;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.3.14. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
принять меры по обеспечению защиты персональных данных в соответствии со ст. 17 Закона о защите персональных данных, в том числе:
<br>- назначить лицо, ответственное за осуществление внутреннего контроля за обработкой персональных данных;
<br>- принять документы, определяющие политику Исполнителя в отношении обработки персональных данных;
<br>- ознакомить работников Исполнителя и иных лиц, непосредственно осуществляющих обработку персональных данных, с положениями законодательства Республики Беларусь о персональных данных, политикой Исполнителя в отношении обработки персональных данных;
<br>- установить порядок доступа к персональным данным;
<br>- осуществлять техническую и, при необходимости, криптографическую защиту персональных данных в порядке, установленном законодательством Республики Беларусь;
<br>- прекратить обработку персональных данных по завершении, прекращении, расторжении настоящего договора.

</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Заказчик обязуется:

</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
полностью ознакомиться с офертой до момента направления в адрес Исполнителя акцепта и заключения договора;

</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.2. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
предоставить в адрес Исполнителя полную и достоверную информацию о себе (паспортные данные, контактные номера телефонов, адрес электронной почты, сведения о месте регистрации (проживания)), а также иные сведения истребуемые Исполнителем для оказания услуги и поддерживать эту информацию в актуальном состоянии до фактического момента оказания услуги;

</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.3. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
принять результат оказанной услуги и своевременно оплатить стоимость оказанных Исполнителем услуг, в размере, установленном Приложением № 1 к договору;

</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.4. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
предоставить Исполнителю все сведения и данные, необходимые для выполнения Исполнителем своих обязательств по договору;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.5. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
не использовать полученные в рамках оказания услуг по договору информацию и материалы в коммерческих целях, от своего имени, размещать в открытом доступе, передавать третьим лицам;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.6. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
не разглашать конфиденциальную информацию и иные данные, предоставленные Исполнителем в связи с исполнением договора;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.7. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
направить в адрес Исполнителя, сведения, подтверждающие факт одобрения банковской (небанковской) кредитно – финансовой организацией кредитной заявки, любым доступным способом, согласованным Сторонами (п.п. 3.3.7.1. договора);
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.7.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
переслать полученное Заказчиком СМС сообщение (иное уведомление) полученное от банковской (небанковской) кредитно – финансовой организации, с информацией, содержащей сведения об одобрении кредитной заявки либо предоставить сведения об одобрении кредитной заявки в адрес Исполнителя иным доступным документально подтверждающим способом.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.4.7.2. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Исполнитель не несет ответственность за отказ банковской (небанковской) кредитно – финансовой организацией в одобрении кредитной заявки, не предоставлении кредитных денежных средств Заказчику. Исполнитель оказывает консультационные услуги: оказывает помощь в сборе, обработке информации, выборе кредитного продукта и др.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.5. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Заказчик вправе:
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.5.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
требовать от Исполнителя надлежащего выполнения его обязательств по договору;
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>3.5.2. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
использовать результат оказанной услуги Исполнителем, исключительно для получения денежных средств в банковской (небанковской) кредитно – финансовой организации согласованной Исполнителем в ходе выполнения услуги.
</span></p>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>4.
СТОИМОСТЬ УСЛУГ:</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>4.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Заказчик обязуется принять результат оказанной услуги и оплатить Исполнителю вознаграждение в порядке и срок, установленный договором и размере, установленном Приложением № 1 к договору, которое является неотъемлемой частью настоящего Договора.
</span></p>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.
ПОРЯДОК СДАЧИ – ПРИЕМКИ ОКАЗАННЫХ УСЛУГ. 
ПОРЯДОК РАСЧЕТОВ:
</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.1. </span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Оплата услуг Исполнителя осуществляется Заказчиком в безналичном порядке, путем перечисления денежных средств на текущий (расчетный) счет Исполнителя, указанный в реквизитах (п. 9 договора) либо по средствам ЕРИП: ЕРИП – Информационные услуги – Деловая информация – Момент Кредит – Консультационные услуги – ФИО клиента – (сумма комиссии в белорусских рублях) – оплатить.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.2.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Валюта платежа – белорусские рубли. 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.3.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Днем осуществления платежа считается дата зачисления денежных средств на текущий (расчетный) счет Исполнителя.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.4.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Все расходы по осуществлению переводов денежных средств на счет Исполнителя несет Заказчик.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.5.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>
Заказчик обязан информировать Исполнителя об одобрении кредитной заявки не позднее дня, следующего за днем получения такого уведомления, для составления акта (п.п. 5.7. договора).
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.6.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'> 
Предоставление сведений, указанных в п.п. 5.5. настоящего Договора, осуществляется Заказчиком в адрес Исполнителя любым согласованным с Исполнителем способом.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.7.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
На основании сведений, предоставленных Заказчиком в адрес Исполнителя, последний в соответствии с постановлением Минфина от 12.02.2018 № 13 «О единоличном составлении первичных учетных документов» составляет единолично акт приемки оказанных услуг (далее – акт) в соответствии с настоящим договором. После составления Исполнителем акта единолично копия акта направляется на электронную почту Заказчика либо иным согласованным Сторонами способом с обязательным уведомлением о доставке/получении акта, не позднее дня, следующего за днем его составления. 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.8.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
При наличии претензий к Исполнителю Заказчик вправе отправить Исполнителю свои претензии в письменном виде не позднее 5 (пяти) рабочих дней с даты получения акта. Датой получения акта считается дата направления Исполнителем акта в адрес Исполнителя электронной почтой (иным способом, согласованным сторонами). При отсутствии претензий со стороны Заказчика, в указанный в настоящем пункте договора срок, услуги считаются оказанными Исполнителем Заказчику надлежащим образом. Заказчик не имеет к Исполнителю претензий по качеству, объему, сроку оказанных услуг.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>5.9.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
На основании полученного акта Заказчик обязан оплатить Исполнителю вознаграждение, установленное Приложением № 1 к настоящему договору, в срок не позднее дня следующего за днем получения акта. Фактом получения акта является его направление Исполнителем в адрес Заказчика согласованным Сторонами способом.
</span></p>




<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>6.
ОТВЕТСТВЕННОСТЬ СТОРОН:</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black;
background:white'>6.1.</span></b><span style='font-size:12px;font-family:
"Arial, sans-serif";color:black;background:white'> 
За несоблюдение (невыполнение) обязательств по настоящему договору, каждая из Сторон несет ответственность в соответствии с действующим законодательством Республики Беларусь.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>6.2.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
В случае нарушения сроков оплаты Заказчик оплачивает Исполнителю пеню в размере 0,1 % от суммы неоплаченного вознаграждения, за каждый день просрочки.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>6.3.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
В случае нарушения Заказчиком п.п. 5.5. договора, Исполнитель вправе возложить на Заказчика штраф в размере десяти базовых величин однократно. 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>6.4.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель вправе взыскать с Заказчика проценты за пользование чужими денежными средствами в порядке, установленном ст. 366 Гражданского кодекса Республики Беларусь, за период неисполнения и (или) ненадлежащего исполнения обязательств Заказчика перед Исполнителем, т.е. в случае нарушения Заказчиком сроков оплаты Исполнителю за оказанную услугу.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>6.5.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
В случае предоставления Заказчиком, в адрес Исполнителя недостоверных (не актуальных, ложных) сведений (персональных данных, контактных номеров телефонов и др.), послуживших основанием для отказа банковской (небанковской) кредитно – финансовой организацией в рассмотрении (одобрении) кредитной заявки, отказе в выдаче кредитных денежных средств, Исполнитель не несет ответственности перед Заказчиком за результат оказанной услуги. Исполнитель оставляет за собой право требовать от Заказчика фактической оплаты за оказанные Исполнителем услуги, в соответствии с Приложением № 1 к договору. Услуга считается оказанной надлежаще и в полном объеме.
</span></p>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>7.
СРОК ДЕЙСТВИЯ ДОГОВОРА:</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>6.1.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Договор вступает в силу с даты подписания Сторонами и действует в течение срока, на который Заказчику оказывается услуга.
</span></p>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>8.
ПОРЯДОК РАЗРЕШЕНИЯ СПОРОВ:</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>7.1.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Все споры и разногласия, возникающие между сторонами, вытекающие из настоящего договора, либо связанные с ним, подлежат разрешению путем проведения досудебного порядка урегулирования спора.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>7.2.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
В случае недостижения согласия между Сторонами в процессе переговоров, любой спор, разногласие или требование, возникающие или касающееся настоящего договора либо его нарушение, прекращение или недействительность подлежат рассмотрению в суде Советского района г. Минска, что не противоречит ст. 49 Гражданского процессуального кодекса Республики Беларусь, т.е. по месту нахождения Исполнителя. Письменный досудебный порядок урегулирования спора не является для Сторон обязательным. В случае направления/получения одной из Сторон претензии, ответ на претензию должен быть дан отправителю не позднее десять календарных дней, с момента получения претензии получателем.
</span></p>


<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>7.3.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Во всем остальном, что не установлено договором, Стороны руководствуются нормами действующего законодательства Республики Беларусь.
</span></p>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.
ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ:</span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.1.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Договор вступает в силу с момента размещения его в сети Интернет по адресу: momentkredit.by и действует до момента отзыва или изменения.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.2.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Исполнитель оставляет за собой право вносить изменения и дополнения в договор в любой момент по своему усмотрению. Изменения и дополнения в договор вступают в силу с момента размещения в сети Интернет по адресу: momentkredit.by.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.3.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Заказчик обязуется самостоятельно отслеживать действующую редакцию договора на сайте Исполнителя.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.4.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Отсутствие подписанного между Сторонами экземпляра договора на бумажном носителе с проставлением оригинальных подписей сторон, при условии подписания договора с учетом положений п. 2 договора, не является основанием считать договор незаключенным.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.5.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Окончание срока выполнения услуги не является окончанием срока действия договора и не освобождает Стороны от исполнения иных обязательств по договору (внесение Заказчиком оплаты за оказанные Исполнителем услуги и др.). 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.6.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Окончание срока действия договора не освобождает Стороны от ответственности за его нарушение.
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>9.7.</span></b><span
style='font-size:12px;font-family:"Arial, sans-serif";color:black'>
Договор имеет одинаковую юридическую силу для каждой из Сторон.
</span></p>



<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>










<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse'>
 <tr>
  <td width=293 valign=top style='width:219.5pt;border:solid windowtext 1px;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:
  "Arial, sans-serif"'><br>
  <b><span style='color:black'>РЕКВИЗИТЫ Консультанта</span></b></span></p>
  <p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>Наименование
  организации:</span></p>
  <p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>Общество с ограниченной ответственностью «Момент Кредит»</span></p>
  <p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>Юридический адрес
  организации: </span></p>
  <p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>Республика Беларусь 220113 г. Минск, ул. Мележа 5/2 офис 1603
</span></p>

<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>Почтовый адрес: </span></p>
<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>г. Минск, ул Мележа 5/2 оф 1603
</span></p>

<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>УНП: </span></p>
<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>193652121
</span></p>

<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>Реквизиты: </span></p>
<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>р/с BY26SLAN30125507400000100000 в ЗАО «Банк ВТБ (Беларусь)», код банка SLANBY22
</span></p>

<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>контактный тел.: </span></p>
<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>+37529 5638752
</span></p>

<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>e-mail: </span></p>
<p class=MsoNormal style='text-autospace:none'><span lang=RU
  style='font-size:9.0pt;font-family:"Helvetica Neue"'>t.antonina2014@yandex.by
</span></p>

  </td>
  <td width=302 valign=top style='width:3.15in;border-top:solid windowtext 1px;
  border-left:none;border-bottom:none;border-right:solid windowtext 1px;
  padding:0in 5.75pt 0in 5.75pt'>
  <p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><b><span lang=RU style='font-family:"Arial, sans-serif"'>Реквизиты
  Клиента</span></b></p>
  <p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span lang=RU style='font-family:"Arial, sans-serif";'><?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?>, <?=$request['t_phone_number'];?>, <?=$request['t_date_of_birth'];?>, <?=$request['t_address'];?>, <?=$request['t_identiy_num'];?>.<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </span></p>
  <p class=MsoNormal><img style="width: 135px;" src="podpis/<?=$request['t_podpis_link'];?>"></p>
  </td>
 </tr>
 <tr style='height:5.0pt'>
  <td width=293 valign=top style='width:219.5pt;border:none;padding:0in 5.4pt 0in 5.4pt;
  height:5.0pt'>
  <p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:
  "Arial, sans-serif"'>&nbsp;</span></p>
  </td>
  <td style='border:none;padding:0in 0in 0in 0in' width=302><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:"Arial, sans-serif"'><br>
<br>
</span></p>

<p class=MsoNormal style='margin-bottom:12.0pt'><b><span style='font-size:11px;
font-family:"Arial, sans-serif";color:black'>&nbsp;</span></b></p>

<p class=MsoNormal align=right style='margin-bottom:12.0pt;text-align:right'><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'>Утвержден
Приказом № 3 от 23.10.2024</span></b></p>

<p class=MsoNormal align=right style='margin-bottom:12.0pt;text-align:right'><b><span
lang=RU style='font-size:11px;font-family:"Arial, sans-serif";color:black'>                                
                                                           Директором </span></b><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'>ООО «</span></b><b><span
lang=RU style='font-size:11px;font-family:"Arial, sans-serif";color:black'>Момент Кредит»</span></b></p>

<p class=MsoNormal align=right style='margin-bottom:12.0pt;text-align:right'><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'>            </span></b><b><span
lang=RU style='font-size:11px;font-family:"Arial, sans-serif";color:black'>Стригун Антонина Ильинична</span></b></p>

<p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-family:"Arial, sans-serif"'><br>
<br>
</span></p>

<p class=MsoNormal align=center style='margin-bottom:12.0pt;text-align:center'><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'>ПРЕЙСКУРАНТ
№ </span></b><b><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>1</span></b><b><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'> от </span></b><b><span lang=RU style='font-size:11px;
font-family:"Arial, sans-serif";color:black'>14</span></b><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'>.</span></b><b><span
lang=RU style='font-size:11px;font-family:"Arial, sans-serif";color:black'>10</span></b><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'>.202</span></b><b><span
lang=RU style='font-size:11px;font-family:"Arial, sans-serif";color:black'>2</span></b><b><span
style='font-size:11px;font-family:"Arial, sans-serif";color:black'><br>
к Публичному договору возмездного оказания консультационных услуг</span></b></p>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse'>
 <tr style='height:62.25pt'>
  <td valign=top style='border:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt;
  height:62.25pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>№</span></p>
  </td>
  <td valign=top style='border:solid black 1px;border-left:none;padding:5.0pt 5.0pt 5.0pt 5.0pt;
  height:62.25pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>Желаемая сумма (белорусских рублей)</span></p>
  </td>
  <td valign=top style='border:solid black 1px;border-left:none;padding:5.0pt 5.0pt 5.0pt 5.0pt;
  height:62.25pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>Сумма вознаграждения компании</span></p>
  </td>
  <td valign=top style='border:solid black 1px;border-left:none;padding:5.0pt 5.0pt 5.0pt 5.0pt;
  height:62.25pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>Итоговая сумма к оформлению</span></p>
  </td>
 </tr>

 <tr>

  <td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>1</span></p>
  </td>

  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
  border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>
  до 999,00 белорусских рублей
  </span></p>
  </td>

  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
  border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>
  от 100,00 до 500,00 белорусских рублей
  </span></p>
  </td>

  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
  border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>
  от 1099,00 до 1499,00 белорусских рублей
  </span></p>
  </td>

 </tr>

 <tr>

  <td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>2</span></p>
  </td>

  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
  border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>
  от 1000,00 до 1499,00 белорусских рублей
  </span></p>
  </td>

  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
  border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>
  от 500,00 до 1200 белорусских рублей
  </span></p>
  </td>

  <td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
  border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
  color:black'>
  от 1500,00 до 2699 белорусских рублей
  </span></p>
  </td>

 </tr>

 <tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>3</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1500,00 до 2999,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1000,00 до 1800, 00 белорусских рублей 
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 2500,00 до 4799,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>4</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 3000,00 до 4999,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1200,00 до 2500,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 4200,00 до 7499,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>5</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 5000,00 до 7000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1500,00 до 3500,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 6500,00 до 10500,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>6</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 7000,1 до 10000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1800,00 до 4000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 8801,00 до 14000,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>7</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1000,1 до 14000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 1800,00 до 4500,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 11801,1 до 18500,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>8</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 15000,00 до 20000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 2000,00 до 5000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 20001,00 до 25000,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>9</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 20001,00 до 25000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 22501,00 до 32000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 22501,00 до 32000,00 белорусских рублей
</span></p>
</td>

</tr>

<tr>

<td valign=top style='border:solid black 1px;border-top:none;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>10</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 25001,00 до 50000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span lang=RU style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 3000,00 до 10000,00 белорусских рублей
</span></p>
</td>

<td valign=top style='border-top:none;border-left:none;border-bottom:solid black 1px;
border-right:solid black 1px;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
<p class=MsoNormal><span style='font-size:11px;font-family:"Arial, sans-serif";
color:black'>
от 28001,00 до 60000,00 белорусских рублей
</span></p>
</td>

</tr>
</table>

<p class=MsoNormal><span style='font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU><br>
<br>
<br>
<br>
<br>
</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><b><span lang=RU style='font-family:"Arial, sans-serif"'>СОГЛАСИЕ:</span></b></p>

<p class=MsoNormal><span lang=RU>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>Я
<?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?> даю свое согласие на
проверку кредитной истории, через кредитный регистр, путем МСИ (Межбанковской
системы идентификации).   </span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>                                                                       
<span><img style="width: 135px; margin-bottom: -35px;" src="podpis/<?=$request['t_podpis_link'];?>">           <br><?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?></span></span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>Я
<?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?> ознакомлен со всеми формами
мошенничества со стороны третьих лиц. </span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>                                                            
          <span><img style="width: 135px; margin-bottom: -30px;" src="podpis/<?=$request['t_podpis_link'];?>">            <br><?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?></span></span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>Я
<?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?> с прейскурантом и договором
согласен(сна) и ознакомлен(а) </span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>                 
</span></p>

<p class=MsoNormal><span lang=RU style='font-size:12px;font-family:"Arial, sans-serif"'>                                                                      
<span><img style="width: 135px; margin-bottom: -30px;" src="podpis/<?=$request['t_podpis_link'];?>">            <br><?=$request['t_lastname'];?> <?=$request['t_firstname'];?> <?=$request['t_surname'];?></span></span></p>

<p class=MsoNormal><span lang=RU>&nbsp;</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>
