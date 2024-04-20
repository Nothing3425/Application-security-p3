<?php
session_start();

if(isset($_POST['new_email'])) {
    // Check if the new email is different from the old email
    if ($_SESSION['email'] != $_POST['new_email']) {
        // Update the user's email address
        $_SESSION['email'] = $_POST['new_email'];
        echo "Email updated successfully!<br>";
        echo "Email changed to: " . $_SESSION['email'];
    } else {
        echo "Error: New email address must be different from the old email address.";
    }
} else {
    echo "Failed to update email!";
}
?>
