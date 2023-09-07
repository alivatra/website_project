<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // In a real application, you should validate and sanitize user input.

    // Open a file for appending (create it if it doesn't exist)
    $file = fopen("user_data.txt", "a");

    if ($file) {
        // Write the user data to the file
        fwrite($file, "Username: " . $username . "\n");
        fwrite($file, "Email: " . $email . "\n");
        fwrite($file, "Password: " . $password . "\n");
        fwrite($file, "-----------------\n");

        // Close the file
        fclose($file);

        echo "Registration successful! Data saved.";
    } else {
        echo "Error: Unable to open the data file.";
    }
}
?>
