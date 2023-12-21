<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $department = $_POST['department'];
    $doctor = $_POST['doctor'];
    $message = $_POST['message'];

    // Email address to send the form submission
    $to = "kofisly00@gmail.com";

    // Subject of the email
    $subject = "New Appointment Request";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Appointment Date: $date\n";
    $email_message .= "Department: $department\n";
    $email_message .= "Doctor: $doctor\n";
    $email_message .= "Message: $message\n";

    // Additional headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    $mail_success = mail($to, $subject, $email_message, $headers);

    if ($mail_success) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // If not a POST request, redirect or handle accordingly
    header("Location: index.html");
    exit();
}
?>
