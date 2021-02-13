
<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","587");
if(isset($_POST["enviar"]))
{
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["message"]))
    {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $phone = ($_POST['phone']);
        $message = ($_POST['message']);
        $subject ="Dear".$name;
        $header = "Sendmail_from :kood-account@gmail.com". "\r\n";
        $header .= "Reply-To : kood-account@egmail.com"."\r\n";
        $header .= "X-Mailer : PHP/".phpversion();
        $mail = mail($email,$subject,$message, $header);
        if ($mail)
        {
            echo "<h4> enviado exitosamente </h4>";
        }
    }
}



?>