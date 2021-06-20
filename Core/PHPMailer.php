<?php

namespace Core;

use App\Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/phpmailer/src/Exception.php';
require_once '../vendor/phpmailer/src/PHPMailer.php';
require_once '../vendor/phpmailer/src/SMTP.php';
require_once '../vendor/autoload.php';

$mail = new PHPMailer(true);

class PHPSendMailer {

    protected $host = Config::MAILER_HOST;
    protected $username = Config::MAILER_USERNAME;
    protected $password = Config::MAILER_PASSWORD;
    protected $smtp = Config::MAILER_IS_SMTP;

    protected function init_mailer() {

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            if ($this->smtp == true) {
                $mail->isSMTP();                                            
            }                      
            $mail->Host       = $this->host;                     
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = $this->username;                  
            $mail->Password   = $this->password;                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
            $mail->Port       = 587;
        }
        catch(Exception $e) {
            echo "Erreur : {$mail->ErrorInfo}";
        }
    }

    public function sendMail($to = [], $html = false, $subject, $body, $from) {
        $main = $this->init_mailer();
        if ($main) {
            if ($html == true ) {
                $mail->isHtml(true);
            }
            $mail->setFrom($from, $from);
            if ( count($to) > 1 ) {
                foreach($to as $emails ) {
                    $mail->addAdress($emails);
                }
            }
            $mail->addAdress($to[0]);
            $mail->isHtml($html);
            $mail->Subject = $subject;
            $mail->Body = $body;
            try {
                $mail->send();
                echo "Mail bien envoyé !";
            }
            catch(Exception $e) {
                echo "Erreur d'envoi : {$mail->ErrorInfo}";
            }
        }
    }

}




