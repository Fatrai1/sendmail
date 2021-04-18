<?php



$to      = 'fatrai.janos@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'].'Feladó: '.$_POST['name'];
// $message = wordwrap($message,70, "\r\n")
$message2 = 'Köszönjük, hogy emailt küldött. Az ön emailjének a szövege: '.$_POST['message'];
$headers = 'From:'.$_POST['email'] . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers = 'From:'.$_POST['email'] . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// echo $_POST['name'].'<br>';
// echo $_POST['email'].'<br>';
// echo $_POST['subject'].'<br>';
// echo $_POST['message'];
?>