<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email; 
    public $nombre; 
    public $token; 

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email; 
        $this->nombre = $nombre; 
        $this->token = $token; 
    }

    public function enviarConfirmacion() {
        // Crear el objeto de email 
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'fced8050d9d30b'; 
        $mail->Password = 'd460a4827605f1'; 

        $mail->setFrom('cuentas@appsalon.com'); 
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com'); 
        $mail->Subject = 'Confirma tu cuenta'; 

        // Set HTML 
        $mail->isHTML(TRUE); 
        $mail->CharSet = 'UTF-8'; 

        $contenido = "<html>"; 
        $contenido .= "<p> <strong> Hola " . $this->nombre . "</strong>, has creado tu cuenta en AppSalon, solo debes confirmarla presionando el siguiente enlace </p>"; 
        $contenido .= "<p> Presiona aquí: <a href='http://localhost:8000/confirmar-cuenta?token=" . $this->token . "'> Confirmar Cuenta </a> </p>"; 
        $contenido .= "<p> Si tu no solicitaste esta cuenta puedes ignorar el mensaje </p>"; 
        $contenido .= "</html>"; 
        $mail->Body = $contenido; 

        // Enviar el email 
        if($mail->send()) {
            echo "mensaje enviado correctamente"; 
        } else {
            echo "el mensaje no se pudo enviar"; 
        }
    }
}