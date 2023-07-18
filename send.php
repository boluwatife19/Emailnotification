<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    // Sanitize and validate input values
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aregpaul@gmail.com'; // Your Gmail username
    $mail->Password = 'jpmrroytqntcsrra'; // Your Gmail password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('aregpaul@gmail.com'); // Set the sender's email address
    $mail->addAddress($_POST["email"]); // Add the recipient's email address
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"]; // Set the email subject
    $mail->Subject = "New Registration"; // Set the email subject (overwrite the previous subject)
    $mail->Body .= "Email:<br>". $_POST["email"] . "<br><br>"; // Add the email address to the email body
    $mail->Body .="Address:<br>". $_POST["address"] . "<br><br>"; // Add the address to the email body
    $mail->Body .="City:<br>". $_POST["city"] . "<br><br>"; // Add the city to the email body
    $mail->Body .= "Zip-Code:<br>".$_POST["zip"]; // Add the zip code to the email body

    $mail->send(); // Send the email
    echo "<script>alert('Sent Successfully'); document.location.href = 'index.php'</script>"; // Display a success message and redirect to the index.php page
}
?>
