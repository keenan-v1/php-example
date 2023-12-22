<?php declare(strict_types=1);
include 'vendor/autoload.php';
include 'database.php';

$db = new Example\Database();

// Read the title and message from the form submission
$title = $_POST['title'];
$message = $_POST['message'];

// Insert the message into the database
$db->insertMessage($title, $message);

// Close the database connection
$db->close();

// Redirect the user back to the index page
header('Location: /');
?>