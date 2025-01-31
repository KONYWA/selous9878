<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $tour_preference = htmlspecialchars($_POST['tour_preference']);
    $group_size = htmlspecialchars($_POST['group_size']);
    $message = htmlspecialchars($_POST['message']);
    $booking_date = htmlspecialchars($_POST['booking_date']);

    // Validate required fields
    if (empty($full_name) || empty($email) || empty($tour_preference) || empty($group_size) || empty($message) || empty($booking_date)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Set up email
    $to = "innocentmgaleh@gmail.com"; // Your email address
    $subject = "New Safari Booking Inquiry";
    $body = "
        <h2>New Safari Booking Inquiry</h2>
        <p><strong>Full Name:</strong> $full_name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> " . ($phone ? $phone : "Not provided") . "</p>
        <p><strong>Preferred Safari Tour:</strong> $tour_preference</p>
        <p><strong>Group Size:</strong> $group_size</p>
        <p><strong>Message:</strong> $message</p>
        <p><strong>Preferred Booking Date:</strong> $booking_date</p>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $full_name <$email>" . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you, $full_name! Your inquiry has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>