<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
//require(__DIR__.'/PHPMailer/src/Exception.php');
require($_SERVER["DOCUMENT_ROOT"].'/wp-includes/PHPMailer/Exception.php');
require($_SERVER["DOCUMENT_ROOT"].'/wp-includes/PHPMailer/PHPMailer.php');
require($_SERVER["DOCUMENT_ROOT"].'/wp-includes/PHPMailer/SMTP.php');

function generate_content_message($par1,$par2){
    $st='';
    for ($i=0;$i<count($par1);$i++){
        $st=$st.''.'<p><b>'.$par1[$i].'</b>'.$par2[$i].'</p>'.'<br>';
    }
    $st=$st.''.'<br>';
    return $st;
}

function send_message($param1,$param2){
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    // Настройки SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;   
    $mail->Host='smtp.timeweb.ru';
    $mail->Username = 'coller@cg01905.tw1.ru';
    $mail->Password = '3U9fM3zX';
    $mail->SMTPSecure = 'ssl';         // шифрование ssl
    $mail->Port   = 465;               // порт подключения
    $mail->isHTML(true); 
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    // От кого
    $mail->setFrom('coller@cg01905.tw1.ru', 'coller.ru');		 
    // Кому
    $mail->addAddress('koler-11@ya.ru', 'Администратор сайта');
    // Тема письма
    $mail->Subject = "Обращение";
    // Тело письма
    $body=generate_content_message($param1,$param2);

    //$body = '<p><b>Имя:</b> '.$param1.'</p>'.'<p><b>Телефон:</b> '.$param2.'</p>'.'<p><b>Почта:</b> '.$param3.'</p>'.'<p><br>';
    $mail->msgHTML($body);
    //$mail->send();
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return "OK";
    }
}
if(isset($_POST["namemodal"])){
    $ar1=array(0=>"Имя:",1=>"Телефон:",2=>"Почта:");
    $ar2=array(0=>$_POST["namemodal"],1=>$_POST["telmodal"],2=>$_POST["emailmodal"]);
    $answer=send_message($ar1,$ar2);
    echo json_encode($answer);
}
if(isset($_POST["nameform"])){
    $ar1=array(0=>"Имя:",1=>"Телефон:");
    $ar2=array(0=>$_POST["nameform"],1=>$_POST["telform"]);
    $answer=send_message($ar1,$ar2);
    echo json_encode($answer);
}
?>