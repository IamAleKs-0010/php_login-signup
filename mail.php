<?php

  # Addressee
      $to = $email . ', '; 
//  $to .= '';
  
  # Title of Mail
    $subject = 'Restablecer contraseña';
  
  # Code
    $code = rand(1000, 9999);
  
  # Address
    $address = 'http://localhost/practice/webs/7-login_signupphp/forget_otp.php?email='.$email.'&token='.$token.'';
  
  # Message of Mail
    $message = '
<html>
<head>
    <title>Restablecer</title>
</head>
<body>
    <h1>¡Hola! Has solicitado un cambio de clave.</h1>
    <p>Tu código de verifación es: </p>
    <h2>' . $code .'</h2>
    <p>Para restablecer tu contraseña visita:</p>
    <a>' . $address . '</a>
    <p>Si no pediste este código favor de ignorar</p>
</body>
</html>
';
  
  # Content Type
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
  
  
  # Content Type +
//  $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//  $headers .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
//  $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//  $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
  
  # Send
    // if(mail($to, $subject, $message, $headers)){
    //   echo 'chidori';
    // }else{
    //   echo 'no sirvió :(';
    // };
      

?>