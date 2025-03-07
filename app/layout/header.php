<?php

// Start session management and output buffering
session_start();
ob_start();

// Array to store messages
$invalid = array();
$success = array();
$warning = array();
$info = array();

// Include necessary files for database connectivity and facade classes
include(__DIR__ . '/../../config/db/connector.php');


include(__DIR__ . '/../../app/models/user.php');

$modelsFacade = new ModelsFacade;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Appworks Co.">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Dalira Framework | A lightweight PHP starter template</title>
</head>

<body>