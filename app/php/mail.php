<?php
function sendEmail($id, $email, $company){
    require_once("PHPMailer/PHPMailerAutoload.php");

    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                "/~ptaw-2019-gr1/1/"; 

    $id = $id."";
    $url = $link . "?id=" . $id;
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->isHTML();
    $mail->Username = "vendigas2019@gmail.com";
    $mail->Password = "cvdukyhctezvjebe";
    $mail->SetFrom("hugodbn1998@gmail.com");
    $mail->Subject = "VendiGas: Termine o seu registro";
    $mail->Body = "Obrigado ". $company ."  por nos escolher, termine o seu registro no seguinte link: " .$url ;
    $mail->AddAddress($email);

    $mail->send();
    if(!$mail->send()) {
        echo 0;
    } else {
        echo 1;
    }
}
?>