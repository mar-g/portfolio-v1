<?php
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'].' /'.$_POST['name'];
$headers = 'From:' . $email;
$to = "";
mail($to, $subject, $message, $headers);
?>