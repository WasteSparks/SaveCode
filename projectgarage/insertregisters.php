<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'error.txt');
require_once ("connect_database.php");

    $stmt = $conn->prepare("INSERT INTO employee (Name, Email, Password, Role) 
    VALUES (:Name, :Email, :Password, :Role)");
    $stmt->execute([
        "Name" => $_POST["Name"],
        "Email" => $_POST["Email"],
        "Password" => $_POST["Password"],
        "Role" => $_POST["Role"]
]);
?>