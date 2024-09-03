<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare the data to be written to the file
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    
    // Path to the text file where data will be stored
    $file = 'Submissions.txt';

    // Append data to the text file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Thank you for your message. We will get back to you soon.";
} else {
    echo "Invalid request.";
}
?>
