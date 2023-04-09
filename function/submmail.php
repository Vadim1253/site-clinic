<?
if($_POST['email']==''){
    header('location: /mini/index.php');
    exit;
}
if($_POST['massage']==''){
    header('location: /mini/index.php');
    exit;
}
$sub="Письмо-тест";
$to="vadim.mr.goodini@gmail.com";
$from=trim($_POST['email']);
$mass=htmlspecialchars($_POST['massage']);
$mass=urldecode($mass);
$mass=trim($mass);
$headers="From: $from"."\r\n".
"Reply-To: $from"."\r\n".
"X-Mailer: PHP/".phpversion();
if(mail($to,$sub,$mass,$headers)){
    echo "Отправлено";//header('location: /index.php');
}else{echo "Error mail";}


?>