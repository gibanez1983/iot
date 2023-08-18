<?php
require '../lib/phpmailer/PHPMailerAutoload.php';
$quien_envia   = trim($_POST['inputNomAp']);
$email_origen  = trim($_POST['inputEmail4']);
$inputtelefono   = trim($_POST['inputtelefono']);
$body="De: ".$quien_envia.", e-mail: ".$email_origen.", Teléfono nro.: ".$inputtelefono.".";
$body.= '<br><br>'.trim($_POST['inputmensaje']);
            $mail = new PHPMailer;
            $mail->isSMTP();
            //$mail->SMTPDebug = 2;
            //$mail->Debugoutput = 'html';
            $mail->Host = 'smtp.gmail.com';//'smtp.office365.com';
            $mail->Port = 587;//465 587
            $mail->SMTPSecure = 'tls'; //ssl tls
            $mail->SMTPOptions = array (
                'ssl' => array(
                    'verify_peer'  => true,
                    'verify_depth' => 3,
                    'allow_self_signed' => true,
                    'peer_name' => 'smtp.gmail.com',
                )
            );
            $mail->SMTPAuth = true;
            $mail->Username = "gibanez@unau.edu.ar";
            $mail->Password = "*****";
          $mail->setFrom('gibanez@unau.edu.ar', 'Contacto vía página oficial'/*$quien_envia*/); /*Datos del que envia desde la web  info@sanatorioiot.com.ar */

            $mail->addAddress('gibanez@unau.edu.ar', 'Sanatorio Integral IOT'); /*Deberian ir datos IOT  info@sanatorioiot.com.ar*/
            //$mail->addCC("prescott04@hotmail.com");
            //$mail->addBCC($email);

            $mail->Subject = 'Contacto Web';
            /*$body="Hola, tiene novedad del número de siniestro 2003058612, vehículo dominio AC358ER .

Gabriel Martín Ibañez";*/
        $mail->CharSet='UTF-8';
        $mail->msgHTML($body);

            if (!$mail->send()) {
                 $mjs=$mail->ErrorInfo;
            }else{
              $mjs='ok';
            }
  exit(json_encode($mjs));
?>
