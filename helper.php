<?php
require __DIR__ . '/vendor/autoload.php'; // Adjust the path to autoload.php as needed

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
function validate() {
    if(empty($_POST['fullName'])
    || empty($_POST['yourAddress'])
    || empty($_POST['PhoneNumber'])
    || empty($_POST['email'])) {
        throw new Exception("Error: fill in all fields");
    }
    return true;
}

