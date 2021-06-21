<?php
    require "api.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPmailer/Exception.php';
    require 'PHPmailer/PHPMailer.php';
    require 'PHPmailer/SMTP.php';

    function enviar($usuario,$cuerpo){
        $mail = new PHPMailer(true);    
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'SMTP.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'johanrodriguezbermudez@gmail.com';                     //SMTP username
            $mail->Password   = 'johanrodriguez';                               //SMTP password
            $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('johanrodriguezbermudez@gmail.com', 'thetime');
            $mail->addAddress('johanrodriguezbermudez@gmail.com', $usuario);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Estado del clima!';
            $mail->Body    =  $cuerpo;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        } 
    }
    for ($i=1; $i <= 5 ; $i++) { 

        $usuario = $_SESSION['usuario'];
        $email = $_SESSION['email'];
        $cuerpo = "Hola que tal!, bienvenido de nuevo te hemos enviado un resumen del clima"."<br>".
        "En la actualidad esta es la ciudad más fria de Colombia!! "."<br>" ."<strong>".$boyaca[0]."</strong>"." con una températura de ".intval($boyaca[3])."°C"."<br>".
        " con una humedad de ".$boyaca[6]."%"." Asi que debes llevar un muy buen abrigo, no ta vayas a resfriar !!!!"."<br>".
        " Pero tambien deberias saber que "."<strong>".$guaymaral[0]."<strong>"." es la ciudad más calientica para disfrutar de un buen verano con tu familia, en este momentro se encuentra a ".
        intval($guaymaral[3])."°C"." con una humedad del: ".$guaymaral[6]."%";
        intval($guaymaral[3])."°C"." con una humedad del: ".$guaymaral[6]."%";
        enviar($usuario,$cuerpo);
        sleep(5);  
    }  

    echo '<script>
    alert("El mensaje se envio correctamente");
    window.history.go(-1);
    </script>';

?>