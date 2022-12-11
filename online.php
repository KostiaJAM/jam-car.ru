<?php
if (($_POST['name']!=NULL) and ($_POST['phone']!=NULL)){
$too[]  = 'jamcarparts@gmail.com' ;


// тема письма
$subject = 'Заявка на деталь';
$name = $_POST['name'];//Имя
$car = $_POST['car'];//Машина
$vin = $_POST['vin'];//VIN
$phone = $_POST['phone'];//ТЕЛЕФОН
$dvig=$_POST['dvig'];//Двигатель
$mail=$_POST['mail'];
$chast=$_POST['chast'];

// текст письма
$message = "Добрый день! <br>
			Заявка на запчасть:
			<br><br>
			<table border='1' style='white-space: normal;'>
			<tr><td>Имя</td><td>$name</td></tr>
			<tr><td>Номер телефона</td><td>$phone</td></tr>
			<tr><td>Машина:</td><td>$car</td></tr>
			<tr><td>Вин:</td><td>$vin</td></tr>
			<tr><td>Двигатель:</td><td>$dvig</td></tr>
			<tr><td>Запчасти:</td><td>$chast</td></tr>
			<tr><td>E-mail:</td><td>$mail</td></tr>
			</table>";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
// Дополнительные заголовки
$headers .= 'From: phpdevelop@ya.ru' . "\r\n";
// Отправляем
		foreach ($too as $to){
		// Отправляем
		mail($to, $subject, $message, $headers);
							}
	header('Location:page2.html');
}else{
    header ('Location:errors.html');
	}
?>