<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $telefono = $_POST['tel'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];
        $header = "From: contacto@urbanfashionjeans.com" . "\r\n";
        $header.= "Reply-To: contacto@urbanfashionjeans.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($mail,$asunto,$message,$header);
        if ($mail){
            echo "<h4> Mail enviado correctamente </h4>";
        }
    }

}

?>