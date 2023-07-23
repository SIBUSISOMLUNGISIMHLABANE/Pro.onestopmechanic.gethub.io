<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "mhlabanesibusiso12@gmail.com";

    // Set the email subject
    $subject = "Contact Form Submission from $name";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // Return a success response to the frontend
    } else {
        echo "error"; // Return an error response to the frontend
    }
}
?>