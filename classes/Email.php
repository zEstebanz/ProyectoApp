<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'f25eff6046e20b';
        $mail->Password = '8122e2b714de67';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = "UTF-8";
        $mail->Body = "
        <html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
        h2 {
            font-size: 25px;
            font-weight: 500;
            line-height: 25px;
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
    
        p {
            line-height: 18px;
        }
    
        a {
            position: relative;
            z-index: 0;
            display: inline-block;
            margin: 20px 0;
        }
    
        a button {
            padding: 0.7em 2em;
            font-size: 16px !important;
            font-weight: 500;
            background: #000000;
            color: #ffffff;
            border: none;
            text-transform: uppercase;
            cursor: pointer;
        }
        p span {
            font-size: 12px;
        }
        div p{
            border-bottom: 1px solid #000000;
            border-top: none;
            margin-top: 40px;
        }
    </style>
    <body>
        <h1>AppCalculadora</h1>
        <h2>??Gracias por registrarte " .$this->nombre. "!</h2>
        <p>Por favor confirma tu correo electr??nico para que puedas comenzar a utilizar las herramientas de AppCalculadora</p>
        <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'><button>Verificar</button></a>
        <p>Si t?? no te registraste en AppCalculadora, por favor ignora este correo electr??nico.</p>
        <div><p></p></div>
        <p><span>Este correo electr??nico fue enviado desde una direcci??n solamente de notificaciones que no puede aceptar correo electr??nico entrante. Por favor no respondas a este mensaje.
        Si necesitas comunicarte con administraci??n puedes hacerlo enviando un correo a estebanoller73qgmail.com</span></p>
    </body>
    </html>";

        //Enviar el mail
        $mail->send();
    }
    public function enviarInstrucciones(){
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'f25eff6046e20b';
        $mail->Password = '8122e2b714de67';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Reestlabece tu Password';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = "UTF-8";
        $mail->Body = "
         <html>
         <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
         h2 {
             font-size: 25px;
             font-weight: 500;
             line-height: 25px;
         }
     
         body {
             font-family: 'Poppins', sans-serif;
             background-color: #ffffff;
             max-width: 400px;
             margin: 0 auto;
             padding: 20px;
         }
     
         p {
             line-height: 18px;
         }
     
         a {
             position: relative;
             z-index: 0;
             display: inline-block;
             margin: 20px 0;
         }
     
         a button {
             padding: 0.7em 2em;
             font-size: 16px !important;
             font-weight: 500;
             background: #000000;
             color: #ffffff;
             border: none;
             text-transform: uppercase;
             cursor: pointer;
         }
         p span {
             font-size: 12px;
         }
         div p{
             border-bottom: 1px solid #000000;
             border-top: none;
             margin-top: 40px;
         }
     </style>
     <body>
         <h1>AppCalculadora</h1>
         <h2>??Hola ".$this->nombre." !</h2>
         <p>Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>
         <a href='http://localhost:3000/recuperar?token=" . $this->token . "'><button>Recuperar</button></a>
         <p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>
         <div><p></p></div>
         <p><span>Este correo electr??nico fue enviado desde una direcci??n solamente de notificaciones que no puede aceptar correo electr??nico entrante. Por favor no respondas a este mensaje.
         Si necesitas comunicarte con administraci??n puedes hacerlo enviando un correo a estebanoller73qgmail.com</span></p>
     </body>
     </html>";

     $mail->send();
    }
}
