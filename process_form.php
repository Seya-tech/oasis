<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    if ($name && $email && $message) {
        // Here you would typically process the form data, such as saving to a database or sending an email
        // For this example, we'll just print the data
        echo "Form submitted successfully!<br>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Message: " . htmlspecialchars($message) . "<br>";

        // Redirect back to the main page after 5 seconds
        header("refresh:5;url=index.php");
    } else {
        echo "Error: All fields are required.";
        header("refresh:5;url=index.php");
    }
} else {
    // If someone tries to access this page directly, redirect them to the main page
    header("Location: index.php");
    exit();
}
?>