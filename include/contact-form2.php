<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Define variables for all form fields
    $name = filter_input(INPUT_POST, 'widget-contact-form-name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'widget-contact-form-email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'widget-contact-form-phone', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'widget-contact-form-address', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'widget-contact-form-subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'widget-contact-form-message', FILTER_SANITIZE_STRING);

    // Validate required fields
    $errors = [];
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    if (empty($email)) {
        $errors[] = 'Email is required.';
    }
    if (empty($phone)) {
        $errors[] = 'Phone number is required.';
    }
    if (empty($address)) {
        $errors[] = 'Address is required.';
    }
    if (empty($subject)) {
        $errors[] = 'Subject is required.';
    }
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }

    // Send email or return error messages
    if (empty($errors)) {
        // Send email
        $to = 'dr.rosenfieldept@gmail.com';
        $subject = 'New message from ' . $name . ': ' . $subject;
        $body = "Name: $name\n\nEmail: $email\n\nPhone Number: $phone\n\nAddress: $address\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();
        if (mail($to, $subject, $body, $headers)) {
            $response = ['success' => true, 'message' => 'Thank you for your message. We will be in touch soon.'];
        } else {
            $response = ['success' => false, 'message' => 'Unable to send email. Please try again later.'];
        }
    } else {
        // Return error messages
        $response = ['success' => false, 'errors' => $errors];
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

