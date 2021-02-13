<?php
// Check for empty fields
if(isset($_POST['enviar']))
{
   if(!isset($_POST['name']) ||
   !isset($_POST['email']) ||
   !isset($_POST['phone']) ||
   !isset($_POST['message']))
   {
      echo "<b> Ocurrió un error y el formulario no ha sido envaido.</b><br>";
      echo "Please, come back and check the information entered.";
      die();

   }
   $email_to ="noreply@gmail.com";
   $email_subject = " Mensaje desde Koob";
   $email_from = "kood-account@example.com";
   $email_m = "Nombre:".$_POST['name']."\n\n";
   $email_m .= "E-mail:".$_POST['email']."\n";
   $email_m .= "Telefono:".$_POST['phone']."\n";
   $email_m .= "Message:".$_POST['message']."\n\n";
   $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\n.$email_m";
   $email_address = $_POST['email'];
   $headers = "From:". $email_from."\r\n".
   "Reply-To: $email_address"."\r\n".
   'X-Mailer: PHP'.phpversion();   
    $mail= @mail($email_to,$email_subject,$email_from,$email_body,$headers);
   if($mail) {
      echo "ENVIADO!" ;

    }
    else
    {
       echo "No pudo ser enviado";
    }
    


}    
         
?>
;
  