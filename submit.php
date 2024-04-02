<?php

// Replace with secure storage (database or encrypted file)
$email = $_GET['email'];
$email_file = "emails.txt";

// Basic check for duplicate email (improve for production)
$existing_emails = file_get_contents($email_file);
if (strpos($existing_emails, $email) !== false) {
  echo "Email already exists!";
  exit;
}

$file = fopen($email_file, "a"); // Open for appending
fwrite($file, $email . "\n"); // Add email with newline character
fclose($file);

echo "Email submitted successfully!";

?>
