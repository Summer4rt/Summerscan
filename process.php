<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "marco.summer@aktivpark-montafon.com";
    $subject = "Neue Anfrage von $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
header("Location: danke.html"); // Weiterleitung nach dem Absenden
exit();
?>
