<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and process the form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $hours = $_POST['hours'];
    $attendees = $_POST['attendees'];

    // You can perform additional processing or database operations here

    // Redirect to the receipt page after processing
    header('Location: receipt.html');
    exit;
} else {
    // Handle the case where the form data was not submitted
    echo "Form data was not submitted.";
}
?>
