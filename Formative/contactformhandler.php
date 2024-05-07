<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $cellNumber = $_POST["cellNumber"];
        $interest = $_POST["interest"];
        $dogBreed = $_POST["dogBreed"];
        $human = isset($_POST["human"]) ? $_POST["human"] : "Not specified";

        // Compose email message
        $to = "thaveshang@aie.ac"; // Change this to your email address
        $subject = "New sign-up submission";
        $message = "Name: $name\n";
        $message .= "Surname: $surname\n";
        $message .= "Cell number: $cellNumber\n";
        $message .= "Interested in: $interest\n";
        $message .= "Favorite dog breed: $dogBreed\n";
        $message .= "Am I human?: $human";

        // Send email
        $headers = "From: thaveshang@aie.ac"; // Change this to your email address
        if (mail($to, $subject, $message, $headers)) {
            echo "<h2>Thank you for your submission!</h2>";
        } else {
            echo "<h2>Sorry, there was an error. Please try again later.</h2>";
        }
    }
    ?>