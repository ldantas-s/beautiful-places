<?php defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Emails {
  // Config
  public $config = [
    'MAIL_HOST'=>'smtp.gmail.com',
    'MAIL_PORT'=>587,
    'MAIL_USERNAME'=>'user_email',
    'MAIL_PASSWORD'=>'passwrod_email',
    'MAIL_FROM'=>'',
    'MAIL_REMETENTE'=>'Beautiful Places',
    'DEBUG_MODE'=>0,
    'DESTINATARIO'=>'',
    'SMTP_SECURE'=>'tls',
    'CHARSET'=>'UTF-8'
  ];

  public function sendEmail($emailFrom, $message) {
    require 'assets/php/phpmailer/src/Exception.php';
    require 'assets/php/phpmailer/src/PHPMailer.php';
    require 'assets/php/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $stateSend = false;

    try {
      $mail->SMTPDebug = $this->config['DEBUG_MODE'];
      $mail->isSMTP();
      $mail->Host = $this->config['MAIL_HOST'];
      $mail->SMTPAuth = true;
      $mail->Username = $this->config['MAIL_USERNAME'];
      $mail->Password = $this->config['MAIL_PASSWORD'];
      $mail->SMTPSecure = $this->config['SMTP_SECURE'];
      $mail->Port = $this->config['MAIL_PORT'];
      $mail->CharSet = $this->config['CHARSET'];

      $mail->setFrom($emailFrom, $this->config['MAIL_REMETENTE']);

      $mail->addAddress($this->config['DESTINATARIO']);

      $mail->isHTML(true);
      $mail->Subject = 'Emails '.$this->config['MAIL_REMETENTE'];
      $mail->Body = $message;

      $stateSend = $mail->send();

    } catch (Exception $e) {
      $stateSend = false;
    }

    // if (!$stateSend) {
    //   echo $mail->ErrorInfo;
    //   return false;
    // }

    return $stateSend;

  }
}