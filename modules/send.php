<?php

if(isset($_POST['submit'])){
$name = $_POST["name"];
$email = $_POST["email"];

$to = "mail@jovanstore.ga";
$subject ="Tutorial Request";
$body = "This is an automated message. Please don't reply this email. n\n $request ";

mail($to,$subject,$body);

echo "Message Sent !";
}

?>
